
    <header>
        <div class="header" style="background-color:#778899; ">
       
        <div class="bottom-header">
            <div class="container">
                <div class="header-bottom-left">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('images/logo-waka.png')}}" alt=" " /></a>
                    </div>
                    <div class="search">
                        <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
                        <input type="submit"  value="SEARCH">

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="header-bottom-right">                   
                        
                            <ul class="login">
                                <li><a href="login.html"><span> </span>LOGIN</a></li> |
                                <li ><a href="register.html">SIGNUP</a></li>
                            </ul>
                     
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>   
            </div>
        </div>
    </div>

  <div class="container-full">
   

       <img src="{{ asset('images/1473_new.jpg') }}" class="imagebanner" alt="logo-banner">

</div>
<div class="fixed-left">
  
  <nav class="navbar " style="background-color:  #778899;">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span style="font-size: 25px; color: #FFFFFF;"> Thể Loại Sách</span>
    </button>
  </nav>
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <ul class="menu">
            @foreach($list_theloai as $theloai)
            <ul class="cute">
                <li class="subitem1"><a href="{{route('ds_theoloai',$theloai->id_theloai)}}">{{$theloai->ten_theloai}} </a></li>
            </ul>
            @endforeach
            </ul>
    </div>
  </div>
</div>

</header>