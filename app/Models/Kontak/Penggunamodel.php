<?php

namespace App\Models\Kontak;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggunamodel extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $guarded = [];
    // function ambildata()
    // {
    //     $query = $this->db->query("SELECT * FROM users");
    //     return $query->result();
    // }
}
