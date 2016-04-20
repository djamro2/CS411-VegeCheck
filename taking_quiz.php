<!DOCTYPE html>
<html>

<head>

    <!-- styles --> 
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">
    <link href="styles/quiz.css" rel="stylesheet" />
    
    <!-- Angular Libraries -->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>

    <!-- Angular Material Library -->
    <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>
    
    <!-- Angular Code -->
    <script type="text/javascript" src="/scripts/app.js"></script>

    <title>VegeCheck Quiz</title>
</head>

<body ng-app="VegeCheck">

    <div id="page-wrap">

        <h1>PLU QUIZ</h1>
        
        <form action="score.php" method="post" id="quiz">
        
            <ul>
            
                <!--<li>-->
                	<label for="employeeID">EmployeeID</label><br />
                	<input type="text" name="employeeID" /><br/>
                    <label for="storeID">StoreID</label><br />
                	<input type="text" name="storeID" /><br />
                    
                	<?php
						require_once("util/database.php");
						// TODO: get number from quiz parameters
						$query = "SELECT * FROM plu ORDER BY RAND() LIMIT 5";
						$result = mysql_query($query);
						$i = 0;
						while($row = mysql_fetch_assoc($result)) {
							echo "<li>";
							echo "<h3>Question " . ($i + 1) . "</h3>";
							$i++;
							echo "<img src=\"" . $row["image_url"] . "\" alt=\"Image cannot be displayed\" style=\"width:300px;height:300px;\">";
							echo "<p>" . $row["title"] . "</p>";
							echo "<input type=\"text\" name=\"response[]\" />";
							echo "<input type=\"hidden\" name=\"answer[]\" value=\"" . $row["pluID"] . "\"/>";
							echo "</li>";
						}
					?>
                
                    <!--<h3>Question 1</h3>

                    <div>
                    <img src="http://media.mercola.com/assets/images/food-facts/carrot-fb.jpg" alt="Image cannot be displayed" style="width:100%;height:100%;">
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) 4563 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) 4593 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) 5829 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) 98423 </label>
                    </div>
                
                </li><br/>
                
                <li>

                    <h3>Question 2</h3>

                    <div>
                    <img src="http://i.livescience.com/images/i/000/065/149/iFF/bananas.jpg?1398148489" alt="Image cannot be displayed" style="width:100%;height:100%;">
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) 2001</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) 1998</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) 2006</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) 2003</label>
                    </div>
                
                </li><br/>
                
                <li>
                
                    <h3>Question 3</h3>
                    
                    <div>
                    <img src="http://www.gourmetsleuth.com/images/default-source/dictionary/napa_cabbage-jpg.jpg?sfvrsn=2" alt="Image cannot be displayed" style="width:100%;height:100%;">
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) 1000 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) 1001 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) 1002</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) 1003</label>
                    </div>
                
                </li><br/>
                
                <li>
                
                    <h3>Question 4</h3>
                    <div>
                    <img src="http://www.modernbazaar.co.in/admin/upload/1451395838-apple%20fuji.jpg" alt="Image cannot be displayed" style="width:100%;height:100%;">
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) 48973</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) 123897</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) 45324</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) 92323</label>
                    </div>
                
                </li><br/>
                
                <li>
                
                    <h3>Question 5</h3>
                    <div>
                    <img src="http://blueskyorganicfarms.com/wp-content/uploads/2013/03/snowpeas.jpg" alt="Image cannot be displayed" style="width:100%;height:100%;">
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) 12332</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) 22331</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) 77732</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) 56453</label>
                    </div>
                
                </li><br/>-->
            
            </ul>
            
            <input type="submit" value="Submit Quiz" />
        
        </form>
    
    </div>

</body>

</html>