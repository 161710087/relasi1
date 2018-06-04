<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    protected $fillable= array('nama','dalam_bidang','ket');
    public $timestamp=true;
     public function prestasi()
     {
 
     return $this ->hasmany('App\prestasi','id_jurusan');
 }
 
 
 }
    

