@extends('layout')
@section("title","Đọc Sách Miễn Phí!")
@section('head')
@endsection
@section('main')
     <main>
         <div class="row">
             <div class="products" style="background-color: #CCCCCC;">
                    <h5 class="latest-product" style="text-indent: 30px; ">SÁCH ĐỌC NHIỀU NHẤT</h5> 
                                 
                 </div>
                    <div class="col-md-1 listcategorys">
                          
                    </div>

                    <div class="col-md-10">
                           <div class="row">
                               {{--  <!!--Chi Tiết Sản Phẩm --!!>  --}}
                       @foreach($list_sach as $sach)
                        <div class="col-md-3">
                                <div class="card w-100">
                                    <a href="#">
                                        <img src="{{ asset('image/tamly_kynang/'. $sach->img) }}" class="card-img-top" alt="...">
                                    </a>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                                        <div class="card-body">
                                        <span style="font-size: 20px; font-weight: bold;">{{$sach->ten_sach}}</span>
                                                   
                                              
                                              
                                         
                                            <p class="card-text"></p>
                                            <a href="{{route('chitiet',$sach->id_sach)}}" class="form-control btn btn-primary">CHI TIẾT</a>
                                        </div>
                                        </div>
                                    </div>
                        @endforeach
                        </div>
                       
                     </div>
                     <div class="col-md-1 listcategorys">
                          
                    </div>
                </div>
  
    </main>

@endsection