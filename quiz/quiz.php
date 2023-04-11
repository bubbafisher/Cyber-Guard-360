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
    
    <body onload="checkQuestion()">
        <header>
            
            <div id="logo">
                
                <img src="../images/CG360.png" alt="CyberGuard360 logo">
                
            </div>
        </header> 
        
        <main>
            <div class="wrapper">
                <h1>Compliance Quiz</h1>
                <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="<?php echo $progress;?>" aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                    <div class="progress-bar" style="width: <?php echo $progress;?>%"><?php echo $progress;?>%</div>
                </div>
                <br>
                <br>
                <div class="container">
                    <form action="." method="post" id="questionForm">
                        <div class="row justify-content-between">
                            <div class="col-2">
                                <button class="btn btn-secondary" id="backBtn" type="submit" name="action" value="back">← Previous</button>
                            </div>
                            <div class="col-2">
                                <button class="btn btn-secondary disabled" disabled id="nextBtn" type="submit" name="action" value="next">Next →</button> 
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <h4><?php echo $question['question']; ?></h4>
                                <input type="hidden" name="survey_id" value="<?php echo $survey_id['survey_id'];?>">
                                <input type="hidden" name="guideline" value="<?php echo $question['guideline'];?>">
                                <input type="hidden" id="question_id"name="question_id" value="<?php echo $question['question_id'];?>">
                                <input type="hidden" name="yes_id" value="<?php echo $question['yes_id'];?>">
                                <input type="hidden" name="no_id" value="<?php echo $question['no_id'];?>">
                                <!-- <input type="hidden" name="action" value="next"> -->
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-center">
                            <div class="btn-group btn-group-toggle justify-content-center" data-toggle="buttons">
                                <div class="col-2">
                                    <label class="btn btn-outline-primary btn-lg" id="yes">
                                        <input type="radio" name="answer" value="yes" id="yesBtn" onclick="changeButtonColor()" autocomplete="off"> Yes
                                    </label>
                                </div>
                                <div class="col-2">
                                    <label class="btn btn-outline-primary btn-lg" id="no">
                                        <input type="radio" name="answer" value="no" id="noBtn" onclick="changeButtonColor()" autocomplete="off"> No
                                </label>
                                </div>
                                <?php if($question[has_NA]) : ?>
                                <div class="col-2">
                                    <label class="btn btn-outline-primary btn-lg">
                                        <input type="radio" name="answer" id="na" value="na" autocomplete="off"> N/A
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
                                        <li class="list-group-item"><?php echo $question['hints'];?>
                                        </li>
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
        <script>
            function changeButtonColor()
            {
                var yesBtn = document.getElementById("yes");
                var noBtn = document.getElementById("no");
                var nextBtn = document.getElementById("nextBtn");
                if(document.getElementById("yesBtn").checked)
                {
                    yesBtn.classList.add("btn-primary");
                    yesBtn.classList.remove("btn-outline-primary");
                    noBtn.classList.remove("btn-primary");
                    noBtn.classList.add("btn-outline-primary");
                }
                else
                {
                    yesBtn.classList.remove("btn-primary");
                    yesBtn.classList.add("btn-outline-primary");
                    noBtn.classList.remove("btn-outline-primary");
                    noBtn.classList.add("btn-primary");
                }
                nextBtn.disabled=false;
                nextBtn.classList.remove("disabled");
            }

            function checkQuestion()
            {
                if(document.getElementById("question_id").value==0)
                {
                    var button = document.getElementById("backBtn");
                    button.disabled = true;
                    button.classList.add("disabled");
                }
                    
            }
        </script>
    </body>
</html>



