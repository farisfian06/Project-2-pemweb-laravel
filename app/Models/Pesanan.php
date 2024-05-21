<?php

namespace App\Models;

use App\Http\Controllers\PesananController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    public $timestamps = false;

    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'id_mobil', 'id');
    }
}
