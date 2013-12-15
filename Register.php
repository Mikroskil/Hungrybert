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
	<title>Register</title>
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
                <a href="home.php" id="home" data-icon="custom" data-inline="true" data-role="button" data-iconpos="top" data-theme="e">Home</a> <a href="#popupLogin" data-rel="popup" data-position-to="window" data-transition="pop" id="sign" data-icon="custom" data-inline="true" data-role="button" data-iconpos="top" data-theme="e">Sign</a>
<div data-role="popup" id="popupLogin" data-theme="c" class="ui-corner-all" data-overlay-theme="a">
                    <form name="login" action="otentikasi.php" method="post">
                            <div style="padding:10px 20px;">
                            
                                <h3>Please sign in</h3>
                                <label for="un" class="ui-hidden-accessible">Username:</label>
                                <input name="user" id="un" value="" placeholder="username" data-theme="a" type="text">
                                <label for="pw" class="ui-hidden-accessible">Password:</label>
                                <input name="pass" id="pw" value="" placeholder="password" data-theme="a" type="password">
                                <button type="submit" data-theme="e" data-icon="check" data-inline="true">Sign in</button>
                                <button type="submit" data-theme="e" data-inline="true">Register</button>
                                 
                            </div>
                    </form>
                </div>
                </p>
            </div>
        </div>
     </div> <!-- close header -->
     </span>

	<div data-role="content">
    	<form name="form1" action="insert.php" method="post"  onkeyup="validateForm()" >
        	<table width="100%" style="color:#000; font-size:25px;">
            		<tr>
                	<td width="50%">First Name<input name="firstname" type="text" value="" placeholder="First Name" style="height:25px; font-size:20px;" maxlength="20" required="required" /></td>
                    <td width="50%"><div id="set1" style="color:#F00;"></div></td>
                </tr>
                <tr>
                    <td width="50%">Last Name<input name="lastname" type="text" value="" placeholder="Last Name" style="height:25px; font-size:20px;" maxlength="10" required="required"/></td>
                    <td width="50%"><div id="set2" style="color:#F00;"></div></td>
                </tr>
                <tr>
                	<td width="50%">Gender : 
                <div data-role="fieldcontain">
                  <fieldset data-role="controlgroup" style=" ">
                    <input type="radio" name="radio1" id="radio1_0" value='m' required="required"/>
                    <label for="radio1_0" style="color:#A00000; padding-right : 0px; width:200px; height:40px; -webkit-border-radius:50px;-moz-border-radius: 50px; border-radius: 50px;" >Male</label>
                    <input type="radio" name="radio1" id="radio1_1" value='f' required="required"/>
                    <label for="radio1_1" style="color:#A00000; padding-right : 0px; width:200px; height:40px; -webkit-border-radius:50px;-moz-border-radius: 50px; border-radius: 50px;">Female</label>
                  </fieldset>
                </div>
                    </td>
                    <td width="50%"><div id="set3" style="color:#F00;"></div></td>
                </tr>
                  
                     
                <tr>
                	<td width="100%" colspan="2">Birth</td>
                </tr>
                <tr>
                	<td width="50%" style="color:#A00000;">
                                         	<select name="date" style="color:#A00000; font-size:20px;" required="required">
	                   						<option value='' style="font-size:20px;">Date</option>
                        					<option value='1' style="font-size:20px;">1</option>
                                            <option value='2' style="font-size:20px;">2</option>
                                            <option value='3' style="font-size:20px;">3</option>
                                            <option value='4' style="font-size:20px;">4</option>
                                            <option value='5' style="font-size:20px;">5</option>
                                            <option value='6' style="font-size:20px;">6</option>
                                            <option value='7' style="font-size:20px;">7</option>
                                            <option value='8' style="font-size:20px;">8</option>
                                            <option value='9' style="font-size:20px;">9</option>
                                            <option value='10' style="font-size:20px;">10</option>
                                            <option value='11' style="font-size:20px;">11</option>
                                            <option value='12' style="font-size:20px;">12</option>
                                            <option value='13' style="font-size:20px;">13</option>
                                            <option value='14' style="font-size:20px;">14</option>
                                            <option value='15' style="font-size:20px;">15</option>
                                            <option value='16' style="font-size:20px;">16</option>
                                            <option value='17' style="font-size:20px;">17</option>
                                            <option value='18' style="font-size:20px;">18</option>
                                            <option value='19' style="font-size:20px;">19</option>
                                            <option value='20' style="font-size:20px;">20</option>
                                            <option value='21' style="font-size:20px;">21</option>
                                            <option value='22' style="font-size:20px;">22</option>
                                            <option value='23' style="font-size:20px;">23</option>
                                            <option value='24' style="font-size:20px;">24</option>
                                            <option value='25' style="font-size:20px;">25</option>
                                            <option value='26' style="font-size:20px;">26</option>
                                            <option value='27' style="font-size:20px;">27</option> 
                                            <option value='28' style="font-size:20px;">28</option>
                                            <option value='29' style="font-size:20px;">29</option>
                                            <option value='30' style="font-size:20px;">30</option>
                                            <option value='31' style="font-size:20px;">31</option>	                  
                                         </select>
                    </td>
                    <td width="50%"><div id="set4" style="color:#F00;"></div></td>
          		</tr>
                <tr>
                	<td width="50%">
                                         <select name="month" style="font-size:20px;" required="required">
	                   						<option value='' style="font-size:20px;">Month</option>
                        					<option title="January" value='January' style="font-size:20px;">January</option>
                                            <option title="February" value='February' style="font-size:20px;">February</option>
                                            <option title="March" value='March' style="font-size:20px;">March</option>
                                            <option title="April" value='Apriil' style="font-size:20px;">April</option>
                                            <option title="May" value='Mei' style="font-size:20px;">May</option>
                                            <option title="June" value='June' style="font-size:20px;">June</option>
                                            <option title="July" value='July' style="font-size:20px;">July</option>
                                            <option title="August" value='August' style="font-size:20px;">August</option>
                                            <option title="September" value='September' style="font-size:20px;">September</option>
                                            <option title="October" value='October' style="font-size:20px;">October</option>
                                            <option title="November" value='November' style="font-size:20px;">November</option>
                                            <option title="December" value='December' style="font-size:20px;">December</option>
                                         </select>
                    </td>
                    <td width="50%"><div id="set5" style="color:#F00;"></div></td>
             	</tr>
                <tr>
                	<td width="50%">
                                         <select name='year' style="font-size:20px;" required="required">
                                         	<option value='' style="font-size:20px;">Year</option>
                            <option value='2013' style="font-size:20px;">2013</option><option value='2012' style="font-size:20px;" style="font-size:20px;">2012</option><option value='2011' style="font-size:20px;" style="font-size:20px;">2011</option><option value='2010' style="font-size:20px;">2010</option><option value='2009' style="font-size:20px;">2009</option><option value='2008' style="font-size:20px;">2008</option><option value='2007' style="font-size:20px;">2007</option><option value='2006' style="font-size:20px;">2006</option><option value='2005' style="font-size:20px;">2005</option><option value='2004' style="font-size:20px;">2004</option><option value='2003' style="font-size:20px;">2003</option><option value='2002' style="font-size:20px;">2002</option><option value='2001' style="font-size:20px;">2001</option><option value='2000' style="font-size:20px;">2000</option><option value='1999' style="font-size:20px;">1999</option><option value='1998' style="font-size:20px;">1998</option><option value='1997' style="font-size:20px;">1997</option><option value='1996' style="font-size:20px;">1996</option><option value='1995' style="font-size:20px;">1995</option><option value='1994' style="font-size:20px;">1994</option><option value='1993' style="font-size:20px;">1993</option><option value='1992' style="font-size:20px;">1992</option><option value='1991' style="font-size:20px;">1991</option><option value='1990' style="font-size:20px;">1990</option><option value='1989' style="font-size:20px;">1989</option><option value='1988' style="font-size:20px;">1988</option><option value='1987' style="font-size:20px;">1987</option><option value='1986' style="font-size:20px;">1986</option><option value='1985' style="font-size:20px;">1985</option><option value='1984' style="font-size:20px;">1984</option><option value='1983' style="font-size:20px;">1983</option><option value='1982' style="font-size:20px;">1982</option><option value='1981' style="font-size:20px;">1981</option><option value='1980' style="font-size:20px;">1980</option><option value='1979' style="font-size:20px;">1979</option><option value='1978' style="font-size:20px;">1978</option><option value='1977' style="font-size:20px;">1977</option><option value='1976' style="font-size:20px;">1976</option><option value='1975' style="font-size:20px;">1975</option><option value='1974' style="font-size:20px;">1974</option><option value='1973' style="font-size:20px;">1973</option><option value='1972' style="font-size:20px;">1972</option><option value='1971' style="font-size:20px;">1971</option><option value='1970' style="font-size:20px;">1970</option><option value='1969' style="font-size:20px;">1969</option><option value='1968' style="font-size:20px;">1968</option><option value='1967' style="font-size:20px;">1967</option><option value='1966' style="font-size:20px;">1966</option><option value='1965' style="font-size:20px;">1965</option><option value='1964' style="font-size:20px;">1964</option><option value='1963' style="font-size:20px;">1963</option><option value='1962' style="font-size:20px;">1962</option><option value='1961' style="font-size:20px;">1961</option><option value='1960' style="font-size:20px;">1960</option><option value='1959' style="font-size:20px;">1959</option><option value='1958' style="font-size:20px;">1958</option><option value='1957' style="font-size:20px;">1957</option><option value='1956' style="font-size:20px;">1956</option><option value='1955' style="font-size:20px;">1955</option><option value='1954' style="font-size:20px;">1954</option><option value='1953' style="font-size:20px;">1953</option><option value='1952' style="font-size:20px;">1952</option><option value='1951' style="font-size:20px;">1951</option><option value='1950' style="font-size:20px;">1950</option><option value='1949' style="font-size:20px;">1949</option><option value='1948' style="font-size:20px;">1948</option><option value='1947' style="font-size:20px;">1947</option><option value='1946' style="font-size:20px;">1946</option><option value='1945' style="font-size:20px;">1945</option>                          				</select>
                       </td>
                       <td width="50%"><div id="set6" style="color:#F00;"></div></td>
                 	</tr>
                         <tr>
                    	<td width="50%">Address<input name="address" type="text" value="" placeholder="Address" style="height:25px; font-size:20px;" required="required"/>
                        </td>
                        <td width="50%"><div id="set7" style="color:#F00;"></div></td>
                    </tr>         
					<tr>
                    	<td width="50%">PhoneNumber<input name="hp" type="text" value="" placeholder="Phone Number" style="height:25px; font-size:20px;" required="required"/></td>
                        <td width="50%"><div id="set8" style="color:#F00;"></div></td>
                    </tr>
					
                    <tr>
                    <td width="50%"><input name="email" type="email" value="" placeholder="Email" style="height:25px; font-size:20px;" required="required"/></td>
                        <td width="50%"><div id="set9" style="color:#F00;"></div></td>
                    </tr>
                      <tr>
            			<td width="50%">Username<input name="username" type="text" value="" placeholder="Username" style="height:25px; font-size:20px;" maxlength="20" required="required"/></td>
                        <td width="50%"><div id="set10" style="color:#F00;"></div></td>
                    </tr>
					<tr>
                    	<td width="50%"><input name="pass" type="password" value="" placeholder="Password" style="height:25px; font-size:20px;" maxlength="20" required="required"/></td>
                        <td width="50%"><div id="set11" style="color:#F00;"></div></td>
                    </tr>
                   <tr>
                    	<td width="50%"><input name="repass" type="password" value="" placeholder="Confirm Password" style="height:25px; font-size:20px;" maxlength="20"/></td>
                        <td width="50%"><div id="set12" style="color:#F00;"></div></td>
                    </tr>
                    
                    <tr>
                    	<td width="50%"><input type="submit" value="Submit" style="height:30px; font-size:20px;"  /></td>
					</tr>
                    </td>
                        <td width="50%"><div>&nbsp;</div></td>
             	</table>
                                
                                </form>
	</div>
	<div data-role="footer">
		<h4>&copy;Hungry Bert</h4>
	</div>
</div>

</body>
</html>