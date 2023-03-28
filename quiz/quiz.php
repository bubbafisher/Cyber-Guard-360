<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
              rel="stylesheet"
              integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
              crossorigin="anonymous">
        
        <link rel="stylesheet" href="quiz.css">
        
        
        
        <title>Compliance Quiz</title>
        
    </head>
    
    <body>
        <header>
            
            <div id="logo">
                
                <img src="../images/CG360.png" alt="CyberGuard360 logo">
                
            </div>
        </header> 
        
        <main>
            <div class="wrapper">
                <h1>Compliance Quiz</h1>
                    
                <div class="container">
                    <form action="." method="post">
                        <div class="row justify-content-between">
                            <div class="col-2">
                                <input class="btn btn-secondary disabled" type="submit" value="← Previous">
                            </div>
                            <div class="col-2">
                                <input class="btn btn-secondary" type="submit" value="Next →">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <h4><?php echo $question['question']; ?></h4>
                                <input type="hidden" name="survey_id" value="<?php echo $survey_id;?>">
                                <input type="hidden" name="guideline" value="<?php echo $question['guideline'];?>">
                                <input type="hidden" name="question_id" value="<?php echo $question['question_id'];?>">
                                <input type="hidden" name="yes_id" value="<?php echo $question['yes_id'];?>">
                                <input type="hidden" name="no_id" value="<?php echo $question['no_id'];?>">
                                <input type="hidden" name="action" value="next">
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-center">
                            <div class="btn-group btn-group-toggle justify-content-center" data-toggle="buttons">
                                <div class="col-2">
                                    <label class="btn btn-primary btn-lg">
                                        <input type="radio" name="answer" value="yes" autocomplete="off"> Yes
                                    </label>
                                </div>
                                <div class="col-2">
                                    <label class="btn btn-primary btn-lg">
                                        <input type="radio" name="answer" value="no" autocomplete="off"> No
                                </label>
                                </div>
                                <?php if($question[has_NA]) : ?>
                                <div class="col-2">
                                    <label class="btn btn-primary btn-lg">
                                        <input type="radio" name="answer" id="na" autocomplete="off"> N/A
                                    </label>
                                </div>
                                <?php endif;?>
                                
                            </div>
                        </div>
                    </form>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    Answer 'Yes' if:
                                  </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Network security controls, such as firewalls, cloud access controls, virtualization/container systems, or other networking technology, are in use, up to date, documented, and known to all affected users.
                                        </li>
                                        <li class="list-group-item">Description of roles surrounding the installation and maintenance of NSCs are documented and responsibilities have been assigned.
                                        </li>
                                        <li class="list-group-item">Verification that personnel understand documentation and the roles and responsibilities to which they have been assigned is obtained.</li>
                                    </ul>
                            </div>
                            <!-- <h5>Answer 'Yes' if:</h5>
                            <ul>
                                <li>Network security controls, such as firewalls, cloud access controls, virtualization/container systems, or other networking technology, are in use, up to date, documented, and known to all affected users.
                                </li>
                                <li>Description of roles surrounding the installation and maintenance of NSCs are documented and responsibilities have been assigned.
                                </li>
                                <li>Verification that personnel understand documentation and the roles and responsibilities to which they have been assigned is obtained.</li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                
                
                
            </div>
   
        </main>
    </body>
</html>



