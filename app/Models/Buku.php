<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Kategori;
use App\Models\Penerbit;

class Buku extends Model
{
    //
    protected $guarded = [];
    
       public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    public function penerbit(): BelongsTo
    {
        return $this->belongsTo(Penerbit::class);
    }
}
