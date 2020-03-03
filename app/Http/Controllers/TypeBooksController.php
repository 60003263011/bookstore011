<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeBooks;//นำเอาโมเดลTypeBooks เข้ามาใช้งาน

class TypeBooksController extends Controller
{
    public function index(){
        //$typebooks = TypeBooks::all();//แสดฃข้อมูลทั้งหมด
        //typebooks = TypeBooks::orderby('id','desc')->get();  //แสดงข้อมูลทั้งหมดเรียงจากมากไปน้อยโดยใช้ id
        $count = TypeBooks::count();  //นับจำนวนทั้งหมด
        //แบ่งหน้า
        //$typebooks = TypeBooks::simplePaginate(3);
        $typebooks = TypeBooks::paginate(3);

        return view('typebooks.index', [
            'typebooks' => $typebooks,
            'count' => $count
        ]);//ส่งไปที่view โฟเดอร์typebooks ไฟล์ index.blade.php

}

public function destroy($id){
    //TypeBooks::find($id)->delete();
    TypeBooks::destroy($id);
    return back();
}
}
