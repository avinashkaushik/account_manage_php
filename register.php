

<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" media="all" />
 <script>
   /*  function formValidate() {
         var x = document.forms["contact form"]["name"].value;
         if (x == null || x == " ") {
             alert("name should be filled");
             return false;
         }
     else {
             return true;
         }
     }
  </script>
    </head>
<body>
<header>
    <div class="container-fluid">
        <nav class="navbar navbar-inverse">
            <div style = "color:white;padding:10px">
                <h3>Personal-Records<h3></div>
            <div style = "color:white;margin-top:-40px;margin-right:10px;float:right">
                <a href="login.php">Login</a></div></nav>
</header></br>
<form name="contact form" method="post" action="addUser.php">

    <div class="container">
        <div class="row">

            <div class="col-xs-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">

                        <div class="input-group input-group">
                            <span class="input-group-addon" id="sizing-addon1">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<input type="text" class = "form-control" name= "name" id="name" placeholder="Name" required=""></div>
    <br>
                        <div class="input-group input-group">
                            <span class="input-group-addon" id="sizing-addon1">User-Name</span>
    <input type="text"class = "form-control" name="Username" id="username" placeholder="Username" required=""></div>
    <br>
                        <div class="input-group input-group">
                            <span class="input-group-addon" id="sizing-addon1">Password&nbsp;&nbsp;&nbsp;</span>
<input type="password" class = "form-control" name= "Password" id="password" placeholder="Enter Password"required=""></div>
 <br>
                        <div class="input-group input-group">
                            <span class="input-group-addon" id="sizing-addon1">ConfirmPassword&nbsp;&nbsp;&nbsp;</span>
<input type="password" class="form-control" name= "confirmPassword" id="confirmpassword" placeholder="Re-enter Password" reuired=""></div>
 <br>

<button type="submit" class="btn btn-primary pull-right" name="submit">Submit</button>
 <br>
<br></div></div></div></div></div>
</form>
</body>
</html>