<!doctype html>
<html>
  <head>
    <title>login page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <center><h1> IITK Template Viewer</h1></center>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-xs-2">
        </div>
        <div class="col-xs-8">
          <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div collapse="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">My Interests</a></li>
                  <li><a href="#">Contact me</a></li>
                  <li><a href="#">ACA Project Blog</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div> -->
      <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading"><center>Template Display Login</center></div>
            <div class="panel-body">
              <form role="form" action="check_login.php" method="POST">
                <div class="form-group">
                  <label for="roll-no">Roll No:</label>
                  <input type="text" class="form-control" id="roll_no" name="roll_no">
                </div>
                <center><button type="submit" class="btn btn-default">Submit</button></center>
                <?php echo $_GET['msg']; ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
