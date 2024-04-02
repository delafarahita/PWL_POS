<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\BarangModel;
use App\Models\PenjualanModel;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PenjualanController extends Controller
{
    // Menampilkan halaman awal penjualan
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Penjualan',
            'list' => ['Home', 'Penjualan']
        ];

        $page = (object) [
            'title' => 'Daftar penjualan yang terdaftar dalam sistem'
        ];

        $activeMenu = 'penjualan'; // set menu yang sedang aktif
        $user = UserModel::all(); // ambil data level untuk filter level

        return view('penjualan.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'user' => $user, 'activeMenu' => $activeMenu]);
    }

    // Ambil data penjualan dalam bentuk json untuk datatables
    public function list(Request $request)
    {
        $penjualans = PenjualanModel::select('penjualan_id', 'user_id', 'pembeli', 'penjualan_kode', 'penjualan_tanggal')
        ->with('user');

        // Filter data penjualan berdasarkan user_id

        if ($request->user_id){
            $penjualans->where('user_id', $request->user_id);
        }

        return DataTables::of($penjualans)
            ->addIndexColumn() // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
            ->addColumn('aksi', function ($penjualan) { // menambahkan kolom aksi
                $btn = '<a href="' . url('/penjualan/' . $penjualan->penjualan_id) . '" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="' . url('/penjualan/' . $penjualan->penjualan_id . '/edit') . '" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="' . url('/penjualan/' . $penjualan->penjualan_id) . '">'
                    . csrf_field() . method_field('DELETE') .
                    '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\');">Hapus</button></form>';
                return $btn;
            })
            ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html
            ->make(true);
    }

    // Menampilkan halaman form tambah penjualan
    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Penjualan',
            'list' => ['Home', 'Penjualan', 'Tambah']
        ];

        $page = (object) [
            'title' => 'Tambah penjualan baru'
        ];

        $user = UserModel::all();
        $barang = BarangModel::all();
        $activeMenu = 'penjualan'; // set menu yang sedang aktif

        return view('penjualan.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'user' => $user, 'barang' => $barang, 'activeMenu' => $activeMenu]);
    }

    // Menyimpan data user baru
public function store(Request $request)
{
    $request->validate([
        'user_id' => 'required|string|unique:m_users,username',
        'barang_nama' => 'required|string|unique:m_barangs,barang_nama',
        'pembeli' => 'required|string|max:100',
        'penjualan_kode' => 'required|string|min:5',
        'penjualan_tanggal' => 'required|date'
    ]);

    PenjualanModel::create([
        'user_id' => $request->user_id,

        'pembeli' => $request->pembeli,
        'penjualan_kode' => $request->penjualan_kode,
        'penjualan_tanggal' => $request->penjualan_tanggal
    ]);

    return redirect('/penjualan')->with('success', 'Data penjualan berhasil disimpan');
}

// Menampilkan detail user
public function show(string $id)
{
    $penjualan = PenjualanModel::with('user')->find($id);

    $breadcrumb = (object) [
        'title' => 'Detail Penjualan',
        'list' => ['Home', 'Penjualan', 'Detail']
    ];

    $page = (object) [
        'title' => 'Detail penjualan'
    ];

    $activeMenu = 'penjualan'; // set menu yang sedang aktif

    return view('penjualan.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'penjualan' => $penjualan, 'activeMenu' => $activeMenu]);
}

// Menampilkan halaman form edit user
public function edit(string $id)
{
    $penjualan = PenjualanModel::find($id);
    $user = UserModel::all();

    $breadcrumb = (object) [
        'title' => 'Edit Penjualan',
        'list' => ['Home', 'Penjualan', 'Edit']
    ];

    $page = (object) [
        'title' => 'Edit penjualan'
    ];

    $activeMenu = 'penjualan'; // set menu yang sedang aktif

    return view('penjualan.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'penjualan' => $penjualan, 'user' => $user, 'activeMenu' => $activeMenu]);
}

// Menyimpan perubahan data user
public function update(Request $request, string $id)
{
    $request->validate([
        'nama' => 'required|integer|unique:m_users,user_id,'.$id.',nama',
        //'barang_nama' => 'required|string|unique:m_barangs,barang_id,'.$id.',barang_nama',
        'pembeli' => 'required|string|max:100',
        'penjualan_kode' => 'required|string|min:2',
        'penjualan_tanggal' => 'required|date'
    ]);

    PenjualanModel::find($id)->update([
        'nama' => $request->nama,
        //'barang_nama' => $request->barang_nama,
        'pembeli' => $request->pembeli,
        'penjualan_kode' => $request->penjualan_kode,
        'penjualan_tanggal' => $request->penjualan_tanggal
    ]);

    return redirect('/penjualan')->with('success', 'Data penjualan berhasil diubah');
}

// Menghapus data penjualan
public function destroy(string $id)
{
    $check = PenjualanModel::find($id);
    if (!$check) {  // untuk mengecek apakah data penjualan dengan id yang dimaksud ada atau tidak
        return redirect('/penjualan')->with('error', 'Data penjualan tidak ditemukan');
    }

    try {
        PenjualanModel::destroy($id); // Hapus data level

        return redirect('/penjualan')->with('success', 'Data penjualan berhasil dihapus');
    } catch (\Illuminate\Database\QueryException $e) {

        // Jika terjadi error ketika menghapus data, redirect kembali ke halaman dengan membawa pesan error
        return redirect('/penjualan')->with('error', 'Data penjualan gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
    }
}
}
