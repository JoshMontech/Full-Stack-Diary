<?php include("/dir/to/login.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Secret Diary</title>

    <!-- Bootstrap -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      .navbar-brand {
        font-size: 1.8em;
      }
      #topContainer {
        background-image: url("img/background.jpg");
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
      }
      #topRow {
        margin-top: 100px;
        text-align: center;
      }
      #topRow h1 {
        font-size: 300%;
      }
      .bold {
        font-weight: bold;
      }
      .marginTop {
        margin-top: 30px;
      }
      .marginBottom {
        margin-bottom: 100px;
      }
      .center {
        text-align: center;
      }
      .title {
        margin-top: 100px;
        font-size: 300%;
      }
      #footer {
        background-color: #dddcbe;
        width: 100%;
        padding-top: 70px;
      }
      .appStoreImg {
        width: 250px;
      }
    </style>

  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">                
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Secret Diary</a>
        </div>

        <div class="collapse navbar-collapse">
          <form class="navbar-form navbar-right" method="post">
            <div class="form-group">
              <input type="email" name="loginEmail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginEmail']); ?>" />
            </div>
            <div class="form-group">
              <input type="password" name="loginPassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginPassword']); ?>" />
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="Log In" />
          </form>
        </div>
      </div>
    </div>

    <div class="container contentContainer" id="topContainer">

      <div class="row">
        <div class="col-md-6 col-md-offset-3" id="topRow">
          <h1 class="marginTop">Secret Diary</h1>
          <p class="lead">A private diary available whenever, wherever.</p>

          <?php 

            //creates red/green divs for prompting
          	if ($error) {
          		echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
          	}

            if ($message) {
              echo '<div class="alert alert-success">'.addslashes($message).'</div>';
            }

          ?>
          <p class="bold marginTop">Interested? Sign up Below!</a>
          <form class="marginTop" method="post">
            <div class="form-group">
              <label for="email">Email: </label>
              <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo addslashes($_POST['email']); ?>" />
            </div>
            <div class="form-group">
              <label for="password">Password: </label>
              <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo addslashes($_POST['password']); ?>" />
            </div>
            <input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop" />
          </form>
        </div>
      </div>
    </div>    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script>
      $('.contentContainer').css("min-height", $(window).height());
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>



