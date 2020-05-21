@extends('layout')
@section("title","Đọc Sách")
@section('head')

@endsection
@section('main')
<main>
     <div class="products">
                    <h5 class="latest-product" style="text-indent: 30px;">SÁCH ĐỌC NHIỀU NHẤT</h5> 
                                 
                 </div>
	 <div class="row">
            
                    <div class="col-md-1 listcategorys">
                          
                    </div>

                    <div class="col-md-10">
                           <div class="row">
                               {{--  <!!--Chi Tiết Sản Phẩm --!!>  --}}
                       @foreach($list_sach as $sach)
                        <div class="col-xs-6 col-md-3 col-sm-3 ebook">
                                <div class="card w-100">
                                    <a href="#">
                                        <img src="{{ asset('image/tamly_kynang/'. $sach->img) }}" class="card-img-top" alt="...">
                                    </a>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                                 <div class="ten_sach">
                                         <span class="tieude text-center" style="font-size: 15px;"><b>{{$sach->ten_sach}}</b></span>
                                            </div>
                                        <div class="card-body">
                                                                                  
                                          <a href="{{route('chitiet',$sach->id_sach)}}" class="form-control btn btn-primary">CHI TIẾT</a>
                                        </div>
                                       
                                        </div>
                                    </div>
                                   
                        @endforeach




                        </div>
                            <br><br>

                       
                     </div>
                     <div class="col-md-1 listcategorys">
                          
                    </div>
                </div>
  
</main>
@endsection