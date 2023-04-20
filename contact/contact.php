<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
              rel="stylesheet"
              integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
              crossorigin="anonymous">
        
        
        <link rel="stylesheet" href="../main.css"/>
        <title>CyberGuard 360</title>
        
    </head>
    <body>
        <header>
            
            <div id="logo">
                
                 <a href="../index.php"><img
                        src="../images/CG360.png" 
                        alt="CyberGuard360 logo"></a>
                
            </div>
            
            <nav>
                
                <li><a href="../about/about.php">About</a></li>
                <li><a href="#">Work</a></li>
                <li><a href="#">Clients</a></li>
                <li><a href="../contact/contact.php">Contact</a></li>
            </nav>
            
            <div id="sign_up">
                
                 <input type="button"
                        onclick="window.location.href='../login_page/login_page.php';"
                        value="Sign In">
                
            </div>
            
   
            
            
                
               
            
        </header>
        
        <!-- creating landing page Hero -->
        <div class="contact-hero-image">
            <div class="hero-text">
                <h1>Contact Us</h1>
                
            </div>
            
        </div>
        
        <div class="emails">
        <h2>Project Managers</h2>
        <ul>
            <li>Robert Lawson</li>
            <li>Stephen Lobo</li>
        </ul>
        <h2>Developers</h2>
        <ul>
                    <li>Brendan Fisher - <a href="mailto:fisherbm@g.cofc.edu">fisherbm@g.cofc.edu</a></li>
                    <li>Chase Friedfertig - <a href="mailto:friedfertigc@g.cofc.edu">friedfertigc@g.cofc.edu</a></li>
                    <li>Zach Pace - <a href="mailto:pacezd@g.cofc.edu">pacezd@g.cofc.edu</a></li>
                    <li>Christy Shoener - <a href="mailto:shoenerca@g.cofc.edu">shoenerca@g.cofc.edu</a></li>
                </ul>
        
        <h2>Advisors</h2>
        <ul>
            <li>RoxAnn Stalvey</li>
        </ul>
        </div>
   <?php include '../views/footer.php';
