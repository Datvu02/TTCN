<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_phucap extends Model
{
    protected $table= "tbl_phucap";
    // public function tbl_hosonhanvien(){
    //     return $this->belongsTo('App\tbl_hosonhanvien','id_nhanvien','id_dantoc');
    // }
    public function tbl_chucvu(){
        return $this->belongsTo('App\tbl_chucvu','id_chucvu','id_chucvu');
    }
}
