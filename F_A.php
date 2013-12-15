<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
<link rel="stylesheet" type="text/css" href="jquery.mobile.structure-1.0.min.css">
<link rel="stylesheet" type="text/css" href="jquery.mobile.theme-1.0.min.css">
	<script src="jquery.js"></script>
        <script src="jquery.mobile-1.3.2.min.js"></script>
	<title>F_A</title>
</head>

<body>    
    <div data-role="page" id="page">
    
    <span style="margin:0; padding0;" id="aa3"  onmouseout="c('aa3')">
		<div data-role="header" data-position="fixed" style=" text-align:center; padding-top:10px;">
             <a href="#popupNested" style="padding:20px; border: solid 3px #FFEC64; -webkit-border-radius:50px;-moz-border-radius: 50px; border-radius: 50px;" data-rel="popup" data-role="button" data-icon="bars" data-iconpos="notext" data-theme="e" data-iconshadow="false" data-inline="true" data-transition="pop">Menu</a>
            
            <div data-role="popup" id="popupNested" data-theme="c">
                        <h2><input name="password" id="search" value="" placeholder="Search" type="search"></h2>
                        <ul data-role="listview">
                            <li><a href="Car.php">Car</a></li>
                            <li><a href="Computer.php">Computer</a></li>
                            <li><a href="Electronic.php">Electronic</a></li>
                            <li id="aa1" onclick="tes('aa')"><a href="#" >More</a></li>
                            <li id="aa" style="position:absolute; visibility:hidden;"><a href="Furniture.php" >Furniture</a></li>
                            <li id="aa5" style="position:absolute; visibility:hidden;"><a href="Hpacc.php">Handphone Accessories</a></li>
                            <li id="aa4" style="position:absolute; visibility:hidden;" onclick="tes1('aa')"><a href="#">Less</a></li>
                        </ul>
            </div>
<!-- close popupNested -->
    
			<style>
                            .nav-glyphish-example .ui-btn .ui-btn-inner { padding-top: 40px !important; padding-left:20px; padding-right:20px; }
                            .nav-glyphish-example .ui-btn .ui-icon { width: 30px!important; height: 30px!important; margin-left: -15px !important; box-shadow: none!important; -moz-box-shadow: none!important; -webkit-box-shadow: none!important; -webkit-border-radius: 0 !important; border-radius: 0 !important; }
                            #sign .ui-icon { background:url(images/111-user.png) 50% 50% no-repeat; background-size: 24px 22px; }
                            #home .ui-icon { background:url(images/53-house.png) 50% 50% no-repeat; background-size: 24px 16px;  }
                                            
            </style>
        <div data-role="none" class="nav-glyphish-example" data-theme="e">
            <div data-role="none" class="nav-glyphish-example" data-grid="d"> 
                <p align="center">
                <a href="home.php" id="home" data-icon="custom" data-inline="true" data-role="button" data-iconpos="top" data-theme="e">Home</a> <?php 
                            if(empty($_SESSION['user'])){
                        ?>
                        <a href="#popupLogin" data-rel="popup" data-position-to="window" data-transition="pop" id="sign" data-icon="custom" data-inline="true" data-role="button" data-iconpos="top" data-theme="e">Sign</a>
                        <div data-role="popup" id="popupLogin" data-theme="c" class="ui-corner-all" data-overlay-theme="a">
                            <form name="login" action="otentikasi.php" method="post">
                            <div style="padding:10px 20px;">
                                <h3>Please sign in</h3>
                                <label for="un" class="ui-hidden-accessible">Username:</label>
                                <input name="user" id="un" value="" placeholder="username" data-theme="a" type="text">
                                <label for="pw" class="ui-hidden-accessible">Password:</label>
                                <input name="pass" id="pw" value="" placeholder="password" data-theme="a" type="password">
                                <button type="submit" data-theme="e" data-icon="check" data-inline="true">Sign in</button>
                                <a href="Register.php"><button type="submit" data-theme="e" data-inline="true">Register</button></a>
                            </div>
                            </form>
                        </div>
                        <?php
                            }else{
                        ?>
                        <a href="#popupLogin" data-rel="popup" data-position-to="window" data-transition="pop" id="sign" data-icon="custom" data-inline="true" data-role="button" data-iconpos="top" data-theme="e"><?php echo"$_SESSION[user]"; ?></a>
        <div data-role="popup" id="popupLogin" data-theme="c" class="ui-corner-all" data-overlay-theme="a">
        	<form name="login" action="logout.php">
                <div style="padding:10px 20px;">
                    <a href="profile.php"><h3>Your Profile</h3></a>
                    <button type="submit" data-theme="e" data-inline="true">Logout</button></a>
                </div>
	        </form>
        </div>
                        <?php
                            }
                        ?> 
                </p>
            </div>
        </div>
     </div> <!-- close header -->
     </span>

	<div data-role="content" align="center" style="border:#000 2px solid; padding:0; margin::0;">
    	<table width="100%" align="center" border="2" bordercolor="#FFFFFF">
        	<tr>
            	<td align="center"><img src="Picture/2.jpg" width="400" height="250">
                </td>
            </tr>
        	<tr>
            	<td width="100%" align="center">
                    <form>
                        <label for="flip-1"></label>
                        <select name="flip-1" id="flip-1" data-role="slider">
                            <option value="off">Off</option>
                            <option value="on">On</option>
                        </select>
                    </form>
                </td>
            </tr>
        	<tr>
            	<td>
                	<table width="100%" style="border:solid 2px #000; -webkit-border-radius:50px;-moz-border-radius: 50px; border-radius: 50px; -webkit-border-radius:15px;-moz-border-radius: 15px; border-radius: 15px;">
                    	<tr>
                        	<td width="100%" align="left" colspan="2" style="font-size:25px; background-color:#F60; outline-bottom:2px #000 solid; outline-offset:0px; -webkit-border-radius:50px;-moz-border-radius: 50px; border-radius: 50px; -webkit-border-radius:15px;-moz-border-radius: 15px; border-radius: 15px;">Products</td>
                        </tr>
                        <tr>
                        	<td width="75%" align="center"><span id="F1">Name</span><br><span id="F2"><img src="Picture/2.jpg" width="250" height="120"></span></td>
                        	<td width="25%"><span id="F2">Price</span></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
	</div>
	<div data-role="footer">
		<h4>&copy;Hungry Bert</h4>
	</div>
</div>

</body>
</html>