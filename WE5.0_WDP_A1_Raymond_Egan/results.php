<!doctype html>

<html>
<head>

	<!-- Ray Egan
         WDP Assessment 1 V4
         13/02/17 -->
         
	<title>Irish Geography Quiz Results</title>	
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
	<?php
        include 'classes/Questions.class.php';
        include 'classes/Score.class.php';
        include 'classes/Answers.class.php';
        
        $q1 = new Questions();
        $s1 = new Score();
        $a1 = new Answers();
    ?>
       
</head>

<body>
	<div class="container">
        <div class="content">
            <div class="header">
                <div id="banner">
                    <a href="index.php">Irish Geography Quiz</a>
                </div>
            </div>
            
            <!-- Calls getQuestion() method through $q1 Questions class object to list the quiz questions -->
            <div class="questions">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <th colspan="2">Questions</th>
                        </tr>
                        <tr>
                            <td><?php echo $q1->getQuestion('num1'); ?></td>
                            <td><?php echo $q1->getQuestion('q1'); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $q1->getQuestion('num2'); ?></td>
                            <td><?php echo $q1->getQuestion('q2'); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $q1->getQuestion('num3'); ?></td>
                            <td><?php echo $q1->getQuestion('q3'); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $q1->getQuestion('num4'); ?></td>
                            <td><?php echo $q1->getQuestion('q4'); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $q1->getQuestion('num5'); ?></td>
                            <td><?php echo $q1->getQuestion('q5');  ?></td>
                        </tr>
                	</tbody>
                </table>
            </div>
            
            <!-- Calls checkIfAnswered() method through $a1 Answers class object, and passes it the user's answer
            	The user's answer is read from the $_POST array
            	Returns the user's answer, or "Not Answered" if no answer was supplied by the user 
                Could simply print the user's answer, but this spells out if the user supplied no answer, instead of just leaving it blank -->
            <div class="answers">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                        	<th>Your Answers</th>
                        </tr>
                        <tr>
                        	<td><?php echo $a1->checkIfAnswered(($_POST['q1'])); ?></td>
                        </tr>
                        <tr>
                        	<td><?php echo $a1->checkIfAnswered(($_POST['q2'])); ?></td>
                        </tr>
                        <tr>
                        	<td><?php echo $a1->checkIfAnswered(($_POST['q3'])); ?></td>
                        </tr>
                        <tr>
                        	<td><?php echo $a1->checkIfAnswered(($_POST['q4'])); ?></td>
                        </tr>
                        <tr>
                        	<td><?php echo $a1->checkIfAnswered(($_POST['q5'])); ?></td>
                        </tr>
                    </tbody>
                </table>
    		</div>
            
            <!-- Calls getAnswer() method through $a1 Answers class object to list the correct answers -->
            <div class="correctAnswers">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                        	<th>Correct Answers</th>
                        </tr>
                        <tr>
                        	<td><?php echo $a1->getAnswer('a1'); ?></td>
                        </tr>
                        <tr>
                        	<td><?php echo $a1->getAnswer('a2'); ?></td>
                        </tr>
                        <tr>
                        	<td><?php echo $a1->getAnswer('a3'); ?></td>
                        </tr>
                        <tr>
                        	<td><?php echo $a1->getAnswer('a4'); ?></td>
                        </tr>
                        <tr>
                        	<td><?php echo $a1->getAnswer('a5'); ?></td>
                        </tr>
                    </tbody>
                </table>
           	</div>
            
            <!-- Calls verifyAnswer() through $a1 Answers class object to test the user's answer against the actual answer
            	Passes in the user's answer, the actual answer, and the $s1 Score class object
                Returns a positive or negative icon and the appropriate score depending on the user's answers -->
            <div class="score">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                        	<!-- setScoreIncreaseAmount is passed the $q1 Questions class object to get the size of our questions array
                            	This value is set back to the Score class to determine how much each correct answer is worth -->
                            <th>Your Marks <?php $s1->setScoreIncreaseAmount($q1); ?></th>
                        </tr>
                        <tr>
                        	<td><?php echo $a1->verifyAnswer(($_POST['q1']), $a1->getAnswer('a1'), $s1) ?></td>
                        </tr>
                        <tr>
                        	<td><?php echo $a1->verifyAnswer(($_POST['q2']), $a1->getAnswer('a2'), $s1) ?></td>
                        </tr>
                        <tr>
                        	<td><?php echo $a1->verifyAnswer(($_POST['q3']), $a1->getAnswer('a3'), $s1) ?></td>
                        </tr>
                        <tr>
                        	<td><?php echo $a1->verifyAnswer(($_POST['q4']), $a1->getAnswer('a4'), $s1) ?></td>
                        </tr>
                        <tr>
                        	<td><?php echo $a1->verifyAnswer(($_POST['q5']), $a1->getAnswer('a5'), $s1) ?></td>
                        </tr>
                    </tbody>
                </table>
    
            </div>
            
            <!-- Calls the getFinalMessage() and getScore() methods through $s1 Score class object
            	Prints the user's score, and a particular message based on the score -->
         	<div class="footer">
				<?php echo $s1->getFinalMessage() . " - You Scored " .  $s1->getScore() . "%" ?>
            </div>        
	</div>
</div>
	
</body>

</html>