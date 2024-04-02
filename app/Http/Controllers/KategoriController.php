<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

use App\Models\KategoriModel;


class KategoriController extends Controller
{
        // Menampilkan halaman awal kategori
        public function index()
        {
            $breadcrumb = (object) [
                'title' => 'Daftar Kategori',
                'list' => ['Home', 'Kategori']
            ];

            $page = (object) [
                'title' => 'Daftar kategori yang terdaftar dalam sistem'
            ];

            $activeMenu = 'kategori'; // set menu yang sedang aktif
            $kategori = KategoriModel::all(); // ambil data kategori untuk filter kategori

            return view('kategori.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'kategori' => $kategori, 'activeMenu' => $activeMenu]);
        }

        // Ambil data user dalam bentuk json untuk datatables
        public function list(Request $request)
        {
            $kategoris = KategoriModel::select('kategori_id', 'kategori_kode', 'kategori_nama');

            // Filter data user berdasarkan kategori_id
            if ($request->kategori_id) {
                $kategoris->where('kategori_id', $request->kategori_id);
            }

            return DataTables::of($kategoris)
                ->addIndexColumn() // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
                ->addColumn('aksi', function ($kategori) { // menambahkan kolom aksi
                    $btn = '<a href="' . url('/kategori/' . $kategori->kategori_id) . '" class="btn btn-info btn-sm">Detail</a> ';
                    $btn .= '<a href="' . url('/kategori/' . $kategori->kategori_id . '/edit') . '" class="btn btn-warning btn-sm">Edit</a> ';
                    $btn .= '<form class="d-inline-block" method="POST" action="' . url('/kategori/' . $kategori->kategori_id) . '">'
                        . csrf_field() . method_field('DELETE') .
                        '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\');">Hapus</button></form>';
                    return $btn;
                })
                ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html
                ->make(true);
        }

        // Menampilkan halaman form tambah user
        public function create()
        {
            $breadcrumb = (object) [
                'title' => 'Tambah Kategori',
                'list' => ['Home', 'Kategori', 'Tambah']
            ];

            $page = (object) [
                'title' => 'Tambah kategori baru'
            ];

            $kategori = KategoriModel::all(); // ambil data kategori untuk ditampilkan di form
            $activeMenu = 'kategori'; // set menu yang sedang aktif

            return view('kategori.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'kategori' => $kategori, 'activeMenu' => $activeMenu]);
        }

        // Menyimpan data user baru
        public function store(Request $request)
        {
            $request->validate([
                'kategori_kode' => 'required|string|min:3|unique:m_kategoris,kategori_kode',
                'kategori_nama' => 'required|string|min:3'
            ]);

            KategoriModel::create([
                'kategori_kode' => $request->kategori_kode,
                'kategori_nama' => $request->kategori_nama
            ]);

            return redirect('/kategori')->with('success', 'Data kategori berhasil disimpan');
        }

        // Menampilkan detail user
        public function show(string $id)
        {
            //$kategori = KategoriModel::with('kategori')->find($id);
            $kategori = KategoriModel::find($id);

            $breadcrumb = (object) [
                'title' => 'Detail Kategori',
                'list' => ['Home', 'Kategori', 'Detail']
            ];

            $page = (object) [
                'title' => 'Detail kategori'
            ];

            $activeMenu = 'kategori'; // set menu yang sedang aktif

            return view('kategori.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'kategori' => $kategori, 'activeMenu' => $activeMenu]);
        }

        // Menampilkan halaman form edit user
        public function edit(string $id)
        {
            $kategori = KategoriModel::find($id);
            $kategoris = KategoriModel::all(); // Melewatkan data kategori ke view

            $breadcrumb = (object) [
                'title' => 'Edit Kategori',
                'list' => ['Home', 'Kategori', 'Edit']
            ];

            $page = (object) [
                'title' => 'Edit kategori'
            ];

            $activeMenu = 'kategori'; // set menu yang sedang aktif

            return view('kategori.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'kategori' => $kategori, 'kategoris' => $kategoris, 'activeMenu' => $activeMenu]); // Memasukkan variabel $kategoris ke dalam view
        }


        // Menyimpan perubahan data user
        public function update(Request $request, string $id)
        {
            $request->validate([
                'kategori_kode' => 'required|string|min:3|unique:m_kategoris,kategori_kode,' . $id . ',kategori_id',
                'kategori_nama' => 'required|string|min:3'
            ]);

            KategoriModel::find($id)->update([
                'kategori_kode' => $request->kategori_kode,
                'kategori_nama' => $request->kategori_nama
            ]);

            return redirect('/kategori')->with('success', 'Data kategori berhasil diubah');
        }

        // Menghapus data user
        public function destroy(string $id)
        {
            $check = KategoriModel::find($id);
            if (!$check) {  // untuk mengecek apakah data user dengan id yang dimaksud ada atau tidak
                return redirect('/kategori')->with('error', 'Data kategori tidak ditemukan');
            }

            try {
                KategoriModel::destroy($id); // Hapus data kategori

                return redirect('/kategori')->with('success', 'Data kategori berhasil dihapus');
            } catch (\Illuminate\Database\QueryException $e) {

                // Jika terjadi error ketika menghapus data, redirect kembali ke halaman dengan membawa pesan error
                return redirect('/kategori')->with('error', 'Data kategori gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
            }
        }

    // public function index(KategoriDataTable $dataTable)
    // {
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack/Makanan Ringan',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategoris')->insert($data);
        // return 'Insert data baru berhasil';

        // $row = DB::table('m_kategoris')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        // return 'Update data berhasil. Jumlah data yang diupdate: '. $row.' baris';

        // $row = DB::table('m_kategoris')->where('kategori_kode', 'SNK')->delete();
        // return 'Delete data berhasil. Jumlah data yang dihapus: '. $row.' baris';

        // $data = DB::table('m_kategoris')->get();
        // return view('kategori', ['data' => $data]);

    //     return $dataTable->render('kategori.index');
    // }

    // public function create(): View
    // {
    //     return view('kategori.create');
    // }

    // public function edit($id)
    // {
    //     $kategori = KategoriModel::findOrFail($id);
    //     return view('kategori.edit', compact('kategori'));
    // }
    // public function edit_simpan(Request $request, $id)
    // {
    //     $kategori = KategoriModel::find($id);
    //     $kategori->kategori_kode = $request->kodeKategori;
    //     $kategori->kategori_nama = $request->namaKategori;
    //     $kategori->save();
    //     return redirect('/kategori');
    // }

    // public function hapus($id)
    // {
    //     $kategori = KategoriModel::find($id);
    //     $kategori->delete();
    //     return redirect('/kategori');
    // }

    // public function store(Request $request): RedirectResponse
    // {
    //     KategoriModel::create([
    //         'kategori_kode' => $request->kodeKategori,
    //         'kategori_nama' => $request->namaKategori,
    //     ]);
        // $validated = $request->validate([
        //     'kategori_kode' => ['required', 'unique:kategori', 'max:255'],
        //     'kategori_nama' => ['required'],
        // ]);
        // $validated = $request->validateWithBag('kategori',[
        //     'kategori_kode' => ['required', 'unique:kategori', 'max:255'],
        //     'kategori_nama' => ['required'],
        // ]);
        // $request->validate([
        //     'kategori_kode' => 'bail|required|unique:kategori|max:255',
        //     'kategori_nama' => 'bail|required|max:255',
            // 'created_at' => 'bail|required',
            // 'updated_at' => 'bail|required',
        //]);

        // The post is valid...
    //     return redirect('/kategori');
    // }
}
