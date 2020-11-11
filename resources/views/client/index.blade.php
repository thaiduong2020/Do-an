<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" >
    <link rel="stylesheet" href="//cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" >
<link rel="stylesheet" href="/css/css.css">
<link rel="stylesheet" href="/fontawesome-free-5.15.1-web/css/all.min.css">		<link rel="stylesheet" href="//cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" >
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="/fontawesome-free-5.15.1-web/css/all.min.css">

    <title>Trang Chủ</title>
</head>
<body>
    <div id="appp">
    <div class="main">
        <div class="sgtopbar hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6 hidden-xs">
                        <div class="sgtop hidden-xs">
                            Bạn cần hổ trợ : 
                            <a href="tel:0355382715">0355382715</a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                        <div class="sg f-right">
                            <a href="#">Hệ Thống Cửa hàng</a>
                        </div>
                        <div class="sag">
                        <a href="#">Theo dõi đơn hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end topbar  -->
        <div class="sag_header_top">
            <div class="sag_topbar">
                <div class="container">
                    <div class=" row">
                    <div class="sag_head col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="sag_logo col-lg-3 col-md-3">
                                <a href="#" class="logo_wrapper">
                                    <img src="upload/logo.png" alt="logo">
                                </a>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col-search-engine">
                                <div class="sag_header_search">
                                    <form class="input-group search-bar" action="/search" method="get" role="search">
                                       
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                              <button class="btn  dropdown-toggle" style="background:#f5f5f5" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                              </div>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                          </div>
                                          
                                        
                                        
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-sm hidden-xs">
								<div class="phone_main_menu" style="padding: 3em 32px;">
									<div class="downdown_cart hidden-sm hidden-xs">
										<div class="cart_ico inline-block ico_width">
											<div class="mini-cart">
												<a class="cart_pcs text-light" href="/cart">
													<i class="ion-bag"></i> &nbsp;
													<span class="t_line">Giỏ hàng&nbsp;
														<span class="cartCount  count_item_pr"></span>
													</span>
												</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- menu -->
        <div class="sag_warp_main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                        <div class="sag__warp_hed">
                            <div class="sag_megabar col-mega hidden-sm hidden-xs">
                                <div class="sag_menudung">
                                    <div class="sag_title">
                                        <span class="title">DANH MỤC SẢN PHẨM</span>
                                        <i class="fas fa-bars"></i>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="sag_menu_ngan">
                            <nav class="menu_ngan">
                                <ul class="sag_fix">
                                    <li><a href="#">Trang Chủ</a></li>
                                    <li>
                                        <a href="#">Sản Phẩm</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">Mobile & Tablet</a>
                                                <ul class="sub-menu2">
                                                    <li><a href="#">Điện Thoại</a></li>
                                                    <li><a href="#">Laptop</a></li>
                                                    <li><a href="#">Table</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Kỹ Thuật Số</a>
                                                <ul class="sub-menu2">
                                                    <li><a href="#">Smart TV</a></li>
                                                    <li><a href="#">Tivi LED</a></li>
                                                    <li><a href="#">Tivi 4K</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Điện Máy</a>
                                                <ul class="sub-menu2">
                                                    <li><a href="#">Điều Hòa</a></li>
                                                    <li><a href="#">Tủ Lạnh</a></li>
                                                    <li><a href="#">Máy Giặt</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Đồ Gia Dụng</a></li>
                                            <li><a href="#">Phụ Kiện</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Khuyến Mãi Hot</a></li>
                                    <li><a href="#">Mua Trả Góp</a></li>
                                    <li>
                                        <a href="#">Tin Tức</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Kinh Nghiệm Mua Sắm</a></li>
                                            <li><a href="#">Kỹ Thuật Số</a></li>
                                            <li><a href="#">Điện Máy</a></li>
                                            <li><a href="#">Đồ Gia Dụng</a></li>
                                            <li><a href="#">Phụ Kiện</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Liên Hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="sag-login">
                            <a href="#">Đăng Ký</a>
                            <a href="#">Đăng Nhập</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- end menu -->
        <div class="sag_slide_inedex">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="sag_menu_header">
                                <ul>
                                    <li><a href="#">Mobile & Tablet</a>
                                        <ul class="sub-menu-header">
                                            <li><a href="#">Điện Thoại</a>
                                            </li>
                                            <li><a href="#">Laptop</a></li>
                                            <li><a href="#">Table</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Kỹ Thuật Số</a>
                                        <ul class="sub-menu-header">
                                            <li><a href="#">Smart TV</a></li>
                                            <li><a href="#">Tivi LED</a></li>
                                            <li><a href="#">Tivi 4K</a></li>
                                        </ul>
                                    <li>
                                        <a href="#">Điện Máy</a>
                                        <ul class="sub-menu-header">
                                            <li><a href="#">Điều Hòa</a></li>
                                            <li><a href="#">Tủ Lạnh</a></li>
                                            <li><a href="#">Máy Giặt</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Nội Ngoại Thất</a></li>
                                    <li><a href="">Phụ Kiện</a></li>
                                    <li><a href="">Mẹ Và Bé</a></li>
                                    <li><a href="">Xem Thêm Các Mục</a></li>
                                    <li><a href="">Sức khỏe & làm đẹp</a></li>
                                </ul>
                            </div>
                            <div class="sag_baner">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img class="d-block w-100" src="upload/slider_2.png" alt="First slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="upload/slider_1.png" alt="Second slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="upload/slider_2.png" alt="Third slide">
                                      </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end slide -->
     
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                            <div class="sag-tieude">
                                <div class="sag-icon">
                                <span class="icon">
                                    <i class="fas fa-bolt"></i>
                                </span>
                                </div>
                                <h2 class="fsash"><a class="flash" href="#" title="flash sale">FLASH SALE </a></h2>
                                <div class="deal">
                                    <span>Khuyến mãi đã kết thúc </span>
                                </div>
                                <a class="xtc" href="#">Xem tất cả <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="sag_product_index">
                                <div class="sag_nd">
                                    <div class="sag_nd_img">
                                        <a href="#"><img src="upload/tivi.jpg" alt=""></a>
                                    </div>
                                    <div class="sag_nd_sanpham">
                                        <h3 class="sag_tensanpham">
                                            <a href="#">Android Tivi Sony 49 inch 4K</a>
                                        </h3>
                                        <div class="sag_giasanpham">
                                            <span class="gia_chinh">8.000.000đ</span>
                                            <span class="giam_gia">9.000.000đ</span>
                                        </div>
                                        <div class="sag_review">

                                        </div>
                                    </div>
                                </div>
                                <div class="sag_nd">
                                    <div class="sag_nd_img">
                                        <a href="#"><img src="upload/tv2.jpg" alt=""></a>
                                    </div>
                                    <div class="sag_nd_sanpham">
                                        <h3 class="sag_tensanpham">
                                            <a href="#">Android Tivi Sony 49 inch 4K</a>
                                        </h3>
                                        <div class="sag_giasanpham">
                                            <span class="gia_chinh">8.000.000đ</span>
                                            <span class="giam_gia">9.000.000đ</span>
                                        </div>
                                        <div class="sag_review">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="sag_nd">
                                    <div class="sag_nd_img">
                                        <a href="#"><img src="upload/tv3.jpg" alt=""></a>
                                    </div>
                                    <div class="sag_nd_sanpham">
                                        <h3 class="sag_tensanpham">
                                            <a href="#">Android Tivi Sony 49 inch 4K</a>
                                        </h3>
                                        <div class="sag_giasanpham">
                                            <span class="gia_chinh">8.000.000đ</span>
                                            <span class="giam_gia">9.000.000đ</span>
                                        </div>
                                        <div class="sag_review">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="sag_nd">
                                    <div class="sag_nd_img">
                                        <a href="#"><img src="upload/tv4.jpg" alt=""></a>
                                    </div>
                                    <div class="sag_nd_sanpham">
                                        <h3 class="sag_tensanpham">
                                            <a href="#">Android Tivi Sony 49 inch 4K</a>
                                        </h3>
                                        <div class="sag_giasanpham">
                                            <span class="gia_chinh">8.000.000đ</span>
                                            <span class="giam_gia">9.000.000đ</span>
                                        </div>
                                        <div class="sag_review">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="sag_nd">
                                    <div class="sag_nd_img">
                                        <a href="#"><img src="upload/tv5.jpg" alt=""></a>
                                    </div>
                                    <div class="sag_nd_sanpham">
                                        <h3 class="sag_tensanpham">
                                            <a href="#">Android Tivi Sony 49 inch 4K</a>
                                        </h3>
                                        <div class="sag_giasanpham">
                                            <span class="gia_chinh">8.000.000đ</span>
                                            <span class="giam_gia">9.000.000đ</span>
                                        </div>
                                        <div class="sag_review">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- end khuyến mãi kết thúc -->

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="sag-tieudedt">
                                    <div class="sag-icondt">
                                    <span class="icondt">
                                        <i class="fas fa-mobile-alt"></i>                                    
                                    </span>
                                    </div>
                                    <div>
                                        <h2><a class="flashdt" href="#" title="flash sale">MOBILE & TABLET </a></h2>
                                    </div>
                                    <a class="xtc" href="#">tất cả <i class="fas fa-arrow-right"></i></a>
                                    <a class="xtc" href="#">Tablet </i></a>
                                    <a class="xtc" href="#">Laptop & PC </i></a>
                                    <a class="xtc" href="#">Điện thoại </i></a> 
                                </div>
                                   
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row d-flex ">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="sag-pro-item">
                                            <div class="ss">
                                            <div class="sag_hinhanh">
                                                <a href="#"><img src="upload/tivi lg24mp8.jpg" alt=""></a>
                                            </div>
                                            <div class="sag_noidung">
                                                <h3 class="noidung-name">
                                                    <a class="tivi" href="#">Màn hình LG 24MP88HV-S 24inch FullHD</a>
                                                </h3>
                                                <div class="noidung-giagoc">
                                                    <span class="gia-goc"> 4.690.000đ </span>
                                                </div>
                                                <div class="noidung-giakm">
                                                    <span class="gia-km"> 5.990.000đ </span>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <div class="sag-pro-item">
                                            <div class="ss">
                                            <div class="sag_hinhanh">
                                                <a href="#"><img src="upload/tivi lg24mp8.jpg" alt=""></a>
                                            </div>
                                            <div class="sag_noidung">
                                                <h3 class="noidung-name">
                                                    <a class="tivi" href="#">Màn hình LG 24MP88HV-S 24inch FullHD</a>
                                                </h3>
                                                <div class="noidung-giagoc">
                                                    <span class="gia-goc"> 4.690.000đ </span>
                                                </div>
                                                <div class="noidung-giakm">
                                                    <span class="gia-km"> 5.990.000đ </span>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <a href="#"><img src="upload/baner1.png" alt="" style="width: 100%;"></a>
                                        </div>
                                        <div class=" col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3">
                                            <div class="d-flex" style="flex-wrap: wrap;">
                                            
                                                 <el-product-1></el-product-1>
                                             
                                              
                                            
                                            </div>
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination" style="float: right;margin: 1.3em 0em;">
                                                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul>
                                              </nav>
                                        </div>
                                        
                                        </div>
                                        
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="container d-flex mt-4">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pl-0">
                                    <div >
                                        <a href="#"><img src="upload/banner_large1.png" alt="" style="width: 100%;"></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pr-0">
                                    <div class=" ">
                                        <a href="#"><img src="upload/banner_large2.png" alt="" style="width:100%"></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- end mobile & tablet -->
                        <div class="row justify-content-center mt-4" >
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                <div class="sag-tieude">
                                    <div class="sag-icon">
                                        <span class="icon">
                                        <i class="fas fa-tv"></i>
                                    </span>
                                    </div>
                                    <h2 class="kts"><a class="flash" href="#" title="flash sale">KỸ THUẬT SỐ </a></h2>
                                    <div class="deal">
                                    </div>
                                    <a class="xtc" href="#">Xem tất cả <i class="fas fa-arrow-right"></i></a>
                                    <a class="xtc" href="#">tất cả <i class="fas fa-arrow-right"></i></a>
                                    <a class="xtc" href="#">Tablet </i></a>
                                    <a class="xtc" href="#">Laptop & PC </i></a>
                                    <a class="xtc" href="#">Điện thoại </i></a>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                <div class="row d-flex ">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="sag-pro-item">
                                            <div class="ss">
                                            <div class="sag_hinhanh">
                                                <a href="#"><img src="upload/tivi lg24mp8.jpg" alt=""></a>
                                            </div>
                                            <div class="sag_noidung">
                                                <h3 class="noidung-name">
                                                    <a class="tivi" href="#">Màn hình LG 24MP88HV-S 24inch FullHD</a>
                                                </h3>
                                                <div class="noidung-giagoc">
                                                    <span class="gia-goc"> 4.690.000đ </span>
                                                </div>
                                                <div class="noidung-giakm">
                                                    <span class="gia-km"> 5.990.000đ </span>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <div class="sag-pro-item">
                                            <div class="ss">
                                            <div class="sag_hinhanh">
                                                <a href="#"><img src="upload/tivi lg24mp8.jpg" alt=""></a>
                                            </div>
                                            <div class="sag_noidung">
                                                <h3 class="noidung-name">
                                                    <a class="tivi" href="#">Màn hình LG 24MP88HV-S 24inch FullHD</a>
                                                </h3>
                                                <div class="noidung-giagoc">
                                                    <span class="gia-goc"> 4.690.000đ </span>
                                                </div>
                                                <div class="noidung-giakm">
                                                    <span class="gia-km"> 5.990.000đ </span>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <a href="#"><img src="upload/baner1.png" alt="" style="width: 100%;"></a>
                                        </div>
                                        <div class=" col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3">
                                            <div class="d-flex" style="flex-wrap: wrap;">
                                              
                                                   <el-product-2></el-product-2>
                                               
                                               
                                            
                                            </div>
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination" style="float: right;margin: 1.3em 0em;">
                                                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul>
                                              </nav>
                                             
                                        </div>
                                        
                                        </div>
                                        
                                    </div>
                                   
                                </div>
                                <div class="row justify-content-center mt-4" >
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <div class="sag-tieudedt">
                                            <div class="sag-icondt">
                                            <span class="icondt">
                                                <i class="fas fa-mobile-alt"></i>
                                            </span>
                                            </div>
                                            <h2><a class="flashdt" href="#" title="flash sale">ĐIỆN MÁY </a></h2>
                                            <a class="xtc" href="#">tất cả <i class="fas fa-arrow-right"></i></a>
                                            <a class="xtc" href="#">Tablet </i></a>
                                            <a class="xtc" href="#">Laptop & PC </i></a>
                                            <a class="xtc" href="#">Điện thoại </i></a>   
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <div class="row d-flex ">
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                <div class="sag-pro-item">
                                                    <div class="ss">
                                                    <div class="sag_hinhanh">
                                                        <a href="#"><img src="upload/tivi lg24mp8.jpg" alt=""></a>
                                                    </div>
                                                    <div class="sag_noidung">
                                                        <h3 class="noidung-name">
                                                            <a class="tivi" href="#">Màn hình LG 24MP88HV-S 24inch FullHD</a>
                                                        </h3>
                                                        <div class="noidung-giagoc">
                                                            <span class="gia-goc"> 4.690.000đ </span>
                                                        </div>
                                                        <div class="noidung-giakm">
                                                            <span class="gia-km"> 5.990.000đ </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                
                                                <div class="sag-pro-item">
                                                    <div class="ss">
                                                    <div class="sag_hinhanh">
                                                        <a href="#"><img src="upload/tivi lg24mp8.jpg" alt=""></a>
                                                    </div>
                                                    <div class="sag_noidung">
                                                        <h3 class="noidung-name">
                                                            <a class="tivi" href="#">Màn hình LG 24MP88HV-S 24inch FullHD</a>
                                                        </h3>
                                                        <div class="noidung-giagoc">
                                                            <span class="gia-goc"> 4.690.000đ </span>
                                                        </div>
                                                        <div class="noidung-giakm">
                                                            <span class="gia-km"> 5.990.000đ </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <a href="#"><img src="upload/baner1.png" alt="" style="width: 100%;"></a>
                                                </div>
                                                <div class=" col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3">
                                                    <div class="d-flex" style="flex-wrap: wrap;">
                                                      
                                                           <el-product-3></el-product-3>
                                                       
                                                       
                                                    
                                                    </div>
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination" style="float: right;margin: 1.3em 0em;">
                                                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                        </ul>
                                                      </nav>
                                                     
                                                </div>
                                                
                                                </div>
                                                
                                            </div>
                                           
                                        </div>
                                       
                                                   
                                                </div>
                                                <div class="row  justify-content-center">
                                                    <div class="col-10 d-flex" >
                                                        <div class="col-md-3 pl-0">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0">
                                                                <div class="sag-tieude">
                                                                    <div class="sag-icondg">
                                                                    <span class="icon">
                                                                        <i class="far fa-comments"></i>
                                                                    </span>
                                                                    </div>
                                                                    <h2 class="danhgia" style="width: 79.8%;"><a class="flash" href="#" title="flash sale">Đánh giá </a></h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0">
                                                                <div class="sag_danhgia">
                                                                    <div class="sag_testimonial">
                                                                        <div class="sag_testimg">
                                                                            <img src="upload/client1.png">
                                                                        </div>
                                                                        <div class="sag_testten">
                                                                            <h3 class="sag_testtitle">
                                                                               Thanh Lâm
                                                                            </h3>
                                                                            <span>Kỹ Thuật Viên</span>
                                                                            <ul class="star-reviews">
                                                                                <li><i class="fas fa-star"></i></li>
                                                                                <li><i class="fas fa-star"></i></li>
                                                                                <li><i class="fas fa-star"></i></li>
                                                                                <li><i class="fas fa-star"></i></li>
                                                                                <li><i class="fas fa-star"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="sag_testbinhluan">
                                                                            <p class="sag_binhluan">
                                                                                Mình đã dành rất nhiều thời gian để mua sắm, đến khi mình biết website này là một siêu thị mini online từ đó mình chỉ tin tưởng mua hàng ở đây thui, ở đây có đầy đủ mọi thứ mà mình thích. Tất nhiên sản phẩm ở đầy đều có bảo hành dài cho các thiết bị điện tử điện lạnh, còn thứ khác thì mình còn yên tâm về xuất xứ và chất lượng nữa
                                    
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           </div>
                                                           <div class="col-md-9 d-flex " style="flex-wrap: wrap" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="sag-tieude">
                                                                    <div class="sag-iconttm">
                                                                    <span class="icon">
                                                                        <i class="fas fa-globe"></i>
                                                                    </span>
                                                                    </div>
                                                                    <h2 class="ttm" style="width: 41.4%;"><a class="flash" href="#" title="flash sale">Tin tức mới</a></h2>
                                                                    <div class="deal">
                                                                    </div>
                                                                    <a class="xtc" href="#">Xem tất cả <i class="fas fa-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="sag_tintuc">
                                                                    <a class="" href="#"><img src="upload/galaxy-a5-2018.jpg" alt="" style="width:100%;"></a>
                                                                    <a class="sag_tintuc_nd" href="#">
                                                                        Loạt smartphone màu sắc mới lạ vừa lên kệ sẵn sàng đấu kiếm với nhiều mẫu điện thoại cấu hình khủng
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="sag_tintucnb">
                                                                    <div class="sag_tintuc2">
                                                                        <div class="blog_img">
                                                                            <a href="#">
                                                                                <img src="upload/may-lanh-toshiba.jpg" width="100%">
                                                                            </a>
                                                                        </div>
                                                                        <div class="sag_content__">
                                                                            <h3><a class="nd__" href="#">Những yếu tố quan trọng khi chọn điều hòa không khí</a></h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sag_tintucnb">
                                                                    <div class="sag_tintuc2">
                                                                        <div class="blog_img">
                                                                            <a href="#">
                                                                                <img src="upload/may-lanh-toshiba.jpg" width="100%">
                                                                            </a>
                                                                        </div>
                                                                        <div class="sag_content__">
                                                                            <h3><a class="nd__" href="#">Những yếu tố quan trọng khi chọn điều hòa không khí</a></h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sag_tintucnb">
                                                                    <div class="sag_tintuc2">
                                                                        <div class="blog_img">
                                                                            <a href="#">
                                                                                <img src="upload/may-lanh-toshiba.jpg" width="100%">
                                                                            </a>
                                                                        </div>
                                                                        <div class="sag_content__">
                                                                            <h3><a class="nd__" href="#">Những yếu tố quan trọng khi chọn điều hòa không khí</a></h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sag_tintucnb">
                                                                    <div class="sag_tintuc2">
                                                                        <div class="blog_img">
                                                                            <a href="#">
                                                                                <img src="upload/may-lanh-toshiba.jpg" width="100%">
                                                                            </a>
                                                                        </div>
                                                                        <div class="sag_content__">
                                                                            <h3><a class="nd__" href="#">Những yếu tố quan trọng khi chọn điều hòa không khí</a></h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           </div>
                                                    </div>
                                                 </div>
                            </div>
                            
                        <!--and Kỹ thuật số -->
                        
                        <!-- end điện máy -->
                        
                        


                        

                       
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="sag-hangmay">
                                <div class="hangmay">
                                    <a href="#"><span class=""><img src="upload/asus.png" alt=""></span></a>
                                </div>
                                <div class="hangmay">
                                    <a href="#"><span class=""><img src="upload/samsung.png" alt=""></span></a>
                                </div>
                                <div class="hangmay">
                                    <a href="#"><span class=""><img src="upload/del.png" alt=""></span></a>
                                </div>
                                <div class="hangmay">
                                    <a href="#"><span class=""><img src="upload/lg.png" alt=""></span></a>
                                </div>
                                <div class="hangmay">
                                    <a href="#"><span class=""><img src="upload/philis.png" alt=""></span></a>
                                </div>
                                <div class="hangmay">
                                    <a href="#"><span class=""><img src="upload/lg.png" alt=""></span></a>
                                </div>
                                <div class="hangmay">
                                    <a href="#"><span class=""><img src="upload/sharp.png" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>

            
            <div class="help">
                <div class="container">
                    <div class="row">
                        <div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <i class="far fa-question-circle"></i>
                            <p>Bạn cần hỗ trợ? Nhấc máy lên và gọi ngay cho chúng tôi -
                            <a href="#">01688287614 </a>
                            hoặc
                        </p>
                        <a class="sag_button_help" href="#">Hỗ trợ trực tiếp</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sag-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="sag-active">
                                <div class="sag-item_policy">
                                    <i class="fas fa-globe"></i>
                                    <p class="sag-content">Giao hàng toàn quốc</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="sag-active">
                                <div class="sag-item_policy">
                                    <i class="fas fa-shield-alt"></i>
                                    <p class="sag-content">Bảo mật thanh toán</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="sag-active">
                                <div class="sag-item_policy">
                                    <i class="fas fa-sync-alt"></i>
                                    <p class="sag-content">Đổi trả trong 7 ngày</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="sag-active">
                                <div class="sag-item_policy2">
                                    <i class="fas fa-headphones-alt"></i>
                                    <p class="sag-content">Tư vấn miễn phí</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer >
                <div class="topfoter">
                    <div class="container">
                        <div class="top-footer">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-click">
                                    <h4 class="sag-cliker">Chính sách chung</h4>
                                    <ul class="sag-toggle">
                                        <li><a href="#">Trang chủ</a></li>
                                        <li><a href="#">Sản phẩm</a></li>
                                        <li><a href="#">Khuyến mãi hot</a></li>
                                        <li><a href="#">Mua trả góp</a></li>
                                        <li><a href="#">Tin tức</a></li>
                                        <li><a href="#">Liên hệ</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-click">
                                    <h4 class="sag-cliker">Khách hàng</h4>
                                    <ul class="sag-toggle">
                                        <li><a href="#">Trang chủ</a></li>
                                        <li><a href="#">Sản phẩm</a></li>
                                        <li><a href="#">Khuyến mãi hot</a></li>
                                        <li><a href="#">Mua trả góp</a></li>
                                        <li><a href="#">Tin tức</a></li>
                                        <li><a href="#">Liên hệ</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-click">
                                    <h4 class="sag-cliker">Hỏi đáp</h4>
                                    <ul class="sag-toggle">
                                        <li><a href="#">Trang chủ</a></li>
                                        <li><a href="#">Sản phẩm</a></li>
                                        <li><a href="#">Khuyến mãi hot</a></li>
                                        <li><a href="#">Mua trả góp</a></li>
                                        <li><a href="#">Tin tức</a></li>
                                        <li><a href="#">Liên hệ</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-click">
                                    <h4 class="sag-cliker">Tư vấn</h4>
                                    <ul class="sag-toggle">
                                        <li><a href="#">Trang chủ</a></li>
                                        <li><a href="#">Sản phẩm</a></li>
                                        <li><a href="#">Khuyến mãi hot</a></li>
                                        <li><a href="#">Mua trả góp</a></li>
                                        <li><a href="#">Tin tức</a></li>
                                        <li><a href="#">Liên hệ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sag-site">
                            <h4>Công ty cổ phần thương mại dịch vụ pow market</h4>
                            <p>Trụ sở chính: 53 Cao Thắng, Hải Châu, Đà Nẵng</p>
                            <p>Điện thoại:<a href="#">0355382715</a></p>
                            <p>Email: <a href="#">sanghpd02840@fpt.edu.vn</a></p>
                        </div>
                    </div>
                    
                </div>
                <div class="bottom-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="sag-botom">
                                    <span>@2018 - Bản quyền thuộc về TL Creative | Cung cấp bởi Sapo</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!--  -->
    </div>
</div>
<script type="text/javascript" src="/js/app.js"></script>

</body>
</html>