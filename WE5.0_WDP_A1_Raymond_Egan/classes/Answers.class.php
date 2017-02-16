<?php

/*

Ray Egan
13/02/17
WDP Assessment 1 V4 - Answers class

The Answers class contains an associative array containing the quiz answers, some constants 
and a number of functions to return the correct answers, and the user's answers, and appropriate icons

*/

class Answers
{			
	// private associative array containing quiz answers
	private $quizAnswers = array 
		(
    		"num1" => "A1: ", "a1" => "Wexford",
    		"num2" => "A2: ", "a2" => "Laois",
			"num3" => "A3: ", "a3" => "Munster", 
			"num4" => "A4: ", "a4" => "Shannon",
			"num5" => "A5: ", "a5" => "Louth"
		);
	
	// constants containing positive and negative icons	
	const RIGHT_ANSWER_ICON = "<img src=images/yes.png>";
	const WRONG_ANSWER_ICON = "<img src=images/no.png>";
	
	// public function to return a specified answer
	public function getAnswer($answerNumber)
	{		
		return $this->quizAnswers[$answerNumber];
	}
		
	// returns a green "tick" for a correct answer
	public function getRightAnswerIcon()
	{
		return self::RIGHT_ANSWER_ICON;
	}
	
	// returns a red "x" for a wrong answer	
	public function getWrongAnswerIcon()
	{
		return self::WRONG_ANSWER_ICON;
	}
	
	// checks to see if the user supplied an answer to each question
	// returns "Not Answered" if no answer was supplied, or the answer if one was
	// NOT used to check the user's answer against the actual answer
	public function checkIfAnswered($usersAnswer)
	{
		if ($usersAnswer == NULL)
		{ 
			return "Not Answered";
		}
		else
		{
			return $usersAnswer;
		}
	}
	
	// checks to see if the user's answer matches the actual answer, and assigns score accordingly
	// takes in the user's answer, the actual answer and a Score class object
	// if the user's answer matches the actual answer, their score is increased and they receive a green "tick"
	// if the user's answer doesn't match the actual answer, their scored doesn't increase and they receive a red "x"
	public function verifyAnswer($usersAnswer, $actualAnswer, $s1)
	{
		// strcasecmp function used to ignore case sensitivity when checking the user's answer against the actual answer
		// trim function used to avoid marking answers incorrect due to leading or trailing white space
		if (strcasecmp(trim($usersAnswer), $actualAnswer) == 0)
        {
            $s1->increaseScore();
            return $this->getRightAnswerIcon() . "&nbsp;&nbsp;&nbsp;" . $s1->getScore() . "%";
        }
        else
        {
            return $this->getWrongAnswerIcon();
        }
	}
}

?>