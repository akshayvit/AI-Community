<?php
session_start();
if($_SESSION["suser"]==null)
{
    header("Location: index.php");
}
?>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<style>
    /*Main CSS*/


/*Login Signup Page*/
a:focus,a:hover,a{
    outline:none;
    text-decoration: none;
}
li,ul{
    list-style: none;
    padding: 0;
    margin: 0;
}
.header-top i {
    font-size: 18px;
}
.bg-image {
    background: url(../images/background-login.jpg) no-repeat 0 0 / cover;
    position: relative;
    width: 100%;
    height: 100vh;
    display: table;
}

.login-header {
    display: inline-block;
    width: 100%;
    background: #0e1a35;
}

.login-signup {
    display: table-cell;
    vertical-align: middle;
    width: 100%;
}

.login-logo img {
    cursor: pointer;
    max-width: 171px;
    padding: 23px 15px 22px;
    width: 100%;
}

.login-header .navbar-right {
    margin-right: 0px;
}

.login-header .nav-tabs > li.active > a,
.login-header .nav-tabs > li.active > a:focus,
.login-header .nav-tabs > li.active > a:hover {
    background-color: transparent;
    border: none;
    color: #fff;
}

.login-header .nav-tabs > li > a {
    border: medium none;
    border-radius: 0;
    font-size: 14px;
    font-weight: 500;
    line-height: 48px;
    padding: 15px 30px;
    color: #fff;
}

.login-header .nav-tabs {
    border-bottom: none;
}

.login-header .nav-tabs > li {
    margin-bottom: 0px;
}

.login-header .nav > li > a:focus,
.login-header .nav > li > a:hover {
    background: none;
    text-decoration: none;
}

.login-header .nav-tabs > li.active {
    border-bottom: 6px solid #5584ff;
}

.login-inner h1 {
    color: #8492af;
    font-size: 48px;
    font-weight: 300;
    text-align: center;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-inner h1 span {
    color: #5584ff;
}

.login-form {
    text-align: center;
}

.login-form input {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border-color: -moz-use-text-color -moz-use-text-color #d4d9e3;
    border-image: none;
    border-style: none none solid;
    border-width: medium medium 1px;
    font-size: 13px;
    font-weight: 300;
    width: 100%;
    color: #8492af;
    padding: 15px 50px;
    font-size: 17px;
    max-width: 550px;
}

.login-form label {
    margin-bottom: 30px;
    width: 100%;
}

.user input {
    background: rgba(0, 0, 0, 0) url("../images/user.png") no-repeat scroll 7px 12px;
}

.pass input {
    background: rgba(0, 0, 0, 0) url("../images/password.png") no-repeat scroll 7px 12px;
}

.mail input {
    background: rgba(0, 0, 0, 0) url("../images/mail.png") no-repeat scroll 4px 12px;
}

.login-signup .tab-content {
    background: #ffffff none repeat scroll 0 0;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.176);
    display: inline-block;
    margin-top: -8px;
    width: 100%;
}

.form-btn {
    background: #5584ff none repeat scroll 0 0;
    border: medium none;
    border-radius: 100px;
    color: #ffffff;
    font-weight: 400;
    max-width: 250px;
    padding: 10px 0;
    position: relative;
    width: 100%;
    margin: 40px 0;
    box-shadow: 0 2px 8px #d2d2d2;
    -moz-box-shadow: 0 2px 8px #d2d2d2;
    -webkit-box-shadow: 0 2px 8px #d2d2d2;
}

.form-btn::before {
    content: "";
    font-family: FontAwesome;
    position: absolute;
    right: 17px;
    top: 9px;
}

.form-details {
    padding: 35px 0;
}

.tab-content .tab-pane {
    padding: 70px 0;
}


/*Login Signup Page*/


/*Home Page*/

.home {
    background: #f6f7fa;
}

#navigation {
    background: #0e1a35;
}

#navigation {
    padding: 0;
}

.display-table {
    display: table;
    padding: 0;
    height: 100%;
    width: 100%;
}

.display-table-row {
    display: table-row;
    height: 100%;
}

.display-table-cell {
    display: table-cell;
    float: none;
    height: 100%;
}

.v-align {
    vertical-align: top;
}
.logo img {
    max-width: 180px;
    padding: 16px 0 17px;
    width: 100%;
}

