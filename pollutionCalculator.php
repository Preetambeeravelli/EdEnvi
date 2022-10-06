<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
    	<title>Pollution Calculator</title>
    	<link rel="stylesheet" href="design.css">
    	<!-- Created by Preetam Beeravelli (Id Number:700723604) -->
    </head>
    <body>
	
		<?php 
		//including the file which contains functions for printing header and footer
			include('headandfoot.php');
			//calling function header to print the header
			headerPrint();
		?>
	
		<h1 class = "pageHeading" align="center"> Want to Know the pollution we are making?</h1>
			<div class = "pageBody">
    			<form action = "pollutionCalculator.php" method ="POST">
    				<div>
                        <h2>Select or type the number of Hours you use Air conditioning per day</h2>
                        <input type = "number" min = 0 max = 24 name = "acHoursNumberBox" placeholder = "Select or Type the hours" class = "input" value = <?php if(isset($_POST['acHoursNumberBox'])){echo $_POST['acHoursNumberBox']; }?>> <br>
                        <p>(The Box accepts the input from 1 hour to 24 hours)</p>
                        <input type = "submit" value = "Get Result"  name = "cfcSubmitButton" class = "button">
                        <input type = "reset" value = "Reset" name = "cfcResetButton" class = "button">
                    
       				<?php 
       				     //checking if submit button is hit
               				if(isset($_POST["cfcSubmitButton"])){
               				    //validating the input given buy the user
               				    if($_POST["acHoursNumberBox"] <= 24 && $_POST["acHoursNumberBox"] >=1){
               				        //printing the input if it is valid
               				        echo "<p> You will use AC for: ".$_POST["acHoursNumberBox"]." hours per day:"."</p>";
               				        //calling the function to calculate the co2
               				        getCFC();
               				    }else {echo ("Please check the input given!!");}//end if and else validation 
               				}//end checking for submit button press
       				?>
       				<hr>
         		 </div>
         		  <div>
         		  <h2>Want to know the pollution you are making by driving a car</h2>
                        <p><strong>Select or type the number of Miles you drive per day</strong></p>
                        <input type = "number" min = 1 max = 100 name = "milesDrivenNumberBox" placeholder = "Type the miles you drive per day" class = "input" value = <?php if(isset($_POST['milesDrivenNumberBox'])){echo $_POST['milesDrivenNumberBox']; }?>><br><p>(select or type in a number between 1 and 100 )</p>
                        <input type = "submit" value = "Get Result" name = "co2MilesSubmitButton"class = "button">
                        <input type = "reset" value = "Reset" name = "co2MilesResetButton"class = "button">
                    
                    <?php 
                        //checking if submit button is hit
                        if(isset($_POST["co2MilesSubmitButton"])){
                            //validating the input given buy the user
                            if($_POST["milesDrivenNumberBox"] <= 100 && $_POST["milesDrivenNumberBox"] >= 1  ){
                                //printing the input if it is valid
                                echo "<p> You will drive Car for: ".$_POST["milesDrivenNumberBox"]." miles per day:"."</p>";
                                //calling the function to calculate the co2
                                getCFC();
                            }else {echo ("Please check the input given!!");}//end if and else validation 
                        }//end checking for submit button press
                    ?>
                  </div>
                  <div><br>
                  		<p><strong>Select or type the number of Gallons you use per week</strong></p>
                     	 <input type = "number" min = 1 max = 50 name = "gallonsUsedNumberBox" placeholder = "Type the Gallons you use per week" class = "input" value = <?php if(isset($_POST['gallonsUsedNumberBox'])){echo $_POST['gallonsUsedNumberBox']; }?>><br><p>(select or type in a number between 1 and 50 )</p>
                        <input type = "submit" value = "Get Result" name = "co2GallonsSubmitButton"class = "button">
                        <input type = "reset" value = "Reset" name = "co2GallonsResetButton"class = "button">
                    
                    <?php 
                        //checking if submit button is hit
                        if(isset($_POST["co2GallonsSubmitButton"])){
                            //validating the input given buy the user
                            if($_POST["gallonsUsedNumberBox"] <= 50 && $_POST["gallonsUsedNumberBox"] >= 1){
                                //printing the input if it is valid
                                echo "<p> You will drive Car which consumes: ".$_POST["gallonsUsedNumberBox"]." Gallons per Week:"."</p>";
                                //calling the function to calculate the co2
                                getCO2Gallons() ;
                            }else {echo ("Please check the input given!!");}//end if and else validation 
                            
                        }//end checking for submit button press
                    ?>
              </form>
                  </div>
              </div>
    	<footer>
    		
    			 <?php
    			 //calling function header to print the footer
    			  footerPrint();
    			?>
    		
    	</footer>
    		<?php
		//functions for co2 calculation using ac
		function getCFC (){
		    //setting the input by the user to a variable
		    $hoursUsed = $_POST["acHoursNumberBox"];
		    //defining a constant which holds co2 emission per hour
		    define ("CFCEMITTED", 25);
		    
		    //calculating the amount of co2 for one day
		    $totalEmissionPerDay = $hoursUsed * CFCEMITTED;
		    //calculating the amount of co2 for one week
		    $totalEmissionPerWeek = $totalEmissionPerDay * 7;
		    //calculating the amount of co2 for one month
		    $totalEmissionPerMonth = $totalEmissionPerWeek * 4;
		    //calculating the amount of co2 for one year
		    $totalEmissionPerYear = $totalEmissionPerMonth * 12;
		    
		    //printing the amount of co2 for one day
		    echo "<p>"."Your daily emission is: ".$totalEmissionPerDay."mg"."<p>";
		    //printing the amount of co2 for one week
		    echo "<p>"."Your weekly emission is: ".$totalEmissionPerWeek."mg"."<p>";
		    //printing the amount of co2 for one month
		    echo "<p>"."Your monthly emission is: ".$totalEmissionPerMonth."mg"."<p>";
		    //printing the amount of co2 for one year
		    echo "<p>"."Your yearly emission is: ".$totalEmissionPerYear."mg"."<p>";
		    //printing a message to users
		    echo "<p>"."Are the numbers Terrifying!, These are only per one house hold, imagine the total number of households in the world!!!!<br>Please use AC wisely, turn off when not needed,<strong>Save Environment<br>"."<p>";   
		}//gas functions
		?>
		
		<?php
		//creating function for calculation with miles driven
      function getCo2Miles (){
          //setting the input by the user to a variable
            $milesDriven = $_POST["milesDrivenNumberBox"];
            //defining a constant which holds co2 emission per mile
            define ("CO2EMITTEDMILE", 441);
    
            //calculating the amount of co2 for one day
            $totalCO2EmissionPerDay = $milesDriven * CO2EMITTEDMILE;
            //calculating the amount of co2 for one week
            $totalCO2EmissionPerWeek = $totalCO2EmissionPerDay * 5 + 20;
            //calculating the amount of co2 for one month
            $totalCO2EmissionPerMonth = $totalCO2EmissionPerWeek * 4;
            //calculating the amount of co2 for one year
            $totalCO2EmissionPerYear = $totalCO2EmissionPerMonth * 12;
            
            //printing the amount of co2 for one day
            echo "<p>"."Your daily emission is: ".$totalCO2EmissionPerDay." Grams of Co2 "."or ".$totalCO2EmissionPerDay * 2.2." Pounds of Co2"."<p>";
            //printing the amount of co2 for one week
            echo "<p>"."Your weekly emission is: ".$totalCO2EmissionPerWeek." Grams of Co2 "."or ".$totalCO2EmissionPerWeek * 2.2." Pounds of Co2"."<p>";
            //printing the amount of co2 for one month
            echo "<p>"."Your monthly emission is: ".$totalCO2EmissionPerMonth." Grams of Co2 "."or ".$totalCO2EmissionPerMonth * 2.2." Pounds of Co2"."<p>";
            //printing the amount of co2 for one year
            echo "<p>"."Your yearly emission is: ".$totalCO2EmissionPerYear." Grams of Co2 "."or ".$totalCO2EmissionPerYear * 2.2." Pounds of Co2"."<p>";
            //printing a message to users
            echo "<p>"."Are these numbers Horrifying!, These are only per one average car, imagine the total number of cars and trucks (Btw trucks emit way more larger amounts of co2 compare to cars almost double also) in the world!!!!<br>Please use public transport or switch to a more environmental friendly mode of transport like using bycycles or electric cars, i will leave some of the links for greener alternavtives<strong>Save Environment<br>"."Please try to switch to electric vehicles which are safer for Environment"."<p>";
      }//end miles co2 function

        //creating function for calculation with gallons used
        function getCO2Gallons(){
            //setting the input by the user to a variable
          $gallonsUsed = $_POST["gallonsUsedNumberBox"];
          //defining a constant which holds co2 emission per gallon
          define ("COEEMITTEDGALLON", 8877);

          //calculating the amount of co2 for one week
            $totalCO2EmissionPerWeekGallon = $gallonsUsed * COEEMITTEDGALLON;
            //calculating the amount of co2 for one month
            $totalCO2EmissionPerMonthGallon = $totalCO2EmissionPerWeekGallon * 4;
            //calculating the amount of co2 for one day
            $totalCO2EmissionPerYearGallon = $totalCO2EmissionPerMonthGallon * 12;
    
               //printing the amount of co2 for one week
              echo "<p>"."Your weekly emission is: ".$totalCO2EmissionPerWeekGallon." Grams of Co2 "."or ".$totalCO2EmissionPerWeekGallon * 2.2." Pounds of Co2"."<p>";
              //printing the amount of co2 for one month
              echo "<p>"."Your monthly emission is: ".$totalCO2EmissionPerMonthGallon." Grams of Co2 "."or ".$totalCO2EmissionPerMonthGallon * 2.2." Pounds of Co2"."<p>";
              //printing the amount of co2 for one year
              echo "<p>"."Your yearly emission is: ".$totalCO2EmissionPerYearGallon." Grams of Co2 "."or ".$totalCO2EmissionPerMonthGallon * 2.2." Pounds of Co2"."<p>";
              //printing a message to users
              echo "<p>"."Are these numbers Horrifying!, These are only per one average car, imagine the total number of cars and trucks (Btw trucks emit way more larger amounts of co2 compare to cars almost double also) in the world!!!!<br>Please use public transport or switch to a more environmental friendly mode of transport like using bycycles or electric cars, i will leave some of the links for greener alternavtives<strong>Save Environment<br>"."Please try to switch to electric vehicles which are safer for Environment"."<p>";
        }//end gallons co2 function
    ?>
	</body>
</html>
