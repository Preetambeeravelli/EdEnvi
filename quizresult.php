<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Quiz Result</title>
	<link rel="stylesheet" href="design.css">
	<!-- Mohan Venkat Sivakumar Davuluri (Id Number:700725267) -->
	</head>
	<body>
	
		<?php 
			include('headandfoot.php');
			headerPrint();
		?>
	
		<h1 class = "pageHeading" align="center"> Quiz Result</h1>
		<?php
		if(isset($_POST['quizSubmitButton'])){
		    
    		$answer1 = $_POST['question-1-answers'];
    		$answer2 = $_POST['question-2-answers'];
    		$answer3 = $_POST['question-3-answers'];  
    		$answer4 = $_POST['question-4-answers'];
    		$answer5 = $_POST['question-5-answers'];
    		$answer6 = $_POST['question-6-answers'];
    		$answer7 = $_POST['question-7-answers'];
    		$answer8 = $_POST['question-8-answers'];
    		$answer9 = $_POST['question-9-answers'];
    		$answer10 = $_POST['question-10-answers'];
    		
    		$correctAnswers = array("", "April 22", "All living organisms", "Industrialization", "Ecology", "A biotic ecommunity and its non-living elements", "Ecological balance", "wastes of organisms and dead organism", "Both (a) and (b)", "French", "Herbivores");
    		
    		$selectedAnswers = array ("",$answer1, $answer2, $answer3, $answer4, $answer5, $answer6, $answer7, $answer8, $answer9, $answer10);
    		
    		$totalCorrect = 0;
    		
    		if ($answer1 == "April 22") { $totalCorrect++; }
    		if ($answer2 == "All living organisms") { $totalCorrect++; }
    		if ($answer3 == "Industrialization") { $totalCorrect++; }
    		if ($answer4 == "Ecology") { $totalCorrect++; }
    		if ($answer5 == "A biotic ecommunity and its non-living elements") { $totalCorrect++; }
    		if ($answer6 == "Ecological balance") { $totalCorrect++; }
    		if ($answer7 == "wastes of organisms and dead organism") { $totalCorrect++; }
    		if ($answer8 == "Both (a) and (b)") { $totalCorrect++; }
    		if ($answer9 == "French") { $totalCorrect++; }
    		if ($answer10 == "Herbivores") { $totalCorrect++; }
    		
    		echo ('<div class = "pageBody">');
    		
    		switch ($totalCorrect) {
    		    case "1":
    		        echo '<p align =\"center\">'."Your score is : <img src=\"images/1.gif\" alt=\"1/10\" class = \"newsImage\" >"."</p>";
    
    		        break;
    		    case "2":
    		        echo "<p align =\"center\">"."Your score is : <img src=\"images/2.gif\" alt=\"2/10\" class = \"newsImage\">"."</p>";		       
    		        break;
    		    case "3":
    		        echo "<p align =\"center\">"."Your score is : <img src=\"images/3.gif\" alt=\"3/10\" class = \"newsImage\">"."</p>";
    
    		        break;
    		    case "4":
    		        echo "<p align =\"center\">"."Your score is : <img src=\"images/4.gif\" alt=\"4/10\" class = \"newsImage\">"."</p>";
    		        
    		        break;
    		    case "5":
    		        echo "<p align =\"center\">"."Your score is :<img src=\"images/5.gif\" alt=\"5/10\" class = \"newsImage\">"."</p>";
    		        break;
    		    case "6":
    		        echo "<p align =\"center\">"."Your score is : <img src=\"images/6.gif\" alt=\"6/10\" class = \"newsImage\">"."</p>";
    		        
    		        break;
    		    case "7":
    		        echo "<p align =\"center\">"."Your score is : <img src=\"images/7.gif\" alt=\"7/10\" class = \"newsImage\">"."</p>";
    
    		        break;
    		    case "8":
    		        echo "<p align =\"center\">"."Your score is : <img src=\"images/8.gif\" alt=\"8/10\" class = \"newsImage\">"."</p>";
    		        
    		        break;
    		    case "9":
    		        echo "<p align =\"center\">"."Your score is :<img src=\"images/9.gif\" alt=\"9/10\" class = \"newsImage\">"."</p>";
    
    		        break;
    		    case "10":
    		        echo "<p align =\"center\">"."Your score is : <img src=\"images/10.gif\" alt=\"10/10\" class = \"newsImage\">"."</p>";
    		        
    		        break;
    		    default:
    		        echo "<p align =\"center\">"."Your score is : <img src=\"images/0.gif\" alt=\"0/10\" class = \"newsImage\">"."</p>";
    		}//end switch
    		
    		if ($totalCorrect>=8)
    		{
    		    echo"<p align =\"center\"> You have passed the Quiz</p>";
    		    echo "<img src=\"images/passedImage.gif\" alt=\"You have Pasees Image\" class = \"newsImage\">";
    		  }
    		else{
    		    echo "<p align =\"center\"> Retake the Quiz</p>";
    		    echo "<img src=\"images/retakeImage.gif\" alt=\"Reatke the quiz\" class = \"newsImage\">";
    		  }
		}
		  echo "<h2>"."Answers for the quiz are"."</h2>";
		for ($i = 1; $i < 11; $i++) {
		    echo "<p>".$i.")Your answer is ".$selectedAnswers[$i]." correct answer is ".$correctAnswers[$i]."</p>";
		}
		echo ('</div>');
		
    		?>
    		<div class ="pageBody">
    			<form action = "quiz.php" action ="POST" >
    				<input type="Submit" name="rtakeQuizbutton" value="Retake Quiz" class = "button"/>
    			</form>
    			
    		</div>
    	
    	<footer>
    		
    			 	 <?php 
    			 	     //calling function header to print the footer
        			     footerPrint();
    			     ?>
    		
    	</footer>
	</body>
</html>