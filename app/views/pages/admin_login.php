<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mount Meru - Administrator Access Control</title>
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">    
    <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
</head>
<body>

<style>
    








    body {
	margin: 0;
	font-family: verdana;
}
/*======================
    GLOVAL CSS IS HERE !
========================
*/
.w-50 {
	width: 50%;
	/* float: left; */
}
/*
========================
    GLOVAL CSS IS END !
========================
*/

/*
=================================
    main-contend-section start  !
=================================
*/
.main-contend-section {
	background-color: #f0f2f5;
	padding: 130px 0 184px 0;
}

.main-container {
	overflow: hidden;
	width: 80%;
	margin: auto;
}

.main-contend-section .logo img {
  display: flex;
  justify-content: center;
	max-width: 100px;
	margin-top: 15px;
	margin-left: auto;
  margin-right:auto;
  margin-bottom: 8px;
}

.main-contend-section .fb-tag-line h3 {
	color: #1c1e21;
	font-size: 16.1px;
	font-weight: normal;
	margin: 0;
	margin-left: 50px;
	margin-top: -10px;
}

.main-contend-section .form-section {
	width: 396px;
	background-color: #ffffff;
	padding: 16px 16px 0;
	border-radius: 8px;
	box-sizing: border-box;
	margin-left: 90px;
	margin-top: 2px;
	box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.1);
}

.main-contend-section .form-section input[type="email"] {
	padding: 15px 0 17px 16px;
	width: 100%;
	display: block;
	box-sizing: border-box;
	font-size: 16px;
	border-radius: 6px;
	border: 1px solid #dddfe2;
	margin-bottom: 12px;
	font-family: arial;
}
.main-contend-section .form-section input[type="password"] {
	padding: 15px 0 17px 16px;
	width: 100%;
	display: block;
	box-sizing: border-box;
	font-size: 16px;
	border-radius: 6px;
	border: 1px solid #dddfe2;
	margin-bottom: 12px;
	font-family: arial;
}

::placeholder {
	color: #1d2129;
}

.main-contend-section .form-section input[type="text"]:focus,
.main-contend-section .form-section input[type="password"]:focus {
	border-color: #1877f2;
	box-shadow: 0 0 0 2px #e7f3ff;
	outline: none;
}

.main-contend-section .form-section input[type="submit"] {
	background-color: #1877f2;
	padding: 11px 0 12px 0;
	width: 100%;
	box-sizing: border-box;
	border: 1px solid #1877f2;
	border-radius: 6px;
	font-size: 20px;
	color: #ffffff;
	font-weight: bold;
	font-family: arial;
}

.main-contend-section .form-section input[type="submit"]:hover {
	background-color: #166fe5;
}

.main-contend-section .form-section input[type="submit"]:focus {
	box-shadow: 0 0 1px 2px rgba(88, 144, 255, 0.75), 0 1px 1px rgba(0, 0, 0, 0.15);
	outline: none;
}

.main-contend-section .form-section a[class="forgot"] {
	text-align: center;
	color: #1877f2;
	font-size: 14px;
	display: block;
	font-family: arial;
	text-decoration: none;
	margin-top: 16px;
}

.main-contend-section .form-section a[class="forgot"]:hover {
	text-decoration: underline;
}

.main-contend-section .form-section .line {
	border-top: 1px solid #dadde1;
	margin-top: 22px;
}

.main-contend-section .form-section a[class="create-new-acc"] {
	background-color: #42b72a;
	padding: 13px 6px 15px 6px;
	width: 54%;
	box-sizing: border-box;
	border-radius: 6px;
	font-size: 17px;
	color: #ffffff;
	font-weight: bold;
	font-family: arial;
	display: inline-block;
	border: none;
	text-decoration: none;
	text-align: center;
	margin: 26px 0 24px 83px;
}

.main-contend-section .form-section a[class="create-new-acc"]:hover {
	background-color: #36a420;
}

.main-contend-section .form-section a[class="create-new-acc"]:focus {
	box-shadow: 0 0 1px 2px rgba(88, 144, 255, 0.75), 0 1px 1px rgba(0, 0, 0, 0.15);
	outline: none;
}

.main-contend-section .create-page p {
	font-size: 14px;
	text-align: center;
	margin-top: 28px;
	margin-left: 38px;
	font-family: arial;
	color: #1c1e21;
}

.main-contend-section .create-page p > a {
	text-decoration: none;
	color: #1c1e21;
	font-weight: bold;
}

.main-contend-section .create-page p > a:hover {
	text-decoration: underline;
}

