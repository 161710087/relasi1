<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eskul extends Model
{
    protected $fillable= array('nama','ket');
    public $timestamp=true;
     public function prestasi()
     {
 
     return $this ->hasmany('App\prestasi','id_eskul');
 }
 
 
 }
    
