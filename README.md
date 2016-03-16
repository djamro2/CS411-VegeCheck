# CS411-VegeCheck
A simple web app to help grocery stores train employees for PLU codes

### Page Layout

quiz_landing_page.php  --> quiz.php --> quiz_results.php

login.php --> manager_dashboard.php ------> quiz_overview_all.php --> quiz_overview_single.php
                                    
                                    \
                                     
                                     \----> create_quiz.php
                                      
                                      \
                                       
                                       \--> add_plu_item.php

#### quiz_landing_page.php
This page is what the employee sees when taking a quiz. It will give them an overview of what the quiz specifications are (time alloted, etc.). Will also take their info down (employee id and name). Then they can start the quiz.

#### quiz.php
Loads that quiz and goes through all the plu test items

#### quiz_results.php
Gives results and which codes were missed. (Chance to retake - determined by manager)

#### login.php
A login for managers to go to the manager dashboard

#### manager_dashboard.php
Managers have three options from here: Go to quiz overview, create a new quiz, or add a plu item (which can be used for future quizes)

#### quiz_overview_all.php
Shows a list of all the quizes created. Gives the average and num employees who have take in. Clicking on this will go to the quiz overview of a single quiz

#### quiz_overview_single.php
Overview of a single quiz. Gives the results from each individual and which plu codes they missed (if anything) Also shows when they completed that quiz

#### create_quiz.php
A simple form for managers to fill out to create a new quiz. Will take down quiz specifications (time alotted, num chanches, etc.). Finally, will be able to select from plu items to test on

#### add_plu_item.php
A form to add plu items for future quizes. The form will take down the item image, name, and code. Save in database

