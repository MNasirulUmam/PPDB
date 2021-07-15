<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    use HasFactory;
    use SoftDeletes;
    /**
* fillable
    
*
* @var array
*/
protected $fillable = [
    'nama', 'tanggal', 'asalsekolah','alamat','gambar'
];
}