/*
=================================
    main-contend-section end    !
=================================
*/

/*
=================================
    footer-section start        !
=================================
*/

.footer-section {
	background-color: #ffffff;
}

.footer-section .footer-container {
	width: 80%;
	margin: auto;
	overflow: hidden;
	box-sizing: border-box;
	padding: 25px 0 0 0;
}

.footer-section .footer-container ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

.footer-section .language-section {
	font-size: 12px;
	font-family: arial;
	margin-left: 50px;
}

.footer-section .footer-container .language-section li {
	display: inline;
	color: #737373;
	margin-right: 8px;
}

.footer-section .footer-container .language-section li > a {
	color: #8a8d91;
	text-decoration: none;
}

.footer-section .footer-container .language-section .add-more-icon {
	color: #626978;
	width: 25px;
	height: 18px;
	border: 1px solid #ccd0d5;
	display: inline-block;
	text-align: center;
	font-size: 18px;
	text-decoration: none;
	background-color: #f5f6f7;
}

.footer-section .footer-container .language-section .add-more-icon:focus {
	box-shadow: 0 0 1px 2px rgba(88, 144, 255, 0.75), 0 1px 1px rgba(0, 0, 0, 0.15);
	outline: none;
}

.footer-section .footer-container .language-section .add-more-icon:hover {
	text-decoration: none;
}

.footer-section .footer-container .language-section li > a:hover {
	text-decoration: underline;
}

.footer-section .other-pages-link .line {
	border-top: 1px solid #dddfe2;
	width: 980px;
	margin: 10px 0 5px 0;
}

.footer-section .other-pages-link li {
	display: inline;
	font-size: 12px;
	font-family: arial;
	margin-right: 15px;
}

.footer-section .other-pages-link {
	margin-left: 50px;
	padding-right: 50px;
	box-sizing: border-box;
}

.footer-section .other-pages-link li > a {
	text-decoration: none;
	color: #8a8d91;
}

.footer-section .other-pages-link li > a:hover {
	text-decoration: underline;
}

.footer-section .other-pages-link li > a > .ad-icon {
	width: 14px;
	box-sizing: border-box;
	padding-left: 3px;
	display: inline-block;
}

.footer-section .other-pages-link li > a > .ad-icon img {
	width: 100%;
}

.footer-section .copywrite {
	font-size: 11px;
	color: #737373;
	margin: 0;
	margin-left: 50px;
	font-family: arial;
	margin-top: 20px;
	margin-bottom: 20px;
}

/*
=================================
    Responsive part start        !
=================================
*/
body {
	margin: 0;
}
/*THIS IS FOR 4K MONITOR*/
@media only screen and (min-width: 2560px) {
	.main-contend-section .form-section {
		margin-left: 325px;
	}

	.main-contend-section .fb-tag-line h3 {
		font-size: 45.1px;
	}

	.main-contend-section .logo img {
	width: 200px;
	margin-top: 25px;
	margin-left: 22px;
        }

	.main-contend-section .form-section {
		margin-left: 200px;
		width: 631px;
		padding: 20px 20px 0;
	}

	.main-contend-section .form-section input[type="text"] {
		padding: 22px 0 23px 22px;
		font-size: 24px;
		margin-bottom: 18px;
	}

	.main-contend-section .form-section input[type="password"] {
		padding: 22px 0 23px 22px;
		font-size: 24px;
		margin-bottom: 18px;
	}

	.main-contend-section .form-section input[type="submit"] {
		padding: 18px 0 19px 0;
		font-size: 30px;
	}

	.main-contend-section .form-section a[class="forgot"] {
		font-size: 22px;
		margin-top: 22px;
	}

	.main-contend-section .form-section a[class="create-new-acc"] {
		padding: 18px 17px 19px 21px;
		width: 61%;
		margin: 31px 0 35px 125px;
		font-size: 30px;
	}

	.footer-section .language-section {
		font-size: 18px;
	}

	.footer-section .other-pages-link {
		font-size: 18px;
	}

	.footer-section .copywrite {
		font-size: 18px;
	}
}

