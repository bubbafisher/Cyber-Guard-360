<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
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
                
                <img src="../images/CG360.png" alt="CyberGuard360 logo">
                
            </div>
        </header> 
        
        <main>
            <div class="wrapper">
                <h1>Create Account</h1>
                
                <form action="." method="post">
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <label> First Name</label> <input type="text" name="fName">
                
                               <br><br>
                                
                                <label> Last Name</label> <input type="text" name="lName">
                                
                                <br><br>
                                
                                <label> Email</label> <input type="text" name="email">
                                
                                <br><br>
                                
                                <label> Phone #</label> <input type="text" name="phone">
                                
                                <br><br>
                                
                                <label> Business Name</label> <input type="text" name="bName">
                                <br><br><br><br><br>
                                
                            
                                
                                <h2>Address</h2>
                                <br>
                                
                                 <label> Address Line 1</label> <input type="text" name="address">
                                
                                <br><br>
                                
                                <label> Address Line 2*</label> <input type="text" name="address">
                                
                                <br><br>
                                
                                <label> City </label> <input type="text" name="address">
                                
                                <br><br>
                                
                                <label> State/Province</label> <input type="text" name="address">
                                
                                <br><br>
                                
                                <label> Zipcode </label> <input type="text" name="address">
                                
                                <br><br>
                                
                                <label> Country </label> <input type="text" name="address">
                                
                                <br><br>
                                
                                
                                
                                
                
                               
                                
                            </div>

                            <div class="col-6">
                               <label> Username</label> <input type="text" name="user">
                               
                               <br><br>
                               
                               <label> Create Password</label>
                               <input type="text" name="password">
                               
                               <br><br>
                               
                               <label> Re-enter Password</label>
                               <input type="text" name="password-check">
                            </div>

                        </div>
                    </div>
                
                
                <input type="hidden" name="action" value="create_account">
                    <input type="submit" value="Create Account">
                        </form>
                
                
                
            </div>
   
        </main>
    </body>
</html>



