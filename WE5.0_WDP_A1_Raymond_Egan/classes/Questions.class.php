<?php

/*

Ray Egan
13/02/17
WDP Assessment 1 V4 - Questions class

The Questions class contains an associative array containing the quiz questions, and
a function that accepts an argument to return a particular question, and a function to return 
the number of questions in the array

*/

class Questions
{
	// private associative array containing quiz questions
	private $quizQuestions = array 
	(
		
		'num1' => "Q1: ", "q1" => "The Saltee Islands lie off the coast of County ___________.",
		"num2" => "Q2: ", "q2" => "County ___________ is the only county not to border any county with a maritime coastline.",
		"num3" => "Q3: ", "q3" => "The province of ___________ is the largest province in Ireland by area.", 
		"num4" => "Q4: ", "q4" => "The town of Athlone is situated on the River ___________.",
		"num5" => "Q5: ", "q5" => "County ___________ is the smallest county in Ireland by area."
	);
	
	// public function to return a specified question
	public function getQuestion($questionNumber)
	{		
		return $this->quizQuestions[$questionNumber];
	}
	
	// uses count(array) to get the number of elements in quizQuestions array
	// divides this answer by 2 for the actual amount of questions
	public function getNumberOfQuestions()
	{
		return count($this->quizQuestions)/2;
	}
}

?>