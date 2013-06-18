<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">
</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", 
	orientation: 'h', 
	classname: 'ddsmoothmenu',
	
	contentsource: "markup" 
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css" />

<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.timers-1.2.js" type="text/javascript"></script>
<script src="js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>

<script type="text/javascript">
    
    $(document).ready(function() {
        
        $("#carousel").dualSlider({
            auto:true,
            autoDelay: 6000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        
    }); 
    
</script>

<script type="text/javascript" src="js/jquery-1-4-2.min.js"></script> 
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

</head>
<body>
<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
	<div id="site_title"></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" class="selected">Home</a></li>
                <li><a href="about.php">About</a>
                   
                </li>
                <li><a href="Hotels.php">Hotels</a>
                    
                </li>
               
                              
                <li><a href="contact.php">Contact</a></li>
				<li><a href="login.php">Login</a></li>
            </ul>
            <br style="clear: left" />
        </div>
        <div class="clear"></div>
        <div id="templatemo_slider_wrapper">
            <div id="templatemo_slider">
            <div id="carousel">
                <div class="panel">
                        
                        <div class="details_wrapper">
                            
                            <div class="details">
                            
                                <div class="detail">
                                    <img src="images/slider/n1.jpg">
                                </div>
                                
                                <div class="detail">
                                    <img src="images/slider/n3.jpg">
                                </div>
                                
                                <div class="detail">
                                    <img src="images/slider/n4.jpg">
                                </div>
                                                            
                            </div>
                            
                        </div>
                        
                      	
                        
                       
                    </div>
                    
                    <div id="slider-image-frame">
                        <div class="backgrounds">
                            
                            <div class="item item_1">
                                <img src="images/slider/n5.jpg" alt="Slider 01" />
                            </div>
                            
                            <div class="item item_2">
                                <img src="images/slider/n2.jpg" alt="Slider 02" />
                            </div>
                            
                            <div class="item item_3">
                                <img src="images/slider/n6.jpg" alt="Slider 03" />
                            </div>
                            
                        </div>
                  </div>
                </div>
            </div> 
        </div> 
    </div> 
</div> 
<div id="templatemo_main">
	<div class="half left">
            <h2>Hyatt Regency</h2>
            
            <div class="img_frame img_frame_14 img_fl"><span></span>
	        	<img src="images/hyatt3.gif" alt="Image 01" />
			</div>
            <p><em>Hyatt Regency Delhi, one of largest 5-star hotels in New Delhi, India, is located in the commercial hub of Bhikaji Cama Place, within a few-minutes drive from the Indira Gandhi International Airport and the city domestic airport. 
</em></p>
            <p>This hotel in New Delhi is close to embassies, consulates and corporate headquarters, making it one of the most preferred business hotels in the city.</p>
            <a href="hotels.php?action=hyatt" class="more">More</a>
		</div>
        
        <div class="half right">
            <h2>Welcome To </h2>
			<p><em> is a free hotel navigation site </em></p> 
			<p>Credit goes to    Quisque imperdiet bibendum placerat. Ut sit amet nisl ut sapien dictum placerat ac eu sem. Curabitur sit amet lacus nisl. Suspendisse euismod dapibus nisi, sed posuere lorem hendrerit in. Donec ut pulvinar urna.    Mauris dignissim ligula ac lectus commodo consequat. Nullam lacinia odio sem.</p>
            <ul class="list_bullet">
   	      <li class="flow"> Cum sociis natoque penatibus et magnis dis parturient</li>
                <li class="flow"> Donec et dui malesuada neque malesuada</li>
                <li class="flow"> Suspendisse faucibus placerat risus</li>
                <li class="flow"> Aliquam bibendum tortor ac ipsum euismod cursus</li>
                <li class="flow"> Quisque elementum ipsum eu justo iaculis</li>
			</ul>
            
		</div>  
        <div class="clear h40"></div>
		<center><b><u> SEARCH &nbsp;HOTELS HERE</u></b></center>
        <div class="col one_third">
        	<br><br><form id="form1" name="form1" method="post" action="w.php">
       
            City: &nbsp;
            <select city="NEW" name="city">
            <option value="">--- Select ---</option>
            <?php
                mysql_connect ("localhost","root","");
                mysql_select_db ("hotels_in_metro1");
                $select="hotels_in_metro1";
                if (isset ($select)&&$select!=""){
                $select=$_POST ['NEW'];
            }
            ?>
            <?php
                $list=mysql_query("select DISTINCT city from navigation");
            while($row_list=mysql_fetch_assoc($list)){
                ?>
                    <option value="<?php echo $row_list['city']; ?>"<?php if($row_list['city']==$select){ echo "selected"; } ?> >
                                         <?php echo $row_list['city'];?>
                    </option>
                <?php
                }
			
                ?>
            </select>
        </div>
        <div class="col one_third">
        	 <br><br>
            Cuisine: &nbsp;
            <select food="NEW" name="food">
            <option value="">--- Select ---</option>
            <?php
                mysql_connect ("localhost","root","");
                mysql_select_db ("hotels_in_metro1");
                $select="hotels_in_metro1";
                if (isset ($select)&&$select!=""){
                $select=$_POST ['NEW'];
            }
            ?>
            <?php
                $list=mysql_query("select DISTINCT food from navigation");
            while($row_list=mysql_fetch_assoc($list)){
                ?>
                    <option value="<?php echo $row_list['food']; ?>"<?php if($row_list['food']==$select){ echo "selected"; } ?> >
                                         <?php echo $row_list['food'];?>
                    </option>
                <?php
                }
			
                ?>
            </select>
			<div class="col one_third">
        	 <br><br>
            Age: &nbsp;
            <select age="NEW" name="age">
            <option value="">--- Select ---</option>
			<option value="all" name="age">All</option>
			<option value="low" name="age">Upto 17 years</option>
			<option value="moderate" name="age">18-30 years</option>
			<option value="high" name="age">More than 30 years</option>
			</select>
			</div>
            </div>
			</div>
        <div class="col one_third no_margin_right">
        	<input type="submit" name="Submit" value="Search Hotels" /></center></form>
        <div class="clear"></div>
    
</div> 

</body>
</html>