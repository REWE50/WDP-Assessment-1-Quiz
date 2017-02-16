<!doctype html>

<html>
<head>

	<!-- Ray Egan
         WDP Assessment 1 V4
         13/02/17 -->
         
	<title>Irish Geography Quiz</title>	
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
         
    <?php
        include 'classes/Questions.class.php';
        $aq1 = new Questions();
    ?>
    
<meta charset="utf-8">
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
                          	<td><?php echo $aq1->getQuestion('num1'); ?></td>
                          	<td><?php echo $aq1->getQuestion('q1'); ?></td>
                        </tr>
                        <tr>
                          	<td><?php echo $aq1->getQuestion('num2'); ?></td>
	                        <td><?php echo $aq1->getQuestion('q2'); ?></td>
                        </tr>
                        <tr>
                          	<td><?php echo $aq1->getQuestion('num3'); ?></td>
                        	<td><?php echo $aq1->getQuestion('q3'); ?></td>
                        </tr>
                        <tr>
                          	<td><?php echo $aq1->getQuestion('num4'); ?></td>
                         	<td><?php echo $aq1->getQuestion('q4'); ?></td>
                        </tr>
                        <tr>
                         	<td><?php echo $aq1->getQuestion('num5'); ?></td>
                          	<td><?php echo $aq1->getQuestion('q5'); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="answers">
            	<table width="100%" cellpadding="0" cellspacing="0">
          			<tbody>
            			<tr>
              				<th>Your Answers</th>
            			</tr>
                        <tr>
                            <td>
                            	<!-- Collects user's answers and sends them to results.php using POST method -->
                              	<form action='results.php' method="post">
                                    <input name="q1" type="text" placeholder="Q1" maxlength="15">
                                    <input name="q2" type="text" placeholder="Q2" maxlength="15">
                                    <input name="q3" type="text" placeholder="Q3" maxlength="15">
                                    <input name="q4" type="text" placeholder="Q4" maxlength="15">
                                    <input name="q5" type="text" placeholder="Q5" maxlength="15">
                                    <input type="submit" value="Answer">
                            	</form>
                            </td>
                        </tr>
                  	</tbody>
                </table>
             </div>
            
            <div class="correctAnswers"></div>
            
            <div class="score"></div>
            
            <div class="footer"></div>
	</div>
</div>
	
</body>

</html>