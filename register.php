<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
  </head>
  <body>
    <body>

          <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>-->
                <a class="navbar-brand">Sign up</a>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">logout</a></li>
                </ul>
              </div><!--/.nav-collapse -->
            </div>
          </nav>
      
          <div class="container theme-showcase" role="main">
            <div class="container">
                <form action="register_BE.php" method="post">
                    <div class="form-group">
                        <label class="col-form-label" for="formGroupExampleInput2">Name</label>
                        <input name ="user[0]" type="text" class="form-control" id="formGroupExampleInput2" placeholder="ชื่อ-นามสกุล">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="formGroupExampleInput2">Username</label>
                      <input name ="user[1]" type="text" class="form-control" id="formGroupExampleInput2" placeholder="ชื่อผู้ใช้งาน">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="formGroupExampleInput">Password</label>
                      <input name ="user[2]" type="password" class="form-control" id="password" placeholder="รหัสผ่าน">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="formGroupExampleInput2">Confirm Password</label>
                      <input type="password" class="form-control" id="confirm_password" placeholder="ทวนรหัสผ่าน">
                      <p id="message"></p>
                    </div>
                    <button type="submit" id="chick" class="btn btn-lg btn-primary btn-block">save</button>
                  </form>
            </div>
                
          </div> <!-- /container -->
      
      
          <!-- Bootstrap core JavaScript
          ================================================== -->
          <!-- Placed at the end of the document so the pages load faster -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script>
            $('#password, #confirm_password').on('keyup', function () {
            if ($('#password').val() == $('#confirm_password').val()) {

              $('#message').html('Matching').css('color', 'green');
            } else 

              $('#message').html('Not Matching').css('color', 'red');
             });
            

             $('#password, #confirm_password').on('keyup', function () {
            if ($('#password').val() == $('#confirm_password').val()) {
              $('#chick').css('pointer-events', 'auto');

            } else 
              $('#chick').css('pointer-events', 'none');

             });
          </script>
        </body>
      </html>