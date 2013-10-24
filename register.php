<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">
    <title>Grittleton VLE</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <form class="form-signin">
        <h2 class="form-signin-heading">User registration</h2>
        <input type="text" name="username" value="" class="form-control" placeholder="Username" autofocus>
        <input type="password" name="password" value="" class="form-control" placeholder="Password">
        <select name="user_type" value="" class="form-control" placeholder="user_type" placeholder="user_type">
            <option>Student</option>
            <option>Teacher</option>
            <option>Admin</option>
        </select>
        <br>
        <button class="btn btn-lg btn-primary btn-block" value="Register" type="submit">Sign in</button>
      </form>
    </div>
  </body>
</html>