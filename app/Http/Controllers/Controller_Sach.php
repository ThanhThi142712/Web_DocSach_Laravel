<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Session;

use Illuminate\Http\Request;
use App\Models\the_loai;
use App\Models\sach;
use App\Models\tac_gia;
use DB;

class Controller_Sach extends Controller
{
	 function trangchu(){

	 	$list_theloai=DB::table('the_loai')->get();
	 	$list_sach=DB::table('sach')->paginate(4);
   	return view('fontend.trang_chu',compact('list_theloai','list_sach'));
   }



    function chitiet( Request $req){
    
	 	
    	$list_theloai=DB::table('the_loai')->get();
	 	$list_sach=DB::table('sach')->where('id_sach',$req->id_sach)->first();


	
   	return view('fontend.chi_tiet',compact('list_theloai','list_sach'));
    }
    function noi_dung()
    {
    	$list_theloai=DB::table('the_loai')->get();
	 	return view('fontend.noi_dung',compact('list_theloai'));

    }
      function ds_theoloai($id_theloai)
    {
    	$list_theloai=DB::table('the_loai')->get();
    	$list_sach=DB::table('sach')->where('id_theloai','=',$id_theloai)->get();
	 	return view('fontend.danh_sach',compact('list_theloai','list_sach'));

    }

}
