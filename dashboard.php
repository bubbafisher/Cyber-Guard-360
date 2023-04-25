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
                <li><a href="contact/contact.php">Contact</a></li>
            </nav>
            
            
            <div id="sign_up">
                
                 <input type="button"
                        onclick="window.location.href='login_page/login_page.php';"
                        value="Sign Out">
                
            </div>
            
            
   
            
           
                
               
            
        </header>
        
        <!-- creating landing page Hero -->
       <main>
        <div class="container-fluid">
          <div class="row flex-nowrap">
              <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 text-bg-dark">
                  <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                      <span class="fs-4">Dashboard</span>
                    </a>
                    <hr>
                      <ul class="nav nav-pills flex-column mb-auto" id="menu">
                          <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">
                              Overview
                            </a>
                          </li>
                          <li>
                            <a href="#" class="nav-link text-white">
                              Detailed View
                            </a>
                          </li>
                          <li>
                            <a href="quiz/" class="nav-link text-white">
                              Retake Quiz
                            </a>
                          </li>
                          <li>
                            <a href="#" class="nav-link text-white">
                              Options
                            </a>
                          </li>
                          <li>
                            <a href="#" class="nav-link text-white">
                              Help
                            </a>
                          </li>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                      </ul>
                      <hr>
                      <div class="dropdown pb-4">
                          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                              <span class="d-none d-sm-inline mx-1">User</span>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                              <li><a class="dropdown-item" href="#">New project...</a></li>
                              <li><a class="dropdown-item" href="#">Settings</a></li>
                              <li><a class="dropdown-item" href="#">Profile</a></li>
                              <li>
                                  <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#">Sign out</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col py-3">
                <div class="row row-cols-1 row-cols-md-5 g-4">
                  <div class="col">
                    <div class="card text-center border-success mb-3" style="width: 18rem;">
                      <div class="card-body text-success">
                        <h5 class="card-title">Network Security</h5>
                        <p class="card-text">100%</p>
                        <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar progress-bar-striped bg-success" style="width: 100%"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-center border-success mb-3" style="width: 18rem;">
                      <div class="card-body text-success">
                        <h5 class="card-title">Device Security</h5>
                        <p class="card-text">100%</p>
                        <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar progress-bar-striped bg-success" style="width: 100%"></div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-center mb-3" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">Data Storage</h5>
                        <p class="card-text">43%</p>
                        <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar progress-bar-striped" style="width: 43%"></div>
                        </div>
                      </div>
                    </div>
                    <div class="card text-center mb-4" style="width: 18rem;">
                      <div class="card-header text-bg-dark">
                        Todo
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                          <label class="form-check-label" for="firstCheckbox">Minimize account data storage</label>
                        </li>
                        <li class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                          <label class="form-check-label" for="secondCheckbox">Disposing of PINs and card IDs</label>
                        </li>
                        <li class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                          <label class="form-check-label" for="thirdCheckbox">Securely store account numbers</label>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-center mb-3" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">Account Security</h5>
                        <p class="card-text">0%</p>
                        <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar progress-bar-striped" style="width: 0%"></div>
                        </div>
                      </div>
                    </div>
                    <div class="card text-center mb-4" style="width: 18rem;">
                      <div class="card-header text-bg-dark">
                        Todo
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                          <label class="form-check-label" for="firstCheckbox">Securely send cardholder data</label>
                        </li>
                        <li class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                          <label class="form-check-label" for="secondCheckbox">Account numbers are encrypted</label>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-center border-success mb-3" style="width: 18rem;">
                      <div class="card-body text-success">
                        <h5 class="card-title">Malware Protection</h5>
                        <p class="card-text">100%</p>
                        <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar progress-bar-striped bg-success" style="width: 100%"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
       </main>
   <?php include 'views/footer.php';