.header-top {
    margin: 0;
    padding-top: 2px;
}

.header-top img {
    border-radius: 50%;
    max-width: 48px !important;
    width: 100%;
}

.add-project {
    background: #5584ff none repeat scroll 0 0;
    border-radius: 100px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    padding: 10px 27px 10px 45px;
    position: relative;
}

.header-rightside .nav > li > a:focus,
.header-rightside .nav > li > a:hover {
    background: none;
    text-decoration: none;
}

.add-project::before {
    background: rgba(0, 0, 0, 0) url("../images/plus.png") no-repeat scroll 0 0;
    content: "";
    ;
    height: 12px;
    left: 17px;
    position: absolute;
    top: 12px;
    width: 12px;
}

.add-project:hover {
    color: #ffffff;
}

.header-top i {
    color: #0e1a35;
}

.icon-info {
    position: relative;
}
.navi i {
    font-size: 20px;
}
.label.label-primary {
    border-radius: 50%;
    font-size: 9px;
    left: 8px;
    position: absolute;
    top: -9px;
}

.icon-info .label {
    border: 2px solid #ffffff;
    font-weight: 500;
    padding: 3px 5px;
    text-align: center;
}

.header-top li {
    display: inline-block;
    text-align: center;
}

.header-top .dropdown-toggle {
    color: #0e1a35;
}

.header-top .dropdown-menu {
    border: medium none;
    left: -85px;
    padding: 17px;
}
.view {
    background: #5584ff none repeat scroll 0 0;
    border-radius: 100px;
    color: #ffffff;
    display: inline-block;
    font-size: 14px;
    font-weight: 600;
    margin-top: 10px;
    padding: 10px 15px;
}

.navbar-content > span {
    font-size: 13px;
    font-weight: 700;
}

.img-responsive {
    width: 100%;
}
#navigation{
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
.search input {
    border: none;
    font-size: 15px;
    padding: 15px 9px;
    width: 100%;
    background: rgba(0, 0, 0, 0) url("../images/search.png") no-repeat scroll 99% 12px;
    color: #8492af;
}

