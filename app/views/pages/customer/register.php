

    <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
    <!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<style>
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, 
pre, form, fieldset, input, textarea, p, blockquote, th, td { 
  padding:0;
  margin:0;}

fieldset, img {border:0}

ol, ul, li {list-style:none}

:focus {outline:none}

body,
input,
textarea,
select {
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  color: #4c4c4c;
}

p {
  font-size: 12px;
  width: 150px;
  display: inline-block;
  margin-left: 18px;
}
h1 {
  font-size: 32px;
  font-weight: 300;
  color: #4c4c4c;
  text-align: center;
  padding-top: 10px;
  margin-bottom: 10px;
}

html{
  background-color: #ffffff;
}

.testbox {
  margin: 20px auto;
  width: 543px; 
  height: 664px; 
  -webkit-border-radius: 8px/7px; 
  -moz-border-radius: 8px/7px; 
  border-radius: 8px/7px; 
  background-color: #ebebeb; 
  -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  border: solid 1px #cbc9c9;
}

input[type=radio] {
  visibility: hidden;
}

form{
  margin: 0 30px;
}

label.radio {
	cursor: pointer;
  text-indent: 35px;
  overflow: visible;
  display: inline-block;
  position: relative;
  margin-bottom: 15px;
}

label.radio:before {
  background: #3a57af;
  content:'';
  position: absolute;
  top:2px;
  left: 0;
  width: 20px;
  height: 20px;
  border-radius: 100%;
}

label.radio:after {
	opacity: 0;
	content: '';
	position: absolute;
	width: 0.5em;
	height: 0.25em;
	background: transparent;
	top: 7.5px;
	left: 4.5px;
	border: 3px solid #ffffff;
	border-top: none;
	border-right: none;

	-webkit-transform: rotate(-45deg);
	-moz-transform: rotate(-45deg);
	-o-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	transform: rotate(-45deg);
}

input[type=radio]:checked + label:after {
	opacity: 1;
}

hr{
  color: #a9a9a9;
  opacity: 0.3;
}

input[type=text], select, input[type=password]{
  width: 400px; 
  height: 39px; 
  -webkit-border-radius: 0px 4px 4px 0px/5px 5px 4px 4px; 
  -moz-border-radius: 0px 4px 4px 0px/0px 0px 4px 4px; 
  border-radius: 0px 4px 4px 0px/5px 5px 4px 4px; 
  background-color: #fff; 
  -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  border: solid 1px #cbc9c9;
  margin-left: -5px;
  margin-top: 13px; 
  padding-left: 10px;
}

input[type=password]{
  margin-bottom: 25px;
}

#icon {
  display: inline-block;
  width: 30px;
  background-color: #3a57af;
  padding: 8px 0px 8px 15px;
  margin-left: 15px;
  -webkit-border-radius: 4px 0px 0px 4px; 
  -moz-border-radius: 4px 0px 0px 4px; 
  border-radius: 4px 0px 0px 4px;
  color: white;
  -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09);
  -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  border: solid 0px #cbc9c9;
}

.gender {
  margin-left: 30px;
  margin-bottom: 30px;
}

.accounttype{
  margin-left: 8px;
  margin-top: 20px;
}

button {
  font-size: 14px;
  font-weight: 600;
  color: white;
  display: inline-block;
  float: right;
  text-decoration: none;
  width: 50%; 
  height: 35px; 
  -webkit-border-radius: 5px; 
  -moz-border-radius: 5px; 
  border-radius: 5px; 
  background-color: #3a57af; 
  top: 0px;
  position: relative;
}

a.button:hover {
  top: 3px;
  background-color:#2e458b;
  -webkit-box-shadow: none; 
  -moz-box-shadow: none; 
  box-shadow: none;
  
}


</style>
</head>
<link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">    
<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">

<div class="testbox">
<h1><img height="50px" width="50px" src="assets/img/2.png" alt="..."></h1>
  <h1>Mount Meru</h1>
  
  <small style="display:flex; justify-content:center;">Online Customer Registration</small>

  <form method="POST" action="<?php echo URL('register');?>">
  <hr>
  <label id="icon" for="name"><i class="bi bi-person"></i></label>
  <input type="text" name="fname" placeholder="First Name" required/>

  <label id="icon" for="name"><i class="bi bi-person"></i></label>
  <input type="text" name="sname" placeholder="Surname" required/>

  <label id="icon" for="name"><i class="bi bi-envelope"></i></label>
  <input type="text" name="email" id="name" placeholder="Email" required/>

  <label id="icon" for="name"><i class="bi bi-telephone"></i></label> 
  <input type="text" name="phone" id="name" placeholder="Contact" required/>

  <label id="icon" for="name"><i class="bi bi-map"></i></label>
  <input type="text" name="location" id="name" placeholder="Location" required/>

  <label id="icon" for="name"><i class="bi bi-droplet"></i></label>
  <select name="stn" id="" required>
  <option value=""> --- Select Gas Station To be allocated --- </option>
    <option value="a">Area 25 Gas Station</option>
    <option value="b">Area 49 Gas Station</option>
  </select>
  <label id="icon" for="name"><i class="bi bi-key"></i></label>
  <input type="password" name="password" id="name" placeholder="Password" required/>
  <!-- <span><?php echo $data['errors']['password'];?></span> -->

  <button type="submit" name="register" class="button"><i class="bi bi-send"></i> Register</button> 
  <p>Already have an account? <a style="text-decoration: none;" href="<?php echo URL('enduser');?>">Login</a>.</p>
  </form>
</div>

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
