
<!DOCTYPE html>

<html>
<head>
<title>online voting</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<script language="JavaScript" src="js/user.js">
</script>

</head>



<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    
    <div class="fl_left">
      <ul class="faico clear">
 
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace inline pushright">
        </ul>
</div>



<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="index.php">ONLINE VOTING</a></h1>
    </div>
   



	
      <ul class="clear">
        <li class="active"><a href="checklogin.php">Home</a></li>
        
        <li><a class="drop" href="#">Voter Panel</a>
          <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="registeracc.php">Registration</a></li>
           
          </ul>
        </li>
        
      </ul>
  
  


  </header>
</div>




<div>
  
    <h2 class= Online <a href="#">Voting</a></h2>
    <ul class="nospace group">
      <li class="one_half">
        


				</div>
<div>

		<?php
			ini_set ("display_errors", "1");
			error_reporting(E_ALL);
			ob_start();

			session_start();
			require('connection.php');

			// Defining your login details into variables
			$myusername=$_POST['myusername'];
			$mypassword=$_POST['mypassword'];

			$encrypted_mypassword=md5($mypassword); //MD5 Hash for security
			// MySQL injection protections
			$myusername = stripslashes($myusername);
			$mypassword = stripslashes($mypassword);
			$myusername = mysql_real_escape_string($myusername);
			$mypassword = mysql_real_escape_string($mypassword);

			$sql="SELECT * FROM tbmembers WHERE email='$myusername' and password='$encrypted_mypassword'" or die(mysql_error());
			$result=mysql_query($sql) or die(mysql_error());

			// Checking table row
			$count=mysql_num_rows($result);
			// If username and password is a match, the count will be 1

			if($count==1){
				// If everything checks out, you will now be forwarded to voter.php
				$user = mysql_fetch_assoc($result);
				$_SESSION['member_id'] = $user['member_id'];
				header("location:voter.php");
			}
			
			ob_end_flush();

		?> 

		</div>


      
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>


<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="title">Address</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
         
          <p>
          Name        : Md. Rezwanul Haque <br>
          University  : KUET <br>
          Batch       : 2k14 <br>
          Dept        : CSE <br>
          </p>
          </address>
        </li>
      </ul>
    </div>

    <div class="one_third">
      <h6 class="title">Phone</h6>
      <ul class="nospace linklist contact">
       
        <li><i class="fa fa-phone"></i> +8801773254014<br>
          +8801521479574</li>


      </ul>
    </div>

    <div class="one_third">
      <h6 class="title">Email</h6>
      <ul class="nospace linklist contact">
        
        <li><i class="fa fa-envelope-o"></i> r.haque.249.rh@gmail.com </li>

      </ul>
    </div>


    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Md. Rezwanul Haque</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>