header {
    background: #ffffff none repeat scroll 0 0;
    box-shadow: 0 1px 12px rgba(0, 0, 0, 0.04);
    display: inline-block !important;
    line-height: 23px;
    padding: 15px;
    transition: all 0.5s ease 0s;
    width: 100%;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.logo {
    text-align: center;
}

.navi a {
    border-bottom: 1px solid #0d172e;
    border-top: 1px solid #0d172e;
    color: #ffffff;
    display: block;
    font-size: 17px;
    font-weight: 500;
    padding: 28px 20px;
    text-decoration: none;
}

.navi i {
    margin-right: 15px;
    color: #5584ff;
}

.navi .active a {
    background: #122143;
    border-left: 5px solid #5584ff;
    padding-left: 15px;
}

.navi a:hover {
    background: #122143 none repeat scroll 0 0;
    border-left: 5px solid #5584ff;
    display: block;
    padding-left: 15px;
}

.navbar-default {
    background-color: #ffffff;
    border-color: #ffffff;
}

.navbar-toggle {
    border: none;
}

.navbar-default .navbar-toggle:focus,
.navbar-default .navbar-toggle:hover {
    background-color: rgba(0, 0, 0, 0);
}

.navbar-default .navbar-toggle .icon-bar {
    background-color: #0e1a35;
}

.circle-logo {
    margin: 0 auto;
    max-width: 30px !important;
    text-align: center;
}
.hidden-xs{
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.user-dashboard {
    padding: 0 20px;
}

.user-dashboard h1 {
    color: #0e1a35;
    font-size: 30px;
    font-weight: 500;
    margin: 0;
    padding: 21px 0;
}
.sales {
    background: #ffffff none repeat scroll 0 0;
    border: 1px solid #d4d9e3;
    display: inline-block;
    padding: 15px;
    width: 100%;
}
.sales button {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: 1px solid #dadee7;
    border-radius: 100px;
    font-size: 15px;
    letter-spacing: 0.5px;
    padding-right: 32px;
    color: #0e1a35;
}

.sales button::before {
    content: "";
    font-family: FontAwesome;
    position: absolute;
    right: 12px;
    top: 11px;
}
.sales  .btn-group {
    float: right;
}
.sales h2 {
    color: #8492af;
    float: left;
    font-size: 21px;
    font-weight: 600;
    margin: 0;
    padding: 9px 0 0;
}
.btn.btn-secondary.btn-lg.dropdown-toggle > span {
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 0.5px;
}
.sales .dropdown-menu{
    margin: 0px;
    padding: 0px;
    border: 0px;
    border-radius: 8px;
    width: 100%;
    color: #0e1a35;
}
.sales .btn-group.open .dropdown-toggle, .btn.active, .btn:active{
    box-shadow: none;
}
.sales .dropdown-menu > a {
    color: #0e1a35;
    display: inline-block;
    font-weight: 800;
    padding: 9px 0;
    text-align: center;
    width: 100%;
}
#my-cool-chart svg {
    width: 100%;
}
.sales .dropdown-menu > a:hover{
    color: #5584FF;   
}
.shield-buttons {
    display: none;
}
.close, .close:focus, .close:hover {
    color: #fff;;
    opacity: 1;
    text-shadow: none;
}
.modal-body input {
    border: 1px solid #d4d9e3;
    font-size: 14px;
    font-weight: 300;
    margin: 5px 0;
    padding: 14px 10px;
    width: 100%;
    color: #8492af;
}
.modal-body textarea {
    border: 1px solid #d4d9e3;
    font-size: 14px;
    font-weight: 300;
    height: 200px;
    margin-top: 5px;
    padding: 9px 10px;
    width: 100%;
    color: #8492af;
}
.modal-header.login-header h4 {
    color: #ffffff;
}
.modal-footer .add-project {
    background: #5584ff none repeat scroll 0 0;
    border: medium none;
    border-radius: 100px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    padding: 10px 30px;
    position: relative;
}
.modal-footer .add-project::before{display: none;}
.modal-footer {
    border: 0 none;
    padding: 10px 15px 26px;
    text-align: right;
}
.cancel {
    background: #0E1A35     ;
    border: medium none;
    border-radius: 100px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    padding: 10px 30px;
    position: relative;
    
}
.modal{
    top: 20%; 
}
.modal-header .close {
    margin-top: 2px;
}
.search input:focus{
    border-bottom: 1px solid #BDC4D4;
    line-height:22px;
    transition: 0.1s all;
}
.modal-header.login-header {
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
/*Main CSS*/






@media only screen and (max-device-width: 767px) {
    .login-logo img {
        margin: 0 auto;
    }
    .login-details .nav-tabs > li {
        text-align: center;
        width: 50%;
    }
    .login-signup .login-inner h1 {
        font-size: 26px;
        margin-bottom: 0;
        margin-top: 10px;
    }
    .login-inner .login-form input {
        font-size: 15px;
        max-width: 100%;
        padding: 15px 45px;
    }
    .login-inner .form-details {
        padding: 25px;
    }
    .login-inner .login-form label {
        margin-bottom: 20px;
        width: 100%;
    }
    .login-inner .form-btn {
        margin: 0;
        max-width: 180px;
    }
    .tab-content .tab-pane {
        padding: 20px 0;
    }
    #navigation .navi a {
        font-size: 14px;
        padding: 20px;
        text-align: center;
    }
    #navigation .navi i {
        margin-right: 0px;
    }
    #navigation .navi a:hover,
    #navigation .navi .active a {
        background: #122143 none repeat scroll 0 0;
        border-left: none;
        display: block;
        padding-left: 20px;
    }
    header .header-top img {
        max-width: 38px !important;
    }
    .v-align header {
        padding: 12px 15px;
    }
    header .header-top li {
        padding-left: 13px;
        padding-right: 6px;
    }
    .navbar-default .navbar-toggle {
        border-color: rgba(0, 0, 0, 0);
    }
    .navbar-header .navbar-toggle {
        float: left;
        margin: 0;
        padding: 0;
        top: 12px;
    }
    button,
        html [type="button"],
        [type="reset"],
        [type="submit"] {
            outline: medium none;
    }
    .user-dashboard .sales h2 {
        color: #8492af;
        float: left;
        font-size: 14px;
        font-weight: 600;
        margin: 0;
        padding: 13px 0 0;
}
    .user-dashboard .btn.btn-secondary.btn-lg.dropdown-toggle > span {
        font-size: 11px;
}
    .user-dashboard .sales button {
        font-size: 11px;
        padding-right: 23px;
}  
    .user-dashboard .sales h2 {
    font-size: 12px;
}
.gutter{
    padding: 0;
}
}

