<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ChatBot</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link type ="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
          crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
            integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js"
            integrity="sha384-VspmFJ2uqRrKr3en+IG0cIq1Cl/v/PHneDw6SQZYgrcr8ZZmZoQ3zhuGfMnSR/F2"
            crossorigin="anonymous"></script>
    <link type = "text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/chat1.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <!--  <script type="text/javascript" src="{{asset('js/chat.js')}}"></script> -->
</head>
<body>
	<div id="menu" class="navbar-collapse collpase">
		<!-- <div class="logo">
			<a href="#"><img src="logo.png"></a>
		</div> -->
		<ul>
			<li><a href="#">Chat</a></li>
			<li><a href="#">Lịch sử</a></li>
			<li><a href="#">Tin office</a></li>
			<li><a href="#">Cài đặt</a></li>
			<li><a href="#">Thống kê</a></li>
			<li><a href="#">Ứng dụng</a></li>
			<li><a href="#">Hướng dẫn</a></li>
			<li><a href="#">vChatBot<i class="cmsg">New</i></a></li>
			<li>
				<a href="#">Vutoan081097 </span>
</a>
				<ul class="menu1">
					<li><a href="#">Thông tin tài khoản</a></li>
					<li><a href="#">Thông tin hỗ trợ</a></li>
					<li><a href="#">Lịch sử giao dịch</a></li>
					<li><a href="#">Đăng xuất</a></li>
				</ul>
			</li>
		</ul>

	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="mot">
					<i class="fa fa-user fa-lg fa-fw" aria-hidden = "true"></i>
					Khách Hàng Chat Gần Đây
				</div>
				<div class="hai">

					Khách Đang Online

				</div>
				<div class="ba">
					Yêu cầu Chat :
				</div>
				<div class="bon">Lịch sử Chat : </div>
				
            <div class="input-group search-box">
                            <input type="text" id="search" class="form-control search-query"
                                   placeholder="Search by Name">
                            <span class="input-group-addon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
							    </span>
                        </div>
				<input type="button" name="" value="Danh sách">
				 <ul class="nav navbar-nav navbar-right ml-auto">
            			<li><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#loginModal">
                          Soạn tin nhắn mới
                          </button></li>
                                  
        </ul>
				<div id="content">
					
				</div>
			</div>
			<div class="col-md-6">
				<div id="TaiKhoan">
					   z-9052637273
				</div>
				<div class="chatcontainer">
					
				</div>
				
			</div>
			<div class="col-md-3">
				<div id="taikhoan">
					<i class="fa fa-user fa-lg fa-fw" aria-hidden = "true"></i>
					z-9052637273<br>
					Khách mới - online
				</div>
				<div id="Thongtin">
					<span class="glyphicon glyphicon-user"></span>
				Vũ Văn Toàn<br>
				<i class="fa fa-phone fa-lg fa-fw" aria-hidden = "true"></i>0964085312<br>
				<span class="glyphicon glyphicon-envelope"></span> vutoan081097@gmail.com<br>
				<i class="glyphicon glyphicon-map-marker"></i>
				Hà nội<br>
				<span class="glyphicon glyphicon-globe"></span> 118.60.800.99<br>
				</div>
				<div>
					Nguồn đến từ : 
					<div id="truc">Trực tuyến</div>
				</div>
			</div>
			<div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">
                            Soạn tin nhắn mới
                        </h3>
                        <button type="button" class="close"
                                data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="loginUser">Tên người nhận</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="loginUser" placeholder="User"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="loginPassword">Nội dung</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="contentUser" placeholder="Content"/>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="loginBtn">
                            Gửi
                        </button>
                    </div>
                </div>
            </div>
         </div>
		</div>
	</div>
	
</body>
</html>