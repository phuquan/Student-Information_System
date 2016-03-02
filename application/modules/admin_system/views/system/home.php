<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ;?></title>
        <base href="<?php echo site_url();?>">
        <link rel="icon" href="template/frontend/sis/favicon.ico" type="image/gif" sizes="16x16">
        <link href="template/frontend/sis/css/font-awesome-4.3.0/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="template/frontend/sis/css/bootstrap.min.css">
        <link rel="stylesheet" href="template/frontend/sis/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="template/frontend/sis/css/style.css">
        <link rel="stylesheet" href="template/frontend/sis/css/reponsive.css">
        <script src="template/frontend/sis/js/jquery.min.js" type="text/javascript"></script>
        <script src="template/frontend/sis/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-header-->
        <header id= "header" class="admin_container">
            <section class="top clearfix">
                <div class="header">Hệ thống quản trị</div>
                <!-form-->
                <!-- <form class="form-inline" role="form" action="" method="post">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>"/>
                     <div class="form-group">
                        <label for="user">Tài khoản:</label>
                        <input type="text" class="form-control" id="name" name="id" required="">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mật khẩu:</label>
                        <input type="password" class="form-control" id="pwd" name="password" required="">
                    </div>
                    <button type="submit" class="btn btn-default" name="submit" value="Đăng nhập">Đăng nhập</button>
                </form> -->
                <!-end form-->
            </section>
            <!-navigater-->
            <nav id="main-nav" class="navbar navbar-inverse navbar-static-top">
                <section class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </section>
                <section class="navbar-collapse collapse" id="menu">
                    <ul class="l1 nav navbar-nav">
                        <li class="l1"><a href="">Hệ thống</a></li>
                        <li class="l1"><a href="">Quản lý học sinh</a></li>
                        <li class="l1"><a href="">Quản lý giảng viên</a></li>
                        <li class="l1"><a href="">Quản lý môn học</a></li>
                        <li class="l1"><a href="">Quản lý lớp học</a></li>
                    </ul>
                </section>
            </nav><!-end navigate-->
        </header> 
        <!-end header-->

        <!-Body-->
        <section id="body">
        </section>
        <!-end Body-->
        <!-footer-->
        <footer id="footer">
            <section class="">
                <section class="row">
                    <p class="title">Trang SIS phòng Đào tạo Đại học trường Đại học Bách Khoa Hà Nội </p>
                    <p class="name">Hanoi University of Science and Technology - No. 1, Dai Co Viet Str., Hanoi, Vietnam  </p>
                    <p class="name">Tel: (+844)38682305, (+844)38692008 - E-mail: <a class="mail" href="#">DTDH@mail.hust.edu.vn </a></p>
                </section>
            </section>
        </footer>
        <!-end footer-->
    </body>
</html>