@media only screen and (max-device-width: 992px) {
    header .header-top li {
        padding-left: 20px !important;
        padding-right: 0;
}
    header .logo img {
        max-width: 125px !important;
}

}

@media only screen and (min-device-width: 767px) and (max-device-width: 998px){
      .user-dashboard .header-top {
        padding-top: 5px;
}
    .user-dashboard .header-rightside {
        display: inline-block;
        float: left;
        width: 100%;
}
    .user-dashboard .header-rightside .header-top img {
        max-width: 41px !important;
} 
    .user-dashboard .sales button {
    font-size: 10px;
}
    .user-dashboard .btn.btn-secondary.btn-lg.dropdown-toggle > span {
    font-size: 12px;
}
    .user-dashboard .sales h2 {
    font-size: 15px;
}
}
@media only screen and (min-device-width:998px) and (max-device-width: 1350px){
        #navigation .logo img {
    max-width: 130px;
    padding: 16px 0 17px;
    width: 100%;
}
</style>
<style>
}
.file-upload {
  background-color: #ffffff;
  width: 600px;
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #1FB264;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #1FB264;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #1FB264;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}
</style>
<script src="https://cdn.rawgit.com/BrainJS/brain.js/45ce6ffc/browser.js"></script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>
    $(document).ready(function(){
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
   });
});

function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
		$('.image-upload-wrap').addClass('image-dropping');
	});
	$('.image-upload-wrap').bind('dragleave', function () {
		$('.image-upload-wrap').removeClass('image-dropping');
});


