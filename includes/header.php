
<header>
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="header_wrap">

      <?php   if(strlen($_SESSION['login'])==0)
	{	
?>
 <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal" style="margin-top: 20px; margin-right: 10px;">Login / Register</a> </div>
<?php }
else{ 

// echo "Welcome To Car rental portal";
 } ?>

        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> 
            
<?php 
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM users WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->FullName); }}?>
   <i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Profile Settings</a></li>
            <li><a href="my-booking.php">My Booking</a></li>
            <li><a href="post-testimonial.php">Give feedback</a></li>
            <li><a href="logout.php">Sign Out</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Profile Settings</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">My Booking</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Give feedback</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">CarCastle</a></li>
          <li><a href="index.php">Home</a></li>
          	 
          <li><a href="about.php">About</a></li>
          <li><a href="car-listing.php">Rent a car</a>
          <!-- <li><a href="page.php?type=faqs">FAQs</a></li> -->
          <li><a href="contact-us.php">Contact</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>