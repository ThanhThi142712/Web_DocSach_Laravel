
<!DOCTYPE html>
<html>
<head>
<title>ĐỌC SÁCH ONLINE </title>
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />  
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!--script-->
</head>
<body> 
    <!--header-->
    <div class="header">
       
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
    <!---->
    <div class="container">
            <div class="shoes-grid">
            <a href="single.html">
            <div class="wrap-in">
                <div class="wmuSlider example1 slide-grid">      
                   <div class="wmuSliderWrapper">         
                       <article style="position: absolute; width: 100%; opacity: 0;">                   
                        <div class="banner-matter">
                        <div class="col-md-5 banner-bag">
                            <img class="img-responsive " src="{{asset('images/sach2.jpg')}}" alt=" " />
                            </div>
                            <div class="col-md-7 banner-off">                           
                                <h2>ĐỌC SÁCH MIỄN PHÍ!</h2>
                                                 
                              
                            </div>
                           
                            
                            <div class="clearfix"> </div>
                        </div>
                        
                        </article>
                        
                        
                     </div>
                     </a>
                    <ul class="wmuSliderPagination">
                        <li><a href="#" class="">0</a></li>
                        <li><a href="#" class="">1</a></li>
                        <li><a href="#" class="">2</a></li>
                    </ul>
                     <script src="js/jquery.wmuSlider.js"></script> 
                  <script>
                    $('.example1').wmuSlider();         
                 </script> 
                </div>
              </div>
                </a>
                  <!---->
             
                 <div class="products">
                    <h5 class="latest-product">SÁCH MỚI</h5> 
                                   
                 </div>
                 <div class="product-left">
                    <div class="col-md-4 chain-grid">
                        <a href="single.html"><img class="img-responsive chain" src="images/ch.jpg" alt=" " /></a>
                        <span class="star"> </span>
                        <div class="grid-chain-bottom">
                            <h6><a href="single.html">Tên Sách</a></h6>
                            <div class="star-price">
                             
                                <a class="now-get get-cart" href="#">Chi Tiết</a> 
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                   
                     <div class="clearfix"> </div>
                 </div>
                 <div class="products">
                    <h5 class="latest-product">SÁCH ĐỌC NHIỀU NHẤT</h5> 
                                 
                 </div>
                 <div class="product-left">
                    <div class="col-md-4 chain-grid">
                        <a href="single.html"><img class="img-responsive chain" src="images/bott.jpg" alt=" " /></a>
                        <span class="star"> </span>
                        <div class="grid-chain-bottom">
                            <h6><a href="single.html">tên sach</a></h6>
                            <div class="star-price">
                              
                                <a class="now-get get-cart" href="#">Chi Tiết</a> 
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                  
                     <div class="clearfix"> </div>
                 </div>
                 <div class="clearfix"> </div>
               </div>   
               <div class="sub-cate">
                <div class=" top-nav rsidebar span_1_of_left">
                    <h3 class="cate">THỂ LOẠI SÁCH</h3>
         <ul class="menu">
        
            <ul class="cute">
                <li class="subitem1"><a href="product.html">Cute Kittens </a></li>
                <li class="subitem2"><a href="product.html">Strange Stuff </a></li>
                <li class="subitem3"><a href="product.html">Automatic Fails </a></li>
            </ul>
        </li>
       
    </ul>
                    </div>
                <!--initiate accordion-->
        <script type="text/javascript">
            $(function() {
                var menu_ul = $('.menu > li > ul'),
                       menu_a  = $('.menu > li > a');
                menu_ul.hide();
                menu_a.click(function(e) {
                    e.preventDefault();
                    if(!$(this).hasClass('active')) {
                        menu_a.removeClass('active');
                        menu_ul.filter(':visible').slideUp('normal');
                        $(this).addClass('active').next().stop(true,true).slideDown('normal');
                    } else {
                        $(this).removeClass('active');
                        $(this).next().stop(true,true).slideUp('normal');
                    }
                });
            
            });
        </script>
                    
            </div>
                <div class="clearfix"> </div>                    
        </div>
    
    <!---->
    <div class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="latter">
                    <h6>NEWS-LETTER</h6>
                    <div class="sub-left-right">
                        <form>
                            <input type="text" value="Enter email here"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}" />
                            <input type="submit" value="SUBSCRIBE" />
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="latter-right">
                    <p>FOLLOW US</p>
                    <ul class="face-in-to">
                        <li><a href="#"><span> </span></a></li>
                        <li><a href="#"><span class="facebook-in"> </span></a></li>
                        <div class="clearfix"> </div>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-cate">
                    <h6>CATEGORIES</h6>
                    <ul>
                        <li><a href="#">Curabitur sapien</a></li>
                        <li><a href="#">Dignissim purus</a></li>
                        <li><a href="#">Tempus pretium</a></li>
                        
                    </ul>
                </div>
            
            
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</body>
</html>