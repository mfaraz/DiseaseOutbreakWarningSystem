<?php
session_start();
if(isset($_SESSION['user_id'])){
	echo "<script>window.open('admin_penal.php','_self')</script>";


}
	else
	{
if(isset($_SESSION['user'])){
	echo "<script>window.open('user_penal.php','_self')</script>";

}

		else{


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<meta charset="utf-8" />
<title>Quick Disease Early Warning System </title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/base.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/skeleton.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/layout2.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/child.css" />
<!--[if (IE 6)|(IE 7)]>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
<![endif]-->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--><script type="text/javascript" language="javascript" src="js/jquery-1-8-2.js"></script><script type="text/javascript" src="js/default.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.carousel.js"></script>
<script type="text/javascript" src="js/jquery.color.animation.js"></script>


<!-- color pickers -->
<link rel="stylesheet" media="screen" type="text/css" href="css/colorpicker.css" />
<script type="text/javascript" src="js/colorpicker.js"></script>
<!-- end of color pickers -->

<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>

</head>

<body><div class="page-wrapper">
        
        <div class="header">
                <div class="nav">       
                
                <div class="container">
                
                    <!-- Standard Nav (x >= 768px) -->
                    <div class="standard">
                    
                        <div class="five column alpha">
                            <div class="logo">
                                <a href="index.php"><img src="images/Q L 23.png" width="140px" height="50px" /></a><!-- Large Logo -->
                            </div>
                        </div>
                    
                        <div class="eleven column omega tabwrapper">
                            <div class="menu-wrapper">
                            <br>
                                <ul class="tabs menu">
                                    <li>
                                       <a href="index.php"><span>Home</span></a>
                                     
                                    </li>
                                    <li><a href="#" >Outbreaks</a>
                                       
                                    <li>
                                        <a href="blog.html">About US</a>
                                    </li>
                                    
                                    <li>
                                        <a href="contact.html" >
                                            Contact
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login-form.php" class="active">
                                            Login
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Standard Nav Ends, Start of Mini -->
                    
                    <div class="mini">
                        <div class="twelve column alpha omega mini">
                            
                           <center>     <a href="index.html"><img src="images/Q L 23.png" width="140px" height="50px" /></a></center><!-- Small Logo -->
                          
                        </div>
                        
                        <div class="twelve column alpha omega navagation-wrapper">
                            <select class="navagation list1" >
                                <option value="" selected="selected">Site Navagation</option>
                            </select>
                        </div>
                    </div>
                    <!-- Start of Mini Ends -->
                </div> 
                
            </div>
            
            <div class="shadow"></div>
                    </div>
        <br><br>
         <!-----start-main---->
							<div class="login-form">
					<div class="head">
						<img src="images/login_button.png" width="119px" height="109px" alt=""/>
						
					</div>
                    <br> 
				<form method="post" action="login-form.php">
                <?php include("check.php"); ?>
					<li>
						<input type="text" class="text" name="USERNAME" placeholder="USERNAME" ><a href="#" class=" icon user"></a>
					</li>
					<li>
						<input type="password" name="Password" placeholder="Password" ><a href="#" class=" icon lock"></a>
					</li>
					<div class="p-container">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember Me</label>
								<input type="submit" onclick="myFunction()" value="SIGN IN" name="login" >
							<div class="clear"> </div>
					</div>
				</form>
			</div>
            <br><br><br><br>
            
            <div class="footer style-2">
            	<div class="background"><div class="stitch"></div></div>
                <div class="foot-nav-bg"></div>
            	<div class="content">
                    <div class="patch"></div>
                    <div class="blur"></div>
                    <div class="pattern">
                        <div class="container">
                        	<div class="stitch"></div>
                            <div class="sixteen columns">
                                <div class="first column alpha">
                                
                      <img src="images/lll.png" width="140" height="60"  />
                                        <p>
                                         Quick disease early warning system is a timely surveillance system that gathers information of different epidemic-prone diseases and handles public health outbreaks on time to prevent the effective area from more casualties. The system will inform/warn and produce awareness in general public from its symptoms, caution and other concern knowledge through reports. 
                     					</p>

                                </div>
                                <div class="column ct">
                                    <h5>Recent Tweets:</h5>
                                    <ul class="twitter" id="twitter_update_list"><li>Twitter is loading</li></ul>
                                </div>
                                <div class="last column omega">
                                    <h5>Join our Mailing List</h5>
                                    
                                    <div class="input-wrapper">
                                        <input type="text" placeholder="Email..." id="email" name="email" />
                                    </div>
                                    <div class="right">
                                    	<a href="#" class="button color"><span>Join</span></a>
                                    </div>
                                    <div class="clear"></div>
                                    <span class="hr"></span>
                                    <h5>Stay in Touch</h5>
                                    <ul class="sm foot">
                                        <li class="facebook"><a href="#facebook">Facebook</a></li>
                                        <li class="twitter"><a href="#twitter">LinkedIn</a></li>
                                        <li class="linkedin"><a href="#linkedin">Pinterest</a></li>
                                        <li class="pinterest"><a href="#pinterest">Pinterest</a></li>
                                        <li class="dribbble"><a href="#dribbble">Pinterest</a></li>
                                        <li class="flickr"><a href="#flickr">Pinterest</a></li>
                                        <li class="flavors"><a href="#flavors">Pinterest</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="sixteen columns alpha omega">
                        	<div class="foot-nav-bg"></div>
                            <div class="foot-nav">
                                <div class="copy">
                                    Coptyright © 2015 QDEWS. By Shakir Ullah & Zaheer Uddin
                                </div>
                                <div class="nav">
                                    <a href="#">Home</a>
                                    
                                    <a href="#">Contact Us</a>
                                    <a href="#">Terms of Use</a>
                                    <a href="#">Privacy</a>
                               	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        
    <script type="text/javascript">
        $(document).ready(function() {
            $('.slidewrap2').carousel({
                slider: '.slider',
                slide: '.slide',
                slideHed: '.slidehed',
                nextSlide : '.next',
                prevSlide : '.prev',
                addPagination: false,
                addNav : false
            });
            $('.slide.testimonials').contentSlide({'nav': false});
        });
    </script>
    <script type="text/javascript" src="js/jquery.color.animation.js"></script>
    <script src="ajax/ajax_default.js" type="text/javascript"></script>
    <script src="ajax/email_conf.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
    <script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/EmpiricalThemes.json?callback=twitterCallback2&count=2"></script>

    </div>
</body>

</html>
<?php 

if(isset($_POST['login'])){
include("database.php");
$user_name=$_POST['USERNAME'];
$user_pass=$_POST['Password'];

$select_user="select user.user_id , user.user_pass , role.user_role as role from user INNER join role on user.user_id=role.user_id and user.user_id='$user_name' and user.user_pass='$user_pass' ";
$run_user=mysql_query($select_user);
$row=mysql_fetch_assoc($run_user);




 $role=$row['role'];
	
	
if($role=='admin'){
	$_SESSION['user_id']=$user_name;
echo "<script>window.open('admin_penal.php?map','_self')</script>";	
}
else
{
if($role=='reporter'){
	$_SESSION['user']=$user_name;
echo "<script>window.open('user_penal.php?','_self')</script>";	
}

}
}
?>
<?php } }?>