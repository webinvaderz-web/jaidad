<?php
 
 require './vendor/autoload.php';

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable('./');
$dotenv->load();
$host_url = $_ENV['HOST_URL'];

$file_path = $_ENV['FILE_PATH'];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.php"><b>JAIDAAD</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign In To Start Posting</p>

      <!-- <form action="../../index3.php" method="post"> -->
        <div class="input-group mb-3">
          <input type="email" class="form-control email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block signIn">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      <!-- </form> -->

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <input class="user_id" type="text" value="" hidden >
      <input class="user_type" type="text" value="" hidden >
      <input class="name" type="text" value="" hidden >

      <!-- <p class="mb-1">
        <a href="forgot-password.php">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new account</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
  <div id='div_session_write'> </div>

</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js" integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  $(function() {

    let email = ''
    let password = ''
    $('.signIn').click(function()
    {
      

      email     = $('.email').val();
      password  = $('.password').val();
      var formData = new FormData();
      formData.append('email',email);
      formData.append('password',password);

      let user_id = '';
      let user_type = '';
      let name = '';
      axios.post("<?php echo $host_url; ?>/login", formData, {
                headers: {
                    "Content-Type": "multipart/form-data",
                    "Accept" : "application/json"
                },
                }).then((res)=>
                {
                  if(res.data[0] == 'success')
                  {   
                      
                      $('.user_id').val(res.data[1]['user_id']);
                      $('.name').val(res.data[1]['name']);
                      $('.user_type').val(res.data[1]['user_type']);
                      ali();
                    swal({
                    title: "Login Successful !",
                    text: "Welcome "+res.data[1]['name'] + " !",
                    type: "success"
                    }).then(function() {
                      // Jquery('#div_session_write').load('session_write.php?user_id='+res.data[1]['user_id']+'&name='+res.data[1]['name']+'&user_type='+res.data[1]['user_type']);
                        window.location.href = "index.php";
                    });
                  }
                  else
                  {
                    swal({
                    title: "Login Fail",
                    text: "Wrong Details",
                    type: "fail"
                    })
                  }

                }).catch((error)=>
                {   console.log(error.response.data.errors);
                    let list = '';
                    let count = 0;
                    Object.keys(error.response.data.errors).forEach(key => {
                        count++;
                        list += count + " " + error.response.data.errors[key][0];
                    }); 

                    swal("Error!", list + "", "error");
                });

                

                
    })
    const ali = () => {
      $.post("session_write.php", 
            {
              user_id:$('.user_id').val(), 
              name:$('.name').val(),
              user_type:$('.user_type').val(),
            });
    } 
   

  });
</script>
</body>
</html>
