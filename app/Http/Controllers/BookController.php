<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Category;


class BookController extends Controller
{
    function laythongtintheloai() { 
        $the_loai_sach = Category::all();
    
        $exists = DB::table("the_loai")->where('ten_the_loai', 'Trinh thám')->exists();
        
        if (!$exists) {
            
            $data = ["ten_the_loai" => "Trinh thám"];
            DB::table("the_loai")->insert($data);
        }
        
        return view("qlsach.the_loai", compact("the_loai_sach"));
    }
   function laythongtinsach(){
       $sach = Book::where("nha_xuat_ban", "Văn Học") -> get();
       return view("qlsach.thong_tin_sach", compact("sach"));
   }
}