</script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="WAIO.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="WAIO.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Music Therapy</span></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Video Summarisation</span></a></li>
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">AI Calender</span></a></li>
                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Text Summarisation</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Audio Summarisation</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Image Summarisation</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Data Analysis</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">IOT Products</span></a></li>
                        <li><a href="music.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Personal Assistant</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Search" id="search">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://jskrishna.com/work/merkury/images/user-pic.jpg" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span>JS Krishna</span>
                                                    <p class="text-muted small">
                                                        me@jskrishna.com
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="#" class="view btn-sm active">View Profile</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                    <h1>Hello, <?php echo $_SESSION["name"]; ?></h1>
                    <div class="row">
                        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<div class="file-upload">
    <form enctype="multipart/form-data" action="summ.php" method="POST">
 <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Document</button>

  <div class="image-upload-wrap">
    <input class="file-upload-input" type='file' name="uploaded_file" onchange="readURL(this);" accept=".doc" />
    <div class="drag-text">
      <h3>Drag and drop a file or select add Document</h3>
    </div>
  </div>
  <div class="file-upload-content">
    <img class="file-upload-image" src="WAIO.png" alt="your image" />
    <div class="image-title-wrap">
      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
    </div>
  </div>
  <input type="submit" class="file-upload-btn" name="sub" value="Upload">
  </form>
  <input type="submit" class="file-upload-btn"  value="Summarize" id="butt1" onclick="summ()">
  <span id="spanner"></span>
   <?php
      $s="";
      $fn = fopen("uploads/".$_SESSION["files"],"r");
  
  while(! feof($fn))  {
	$result = fgets($fn);
	$result  = preg_replace('/[^a-zA-Z_ -]/s','',$result);
	$s.= $result;
	$s.=".";
  }
  $s = html_entity_decode($s, ENT_QUOTES, "UTF-8");
  fclose($fn);
      ?>
  <script>
 // $(document).ready(function(){
  //$(document).on("click", "#butt1", function()
  function summ(){
     
    var text = <?php echo "'".$s."'"; ?>;
    var document = [];
    var stoplist = ["","a", "about", "above", "above", "across", "after", "afterwards", "again", "against", "all", "almost", "alone", "along", "already", "also","although","always","am","among", "amongst", "amoungst", "amount", "an", "and", "another", "any","anyhow","anyone","anything","anyway", "anywhere", "are", "around", "as", "at", "back","be","became", "because","become","becomes", "becoming", "been", "before", "beforehand", "behind", "being", "below", "beside", "besides", "between", "beyond", "bill", "both", "bottom","but", "by", "call", "can", "cannot", "cant", "co", "con", "could", "couldnt", "cry", "de", "describe", "detail", "do", "done", "down", "due", "during", "each", "eg", "eight", "either", "eleven","else", "elsewhere", "empty", "enough", "etc", "even", "ever", "every", "everyone", "everything", "everywhere", "except", "few", "fifteen", "fify", "fill", "find", "fire", "first", "five", "for", "former", "formerly", "forty", "found", "four", "from", "front", "full", "further", "get", "give", "go", "had", "has", "hasnt", "have", "he", "hence", "her", "here", "hereafter", "hereby", "herein", "hereupon", "hers", "herself", "him", "himself", "his", "how", "however", "hundred", "ie", "if", "in", "inc", "indeed", "interest", "into", "is", "it", "its", "itself", "keep", "last", "latter", "latterly", "least", "less", "ltd", "made", "many", "may", "me", "meanwhile", "might", "mill", "mine", "more", "moreover", "most", "mostly", "move", "much", "must", "my", "myself", "name", "namely", "neither", "never", "nevertheless", "next", "nine", "no", "nobody", "none", "noone", "nor", "not", "nothing", "now", "nowhere", "of", "off", "often", "on", "once", "one", "only", "onto", "or", "other", "others", "otherwise", "our", "ours", "ourselves", "out", "over", "own","part", "per", "perhaps", "please", "put", "rather", "re", "same", "see", "seem", "seemed", "seeming", "seems", "serious", "several", "she", "should", "show", "side", "since", "sincere", "six", "sixty", "so", "some", "somehow", "someone", "something", "sometime", "sometimes", "somewhere", "still", "such", "system", "take", "ten", "than", "that", "the", "their", "them", "themselves", "then", "thence", "there", "thereafter", "thereby", "therefore", "therein", "thereupon", "these", "they", "thickv", "thin", "third", "this", "those", "though", "three", "through", "throughout", "thru", "thus", "to", "together", "too", "top", "toward", "towards", "twelve", "twenty", "two", "un", "under", "until", "up", "upon", "us", "very", "via", "was", "we", "well", "were", "what", "whatever", "when", "whence", "whenever", "where", "whereafter", "whereas", "whereby", "wherein", "whereupon", "wherever", "whether", "which", "while", "whither", "who", "whoever", "whole", "whom", "whose", "why", "will", "with", "within", "without", "would", "yet", "you", "your", "yours", "yourself", "yourselves", "the"];
    var sents = text.replace(/\.+/g,'.|').replace(/\?/g,'?|').replace(/\!/g,'!|').split("|");
    sents.pop();
    var i = 0;
    //Index sentences in document
    sents.forEach(function(sentencz){
        var wordz = sentencz.split(' ').filter(function(n){return $.inArray(n, stoplist) == -1 });
        document.push(
           {
               sentence : sentencz,
               words: wordz,
               score: 0
           }
       );
       i++;
    });
    
    //Assign word frequencies
    document.forEach(function(arrayItem){    
               var count = 0;
        arrayItem.words.forEach(function(word){
           var match = word;
           document.forEach(function(arrayItem2){
                arrayItem2.words.forEach(function(word2){
                  if(word2 === match)
                      count++;
                });
            });
        });
        count = count/arrayItem.words.length;
        arrayItem.frequency = count;
    });
    
    document.sort(function(a, b) {
      return b.frequency - a.frequency;
    });
    
    //console.log(document);
    
if(document.length >= 5){  $('#spanner').append("<div><label>SUMMARY: <strong>"+sents[0] + " - " + document[1].sentence + " - " + document[2].sentence + " - " + document[3].sentence + " - " + document[4].sentence+"</strong></label></div>");
}
else
  window.alert(document.length);
}
</script>
  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div id="textboxDiv"></div> 
</div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>

</body>
<?php
if(isset($_POST["sub"])){
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      $_SESSION["files"]=$_FILES['uploaded_file']['name'];
    } else{
        echo "<script>window.alert('Upload CSV format')</script>";
    }
  }
}
?>