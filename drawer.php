<?php
session_start();
if($_SESSION["suser"]==null && $_SESSION["suser"]==null)
{
    echo"<script>window.location.href = 'index.php';</script>";
}
?>
<?php
if($_POST["q"]!="" || $_POST["q"]!=null){
$a=$_POST["q"];
}
?>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">


 <script src="https://unpkg.com/ml5@0.1.3/dist/ml5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.6.0/p5.min.js"></script>
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>



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
   
    padding: 16px 0 17px;
    height:20%;
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
    max-width: 140px;
    padding: 16px 0 17px;
    width: 100%;
}
}

//Image on hover
.dropdown_img {
  position: relative;
  display: inline-block;
}

.dropdown_img-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown_img:hover .dropdown_img-content {
  display: block;
}

.desc {
  padding: 15px;
  text-align: center;
}

//round logout


div.dropdownav {
color: #555;
margin: 3px -22px 0 0;
width: 143px;
position: relative;
height: 17px;
text-align:left;
}
div.submenuav
{
position: absolute;
z-index: 100;
width: 135px;
display: none;
margin-left: 10px;
padding: 40px 0 5px;
border-radius: 6px;
}
.dropdownav  li a {
color: #555555;
display: block;
font-family: arial;
font-weight: bold;
padding: 6px 15px;
cursor: pointer;
text-decoration:none;
}
.dropdownav li a:hover{
background:#155FB0;
color: #FFFFFF;
text-decoration: none;
}
a.account {
font-size: 11px;
line-height: 16px;
color: #555;
position: absolute;
z-index: 110;
display: block;
padding: 11px 0 0 20px;
height: 28px;
width: 121px;
margin: -11px 0 0 -10px;
text-decoration: none;
background: url(images/arrow.png) 80px 32px no-repeat;
cursor:pointer;
}
.root
{
list-style: none;
font-size: 11px;
box-shadow: 0 2px 8px rgba(0, 0, 0, 0.45);
background: #fff;
padding: 10px 0 10px 0;
border-radius: 5px 5px 5px 5px;
margin: 21px 0 0 0;
}
.root:before {
content: '';
display: inline-block;
border-left: 7px solid transparent;
border-right: 7px solid transparent;
border-bottom: 7px solid #ccc;
border-bottom-color: #ffffff;
position: absolute;
color: #ffffff;
top: 54px;
left: 17px;
}
.profile-circle {
width: 45px;
height: 44px;
background-size: cover;
background-repeat: no-repeat;
background-position: center center;
-webkit-border-radius: 99em;
-moz-border-radius: 99em;
border-radius: 99em;
border: 2px solid #eee;
box-shadow: 0 3px 2px rgba(0, 0, 0, 0.3);
vertical-align: middle;
}


</style>
<script>
    $(document).ready(function(){
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
   });
});
</script>


<div id="mySidebar-dev" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNavdev()">×</a>
        <div class="navi">
        <ul>
            <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i>Web Developement</a></li>
            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>AI Calender</a></li>
            <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>Android Dev</a></li>
            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>IOT Products</a></li>
        </ul>
    </div>
  
</div>

<script>
function openNavdev() {
  document.getElementById("mySidebar-dev").style.width = "255px";
  document.getElementById("main").style.marginLeft = "255px";
}

