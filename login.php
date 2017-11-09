<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BikeRegister</title>
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
                <a class="navbar-brand">Login</a>
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
                <form action="login_BE.php" method="post">
                    <div class="form-group">
                      <label class="col-form-label" for="formGroupExampleInput">Username</label>
                      <input name ="login[0]" type="text" class="form-control" id="formGroupExampleInput" placeholder="ชื่อผู้ใช้งาน">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="formGroupExampleInput2">Password</label>
                      <input name ="login[1]" type="password" class="form-control" id="formGroupExampleInput2" placeholder="รหัสผ่าน">
                      <?php
                        if(isset($_GET['error']))
                        {
                          echo "<div style='color: red;'>your username or password are incollect</div>";
                        }
                      ?>
                    </div>
                    <button type="submit" class="btn btn-lg btn-success btn-block">login</button>
                  </form>
            </div>
                
          </div> <!-- /container -->
      
      
          <!-- Bootstrap core JavaScript
          ================================================== -->
          <!-- Placed at the end of the document so the pages load faster -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
        </body>
      </html>