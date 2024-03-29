<!DOCTYPE html>


<html>

    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
              rel="stylesheet"
              integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
              crossorigin="anonymous">
        
        <link rel="stylesheet" href="login_page.css">
        
        
        
        <title>Login Page</title>
        
    </head>
    
    <body>
        <header>
            
            <div id="logo">
                
                <a href="../index.php"><img
                        src="../images/CG360.png" 
                        alt="CyberGuard360 logo"></a>
                
            </div>
        </header> 
        
       <main>
    
    <div class="wrapper">
    
    
        <div class="aligned">
            <h1>Log in</h1>
            <form action="." method="post">
                <label> Email</label><br><br>
                
                <input type="text" name="email"> <br><br>
                
                <label>Password</label> <a href="#">Forgot Password?</a><br><br> 
                
                <input type="text" name="password"><br><br>
                
                <input type="hidden" name="action" value="login">
                    <input type="submit" value="login">
                        </form><br>
                        
                <p> Don't have an Account?
                    <a href='../create_account/create_account.php'>Sign Up</a>
                </p>
                
                
        </div>
        
    </div>
       
  
     
    <div id='extras'>
        <p>
            Wanna skip the login?
        </p>
    </div>
</main>
        
<?php include '../views/footer.php';