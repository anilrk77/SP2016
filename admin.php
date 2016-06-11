<?php
session_start();
?>

<!doctype html>
<html>
  <head>
    <title>Admin Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container-fluid page-header">
      <center><h2>Branch Details</h2></center>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading"><center>Template Display</center></div>
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-8">
                  <table class="table table-striped">
                    <tr>
                      <td>Roll no:</td>
                      <td>&nbsp; <?php echo "".$_SESSION['roll_no'].""; ?></td>
                    </tr>
                    <tr>
                      <td>Branch:</td>
                      <td>&nbsp; <?php echo "".$_SESSION['branch'].""; ?></td>
                    </tr>
                  </table>
                  <p><center> Credits : </center></p>
                  <table class="table table-striped">
                    <tr>
                      <td>IC:</td>
                      <td>&nbsp; <?php echo "".$_SESSION['IC'].""; ?></td>
                    </tr>
                    <tr>
                      <td>DC:</td>
                      <td>&nbsp; <?php echo "".$_SESSION['DC'].""; ?></td>
                    </tr>
                    <tr>
                      <td>DE:</td>
                      <td>&nbsp; <?php echo "".$_SESSION['DE'].""; ?></td>
                    </tr>
                    <tr>
                      <td>OE:</td>
                      <td>&nbsp; <?php echo "".$_SESSION['OE'].""; ?></td>
                    </tr>
                    <tr>
                      <td>SO_ESO:</td>
                      <td>&nbsp; <?php echo "".$_SESSION['SO_ESO'].""; ?></td>
                    </tr>
                    <tr>
                      <td>HSS_I:</td>
                      <td>&nbsp; <?php echo "".$_SESSION['HSS_I'].""; ?></td>
                    </tr>
                    <tr>
                      <td>HSS_II:</td>
                      <td>&nbsp; <?php echo "".$_SESSION['HSS_II'].""; ?></td>
                    </tr>
                    <tr>
                      <td>TOTAL:</td>
                      <td>&nbsp; <?php echo "".$_SESSION['TOTAL'].""; ?></td>
                    </tr>
                  </table>
                </div>
              </div>
              <center><a href="logout.php" class="btn btn-default">logout</a></center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
