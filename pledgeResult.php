<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Pledge</title>
	<link rel="stylesheet" href="design.css">
	<!-- created by Preetam Beeravelli (Id Number:700723604) and Mohan Venkat Sivakumar Davuluri (Id Number:700725267)  -->
	</head>
	<body>
		<?php 
		//including the file which contains functions for printing header and footer
			include('headandfoot.php');
			//calling function header to print the header
			headerPrint();
		?>
		<h1 class = "pageHeading" align="center"> Thank You for taking pledge</h1>
	<div class = "pageBody">
		<?php
		//global variables for creating connection.--step1
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "customerinfodatabase";
		
		//checking for the round trip
		if (isset($_POST['pledgeSubmitButton'])) {
		    //checking if firstname is set and calling validation function
		    if (isset($_POST['firstNameTextBox']) && validateString($_POST['firstNameTextBox'])) {
		        //assigning the input to a variable
		        $firstName = $_POST['firstNameTextBox'];
		        //checking if lastname is set and calling validation function
		        if (isset($_POST['lastNameTextBox']) && validateString($_POST['lastNameTextBox'])) {
		            //assigning the input to a variable
		            $lastName = $_POST['lastNameTextBox'];
		            //checking if lastname is set 
		            if (isset($_POST['streetAddresstextBox'])){ 
		                //assigning the input to a variable
		                $streetAddress = $_POST['streetAddresstextBox'];
		                //checking if city name is set and calling validation function
		                if (isset($_POST['cityTextBox'])){//&& validateString($_POST['cityTextBox'])) {
		                    //assigning the input to a variable
		                    $city = $_POST['cityTextBox'];
		                    //checking if zipcode is set and calling validation function
		                    if (isset($_POST['zipcodeNumberBox']) && validateNumber($_POST['zipcodeNumberBox'])) {
		                        //assigning the input to a variable
		                        $zipcode = $_POST['zipcodeNumberBox'];
		                        //checking if lastname is email and calling validation function
		                        if (isset($_POST['emailAddressEmailBox']) && validateEmail($_POST['emailAddressEmailBox'])) {
		                            //assigning the input to a variable
		                            $emailAddress =  $_POST['emailAddressEmailBox'];
		                            //checking if lastname is set 
		                            if (isset($_POST['mobileNumberBox'])){
		                                //assigning the input to a variable
		                                $mobileNumber = $_POST['mobileNumberBox'];
		                                //checking if thoughts are box is set and calling validation function
		                                if (isset($_POST['thoughtsTextAreaBox']) && validateNormalString($_POST['thoughtsTextAreaBox'])) {
		                                    //assigning the input to a variable
		                                    $thoughtsLeft = $_POST['thoughtsTextAreaBox'];
		                                    //printing the greeting to the user
		                                    echo "<p> Thank you for leaving ".str_word_count($thoughtsLeft)." worded Thoughts about what inspried you to take pledge, we appreciate that and that will be helpfull to improve our website <p><hr>";
		                                     //checking if the things to do checkbox is set and calling function to display results
		                                      if(isset($_POST['pledgeOptions1'])|| isset($_POST['pledgeOptions2']) || isset($_POST['pledgeOptions3']) || isset($_POST['pledgeOptions4']) || isset($_POST['pledgeOptions5'])){echo ("<h4>You have selected the following things to do for a greener tomorrow:</p>");}
		                                      //checking if the things to do checkbox is set and calling function to display results
		                                      if (isset($_POST['pledgeOptions1'])) {thingsToDODisplay($_POST['pledgeOptions1']);}
		                                      //checking if the things to do checkbox is set and calling function to display results
		                                      if (isset($_POST['pledgeOptions2'])) {thingsToDODisplay($_POST['pledgeOptions2']);}
		                                      //checking if the things to do checkbox is set and calling function to display results
		                                      if (isset($_POST['pledgeOptions3'])) {thingsToDODisplay($_POST['pledgeOptions3']);}
		                                      //checking if the things to do checkbox is set and calling function to display results
		                                      if (isset($_POST['pledgeOptions4'])) {thingsToDODisplay($_POST['pledgeOptions4']);}
		                                      //checking if the things to do checkbox is set and calling function to display results
		                                      if (isset($_POST['pledgeOptions5'])) {thingsToDODisplay($_POST['pledgeOptions5']);}
        		                                        //checking if promotion  box is set and calling various functions and sending the details into database
            		                                    if (isset($_POST['promotionRadioButton'])) {
            		                                        //assigning the input to a variable
            		                                        $selectedOption = $_POST['promotionRadioButton']; 
            		                                        //calling function and supplying parameters
            		                                        promotionMessage($selectedOption,$mobileNumber,$emailAddress);
            		                                        //printing the first name and last name to greet the user
            		                                        echo "<hr> <p> Thank you ".$firstName." ".$lastName." for taking pledge, we hope that you will certainly stand upto the promise you made!! <p> <hr>";
            		                                        $sqlInsertQuery = "INSERT INTO customerinfo(first_name, last_name, mobile_no, mail_id, zip_code) VALUES ('$firstName','$lastName','$mobileNumber','$emailAddress','$zipcode');";
            		                                        //connect to mysql--step3
            		                                        //create the connection and connect to database:
            		                                        $connection = new mysqli($servername, $username, $password, $dbname);
            		                                        //check connection
            		                                        if($connection -> errno)
            		                                        {
            		                                            ("Connection failed: " . $connection->connect_error); //if connection fails, display error message.
            		                                            echo "DBMS connect failed - errno:" . $connection->errno . PHP_EOL;
            		                                            die("DBMS connect failed - error: " . $connection->error . PHP_EOL);
            		                                        }//end if
            		                                        try
            		                                        {
            		                                            if($connection->query($sqlInsertQuery))
            		                                            {//send the sql insert query --step 4
            		                                                echo "Your details have been saved with us";
            		                                                $_POST[] = array();
            		                                            }
            		                                            else
            		                                            {
            		                                                //die
            		                                                throw new Exception("Insert failed" . $connection-> error);
            		                                            }
            		                                        }
            		                                        catch (Exception $e)
            		                                        {
            		                                            die("Error: " . $e->getMessage());//error handling
            		                                        }//end try catch.
            		                                        $connection->close();//---step5
            		                                        unset($_POST['insert']);
    		                                    }else {echo "Subscribing to our channel will keep you updated with the environmental news";}//end subscribe else statement
		                                  }else { echo "Check yhe comment box or Leaving Thoughts will help us in improving the website (if you havent)";}//end thoughts else statement
		                              }else { echo "Please Check or enter yout Mobile number";}//end mobile number  else statement
		                          }else { echo "Please Check or enter yout Email address";}//end email  else statement
		                      }else { echo "Please Check or enter yout Zipcode";}//end zipcode  else statement
		                  }else { echo "Please Check or enter yout City name";}//end city  else statement
		              }else { echo "Please Check or enter yout Street address";}// end street address else statement
		          }else { echo "Please Check or enter yout Last name";}// end last name else statement
		    }else{ echo "Please Check or enter your first name";}//end  first name else statement
		}//end submit button/round trip if statement      
		 ?>
		 </div>
		 <?php 
		//function to display the options selected by the user to recieve promotions
		function promotionMessage($promotionBox, $mobileNo, $emailAdd) {
		    
		    //switch statement to select between the options selected by the user
		    switch($promotionBox){
		        //switch case if the user selects email as preference
		        case "email":
		            //printing the confirmation that user selected email promotion
		            echo "<hr> <p> You have selected to recieve information through email, Your preferred email is: ".$emailAdd." Thank you for signing up for the emails"."</p>";
		            break;
		            //switch case if the user selects text as preference
		        case "text":
		            //printing the confirmation that user selected Text promotion
		            echo "<hr> <p> You have selected to recieve information through Text messages, Your preferred phone number  is: <strong>".$mobileNo."<strong> Thank you for signing up for the text messages"."</p>";
		            break;
		            //switch case if the user selects email and text as preference
		        case "both":
		            //printing the confirmation that user selected email and text promotion
		            echo "<hr> <p> You have selected to recieve information through email and Text messages, Your preferred phone number  is:".$mobileNo." and our preferred email is: ".$emailAdd." Thank you for signing up for the emails and text messages </p>";
		            break;
		      
		  }
		}
		//function to display the options selected by the user to make greener tomorrow
		function thingsToDODisplay($selectedOption) {
		    
		    //switch statement to select between the options selected by the user
		    switch($selectedOption){
		        
		        //switch case if the user selects option 1 
		        case "1":
		            //printing the to do that user selected 
		            echo "<p>"."Use Biodegradable Products"."</p>";
		            break;
		            //switch case if the user selects option 2
		        case "2":
		            //printing the to do that user selected 
		            echo "<p>"."Plant more trees"."</p>";;
		            break;
		            //switch case if the user selects option 3 
		        case "3":
		            //printing the to do that user selected 
		            echo "<p>"."Decrease using single time use products"."</p>";
		            break;
		            //switch case if the user selects option 4 
		        case "4":
		            //printing the to do that user selected 
		            echo "<p>"."Convert to Plant based diet"."</p>";
		            break;
		            //switch case if the user selects option 5
		        case "5":
		            //printing the to do that user selected 
		            echo "<p>"."Use emission free transport mode"."</p>";
		            break;
		            
		    }
		}
		
		function validateString($string)
		{
		    if(!empty($string) && !ctype_space($string) && ctype_alpha($string) && count_chars($string) >=1)
		    {
		        //empty checks if the string is empty
		        //ctype_space checks for white space characters
		        //ctype_alpha check only alphabets. other characters return false.
		        
		        return true;
		    }
		    else
		    {
		        return false;
		    }//end string validation.
		}//end validateString
		function validateNormalString($string)
		{
		    if(!empty($string) && is_string($string) && str_word_count($string) >=1)
		    {
		        //empty checks if the string is empty
		        //is_sting check if only string is present. other characters return false.
		        //str_word_count chechs the word count is >1
		        return true;
		    }
		    else
		    {
		        return false;
		    }//end thoughts validation.
		}//end validateThoughts
		function validateNumber($number)
		{
		    //checks if the entered input is numberid
		    if(is_numeric($number))
		    {
		        return true;
		    }
		    else
		    {
		        return false;
		    }//end numeric validation.
		}//end validateNumber
		function validateEmail($email) {
		    //checks for the email format
		    if("/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/")
		    {
		        return true;
		        
		    }
		    else {
		        return false;
		        
		    }
		    //end validation
		}//end validateEmail
		?>
	
   <footer>
		<div class="footer">
			  <?php 
			  //calling function header to print the footer
			   footerPrint();
			?>
		</div>
	</footer>
</body>
</html>