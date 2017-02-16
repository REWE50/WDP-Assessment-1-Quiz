<?php

/*

Ray Egan
13/02/17
WDP Assessment 1 V4 - Score class

The score class contains a number of variables and methods to set/get the user's score, 
how much to increase the score and a final message for the user depending on their final score

*/

class Score
{
	// private variables to hold the user's score, and score increase amount
	private $score = 0;
	private $increaseScoreAmount;
	
	// increases $score for every correct answer
	public function increaseScore()
	{
		$this->score += $this->increaseScoreAmount;
	}
	
	// returns the current score
	public function getScore()
	{
		return ($this->score);
	}
	
	// returns a specific message depending on the user's final score
	// message is outputted in red or green depending on the final score
	public function getFinalMessage()
	{
		switch ($this->score) 
		{
			case "0":
				return " <span style=\"color:#F00;\"> D'oh! </span>";
				break;
			case "20":
				return " <span style=\"color:#F00 ;\"> Back To School With You! </span>";
				break;
			case "40":
				return " <span style=\"color:#F00 ;\"> Distinctly Average! </span>";
				break;
			case "60":
				return " <span style=\"color:#F00 ;\"> Good, But Could Do Better! </span>";
				break;
			case "80":
				return " <span style=\"color:#009E16;\"> Close, But No Gold Star! </span>";
				break;
			case "100":
				return " <span style=\"color:#009E16;\">Excellent, Top Of The Class! </span>";
				break;
			default:
				echo "ERROR: Something Has Gone Wrong!";
		}
	}
	
	// accesses the Questions class to see how many questions are in the array
	// divides 100 by this figure to determine how much each answer is worth
	// in this example there are five questions, so each correct answer is worth 20%
	public function setScoreIncreaseAmount($q1)
	{
		$this->increaseScoreAmount = 100 / $q1->getNumberOfQuestions();
	}
}

?>