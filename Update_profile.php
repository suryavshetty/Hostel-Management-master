<?php
	session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Mnnit@hostle_management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap_css.css">
  <script src="jquery.js"></script>
  <script src="jquery_log.js"></script>
  <script src="popper.js"></script>
  <script src="bootstrap_js.js"></script>
  <link rel="stylesheet" href="mystyle.css">
 </head>
 <body>
	<div class="container-fluid"style="text-align:center">
  <br>
  <img src="media/MNNIT_logo.png" class="rounded" alt="MNNIT_logo" width="500" height="200"> 
  <h1><strong>Hostel Management System</strong></h1>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <a class="navbar-brand" href="home.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="http://www.mnnit.ac.in/index.php/facilities/hostels/rules">Hostel Rules</a>
      </li>
      <li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hostel List</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Swami Vivekananda Boys Hostel</a>
				<a class="dropdown-item" href="#">B.G. Tilak Hostel</a>
				<a class="dropdown-item" href="#">M.M. Malviya Hostel</a>
				<a class="dropdown-item" href="#">P.D. Tondon Hostel</a>
				<a class="dropdown-item" href="#">PG Hostel</a>
				<a class="dropdown-item" href="#">R.N. Tagore Hostel</a>
				<a class="dropdown-item" href="#">S.V. Patel Hostel</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">S.N. Girls Hostel</a>
				<a class="dropdown-item" href="#">K.N. Girls Hostel</a>
				<a class="dropdown-item" href="#">International House</a>
			</div>
  </li>
    </ul>
    <?php 
		if(isset($_SESSION['RegNo']))
		{
			echo'<form class="form-inline my-2 my-lg-0"action="logout.php" method="post">
			<button class="btn btn-secondary my-2 my-sm-0" type="submit" name="logout">LogOut</button>
				</form>';
		}
			
		else
			echo'<form class="form-inline my-2 my-lg-0"action="welcome.php" method="post">
			<input class="form-control mr-sm-2" type="text" name="id" placeholder="Registration No.">
			<input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password">
			<button class="btn btn-secondary my-2 my-sm-0" type="submit">LogIn</button>
				</form>';
	?>
  </div>
</nav>
<div class="jumbotron jumbotron-fluid">
	<div class="row">
		<div class="col-sm-3" style="background-color:lavender;">
			<div class="alert alert-success"style="text-align:center">
					<strong>DashBoard</strong> .
			</div>
			<div class="list-group">
				<a href="welcome.php" class="list-group-item list-group-item-action active">Profile</a>
				<a href="notice.php" class="list-group-item list-group-item-action">Notice</a>
				<a href="#" class="list-group-item list-group-item-action disabled">Fee Status</a>
				<a href="complaint.php" class="list-group-item list-group-item-action disabled">Complaint</a>
			</div>
		</div>
		<div class="col-sm-9" >
			<div class="jumbotron">
			<h3><b> Update your Profile</b></h3></br></br>
				<form action="action_update.php" method=POST>
					<div class="form-group">
						<label for="email">Enter old Password</label>
						<input type="password" class="form-control" id="email" placeholder="Enter old password" name="old">
					</div>
					<div class="form-group">
						<label for="pwd">update Password:</label>
						<input type="password" class="form-control" id="pwd" placeholder="Enter new password" name="new">
					</div>
			
						<button type="submit" class="btn btn-primary">Update</button>
				</form>
			</div>
			
		</div>
	</div>
</div>
	<div class="footer">
  <p>@Hostel_management_Team</p>
</div>
 </body>
</html>