<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="PA_PEA" >
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #e4e4e4;
      }
      
      .hider {
      	max-width: 300px;
        padding: 10px 29px 10px;
        margin: 0 auto 5px;
        background-color: #eee;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }

    </style>
  </head>
	
  <body>
    <div class="container">
      <form class="form-signin" method="post" action="log.login.php">
      	
        <h4 class="form-signin-heading">Login Sistem</h4>
        <input type="text" class="input-block-level" id="username" name="username" placeholder="Username" required><br>
        <input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required><br>		
        <button class="btn btn-primary" type="submit">Sign in</button>
        <br><br>
      </form>    
    </div>
  </body>
</html>
