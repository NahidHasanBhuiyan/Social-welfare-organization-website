<?php include_once("assets/function/func.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Timeline || FFPBD</title>
	<link rel="shortcut icon" type="image/icon" href="assets/images/l.png"/>
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/timeline.css">
</head>
<body>
	
		
		
	
		
	
		<div class="mid" style="width: 72%">

			<div style="height: 500px;" class="header">
				<?php 
					$pro = $conn->query("SELECT * FROM profile");
					$proo = $pro->fetch_assoc();

				?>
				<div class="cover">
					<img src="assets/images/profile/<?php echo $proo['coverimg']?>" alt="">
					<div class="profilepic">
						<img src="assets/images/profile/<?php echo $proo['proimg']?>" alt="">
					</div>
					<div class="timelinename"><h2 style="color: orange; ">Fight For Poverty Bangladesh</h2></div>
				</div>
				
			</div>
			<div class="footer">
			
			<?php

				$stat = $conn->query("SELECT * FROM status ORDER BY sl DESC");
				while($status=$stat->fetch_assoc()):



			?>
			<div class="status">
				<div class="bname">
					<img src="assets/images/logof2.png" alt="">
					<div class="b">
					<h2>"<?php echo $status['sthead']?>"</h2>
					<p><?php echo $status['stdate']?> at <?php echo $status['sttime']?></p>
					</div>
				</div>
				<?php 

					
					$fileext = $status['fileext'];

					if(in_array($fileext , ['jpg','jpeg','png','gif'])== true){?>
						<div class="stimg">
					<a href="assets/images/status/<?php echo $status['stfile']?>"><img src="assets/images/status/<?php echo $status['stfile']?>" alt=""></a>
				</div>
					<?php }else{ ?>
						<div class="stimg">
					
					<video controls="" src="assets/images/status/<?php echo $status['stfile']?>"></video>
				</div>
					<?php }





				 ?>
				

				<div class="stlike">
					<button ><i class="fas fa-comments-dollar"></i> Like</button>
					<a href="javascript:void(0);" onclick="fb_share('http://www.ffpbd.ml/sharer.php?id=<?php echo $status['sl']; ?>', '<?php echo $status['sthead']; ?>')" class="fbBtm">facebook Share</a>

				</div>
				<div class="stst">
					<p><?php echo $status['status']?></p>
				</div>
				
			</div>
		<?php endwhile;?>

			
			
			</div>
		</div>
	
	
		<div class="right-r" style="width: 25%; height: 2000px;">
			<ul style="color: #FFF; text-align: center;">
					<li style="color: #FFF; padding: 2px; text-decoration: none"><a href="">Admin Panel</a></li>
					<li style="color: #FFF; padding: 2px; text-decoration: none"><a href="">Main Website</a></li>
			</ul>
				
				
			
			<div class="donate">
				<h2 style="text-align: center; padding: 5px;">Donate Here</h2>
			</div>
			<div class="donate">
				<p style="padding: 10px;">Bangladeshi Accounts:</p>
			</div>
			<div class="bkash">
				<div class="bimg">
					<img src="assets/images/bkash.png" alt="">
				</div>
				<div class="bnum">
					<ul>
						<li><a style="padding: 15px;" href="">+8801775627044</a></li>
						<li><a style="padding: 15px;" href="">+8801920770100 (Personal)</a></li>
					</ul>
				</div>
			</div>
			<div class="rocket">
				<div class="rimg">
					<img src="assets/images/rocket.png" alt="">
				</div>
				<div class="rnum">
					<ul>
						<li><a style="padding: 15px;" href="">+8801775627044</a></li>
						<li><a style="padding: 15px;" href="">+8801775627045</a></li>
						<li><a style="padding: 15px;" href="">+8801775627046</a></li>
						<li><a style="padding: 15px;" href="">+8801920770100(+7)</a></li>
					</ul>
				</div>
			</div>
			<div class="bank">
				<div class="bankimg">
					<img src="assets/images/bank.png" alt="">
				</div>
				<div class="banknum">
					<ul>
						<li><a style="padding: 15px;" href="">Sonali Bank AC NO.</a></li>
						<li><a style="padding: 15px;" href="">2330 9010 12409</a></li>
					</ul>
				</div>
			</div>
			<div class="paypal">
				<div class="pimg">
					<img src="assets/images/paypal.png" alt="">
				</div>
				<div class="pnum">
					<ul>
						<li><a style="padding: 15px;" href="">Comming Soon</a></li>
						<li><a style="padding: 15px;" href="">Comming Soon</a></li>
					</ul>
				</div>
			</div>
			<div class="event">
				<?php

					$eve = $conn-> query("SELECT * FROM event WHERE sl=1");
					$event = $eve->fetch_assoc();


				?>
				<h2 style="text-align: center;">Upcomming Event</h2>
				<p>Event Name: <span><?php echo $event['ename'] ?></span></p>
				<p>Date: <span><?php echo $event['edate'] ?></span></p>
				<p>Main Partner: <span><?php echo $event['epiname'] ?></span></p>
				<p>Partner Title: <span><?php echo $event['eptitle'] ?></span></p>
			</div>
		</div>
		
		<script src="assets/js/jquery-3.2.1.min.js"></script>
		<script>
			$('button').click(function(){
				$(this).html('<p style="background-color:green">Liked</p>');
			});
			$('a button').click(function(){
				$(this).html('<p style="background-color:green">Shared</p>');
			});
		
			(function (d, s, id) {
			        var js, fjs = d.getElementsByTagName(s)[0];
			        if (d.getElementById(id))
			            return;
			        js = d.createElement(s);
			        js.id = id;
			        js.src = "https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=580378915933022";
			        fjs.parentNode.insertBefore(js, fjs);
			    }(document, 'script', 'facebook-jssdk'));

			function fb_share(dynamic_link,dynamic_title) {
			    var app_id = '580378915933022';
			    var pageURL="https://www.facebook.com/dialog/feed?app_id=" + app_id + "&link=" + dynamic_link;
			    var w = 600;
			    var h = 400;
			    var left = (screen.width / 2) - (w / 2);
			    var top = (screen.height / 2) - (h / 2);
			    window.open(pageURL, dynamic_title, 'toolbar=no, location=no, directories=no, status=no, menubar=yes, scrollbars=no, resizable=no, copyhistory=no, width=' + 800 + ', height=' + 650 + ', top=' + top + ', left=' + left)
			    return false;
			}
		</script>

</body>
</html>