function closeNavdev() {
  document.getElementById("mySidebar-dev").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>


<div id="mySidebar-ai" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNavai()">×</a>
  
      <div class="navi">
        <ul>
            <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i>Music Therapy</a></li>
            <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i>Video Summarisation</a></li>
            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Remindo</a></li>
            <li><a href="summ.php"><i class="fa fa-calendar" aria-hidden="true"></i>Text Summarisation</a></li>
            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>Audio Summarisation</a></li>
            <li><a href="imagesum.php"><i class="fa fa-cog" aria-hidden="true"></i>Image Generation</a></li>
            <li><a href="data.php"><i class="fa fa-cog" aria-hidden="true"></i>Data Analysis</a></li>
            <li><a href="music.php"><i class="fa fa-cog" aria-hidden="true"></i>Personal Assistant</a></li>
        </ul>
    </div>
</div>

<script>
function openNavai() {
  document.getElementById("mySidebar-ai").style.width = "255px";
  document.getElementById("main").style.marginLeft = "255px";
}

function closeNavai() {
  document.getElementById("mySidebar-ai").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

$(document).ready(function()
{
$(".account").click(function()
{
var X=$(this).attr('id');
if(X==1)
{
$(".submenuav").hide();
$(this).attr('id', '0'); 
}
else
{
$(".submenuav").show();
$(this).attr('id', '1');
}
});
$(".submenuav").mouseup(function()
{
return false
});
$(".account").mouseup(function()
{
return false
});
$(document).mouseup(function()
{
$(".submenuav").hide();
$(".account").attr('id', '');
});
});
</script>

<style>
  .speech {border: 1px solid #DDD; width: 340px; padding: 0; margin: 0}
  .speech input {border: 0; width: 240px; display: inline-block; height: 130px;}
  .speech img {float: right; width: 80px;height: 130px; }
</style>
</head>
<body class="home" onload="setup()">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                          
               
                <center><a href="#">
                        <img src="WAIO.png" alt="merkery_logo" class="profile-circle" width="200" height="100">
                   </a></center>
            
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                        
                        <li><a onclick="openNavdev()"><i class="fa fa-code"   aria-hidden="true"></i>Developements</a></li>
                        
                        <li><a onclick="openNavai()"><i class="fa fa-line-chart"   aria-hidden="true"></i>AI features</a></li>
                        
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>IOT Products</a></li>
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
                            <div >
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
                                    
                                    <li>
                                        
                                        <div class="dropdownav">
                                <a href="#" class="account" >
                                <img src="images/avatar.png" class="profile-circle"/>
                                </a>
                                <div class="submenuav" style="display: none; ">
                                <ul class="root">
                                <li>
                                <a href="logout.php">Sign Out</a>
                                </li>
                                </ul>
                                </div>
                                </div>
                                    </li>
                                
                                    
                                </ul>
                            </div>
                        </div>
                        
                    </header>
                </div>
            
                                    
                

                <div class="user-dashboard">
                    <h1><b>Hello</b> <i><?php echo $_SESSION["name"]; ?>,</i></h1>
                    <div class="row">
                        <p><strong><center>Refresh Page to change diagram</center></strong></p>
                        <p>
                            <iframe width="100%" height="400" src="https://waio.in/pic.php?ans=<?php echo $a; ?> " style="border:2px solid red;"></iframe>
                        </p>
</script>

<script>
/*let model;
// Start by drawing
let previous_pen = 'down';
// Current location of drawing
let x, y;
// The current "stroke" of the drawing
let strokePath;
var str;
function setup() {
  createCanvas(500,500);
  // Load the model
  // See a list of all supported models: https://github.com/ml5js/ml5-library/blob/master/src/SketchRNN/models.js
  model = ml5.SketchRNN(<?php echo "'".$a."'"; ?>, modelReady);
  window.alert('hi');
}

// Reset the drawing
function startDrawing() {
  background(220);
  // Start in the middle
  x = 250;
  y = 250;
  model.reset();
  // Generate the first stroke path
  model.generate(gotStroke);
}

function draw() {
  // If something new to draw
  if (strokePath) {
    // If the pen is down, draw a line
    if (previous_pen == 'down') {
      stroke(0);
      strokeWeight(3.0);
      line(x, y, x + strokePath.dx, y + strokePath.dy);
    }
    // Move the pen
    x += strokePath.dx;
    y += strokePath.dy;
    // The pen state actually refers to the next stroke
    previous_pen = strokePath.pen;

    // If the drawing is complete
    if (strokePath.pen !== 'end') {
      strokePath = null;
      model.generate(gotStroke);
    }
  }
}

// A new stroke path
function gotStroke(err, s) {
  strokePath = s;
}

// The model is ready
function modelReady() {
startDrawing();
}*/
</script>
<form action="remindo.php">
    <input type="submit" value="Exit" name="sub1" class="sales">
</form>
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