<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>LePhone _ Shop</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
		<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
    	<style>
        /* menu */
        #menu{ margin:0px; padding:0px; list-style:none; color:#fff; line-height:45px; display:inline-block; float:left; z-index:1000; }
        #menu a { color:#fff; text-decoration:none; }
        #menu > li {background:#172322 none repeat scroll 0 0; cursor:pointer; float:left; position:relative;padding:0px 10px;}
        #menu > li a:hover {color:#B0D730;}
        #menu .logo {background:transparent none repeat scroll 0% 0%; padding:0px; background-color:Transparent;}
        /* sub-menus*/
        #menu ul { padding:0px; margin:0px; display:block; display:inline;}
        #menu li ul { position:absolute; left:-10px; top:0px; margin-top:45px; width:150px; line-height:16px; background-color:#172322; color:#0395CC; /* for IE */ display:none; }
        #menu li:hover ul { display:block;}
        #menu li ul li{ display:block; margin:5px 20px; padding: 5px 0px;  border-top: dotted 1px #606060; list-style-type:none; }
        #menu li ul li:first-child { border-top: none; }
        #menu li ul li a { display:block; color:#0395CC; }
        #menu li ul li a:hover { color:#7FCDFE; }
        /* main submenu */
        #menu #main { left:0px; top:-20px; padding-top:20px; background-color:#7cb7e3; color:#fff; z-index:999;}
        /* search */
        .searchContainer div { background-color:#fff; display:inline; padding:5px;}
        .searchContainer input[type="text"] {border:none;}
        .searchContainer img { vertical-align:middle;}
        /* corners*/
        #menu .corner_inset_left { position:absolute; top:0px; left:-12px;}
        #menu .corner_inset_right { position:absolute; top:0px; left:150px;}
        #menu .last { background:transparent none repeat scroll 0% 0%; margin:0px; padding:0px; border:none; position:relative; border:none; height:0px;}
        #menu .corner_left { position:absolute; left:0px; top:0px;}
        #menu .corner_right { position:absolute; left:132px; top:0px;}
        #menu .middle { position:absolute; left:18px; height: 20px; width: 115px; top:0px;}
    	</style>
    </head>
    <body>
        <div id="mainbg">
            <!-- header begins -->
            <div id="header">
                <div id="headertop">
              		<div id="logo">
                    	<img src="images/logo.png" width="238" height="103">
                    </div>
                   
                    <div id="trogiuptimkiem" align="right">
                    	<ul id="menu">
            <li class="logo">
                <img style="float:left;" alt="" src="images/menu_left.png"/> 
            </li>
            <li><a href="#">Trợ giúp</a></li>
            <li><a href="#">Đăng nhập</a>
                <ul id="login">
                    <li>
                        <img class="corner_inset_left" alt="" src="images/corner_inset_left.png"/>
                        User <input type="text" size="8">
                        <img class="corner_inset_right" alt="" src="images/corner_inset_right.png"/>
                    </li>
                    <li>Pass <input type="password" size="8"></li>
                    <li ><center><input type="submit" value="Đăng nhập"></center></li>
                    <li class="last">
                        <img class="corner_left" alt="" src="images/corner_left.png"/>
                        <img class="middle" alt="" src="images/dot.gif"/>
                        <img class="corner_right" alt="" src="images/corner_right.png"/>
                    </li>
                </ul>
            </li>
            <li class="searchContainer">
                <div>
                <input type="text" id="searchField" value="Tìm kiếm..." />
                <img src="images/magnifier.png" alt="Search" onClick="alert('Chức năng này tạm thời ngưng sử dụng.')" /></div>
                <ul id="search">
                    <li>
                        <img class="corner_inset_left" alt="" src="images/corner_inset_left.png"/>
                        <input name="seach" id="tatca" type="radio" /> Tất cả
                        <img class="corner_inset_right" alt="" src="images/corner_inset_right.png"/>
                    </li>
                    <li><input name="seach" id="thuonghieu" type="radio" /> Thương hiệu</li>
                    <li><input name="seach" id="phukien" type="radio" /> Phụ kiện</li>
                    <li class="last">
                        <img class="corner_left" alt="" src="images/corner_left.png"/>
                        <img class="middle" alt="" src="images/dot.gif"/>
                        <img class="corner_right" alt="" src="images/corner_right.png"/>
                    </li>
                </ul>
            </li>
        </ul>
        <img style="float:left;" alt="" src="images/menu_right.png"/>
                    </div>
              	</div>
                

                <div id="buttons">
                    <ul>
                        <li><a href="#" title="" class="active">Trang chủ</a></li>
                        <li><a href="#" title="">Khuyến mại</a></li>
                        <li><a href="#" title="">Báo giá</a></li>
                        <li><a href="#" title="">Đăng ký</a></li>
                        <li><a href="#" title="">Liên hệ</a></li>
                    </ul>
                </div>
				<div class="header_back">
				     <div id="wrapper">
							<div id="slider-wrapper">        
								<div id="slider" class="nivoSlider">
									<img src="images/header1.jpg" alt="" />
									<img src="images/header2.jpg" alt=""/>
									<img src="images/header3.jpg" alt="" />
								</div>        
							</div>
					
					</div>
					
					<script type="text/javascript" src="lib/jquery-1.4.3.min.js"></script>
						<script type="text/javascript" src="lib/jquery.nivo.slider.pack.js"></script>
						<script type="text/javascript">
						$(window).load(function() {
							$('#slider').nivoSlider();
						});
						</script>
				</div>
                <!-- header ends -->
                <!-- content begins -->
                <div id="main">
                    <div id="content">
                        <div id="right">
                            <h2>Thương Hiệu</h2>
                            <div class="right_bg">
                                <div class="right_grad">
                                    <div class="categories">
                                        <ul>
                                            <li><img src="images/ls1.png" alt="" width="5" height="7" /><a href="#"> Apple</a></li>
                                            <li><img src="images/ls1.png" alt="" width="5" height="7" /><a href="#"> Nokia</a></li>
                                            <li><img src="images/ls1.png" alt="" width="5" height="7" /><a href="#"> HTC</a></li>
                                            <li><img src="images/ls1.png" alt="" width="5" height="7" /><a href="#"> Motorola</a></li>
                                            <li><img src="images/ls1.png" alt="" width="5" height="7" /><a href="#"> Samsung</a></li>
                                            <li><img src="images/ls1.png" alt="" width="5" height="7" /><a href="#"> Sony Ericsson</a></li>
                                            <li><img src="images/ls1.png" alt="" width="5" height="7" /><a href="#"> Các hãng khác...</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="right_bot"></div>

                            <h2>Phụ Kiện</h2>
                            <div class="right_bg">
                                <div class="right_grad">
                                    <div class="categories">
                                        <ul>
                                            <li><img src="images/ls1.png" alt="" width="5" height="7" /><a href="#"> Pin,Sạc</a></li>
                                            <li><img src="images/ls1.png" alt="" width="5" height="7" /><a href="#"> Cable USB</a></li>
                                            <li><img src="images/ls1.png" alt="" width="5" height="7" /><a href="#"> Cable TV,HDMI</a></li>
                                            <li><img src="images/ls1.png" alt="" width="5" height="7" /><a href="#"> Thẻ nhớ</a></li>
                                            <li><img src="images/ls1.png" alt="" width="5" height="7" /><a href="#"> Loa ngoài</a></li>
                                            <li><img src="images/ls1.png" alt="" width="5" height="7" /><a href="#"> Vỏ ốp lưng</a></li>
                                            <li><img src="images/ls1.png" alt="" width="5" height="7" /><a href="#"> Các loại khác...</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="right_bot"></div>
                        </div>
                        <div id="center">
                        	<h1>&nbsp;&nbsp;Sản Phẩm Mới</h1>
                            <div class="topsanpham">
                                <p>In fringilla neque non nisl scelerisque rutrum. Proin quam elit, hendrerit id ultrices convallis, euismod eu enim. Aliquam mi eros, auctor id dignissim at, varius vel magna. Vivamus quis lectus neque. Etiam quis condimentum tellus. Duis at dolor eros. Quisque et fermentum urna. Suspendisse a est diam, eget fermentum tortor.</p>
<p>
Nullam velit mi, feugiat id feugiat non, fermentum ut diam. Etiam hendrerit luctus augue, et adipiscing felis facilisis eget. Vestibulum interdum aliquet ipsum varius adipiscing. Mauris tortor risus, facilisis ac mattis at, molestie sed velit. Nam at lorem ornare nibh ultricies mattis in ac risus. Curabitur placerat nisi quis enim dapibus quis sollicitudin erat posuere. Maecenas cursus dui at lorem porta aliquam. Etiam hendrerit tempor aliquet. Vivamus molestie adipiscing odio, a luctus mauris tincidunt a. Proin ut metus neque. Aliquam tempus vestibulum eros, at aliquet libero ultricies in. Vestibulum eu tellus non turpis euismod mattis sed eget nisi. </p>
                            </div>
                            <div id="botsanpham"></div>
                            <div id="space"></div>
                            <h1>&nbsp;&nbsp;Sản Phẩm Bán Chạy</h1>
                            <div class="topsanpham">
                                <p>In fringilla neque non nisl scelerisque rutrum. Proin quam elit, hendrerit id ultrices convallis, euismod eu enim. Aliquam mi eros, auctor id dignissim at, varius vel magna. Vivamus quis lectus neque. Etiam quis condimentum tellus. Duis at dolor eros. Quisque et fermentum urna. Suspendisse a est diam, eget padding: 10px;fermentum tortor.</p>
<p>
Nullam velit mi, feugiat id feugiat non, fermentum ut diam. Etiam hendrerit luctus augue, et adipiscing felis facilisis eget. Vestibulum interdum aliquet ipsum varius adipiscing. Mauris tortor risus, facilisis ac mattis at, molestie sed velit. Nam at lorem ornare nibh ultricies mattis in ac risus. Curabitur placerat nisi quis enim dapibus quis sollicitudin erat posuere. Maecenas cursus dui at lorem porta aliquam. Etiam hendrerit tempor aliquet. Vivamus molestie adipiscing odio, a luctus mauris tincidunt a. Proin ut metus neque. Aliquam tempus vestibulum eros, at aliquet libero ultricies in. Vestibulum eu tellus non turpis euismod mattis sed eget nisi. </p>
                            </div>
                            <div id="botsanpham"></div>
                            <div id="space"></div>
                            <h1>&nbsp;&nbsp;Sản Phẩm Khuyến Mại</h1>
                            <div class="topsanpham">
                                <p>In fringilla neque non nisl scelerisque rutrum. Proin quam elit, hendrerit id ultrices convallis, euismod eu enim. Aliquam mi eros, auctor id dignissim at, varius vel magna. Vivamus quis lectus neque. Etiam quis condimentum tellus. Duis at dolor eros. Quisque et fermentum urna. Suspendisse a est diam, eget fermentum tortor.</p>
<p>
Nullam velit mi, feugiat id feugiat non, fermentum ut diam. Etiam hendrerit luctus augue, et adipiscing felis facilisis eget. Vestibulum interdum aliquet ipsum varius adipiscing. Mauris tortor risus, facilisis ac mattis at, molestie sed velit. Nam at lorem ornare nibh ultricies mattis in ac risus. Curabitur placerat nisi quis enim dapibus quis sollicitudin erat posuere. Maecenas cursus dui at lorem porta aliquam. Etiam hendrerit tempor aliquet. Vivamus molestie adipiscing odio, a luctus mauris tincidunt a. Proin ut metus neque. Aliquam tempus vestibulum eros, at aliquet libero ultricies in. Vestibulum eu tellus non turpis euismod mattis sed eget nisi. </p>
                            </div>
                            <div id="botsanpham"></div>
                      </div>
                        <div style="clear: both"></div>
                    </div>
                    <!-- content ends -->
                    <!-- footer begins -->
                    <div id="footer">
                        <p>Copyright  2012. XHTML | CSS | PHP | MySQL | Jquery</p> 
	<p>Design by Group1-T1108H1 <!-- end -->
		</p>
                    </div>
                    <!-- footer ends -->
                </div>
            </div>
        </div>
    </body>
</html>
