<?php include_once("assets/function/func.php");
 session_start();

 if(empty($_SESSION['name']) || empty($_SESSION['email'])){
 	header("location: login.php");
 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
	
	
	<link rel="shortcut icon" type="image/icon" href="assets/images/l.png"/>
	<link rel="stylesheet" href="assets/css/jquery-ui.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>

	<header>
		<div class="head">
			
			<h1>Fight For Poverty Bangladesh-Admin Panel</h1>
			<ul>
				
				<li><a href="index.php" target="_blank"><button class="btn btn-success">Main Website</button></a></li>
				<li><a href="assets/function/logout.php" target="_blank"><button class="btn btn-danger">Log Out</button></a></li>
				
				<li><a href="assets/images/admin/<?php echo $_SESSION['img']?>"><img src="assets/images/admin/<?php echo $_SESSION['img']?>" alt=""></a></li>
			</ul>
		</div>
		
		
	</header>

	<section>
		<div class="container">

			<div class="main">

					
				<div class="mid">
					
						<ul>
							<li><a href="#user">Create Admin</a></li>
							
							<li><a href="#team">Team Member Addition</a></li>
							<li><a href="#status">Update Timeline Status</a></li>
							<li><a href="#event">Upcomming Event</a></li>
							<li><a href="#profile">Profile Update</a></li>
							<li><a href="#delete">Delete Status</a></li>
							<li><a href="#myid">Edit id</a></li>
							<li><a href="#opinion">Opinion</a></li>
							<li><a href="#tdel">Team Member Delete</a></li>
						</ul>
					
					
					<div id="user">
						<?php
						if(isset($_POST['submit'])){
							
							 $name = $_POST['name'];
							 $email = $_POST['email'];
							 $pass = $_POST['password'];
							 $img = $_FILES['image']['name'];
							 $img_tmp = $_FILES['image']['tmp_name'];

							 $imge = explode('.',$img);
							 $imgext = end( $imge);
							 $image = time().".".$imgext;
							 
							 if(empty($name) || empty($email) || empty($pass) || empty($img)){
							 	?> <script> alert('Field Must Not Be empty')</script>
							 	<?php
							 }else{
							 	move_uploaded_file($img_tmp, 'assets/images/admin/'.$image);
							 	 $conn-> query("INSERT INTO admin (name,email,password,image) VALUES('$name','$email','$pass','$image')");
							 	 ?> <script> alert('Successfully Added Admin!')</script>
							 	 <?php
								 }
							 
								}

							?>
						<h1>Create User:</h1>
						<form action="" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label for="">Name</label>
								<input name="name" class="form-control" type="text">
							</div>
							<div class="form-group">
								<label for="">Email</label>
								<input name="email" class="form-control" type="email">
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input name="password" class="form-control" type="password">
							</div>
							<div class="form-group">
								<label for="">User Image</label>
								<input name="image" class="form-control" type="file">
							</div>
							
							<div class="form-group">
								<input name="submit" class="form-control btn btn-success" type="submit">
								
							</div>
						</form>
					</div>
					
					<div id="team">
						<?php
						if(isset($_POST['tmsubmit'])){
							
							 $tmname = $_POST['tmname'];
							  $tmemail = $_POST['tmemail'];
							 $tmoccupation = $_POST['tmoccupation'];
							 $tminstitute = $_POST['tminstitute'];
							
							 $tmcell = $_POST['tmcell'];
							 $tmfb = $_POST['tmfb'];
							 $tmimg = $_FILES['tmimg']['name'];
							 $tmimg_tmp = $_FILES['tmimg']['tmp_name'];

							 $tmimge = explode('.',$tmimg);
							 $tmimgext = end( $tmimge);
							 $tmimage = time().".".$tmimgext;
							 
							 if(empty($tmname) || empty($tmoccupation) || empty($tminstitute) || empty($tmemail)||  empty($tmimg)){
							 	?> <script> alert('Field Must Not Be empty')</script>
							 	<?php
							 }else{
							 	move_uploaded_file($tmimg_tmp, 'assets/images/team/'.$tmimage);
							 	 $conn-> query("INSERT INTO team (tmname,tmemail,tmoccupation,tminstitute,tmcell,tmfb,tmimg) VALUES('$tmname','$tmemail','$tmoccupation','$tminstitute','$tmcell','$tmfb','$tmimage')");
							 	 ?> <script> alert('Successfully Added Team Member!')</script>
							 	 <?php
							 }
							 
						}

						?>


						<h1>Team Member Addition:</h1>
						<form action="" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label for="">Name</label>
								<input name="tmname" class="form-control" type="text">
							</div>
							<div class="form-group">
								<label for="">Email</label>
								<input name="tmemail" class="form-control" type="text">
							</div>
							<div class="form-group">
								<label for="">Occupation</label>
								<input name="tmoccupation" class="form-control" type="text">
							</div>
							<div class="form-group">
								<label for="">Institution</label>
								<input name="tminstitute" class="form-control" type="text">
							</div>
							
							<div class="form-group">
								<label for="">Cell Number</label>
								<input name="tmcell" class="form-control" type="text">
							</div>
							<div class="form-group">
								<label for="">Facebook URL</label>
								<input name="tmfb" class="form-control" type="url">
							</div>
							<div class="form-group">
								<label for="">Picture</label>
								<input name="tmimg" class="form-control" type="file">
							</div>
							<div class="form-group">
								
								<button name="tmsubmit" class="form-control btn btn-success">Submit</button>
							</div>
						</form>
					</div>
					<div id="status">
						<?php
						if(isset($_POST['stsubmit'])){
							
							 $sthead = $_POST['sthead'];
							 date_default_timezone_set('ASIA/DHAKA');
							 $stdate = date('M d, Y');
							 $sttime = date('g:i:s a');
							 $status = $_POST['status'];
							 $stfile = $_FILES['stfile']['name'];
							 $stfile_tmp = $_FILES['stfile']['tmp_name'];

							 $stfilee = explode('.',$stfile);
							 $stfileext = end( $stfilee);
							 $file = time().".".$stfileext;
							 
							 if(empty($sthead) || empty($status) || empty($stfile) ){
							 	?> <script> alert('Field Must Not Be empty')</script>
							 	<?php
							 }else{
							 	move_uploaded_file($stfile_tmp, 'assets/images/status/'.$file);
							 	 $conn-> query("INSERT INTO status  (sthead,stdate,sttime,status,stfile,fileext) VALUES('$sthead','$stdate','$sttime','$status','$file','$stfileext')");
							 	 ?> <script> alert('Successfully Added Status!')</script>
							 	 <?php
								 }
							 
								}

							?>
						<h1>Update Timeline Status:</h1>
						<form action="" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label for="">Heading</label>
								<input name="sthead" class="form-control" type="text">
							</div>
							<div class="form-group">
								<label for="">Images/Videos</label>
								<input name="stfile" class="form-control" type="file">
							</div>
							<div class="form-group">
								<label for="">Status</label>
								<textarea name="status" class="form-control" name="" id="" ></textarea>
							</div>
							<div class="form-group">
								<button name="stsubmit" class="form-control btn btn-success" >Submit</button>
							</div>
						</form>
					</div>

					<div id="event">
						<?php
						if(isset($_POST['esubmit'])){
							
							 $ename = $_POST['ename'];
							 $edate = $_POST['edate'];
							 $epiname = $_POST['epiname'];
							 $eptitle = $_POST['eptitle'];
							 
							 
							 if(empty($ename) || empty($edate) || empty($epiname) || empty($eptitle) ){
							 	?> <script> alert('Field Must Not Be empty')</script>
							 	<?php
							 }else{
							 	
							 	 $conn-> query("UPDATE event set ename= '$ename' , edate='$edate',epiname='$epiname',eptitle='$eptitle' WHERE sl=1");
							 	 ?> <script> alert('Successfully Added Event!')</script>
							 	 <?php
								 }
							 
								}

							?>
						<h1>Upcomming Event:</h1>
						<form action="" method="POST">
							<div class="form-group">
								<label for="">Event Name</label>
								<input name="ename" class="form-control" type="text">
							</div>
							<div class="form-group">
								<label for="">Event Date</label>
								<input name="edate" class="form-control" type="date">
							</div>
							<div class="form-group">
								<label for="">Partner Institute Name</label>
								<input name="epiname" class="form-control" type="text">
							</div>
							<div class="form-group">
								<label for="">Partner Title</label>
								<input name="eptitle" class="form-control" type="text">
							</div>
							<div class="form-group">
								<button name="esubmit" class="form-control btn btn-success" >Submit</button>
							</div>
						</form>
					</div>
					<div id="profile">
						<?php
						if(isset($_POST['prosubmit'])){
							
							 $proimg_name = $_FILES['proimg']['name'];
							 $proimg_tmp = $_FILES['proimg']['tmp_name'];
							 $proimg_e = explode('.', $proimg_name);
							 $proimg_ext = end($proimg_e);
							 $proimg = time().".". $proimg_ext;

							 

							  $coverimg_name = $_FILES['coverimg']['name'];
							 $coverimg_tmp = $_FILES['coverimg']['tmp_name'];
							 $coverimg_e = explode('.', $coverimg_name);
							 $coverimg_ext = end($coverimg_e);
							 $coverimg = rand().".". $coverimg_ext;

							

							 if(empty($proimg_name) || empty($coverimg_name)){
							 	?> <script> alert('Field Must Not Be empty')</script>
							 	<?php
							 }else{
							 	move_uploaded_file($proimg_tmp, 'assets/images/profile/'.$proimg);
							 	 move_uploaded_file($coverimg_tmp, 'assets/images/profile/'.$coverimg);
							 	 $conn-> query("UPDATE profile SET proimg='$proimg' , coverimg='$coverimg' WHERE sl='0'");
							 	 ?> <script> alert('Successfully Updated Profile!')</script>
							 	 <?php
								 }
							 
								}

							?>
						<h1>Profile Update:</h1>
						<form action="" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label for="">Upload Profile Photo</label>
								<input name="proimg" class="form-control" type="file">
							</div>
							<div class="form-group">
								<label for="">Upload Cover Picture</label>
								<input name="coverimg" class="form-control" type="file">
							</div>
							
							<div class="form-group">
								<button name="prosubmit" class="form-control btn btn-success" >Submit</button>
							</div>
						</form>
					</div>
					<div id="delete">
						<h1>Delete Status:</h1>
						<?php 


							$st = $conn-> query("SELECT * FROM status");
							while($sta = $st->fetch_assoc()):
								
						?>
						<form action="" method="POST">
						<div style="border: 1px solid red;" class="h">
							<div style="padding: 3px; display: inline-block; width: 75%; " class="he"><p><?php echo $sta['sthead']?></p></div>
							<button  class="btn btn-danger"><a style="text-decoration: none;" href="assets/function/delete.php?sl=<?php echo $sta['sl'];?>">Delete
							</a></button>
						</div>
						</form>
					<?php endwhile;?>
					</div>
					<div id="myid">
						<h1>Edit Id</h1>
						<?php
							if(isset($_POST['update'])){
									$uname = $_POST['uname'];
									$uemail = $_POST['uemail'];
									$upass = $_POST['upass'];
									$uimg = $_FILES['uimg']['name'];
									$uimg_tmp = $_FILES['uimg']['tmp_name'];
									$uimg_e = explode('.',$uimg);
									$uimg_ext = end($uimg_e);

									$uimg_f = time().".".$uimg_ext;

									if(empty($uname) || empty($uemail)|| empty($upass)|| empty($uimg)){
							 	?> <script> alert('Field Must Not Be empty')</script>
							 	<?php
							 }else{
							 	 move_uploaded_file($uimg_tmp, 'assets/images/admin/'.$uimg_f);
							 	 
							 	$upsl = $_SESSION['name'];

							 	 $conn-> query("UPDATE admin SET name='$uname' , email='$uemail', password='$upass',image='$uimg_f' WHERE name= '$upsl'");
							 	
							 	 ?> <script> alert('Successfully Updated! Log in again!')</script>
							 	 <?php
								 	
								 }

							}


						?>
						<form action="" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label for="">Update Name</label>
								<input name="uname" value="<?php echo $_SESSION['name']?>" class="form-control" type="text">
							</div>
							<div class="form-group">
								<label for="">Update Email</label>
								<input name="uemail" value="<?php echo $_SESSION['email']?>" class="form-control" type="text">
							</div>
							<div class="form-group">
								<label for="">Update Password</label>
								<input name="upass" value="<?php echo $_SESSION['pass']?>" class="form-control" type="text">
							</div>
							<div class="form-group">
								<label for="uimg">Update New Photo</label>
								<input name="uimg" class="form-control" type="file">
							</div>
							
							<div class="form-group">
								<button name="update" class="form-control btn btn-success" >Update</button>
							</div>
						</form>
					</div>
					<div id="opinion">
						<h1>Messages:</h1>
						<?php

							$opp = $conn-> query("SELECT * FROM opinion ");
							while($opi = $opp->fetch_assoc()):

						?>
						<div style="width: 90%; border: 2px dotted green; margin:3px auto;" class="msg">
							<p>Message No: <?php echo $opi['sl']?></p>
							<p>Name: <?php echo $opi['oname']?></p>
							<p>Email: <?php echo $opi['oemail']?></p>
							<p>Text: <?php echo $opi['omsg']?></p>
						</div>
					<?php endwhile;?>
					</div>
					<div id="tdel">
						<h1>Delete Team Member:</h1>
						<?php 


							$te = $conn-> query("SELECT * FROM team");
							while($team = $te->fetch_assoc()):
								
						?>
						<form action="" method="POST">
						<div style="border: 1px solid red;" class="h">
							<div style="padding: 3px; display: inline-block; width: 75%; " class="he"><p><?php echo $team['tmname']?></p></div>
							<button  class="btn btn-danger"><a style="text-decoration: none;" href="assets/function/deleteteam.php?sl=<?php echo $team['sl'];?>">Delete
							</a></button>
						</div>
						</form>
					<?php endwhile;?>
					</div>

				
			</div>
		</div>
	</section>


	<footer>
		<div class="end">
			<h5 style="text-align: center; font-size: 20px;"><span style="color: blue">HEY! <?php echo $_SESSION['name']?>,</span>যদি কোনো সমস্যার সম্মুখিন হোন, ডেভেলপারকে কল করুণঃ 01521407782 / 01764034038</h5>
			<a style="color: ;" href="#" target="_blank"><h5 style="text-align: center; font-size: 20px; text-decoration: none;">ডেভেলপারকে ফেসবুকে খুঝুনঃ MD NAHID HASAN BHUIYAN</h5></a>
		</div>
	</footer>

	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	
	<script>
		$('.mid').tabs();
		$('mid').load();

		
	</script>
</body>
</html>