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
        
        <link rel="stylesheet" href="create_account.css">
        
        
        
        <title>Create Account</title>
        
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
                <h1>Create Account</h1>
                
                <form action="." method="post">
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                
                                
                                <table>
                                    <th>
                                        <h4>General</h4>
                                    </th>
				    <th></th>

                                        
                                        <tr>
                                            <td><label> First Name</label></td> <td><input type="text" name="fName"></td>
                                            
                                        </tr>
                                            
                                        <tr>
                                            <td> <label> Last Name</label></td> <td><input type="text" name="lName"></td>
                                        </tr>
                                            
                                        <tr>
                                            <td><label> Email</label></td> <td><input type="text" name="email"></td>
                                        </tr>
                                            
                                        <tr>
                                            <td><label> Phone #</label></td> <td><input type="text" name="phone"></td>
                                        </tr>
                                            
                                        <tr>
                                            <td><label> Business Name</label></td> <td><input type="text" name="bName"></td>
                                        </tr>
                                        
                                </table>
                                
                                <table>
                                    <th>
                                        <h4>Address     </h4>
                                    </th>
				    <th></th>

                                        
                                        <tr>
                                            <td><label>  Address Line 1</label></td> <td><input type="text" name="add1"></td>
                                            
                                        </tr>
                                            
                                        <tr>
                                            <td> <label> Address Line 2*</label></td> <td> <input type="text" name="add2"></td>
                                        </tr>
                                            
                                        <tr>
                                            <td><label> City</label></td> <td><input type="text" name="city"></td>
                                        </tr>
                                            
                                        <tr>
                                            <td><label> State/Province</label></td> <td><input type="text" name="state"></td>
                                        </tr>
                                            
                                        <tr>
                                            <td><label> Zipcode</label></td> <td><input type="text" name="zip"></td>
                                        </tr>
                                        
                                        <tr>
                                            <td><label> Country</label></td> <td><input type="text" name="country"></td>
                                        </tr>
                                        
                                </table>

                               
                          
                                 
                                
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                
                                <table>
                                
                                    <th>
                                        <h4>Account</h4>
                                    </th>
                                    <th></th>
                                 
                                    <tr>
                                        <td><label> Username</label></td> <td><input type="text" name="user"></td>
                                    </tr>
                                           
                                    
                                    <tr>
                                            <td><label> Create Password</label></td>
                                            <td><input type="text" name="password"></td>
                                    </tr>
                                          
                                    <tr>
                                            <td><label> Re-enter Password</label></td>
                                            <td><input type="text" name="password-check"></td>
                                    </tr>
                                </table>
                            </div>
                       </div>
                
                </div>
                   
                   
                   
                   <input type="hidden" name="action" value="create_account">
                    <input type="submit" value="Create Account">
                        </form>
                   
                
            </div>
   
        </main>
    



<?php include "../views/footer.php";
