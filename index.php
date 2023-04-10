<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
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
        
        
        <link rel="stylesheet" href="main.css"/>
        <title>CyberGuard 360</title>
        
    </head>
    <body>
        <header>
            
            <div id="logo">
                
                <img src="images/CG360.png" alt="CyberGuard360 logo">
                
            </div>
            
            <nav>
                
                <li><a href="about/about.php">About</a></li>
                <li><a href="#">Work</a></li>
                <li><a href="#">Clients</a></li>
                <li><a href="#">Contact</a></li>
            </nav>
            
            
            <div id="sign_up">
                
                 <input type="button"
                        onclick="window.location.href='login_page/login_page.php';"
                        value="Sign In">
                
            </div>
            
            
   
            
           
                
               
            
        </header>
        
        <!-- creating landing page Hero -->
       <main>
           
        <div class="hero-image">
            <div class="hero-text">
                <h1>Welcome to CyberGuard360</h1>
                <p>Test Your Business' PCI Compliance With Us </p>
                
                <input type="button"
                       onclick="window.location.href='login_page/login_page.php';"
                       value="Secure Now">
            </div>
          </div>
            
            
      
        
        
        <div class="about">
            <h1> What is CyberGuard360?</h1>
            
            <div class="row justify-content-center">
                <div class="col-lg-5 mx-1 col-md-4 mx-1 col-sm-12 mx-1 col-xs-12 mx-1">
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp; <span>W</span>elcome to our website, where we
                        provide information
                        and resources on PCI DSS guidelines and why they are 
                        important to comply with for a wide range of businesses.

                        Payment Card Industry Data Security Standards (PCI DSS)
                        are a set of security standards created by major credit
                        card companies to protect against credit card fraud and
                        unauthorized access to sensitive payment card data. 
                        These guidelines apply to all businesses that accept
                        credit card payments, regardless of their size or
                        industry.

                        Compliance with PCI DSS guidelines is important for
                        several reasons. First and foremost, it helps protect
                        your customers' sensitive payment card data from being
                        compromised, which can lead to costly data breaches and
                        damage to your company's reputation. In addition, 
                        compliance can help you avoid hefty fines and legal 
                        consequences for non-compliance, as well as ensure that
                        you are eligible to accept credit card payments from
                        major card brands.
                    </p>
                </div>
                
               
                
                
            <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                <p>
                   Our website provides information and resources to help
                   businesses understand the requirements of PCI DSS and how 
                   to achieve compliance. We offer guides, checklists, and other
                   helpful tools to make the process easier and more manageable,
                   regardless of your level of technical expertise.

                   Whether you are a small business owner or a large enterprise,
                   compliance with PCI DSS guidelines is essential to protecting
                   your customers, your business, and your bottom line. Let us
                   help you navigate the complex world of payment card security
                   and achieve compliance with confidence.





 
                </p>
            </div>
        </div>
                    
                    
        </div>
       </main>
   <?php include 'views/footer.php';