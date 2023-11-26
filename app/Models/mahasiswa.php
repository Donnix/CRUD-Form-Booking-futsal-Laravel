<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class mahasiswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'npm';
    protected $fillable= ['npm','nama','no_wa','fakultas','jurusan','tingkat','tanggal','mulai','akhir','file_krs'];
    protected $table ='mahasiswa';
    public $timestamps = false;

    public function down()
    {
        Schema::dropIfExists('files');
    }
}
