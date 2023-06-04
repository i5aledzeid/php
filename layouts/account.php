<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
     <link rel="stylesheet" type="text/css" href="../assets/css/style-account.css">
</head>
<body>
    <div class="container">
        <div class="profile-box">
            <img src="../assets/images/menu_lines_hamburger_icon.png" alt="menu" class="menu-icon">
            <img src="../assets/images/white_close_exit_logout_power_icon.png" alt="settings" class="settings-icon">
            <img src="../assets/images/favicon6.ico" alt="profile-image" class="profile-image">
            <h3><?php echo $_SESSION['name']; ?></h3>
            <p>Chief Executive Officer (CEO)</p>
            <div class="social-media">
                <img src="../assets/images/applications_facebook_media_social_icon.png" alt="facebook">
                <img src="../assets/images/1298770_twitter_bird_social media_tweet_icon.png" alt="twitter">
                <img src="../assets/images/tiktok_logo_social media_icon.png" alt="tiktok">
            </div>
            <button type="button">متابعة</button>
            <div class="profile-bottom">
                <p>للمزيد عن الحساب ، كما يمكنك <a href="../logout.php">تسجيل خروج</a></p>
                <img src="../assets/images/down_arrow_icon.png" alt="">
            </div>
        </div>
    </div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>