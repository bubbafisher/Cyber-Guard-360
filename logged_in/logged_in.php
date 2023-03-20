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
        
        
        <link rel="stylesheet" href="../login_page/login_page.css">
        
        
        
        
        
        <title>Login Page</title>
        
    </head>
    
    <body>
        <header>
            
            <div id="logo">
                
                <a href="../index.php"><img
                        src="../images/CG360.png" 
                        alt="CyberGuard360 logo"></a>
                
            </div>
            
            
            
                 
            <div id="account">
                
                 <input type="button"
                        onclick="window.location.href='../login_page/login_page.php';"
                        value="<?php echo $account['email']; ?>">
                
            </div>
            
        </header> 
        
      
       <main>
            <span id="dashboard">
                
                <span id="dsah_text">
          
                    <h1>DASHBOARD HERE</h1>
                </span>
            </span>
    
       </main>
       
    </body>

  <?php include '../views/footer.php';

