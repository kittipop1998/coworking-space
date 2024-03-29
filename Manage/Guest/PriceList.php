<?php 
session_start();
	include("../../Utils/common.php");
	if(isset($_SESSION['user'])&&isset($_SESSION['pass']))
	{
		if($_SESSION['role']==1)
			common::redirectPage('../Admin/HomeAdmin.php');
		if($_SESSION['role']==2)
			common::redirectPage('../Member/HomeMember.php');
	}
  
  include("../../Model/Dto/conferenceroombookingdetailDto.php");
  include("../../Model/Dto/seatbookingdetailDto.php");
  include("../../Model/Dto/teamroombookingdetailDto.php");
  
  include("../../Model/Dao/baseDao.php");
  include("../../Model/Dao/bookDao.php");
  
  include("../../Model/Logic/bookLogic.php");
  include("../../Views/Member/booking/bookView.php");
  
  include("../../Controllers/Member/bookController.php");
  
  include("../../Model/Dto/seatsDto.php");
  include("../../Model/Dto/teamroomtypesDto.php");
  include("../../Model/Dto/conferenceroomtypesDto.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>
</head>
<link rel="stylesheet" type="text/css" href="../../CssJavaScriptJquery/CSS/HomeCSS.css"/>
<link rel="icon" href="../../images/coworking-logo.jpg">

<script type="text/javascript" src="../../CssJavaScriptJquery/jquery-3.1.1.min.js"></script>


<body>
<!-----------------------------Header------------------------------------------------------------------------------------------------------------------------>
<div id="header" class="pure-g">
<!-----------------------------Menu Bar---------------->
  <div id="menubar" class="pure-u-1-1">
    <!-------------------------------Logo-->
    <div id="logo" class="pure-u-1-5">
    	<img id="logoimage" src="../../images/images.png"/>
    </div>
    <!-------------------------------Menu-------------->
    <div id="menu" class="pure-u-5-8" >
      <p align="center"><strong>Coworking spaces</strong></p>
        <div class="pure-menu pure-menu-horizontal pure-menu-scrollable custom-menu custom-menu-bottom custom-menu-tucked" 
        	id="tuckedMenu" align="center">
            <ul class="pure-menu-list">
                <li class="pure-menu-item">
                    <a href="HomeGuest.php#content" class="pure-menu-link">
                        <i class="fa fa-home"></i> Home
                    </a>
                </li>
                <li class="pure-menu-item">
                    <a href="Contact.php#content" class="pure-menu-link">
                        <i class="fa fa-phone"></i> Contact
                    </a>
                </li>
                <li class="pure-menu-item">
                    <a href="PriceList.php#content" class="pure-menu-link">
                        <i class="fa fa-table"></i> Get Prices
                    </a>
                </li>
                <li class="pure-menu-item">
                    <a href="loginOrRegis.php?action=login#content" class="pure-menu-link">
                        <i class="fa fa-sign-in"></i> Login</a>
                </li>
                <li class="pure-menu-item">
                    <a href="loginOrRegis.php?action=register#content" class="pure-menu-link">
                        <i class="fa fa-registered"></i> Register</a>
                </li>
            </ul>
        </div>
    </div>
    <!-------------------------------Personal Information------------>
    <div class="pure-u-1-8" style="width:200px">
    	
    
    </div>
</div>
</div>
<!-----------------------------Images------------------------------------------------------------------------------------------------------->  
  <div id="images">
  	<div><img id="img1" src="../../images/images (5).jpg" /></div>
    <div><img id="img2" src="../../images/images (3).jpg"/></div>
    <div><img id="img3" src="../../images/download (4).jpg"/></div>
    <div><img id="img4" src="../../images/hero-b-img-a.png"/></div>
    <div><img id="img5" src="../../images/Start_up_Startup-e1489470260829-770x435.jpg" /></div>
    <div><img id="img6" src="../../images/eda9f368b6ad49b6674a33f4f61efe0c.jpg" /></div>
    <div><img id="img7" src="../../images/images (4).jpg"/></div>
  </div>
</div>
<!-----------------------------------------------------------------------------------------------------Content----------------------------------------------->
<div id="content" > 
	<?php 
  	bookController::instance()->invoke();
	?>

</div></div>

<!-----------------------------------------------------------------------------------------------------Footer----------------------------------------------->
<div id="footer1">

<!-------------------------------------------------Book-------------------------------------->
	<div id="book" class="ui link cards">
    <!---------------------------Seats------------------------>
    	<div id="bookseat">
        	<div class="ui card">
              <div class="image">
                <img src="../../images/87c4261d7192f410234717ff4f5f9d80.jpg">
              </div>
              <div class="content">
                <a class="header" onclick="return confirm ('You have to login to book')">Seats</a>
                <div class="description">
                    100.000 vnd/day
                </div>
              </div>
              <div class="extra content">
                <div class="right floated author">
                 <a onclick="return confirm ('You have to login to book')">Book a seat</a>
                </div>
              </div>
            </div>
        </div>
     <!---------------------------Team room------------------------>

        <div id="teamroomseat" >
        	<div class="ui card">
              <div class="image">
                <img src="../../images/download (7).jpg">
              </div>
              <div class="content">
                <a class="header" onclick="return confirm ('You have to login to book')">Team Room</a>
                <div class="description">
                    4 people; 8 people; 12 people and more 15peole...
                </div>
              </div>
              <div class="extra content">
                <div class="right floated author">
                 <a onclick="return confirm ('You have to login to book')">Book a Team Room</a>
                </div>
              </div>
            </div>
        </div>
     <!---------------------------Conference room------------------------>
        <div id="conferenceRoom" >
        	<div class="ui card">
              <div class="image">
                <img src="../../images/18582257_495622294102699_6575871928601094448_n.jpg">
              </div>
              <div class="content">
                <a class="header" onclick="return confirm ('You have to login to book')">Conference Room</a>
                <div class="description">
                    less 40 people; 50 people; 100 people; 150 people and more 200 people
                </div>
              </div>
              <div class="extra content">
                <div class="right floated author">
                 <a onclick="return confirm ('You have to login to book')">Book a Conference Room</a>
                </div>
              </div>
            </div>
        </div>
    <!----------------------------------------------->
    </div>
</div>
<!-------------------------------------------------Common-------------------------------------->
<div id="common">
    <span>Connect with us</span>
    <a href="https://www.facebook.com"><i class="fa fa-facebook-square"></i></a>
    <a href="https://plus.google.com"><i class="fa fa-google-plus-square"></i></a>
    <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
    <a href="https://twitter.com"><i class="fa fa-twitter-square"></i></a>
    <a href="https://www.youtube.com"><i class="fa fa-youtube-square"></i></a>
    <a href="https://www.pinterest.com"><i class="fa fa-pinterest-square"></i></a>
</div>

</body>
</html>