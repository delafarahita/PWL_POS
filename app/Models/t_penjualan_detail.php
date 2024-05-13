<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class t_penjualan_detail extends Model
{
    use HasFactory;

    protected $table = 't_penjualan_details';       // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'detail_id';  // Mendefinisikan primary key dari tabel yang digunakan

    protected $fillable = ['penjualan_id', 'barang_id', 'harga', 'jumlah'];

    public function barang(): BelongsTo
    {
        return $this->belongsTo(BarangModel::class);
    }

    public function penjualan(): BelongsTo
    {
        return $this->belongsTo(PenjualanModel::class, 'penjualan_id', 'penjualan_id');
    }
}
