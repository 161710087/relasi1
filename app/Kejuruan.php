<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kejuruan extends Model
{
   protected $fillable= array('nama','ket');
   public $timestamp=true;
    public function kejuruan()
    {

    return $this ->belongst0('App\prestasi','id_jurusan');
}
public function ekskul()
    {
    return $this ->belongst0('App\prestasi','id_ekskul');
}

}
