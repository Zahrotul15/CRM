<?php

namespace App\Models\Kontak;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hakaksesmodel extends Model
{
    use HasFactory;

    protected $table = 'hak_akses';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