/*THIS IS FOR DESTOP 1440px MONITOR*/
@media only screen and (max-width: 1440px) {
	.main-contend-section .form-section {
		margin-left: 105px;
	}
}
@media only screen and (min-width: 1024px) and (max-width: 1230px) {
	.main-contend-section .form-section {
		width: 361px;
		margin-left: 40px;
		margin-top: 2px;
	}
}
/*THIS IS FOR 1024 px MONITOR*/
@media only screen and (max-width: 1024px) {
	.main-contend-section .logo img {
		width: 250px;
	}

	.main-contend-section .fb-tag-line h3 {
		font-size: 18.1px;
	}

	.main-contend-section .form-section {
		width: 325px;
		margin-left: 60px;
	}

	.main-contend-section .form-section input[type="text"] {
		padding: 13px 0 12px 12px;
	}

	.main-contend-section .form-section input[type="password"] {
		padding: 13px 0 12px 12px;
	}

	.main-contend-section .form-section input[type="submit"] {
		padding: 7px 0 8px 0;
	}

	.main-contend-section .form-section .line {
		margin-top: 14px;
	}

	.main-contend-section .form-section a[class="create-new-acc"] {
		width: 65%;
		margin: 13px 0 16px 60px;
		padding: 11px 6px 11px 6px;
	}
}

@media only screen and (max-width: 965px) and (min-width: 769px) {
	.main-contend-section .fb-tag-line h3 {
		font-size: 18.1px;
		margin-left: 44px;
	}

	.main-contend-section .logo img {
		width: 220px;
	}

	.main-contend-section .form-section {
		width: 298px;
		margin-left: 10px;
	}

	.main-contend-section .form-section a[class="create-new-acc"] {
		width: 67%;
		margin: 11px 0 13px 53px;
		padding: 11px 6px 11px 6px;
	}

	.main-contend-section .create-page p {
		font-size: 12px;
		margin-top: 19px;
		margin-left: 3px;
		font-weight: lighter!important;
	}
}
/*THIS IS FOR TABLETS DISPLAY*/
@media only screen and (max-width: 768px) {
	.main-contend-section .w-50 {
		float: none;
		width: 100%;
	}

	.main-contend-section {
		padding: 0 0 90px 0;
	}

	.main-contend-section .logo img {
		width: 300px;
		margin-left: 157px;
		margin-top: 12px;
	}

	.main-contend-section .fb-tag-line h3 {
		font-size: 29px;
	}

	.fb-tag-line {
		margin: 0 0 30px 8px;
	}

	.main-contend-section .form-section {
		width: 395px;
		margin-left: 110px;
	}

	.main-contend-section .form-section input[type="text"] {
		padding: 15px 0 17px 16px;
	}

	.main-contend-section .form-section input[type="password"] {
		padding: 15px 0 17px 16px;
	}

	.main-contend-section .form-section input[type="submit"] {
		padding: 11px 0 12px 8px;
	}

	.main-contend-section .form-section .line {
		margin-top: 16px;
	}

	.main-contend-section .form-section a[class="create-new-acc"] {
		margin: 20px 0 18px 62px;
		padding: 14px 6px 14px 6px;
	}

	.main-contend-section .create-page p {
		margin-left: 0;
	}

	.footer-section .footer-container {
		width: 94%;
	}

	.footer-section .other-pages-link .line {
		width: 620px;
	}

	.footer-section .other-pages-link li {
		margin-right: 8px;
	}
}
@media only screen and (max-width: 680px) {
	.main-contend-section .logo img {
		width: 260px;
	}

	.fb-tag-line {
		margin: 0 0 30px 0px;
	}
	.main-contend-section .form-section {
		width: 395px;
		margin-left: 80px;
	}
	.main-contend-section .fb-tag-line h3 {
		font-size: 28px;
	}
}

@media only screen and (max-width: 620px) {
	.main-contend-section .fb-tag-line h3 {
		font-size: 25px;
	}

	.main-contend-section .logo img {
		width: 280px;
		margin-left: 125px;
	}

	.main-contend-section .form-section {
		width: 380px;
		margin-left: 60px;
	}
}

@media only screen and (max-width: 530px) {
	.main-contend-section .logo img {
		width: 260px;
		margin-left: 92px;
	}

	.fb-tag-line {
		margin: 0 0 30px -6px;
	}

	.main-contend-section .fb-tag-line h3 {
		font-size: 21px;
	}

	.main-contend-section .form-section {
		width: 350px;
		margin-left: 33px;
	}
}

@media only screen and (max-width: 500px) {
	.main-contend-section .form-section {
		width: 370px;
		margin-left: 16px;
	}

	.main-contend-section .logo img {
		width: 250px;
		margin-left: 75px;
	}

	.main-contend-section .fb-tag-line h3 {
		font-size: 20px;
	}

	.main-contend-section .fb-tag-line h3 {
		margin-left: 25px;
	}
}

