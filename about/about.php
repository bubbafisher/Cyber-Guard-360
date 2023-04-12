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
                
                <img src="../images/CG360.png" alt="CyberGuard360 logo">
                
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
        <div class="hero-image">
            <div class="hero-text">
                <h1>About CyberGuard360</h1>
            </div>
            
            <div class="about">
                <p>CyberGuard360 is a complete cyber security and compliance platform for SMB’s. CyberGuard’s product suite provides security at every step. At CyberGuard360, the best defense is an effective offense. CyberGuard360 has built next-generation breach prevention platforms just for MSP’s to make certain everyone is trained to spot a cyber-attack with an offensive-line of prevention that stops an attack before it strikes. There are 4 main products</p>
                <div class="card-group">
                    <div class="card">
                        <div class="card-header">CP360</div>
                        <div class="card-body">
                            <h5 class="card-title">Cyber Prospecting</h5>
                            <ul>
                                <li>Cyber Web Assignment Tool</li>
                                <li>Dark Web Scanning</li>
                                <li>CRIS0 Score</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">PG360</div>
                        <div class="card-body">
                            <h5 class="card-title">Training and Compliance</h5>
                            <ul>
                                <li>Policy Management</li>
                                <li>Cyber Training</li>
                                <li>Weekly Security Shorts</li>
                                <li>Dark Web Monitoring</li>
                                <li>Simulating Phishing</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">OB360</div>
                        <div class="card-body">
                            <h5 class="card-title">Technical Risk Assessment</h5>
                            <ul>
                                <li>Security Scanning</li>
                                <li>Vulnerability Assessment</li>
                                <li>Network Scanning</li>
                                <li>Web Scanning</li>
                                <li>Technical Assessment</li>
                                <li>Remediation Recommendation</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">RA360</div>
                        <div class="card-body">
                            <h5 class="card-title">Functional Risk Assessment</h5>
                            <h6 class="card-subtitle">Mapping to:</h6>
                            <ul>
                                <li>Regulations</li>
                                <li>Standards</li>
                                <li>Domain</li>
                                <li>Industry</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <br>
                <h1>About Us</h1>
                <p>The Payment Card Industry Data Security Standard (PCI DSS) was developed to increase security and protection on payment card account data as well as globalize data security. PCI DSS outlines technical and operational requirements necessary to protect account data. On top of that, PCI DSS also can provide assistance in protection against threats and keep all elements in the payment ecosystem secure. 
                </p>
                <br>
                <h1>About Our Product</h1>
                <p>The goal of our compliance quiz is to give small businesses the opportunity to quickly test their compliance with PCI DSS guidelines in a simple and easy-to-understand format. The compliance quiz seeks to help small businesses identify any noncompliant aspect of their business so that they can address compliance issues before problems arise. This quiz is not a replacement for the full PCI DSS guidelines and participants should refer to the full PCI DSS guidelines if they have questions or want clarification on any of the guidelines. 
                </p>
                <div class="card">
                    <div class="card-header">
                        Helpful Links
                      </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">PCI DSS Guidelines: <a href="https://docs-prv.pcisecuritystandards.org/PCI%20DSS/Standard/PCI-DSS-v4_0.pdf">https://docs-prv.pcisecuritystandards.org/PCI%20DSS/Standard/PCI-DSS-v4_0.pdf</a></li>
                        </ul>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Link 2:</li>
                        </ul>
                </div>
            </div>
        </div>
        
   <?php include '../views/footer.php';
