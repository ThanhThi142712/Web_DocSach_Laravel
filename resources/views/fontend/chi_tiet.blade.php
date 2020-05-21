@extends('layout')
@section("title","chitiet")
@section('head')
<link rel="stylesheet" href="{{ asset('css/chitiet.css') }}">
@endsection
@section('main')
<main>
         
             <div class="products">
                    <h5 class="latest-product" style="text-indent: 30px;">Chi Tiết</h5> 
                                 
                 </div>
   <div class="container main__notification">
            <div class="col-md-9" >
                <div class="panel panel-primary">
                    <div class="row thong_tin_ebook">
                        <div class="col-md-4 ">
                            <img src="{{ asset('image/tamly_kynang/'. $list_sach->img) }}" class="img-thumbnail" alt="...">
                            
                        </div>
                            <div class="col-md-5 ">
                        <a href="#">
                            <h1 class="ebook_title text-primary">{{$list_sach->ten_sach}}</h1>
                        </a>
                        <h4 >Tác giả : </h4>
                        <h4 >Thể Loại:</a></h4>
                        <div class="alert alert-info" role="alert"> 
                            <span ></span> Vui lòng chọn định dạng file để tải  
                        </div>
                        <a href="{{asset('noidung_sach/tamly_kynang/'.$list_sach->noi_dung)}}" target="_blank" type="button" class="btn btn-danger">Đọc Sách</a>
                       
                    </div>
                    </div>
                




        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
      
           <div class="gioi_thieu_sach text-justify">
               <p class="tomtac">{{$list_sach->tom_tac}}</p>
           </div>
                </div>
             </div>
   </div>

       
     
       
    </div>
                
  
    </main>

@endsection