@media only screen and (max-width: 480px) {
	.main-contend-section .logo img {
		width: 250px;
		margin-left: 87px;
	}
	.main-contend-section .fb-tag-line h3 {
		font-size: 20px;
	}
	.fb-tag-line {
		margin: 0 0 25px -8px;
	}
	.main-contend-section .form-section {
		width: 340px;
		margin-left: 30px;
	}
}
/*THIS IS FOR MOBAILES DISPLAY*/
@media only screen and (max-width: 425px) {
	.main-contend-section {
		padding: 0 0 40px 0;
	}

	.main-contend-section .logo img {
		width: 210px;
		margin-left: 70px;
	}

	.main-contend-section .fb-tag-line h3 {
		font-size: 18px;
	}

	.fb-tag-line {
		margin: 5px 0 30px 0;
	}

	.main-contend-section .form-section {
		width: 320px;
		margin-left: 10px;
	}

	.main-contend-section .form-section input[type="text"] {
		padding: 11px 0 13px 12px;
		font-size: 14px;
	}

	.main-contend-section .form-section input[type="password"] {
		padding: 11px 0 13px 12px;
		font-size: 14px;
	}

	.main-contend-section .form-section input[type="submit"] {
		padding: 7px 0 8px 4px;
		font-size: 19px;
	}

	.main-contend-section .form-section a[class="forgot"] {
		margin-top: 12px;
		font-size: 13px;
	}

	.main-contend-section .form-section .line {
		margin-top: 12px;
	}

	.main-contend-section .form-section a[class="create-new-acc"] {
		font-size: 15px;
		margin: 15px 0 13px 56px;
		padding: 12px 6px 12px 6px;
	}
}

@media only screen and (max-width: 375px) {
	.main-container {
		width: 91%;
	}

	.footer-section .language-section {
		margin-left: 22px;
	}

	.footer-section .other-pages-link {
		margin-left: 22px;
	}

	.footer-section .other-pages-link .line {
		width: 300px;
	}

	.footer-section .copywrite {
		margin-left: 22px;
	}
}

@media only screen and (max-width: 320px) {
	.main-contend-section .fb-tag-line h3 {
		font-size: 17px;
	}

	.main-contend-section .form-section {
		width: 303px;
	}
}

@media only screen and (max-width: 320px) {
	.main-contend-section {
		padding: 0 0 25px 0;
	}

	.footer-section .footer-container {
		padding: 18px 0 0 0;
	}

	.main-container {
		width: 90%;
	}

	.main-contend-section .logo img {
		width: 200px;
		margin-left: 50px;
	}

	.fb-tag-line {
		margin: 5px 0 30px -13px;
	}

	.main-contend-section .fb-tag-line h3 {
		font-size: 16px;
	}

	.main-contend-section .form-section {
		width: 278px;
		margin-left: 5px;
	}

	.footer-section .language-section {
		margin-left: 20px;
	}

	.footer-section .other-pages-link {
		margin-left: 20px;
	}

	.footer-section .other-pages-link .line {
		width: 260px;
	}

	.footer-section .copywrite {
		margin-left: 20px;
	}
}


</style>

<?php //echo md5('adam@gmail.com');?>

   <!--
	  MAIN CONTENT STRAT
                        -->
<div class="main-contend-section">
	<div class="main-container">
		<div class="w-50">
			<!-- <div class="logo">
<img src="assets/img/2.png" alt="...">
			</div>
			 -->
		</div>
		<div style="margin-left: auto; margin-right:auto;" class="w-50">
			<div class="form-section">
				<form action="<?php echo URL('admin_login');?>" method="POST">
				<div class="logo">
<img src="assets/img/2.png" alt="...">
			</div>
			
				
				<h3 style="background-color:#4a5772a6; color:#fff; padding:10px; 
				           border-radius:5px; text-transform: uppercase; font-size:small;" 
				    id="tnk">Welcome to Mount Meru Group Administrator account.</h3>
					
					<input required autocomplete="off" type="email" name="email" id="email-or-number" <?php
          if (!empty($data)) {?>
            value="<?php echo $data['post_email'];?>"
          <?php } ?> placeholder="Email address">
					<input type="password" name="password" id="password" placeholder="Password" required>
          <span 
        <?php 
              if (isset($data['password'])) {?>
                style="background-color:crimson; color: #fff; border-radius:6px; padding:5px;"
              <?php } else {?>
                style="display:none;"
              <?php }
        ?>>
        <?php echo $data['password'] ?? '';?></span>
					<input type="submit" value="Login" style="margin-bottom:20px; margin-top:20px;" name="login" id="submit">
					<!-- <a href="#" target="_self" class="forgot">Forgotten password?</a> -->
				</form>
			</div>
			<div style="display:flex; justify-content:center;">
				<p><a style="text-decoration:none; font-size:smaller; color:#1d2129;" href="#">Login To Administrator System.</p>
			</div>
		</div>
	</div>
