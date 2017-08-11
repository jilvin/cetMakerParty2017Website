<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login with Facebook in CodeIgniter by CodexWorld</title>
<style type="text/css">
h1{
	font-family:Arial, Helvetica, sans-serif;
	color:#999999;
}
.wrapper{width:600px; margin-left:auto;margin-right:auto;}
.welcome_txt{
	margin: 20px;
	background-color: #EBEBEB;
	padding: 10px;
	border: #D6D6D6 solid 1px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}
.fb_box{
	margin: 20px;
	background-color: #FFF0DD;
	padding: 10px;
	border: #F7CFCF solid 1px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}
.fb_box .image{ text-align:center;}
</style>
</head>
<body>
<?php
if(!empty($authUrl)) {
	echo '<a href="'.$authUrl.'"><img src="'.base_url().'assets/images/flogin.png" alt=""/></a>';
}else{
?>
<div class="wrapper">
    <h1>Facebook Profile Details </h1>
    <div class="welcome_txt">Welcome <b><?php echo $userData['first_name']; ?></b></div>
    <div class="fb_box">
		<p class="image"><img src="<?php echo $userData['picture_url']; ?>" alt="" width="300" height="220"/></p>
		<p><b>Facebook ID : </b><?php echo $userData['oauth_uid']; ?></p>
		<p><b>Name : </b><?php echo $userData['first_name'].' '.$userData['last_name']; ?></p>
		<p><b>Email : </b><?php echo $userData['email']; ?></p>
		<p><b>Gender : </b><?php echo $userData['gender']; ?></p>
		<p><b>Locale : </b><?php echo $userData['locale']; ?></p>
		<p><b>You are login with : </b>Facebook</p>
		<p><a href="<?php echo $userData['profile_url']; ?>" target="_blank">Click to Visit Facebook Page</a></p>
		<p><b>Logout from <a href="<?php echo $logoutUrl; ?>">Facebook</a></b></p>
    </div>
</div>
<?php } ?>
</body>
</html>