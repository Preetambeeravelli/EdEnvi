<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="design.css">
	<!-- Created By Achyuth Kumar Narra (Id Number:700724924) -->
	<script type ="text/javascript">
		//Created by Beeravelli
			//variable to store the try count
			var tryCount =10;
			//start function:creates the event listerners for for the buttons:

			function start(){
				//ths function creates event listners fot the two buttons

				document.getElementById('checkLuckButton').addEventListener('click', checkLuck, false);
			}//end start() 

			//event handler functions for the buttons:
			function checkLuck(){
		
				//generating a random number between 1 and 100 and assigning to a vaiable
				let luckRandomNumber = Math.floor(1 + Math.random() * 100);
				//image holding variables
				let winImage =  "<p>" + "<img src = \"images/winImage.gif\" alt = \"You have won a price image\" class = \"newsImage\">" + "</p>";
				let looseImage = "<p>" + "<img src = \"images/looseImage.gif\" alt = \"Try again next time image \" class = \"newsImage\">" + "</p>";
				let outOfLuckImage = "<p>" + "<img src = \"images/tryAgainImage.gif\" alt = \"Out of tries \" class = \"newsImage\">" + "</p>";
				//
				if(tryCount != 0){
				//decrementing try count
				tryCount -= 1;
					//if statement to check the the random number generated is same
    				if(luckRandomNumber == 23){
    					document.getElementById('luckImageDisplayPara').innerHTML = winImage;
    					document.getElementById('ResultDisplayPara').innerHTML = "Congracts!!!! You have won a prize!!!!";
    					document.getElementById('checkLuckButton').disabled = true;
    				}//end if
    				//else statement if the random number is not 23
    					else{
    						document.getElementById('luckImageDisplayPara').innerHTML = looseImage;
    						document.getElementById('ResultDisplayPara').innerHTML ="OOpps!!!!Try again next time" + "you have " + tryCount + " more tries!";
    						
    						}//end else
				}else{
					document.getElementById('ResultDisplayPara').innerHTML ="You are out of tries, to try again please refresh the page";
					document.getElementById('checkLuckButton').disabled = true;
					document.getElementById('luckImageDisplayPara').innerHTML = outOfLuckImage;
				
				}//end else statement when try count is 10
	
			}//end check luck function

			//page load event listener:
			window.addEventListener('load', start, false);
	</script>
	</head>
	<body>
	
		<?php 
		    //including the file which contains functions for printing header and footer
			include('headandfoot.php');
			//calling function header to print the header
			headerPrint();
		?>
	
			<h1 class = "pageHeading" align="center"> Know about organization </h1>
			<div class = "pageBody">
			<p>
				<img src="images/who.png" alt = "Who are we image" align="right" height = "150" width ="150">
				<h2 align="left">Who are we?</h2>
				<p align="left" class="home">We are a A nonprofit organization, also known as a non-business entity, not-for-profit organization, or nonprofit institution, we are a legal entity organized and operated for a collective, public or social benefit called <strong>EdEnvi</strong> with a group of 108 members working for our organization.We are common people intrested in saving our environment and making others to be a part of us so that there will an environment left for our next generations, we are located in United States with and we have collobrations with many non profit otganizations striving like us for a greener tomorrow around the world. </p>
			<hr>
			</p>
			</div>
			
			<div class="pageBody">
				<img src="images/mission.png" alt = "mission image" align="left" height = "150" width ="150">
				<h2>Our Mission</h2>
				<p>Our mission is to join hundreds of thousands of people who care environment and are waiting for a greener tomorrow by proving Environmental education and many other ways towards Greener environment and healthier living of people. We also motivate others to follow greener alternatives to common products which cause environmental issues. Our mission is to change aas many people as possible towards green life practices.
				</p>
			<hr>
			</div>
			<div class="pageBody">
				<img src="images/how.png" alt = "how image" align="right" height = "150" width ="150">
				<h2>How it all started</h2>
				<h4>The idea to create this website was driven by one of our founder of the organization, he has done his undergraduation in Agriculture and studied the effects of modernization on the environment and motivated us to build this website and join many others who are just like us </h4>
			<hr>
			</div>
			<div class="pageBody">
				<img src="images/achieve.png" alt = "achieve image" height = "150" width ="150"><br>
				<h2>How can we Achieve this?</h2>
					<p>
							1)In this Website we provide various news articles related to latest environmental news by reading which people will gain knowldge about the environment.<br>
							2)There is a small quiz on our website which checks for the knowldge you have on the Environment.<br>
							3)There is a fun activity on FUnn page where you can see the various stages of plant growth.
							4)We Provide various products which are a safer alternatives to many house hold products which cause environmental problems like detergents, Liquid dishwash etc<br>
							5)There is a pledge so that the members can take it to heart and contribute towards greener environment.<br>
							6)We provide links to various other sources of Books, Webites and famous Youtube channels so that you can increase their knowldge and pass that knowldge to others.<br>
							7)We have a pollution calculator on our website where you can calculate the amount of pollution you are making by using Air Conditioning and Driving a car. <br>
							8)You can learn more about plants like their propagation method, annual production around world etc.<br>
							9)you can get to know various quotes by famous persons about environment<br>

					</p>
			<hr>
			</div>
			<div class = "pageBody">
				<h1 align ="center">Want to win some cool Gifts by testing your luck???</h1>
				<p>
					<p align ="center">If your lucky number matches you win, We are hoping that your lucky number is between 0 and 100</p>
        			<!-- Paragraph to display the image  -->
        			<p id ="luckImageDisplayPara"></p>
        			<!-- Paragraph to display If user won or not -->
        			<p id= "ResultDisplayPara" style="text-align:center" ></p>
        			<!-- Greeting para to display if user won the game -->
        			<p id = "giftWonDisplayPara" ></p>
        			<p style="text-align:center">
        			<!-- Normal button to check luck -->
        			<input type ="button" id ="checkLuckButton" class = "button" value = "Check Luck" >
        			</p>
    			</p>
    		<hr>
			</div>
	<footer>
			<?php 
			 //calling function header to print the footer
			  footerPrint();
			?>
	</footer>
</body>
</html>
