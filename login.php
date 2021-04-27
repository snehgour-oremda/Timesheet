
<html>
<head>
        <meta charset="UTF-8">
        <title> Timesheet registration</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>
        <link rel="stylesheet" href="./css/style_k.css">
        <link rel="stylesheet" href="./css/styles_k.css">
</head>
<body>
    <div class="container   mt-5">
    <div class="row">
    <div class="columns">
    <div class="column">
    <div class="header">
      
        <h2>Login Here</h2>
        <form action= "functions/validation.php" method="post" id="form1" class="form">

        <div class="form-control">
            <label for="username">Username</label>
            <input type="text" name="user" placeholder="Username" id="loginusername" />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="username">Password</label>
            <input type="password" name="password" placeholder="Password"  id="loginpassword"/>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <button   value="login">Login</button>
        </form>
        </div> 
        <script  src="js/script1_k.js"></script>
</div>
       </div>          
</div>

</div>
<div class="container1  mt-5">
<div class="column">
<div class="col-md-6 login-right">
    <div class="header">
       
        <h2>Create Account</h2>
    </div>
    <form action= "functions/registration.php" method="post" id="form" class="form">
        <div class="form-control">
            <label for="username">Username</label>
            <input type="text" name="user" placeholder="Username" id="username" />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        
        <div class="form-control">
            <label for="username">Password</label>
            <input type="password" name="password1" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="password"/>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="username">Confirm Password </label>
            <input type="password" name="password2" placeholder="Confirm Password " pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="password2"/>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="username">FullName</label>
            <input type="txt"  name="fullname" placeholder="FullName" id="fullname" />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="username">Email</label>
            <input type="txt"  name="email" placeholder="example@exam.com"  id="email" />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <h5>Role</h5>

        <label class="radio-inline" for="role-client">Client  
        <input type="radio"  name="role" class="form-control1" value="client" id="role-client" required> 
        <span class="checkmark" ></span>
        </label>

        <label class="radio-inline"  for="role-engineer">Engineer
        <input type="radio"  name="role" class="form-control1" value="engineer" id="role-engineer" required> 
        <span class="checkmark" ></span>
        </label>
      <button type="submit"  value="submit">Submit</button>
       
    </form>
    </div>
    </div>
</div>
</div>
<!-- partial -->
  <script  src="/js/script_k.js"></script>
</body>
</html>