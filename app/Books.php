<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books'; //กำหนดชื่อในตารางฐานข้อมูล
    protected $fillable =['title','price','typebooks_id'];//กำหนดให้สามารถเพิ่มข้อมูลในคำสั่งเดียว Mass Assignment

    public function typebooks(){
        return $this->belongsTo(TypeBooks::class,'typebooks_id');//กำหนดFKด้วย
    }
}