</div>
<!--
	  MAIN CONTENT END
	                  -->

<!--
	  FOOTER CONTENT STRAT
	                     -->
<div class="footer-section">
	<div class="footer-container">
		<div class="language-section">
			<ul>
				<li>English (UK)</li>
				<li><a href="#" target="_self">বাংলা</a></li>
				<li><a href="#" target="_self">অসমীয়া</a></li>
				<li><a href="#" target="_self">हिन्दी</a></li>
				<li><a href="#" target="_self">Bahasa Indonesia</a></li>
				<li><a href="#" target="_self">नेपाली</a></li>
				<li><a href="#" target="_self">中文(简体)</a></li>
				<li><a href="#" target="_self">العربية</a></li>
				<li><a href="#" target="_self">Bahasa Melayu</a></li>
				<li><a href="#" target="_self">Español</a></li>
				<li><a href="#" target="_self">Português (Brasil)</a></li>
				<li><a href="#" target="_self" class="add-more-icon">+</a></li>
			</ul>
		</div>
		<div class="other-pages-link">
			<div class="line"></div>
			<ul>
				<li><a href="#" target="_self">Sign Up</a></li>
				<li><a href="#" target="_self">Log In</a></li>
				<li><a href="#" target="_self">Messenger</a></li>
				<li><a href="#" target="_self">Facebook Lite </a></li>
				<li><a href="#" target="_self">Watch </a></li>
				<li><a href="#" target="_self">People</a></li>
				<li><a href="#" target="_self">Pages</a></li>
				<li><a href="#" target="_self">Page categories</a></li>
				<li><a href="#" target="_self">Places</a></li>
				<li><a href="#" target="_self">Games</a></li>
				<li><a href="#" target="_self">Locations</a></li>
				<li><a href="#" target="_self">Marketplace</a></li>
				<li><a href="#" target="_self">Facebook Pay</a></li>
				<li><a href="#" target="_self">Groups</a></li>
				<li><a href="#" target="_self">Jobs</a></li>
				<li><a href="#" target="_self">Oculus</a></li>
				<li><a href="#" target="_self">Portal</a></li>
				<li><a href="#" target="_self">Instagram</a></li>
				<li><a href="#" target="_self">Local</a></li>
				<li><a href="#" target="_self">Fundraisers</a></li>
				<li><a href="#" target="_self">Services</a></li>
				<li><a href="#" target="_self">Voting Information Centre</a></li>
				<li><a href="#" target="_self">About</a></li>
				<li><a href="#" target="_self">Create ad</a></li>
				<li><a href="#" target="_self">Create Page</a></li>
				<li><a href="#" target="_self">Developers</a></li>
				<li><a href="#" target="_self">Careers</a></li>
				<li><a href="#" target="_self">Privacy</a></li>
				<li><a href="#" target="_self">Cookies</a></li>
				<li><a href="#" target="_self">AdChoices<div class="ad-icon"><img src="https://res.cloudinary.com/drgxflcsb/image/upload/v1681242146/facebook%20clone/ad-icon_k9ged1.png" alt="ad-icon"></div></a></li>
				<li><a href="#" target="_self">Terms</a></li>
				<li><a href="#" target="_self">Help</a></li>
			</ul>
		</div>
		<div class="copywrite">
			<p>Facebook &copy; 2023</p>
		</div>
	</div>
</div>









   
      
      
      
<?php 
// Wrong email or password   
if(isset($data['error'])){?>
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Wrong Email or Password'
    });
</script>
<?php }?>
<?php 

if(isset($data['alert'])){?>
    <script>
        Swal.fire({
            icon: '<?php echo $data['icon'];?>',
            title: '<?php echo $data['title'];?>',
            text: '<?php echo $data['alert'];?>'
        });
    </script>
<?php }?>
<script>
const loader = document.querySelector('.loader');
const contents = document.querySelector('.contents');

function init() {
setTimeout(() => {
loader.style.opacity = 0;
loader.style.display = 'none';

contents.style.display = 'block';
setTimeout(() => (contents.style.opacity = 1), 50);
}, 4000);
}

init();
</script>
<!-- <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script> -->
</body>
</html>