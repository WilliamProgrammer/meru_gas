<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mount Meru Group - Login</title>
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">  
    <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
</head>
<body>

<style>
    

body {
  /* background-image: linear-gradient(#fe7763, #fc3a5d); */
  background-color: #212934;
  background-repeat: no-repeat;
  background-attachment: fixed;
  height: 100%;
  margin: 0;
  display: flex;
  align-items: center;
  color: white;
  font-family: "Montserrat", sans-serif;
  font-size: 14px;
  justify-content: center;
}

a {
  color: white;
  text-decoration: none;
  font-weight: bold;
  outline: none;
  transition: all 0.2s;
}

a:hover,
a:focus {
  color: #fdc654;
  transition: all 0.2s;
}

html {
  height: 100%;
}

.login-card {
  padding: 32px 32px 0;
  box-sizing: border-box;
  text-align: center;
  width: 100%;
  display: flex;
  height: 100%;
  max-height: 740px;
  max-width: 350px;
  flex-direction: column;
}

.login-card-content {
  flex-grow: 2;
  justify-content: center;
  display: flex;
  flex-direction: column;
}

.login-card-footer {
  padding: 32px 0;
}

h2 .highlight {
  color: crimson;
}

h2 {
  font-size: 28px;
  margin: 0;
}

h3 {
  color: dodgerblue;
  font-size: 14px;
  line-height: 18px;
  margin: 0;
}

.header {
  margin-bottom: 50px;
}

.logo {
  border-radius: 40px;
  width: 200px;
  height: 200px;
  display: flex;
  justify-content: center;
  margin: 0 auto 16px;
  background: rgba(255, 255, 255, 0.1);
  align-items: center;
}

button {
  background: dodgerblue;
  display: block;
  color: #fff;
  width: 100%;
  border: none;
  border-radius: 40px;
  padding: 12px 0;
  text-transform: uppercase;
  font-weight: bold;
  margin-bottom: 32px;
  outline: none;
}

button:hover {
    background: white;
    color: #000;
}

.form-field {
  margin-bottom: 16px;
  width: 100%;
  position: relative;
}

.form-field .icon {
  position: absolute;
  background: white;
  color: #000;
  left: 0;
  top: 0;
  display: flex;
  align-items: center;
  height: 100%;
  width: 40px;
  height: 40px;
  justify-content: center;
  border-radius: 20px;
}

.form-field .icon:after {
  content: "";
  display: block;
  width: 0;
  height: 0;
  border: 12px solid transparent;
  border-left: 12px solid white;
  position: absolute;
  top: 8px;
  right: -20px;
}

.form-field input {
  border: 1px solid rgba(255, 255, 255, 0.2);
  text-align: center;
  width: 100%;
  border-radius: 16px;
  height: 36px;
  background: rgba(255, 255, 255, 0.1);
  color: white;
  outline: none;
  transition: all 0.2s;
}

.form-field input::placeholder {
  color: white;
}

.form-field input:hover,
.form-field input:focus {
  background: white;
  color: #d61e2d;
  transition: all 0.2s;
}

.form-field input:hover::placeholder {
  color: #000;
}

</style>

    <div class="login-card">
        <div class="login-card-content">
          <div class="header">
            <div class="logo">
              <div><img src="assets/img/2.png" height="100px" width="100px" alt=""></div>
            </div>
            <h2>Mount Meru <span class="highlight">Group</span></h2>
            <h3>Online Shop</h3>
          </div>
          <div class="form">
            <form action="<?php echo URL('enduser');?>" method="post">
            <div class="form-field username">
              <div class="icon">
                <i class="bi bi-person"></i>
              </div>
              <input type="email" name="email" autocomplete="off"
              <?php if (!empty($data)) {?> value="<?php echo $data['post_email'];?>" <?php } else{?>
              placeholder="Email" <?php } ?> required> 
            </div>
            <div class="form-field password">
              <div class="icon">
                <i class="bi bi-lock"></i>
              </div>
              <input name="password" type="password" placeholder="Password" required>
            </div>
      
            <button type="submit" name="login">
              Login
            </button>
        </form>
            <div>
              Don't have an account? <a href="<?php echo URL('register');?>">Sign Up Now</a>
            </div>
          </div>
        </div>
        <div class="login-card-footer">
          <a href="">Forgot password?</a>
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
   
      
      
      
</body>
</html>