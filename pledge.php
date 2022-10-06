<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Pledge</title>
	<link rel="stylesheet" href="design.css">
	<!--created by Preetam Beeravelli (Id Number:700723604) -->
	</head>
	<body>
	
		<?php 
		    //including the file which contains functions for printing header and footer
			include('headandfoot.php');
			//calling function header to print the header
			headerPrint();
		?>
	
		<h1 class = "pageBody" align="center"> Take Plegde towards Greener Environment</h1>
		<div class = "formBody">
		<form method="POST" action="pledgeResult.php">
			<p>
			<label>First Name</label><br>
			<input type="text" class = "input" name="firstNameTextBox" minlength="2" maxlength="10" placeholder="Enter Your First Name" value = "<?php if(isset($_POST['pledgeSubmitButton'])){echo $_POST['firstNameTextBox'];}?>"/><br>
			</p>
			<p>
			<label>Last Name</label><br>
			<input type="text" class = "input" name="lastNameTextBox" minlength="2" maxlength="10" placeholder="Enter Your Last Name" value = "<?php if(isset($_POST['pledgeSubmitButton'])){echo $_POST['lastNameTextBox'];}?>"/><br>
			</p>
			<p>
			<label>Date of Birth</label><br>
			<input type="date" class = "input" name="dateOfBirthDateBox"/><br>
			</p>
			<p>
			<label>Select Gender</label><br>
				<select name="genderOption" class="input">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Prefer not to say" selected>Prefer not to say</option>
                </select><br>
            </p>
            <p>
            <label>Enter Your Address</label><br>
            <input type="text" class = "input" name="streetAddresstextBox" minlength="2" maxlength="20" placeholder="Enter Your street number and name" value = "<?php if(isset($_POST['pledgeSubmitButton'])){echo $_POST['streetAddresstextBox'];}?>"/><br>
            <input type="text" class = "input" name="cityTextBox" minlength="5" maxlength="15" placeholder="Enter Your City name" value = "<?php if(isset($_POST['pledgeSubmitButton'])){echo $_POST['cityTextBox'];}?>" /><br>
            <input type="number" class = "input" name="zipcodeNumberBox" placeholder="Enter Your zipcode" minlength="5" maxlength="5" value = "<?php if(isset($_POST['pledgeSubmitButton'])){echo $_POST['zipcodeNumberBox'];}?>" /><br>
	            <select name="stateSelectBox" id="state" class ="input">
					  <option value="" selected="selected">Select a State</option>
					  <option value="AL">Alabama</option>
					  <option value="AK">Alaska</option>
					  <option value="AZ">Arizona</option>
					  <option value="AR">Arkansas</option>
					  <option value="CA">California</option>
					  <option value="CO">Colorado</option>
					  <option value="CT">Connecticut</option>
					  <option value="DE">Delaware</option>
					  <option value="DC">District Of Columbia</option>
					  <option value="FL">Florida</option>
					  <option value="GA">Georgia</option>
					  <option value="HI">Hawaii</option>
					  <option value="ID">Idaho</option>
					  <option value="IL">Illinois</option>
					  <option value="IN">Indiana</option>
					  <option value="IA">Iowa</option>
					  <option value="KS">Kansas</option>
					  <option value="KY">Kentucky</option>
					  <option value="LA">Louisiana</option>
					  <option value="ME">Maine</option>
					  <option value="MD">Maryland</option>
					  <option value="MA">Massachusetts</option>
					  <option value="MI">Michigan</option>
					  <option value="MN">Minnesota</option>
					  <option value="MS">Mississippi</option>
					  <option value="MO">Missouri</option>
					  <option value="MT">Montana</option>
					  <option value="NE">Nebraska</option>
					  <option value="NV">Nevada</option>
					  <option value="NH">New Hampshire</option>
					  <option value="NJ">New Jersey</option>
					  <option value="NM">New Mexico</option>
					  <option value="NY">New York</option>
					  <option value="NC">North Carolina</option>
					  <option value="ND">North Dakota</option>
					  <option value="OH">Ohio</option>
					  <option value="OK">Oklahoma</option>
					  <option value="OR">Oregon</option>
					  <option value="PA">Pennsylvania</option>
					  <option value="RI">Rhode Island</option>
					  <option value="SC">South Carolina</option>
					  <option value="SD">South Dakota</option>
					  <option value="TN">Tennessee</option>
					  <option value="TX">Texas</option>
					  <option value="UT">Utah</option>
					  <option value="VT">Vermont</option>
					  <option value="VA">Virginia</option>
					  <option value="WA">Washington</option>
					  <option value="WV">West Virginia</option>
					  <option value="WI">Wisconsin</option>
					  <option value="WY">Wyoming</option>
				</select><br>
			</p>
			<p>
			<label>Enter your Email Address</label><br>
			<input type="email" class = "input" name="emailAddressEmailBox" placeholder="Enter Your email in abc@org.com Format" value = "<?php if(isset($_POST['pledgeSubmitButton'])){echo $_POST['emailAddressEmailBox'];}?>" /><br>
			</p>
			<p>
			<label>Enter Your mobile number</label><br>
            <input type="tel" class = "input" name="mobileNumberBox" placeholder="Enter Your mobile number in (123)-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value = "<?php if(isset($_POST['pledgeSubmitButton'])){echo $_POST['mobileNumberBox'];}?>"/><br>
        	</p>
        	<p>
            <label>Tell us what inspired you to take this pledge</label><br>
            <textarea rows="4" cols="50" name="thoughtsTextAreaBox" class="input" required placeholder="Enter your thoughts here"></textarea><br>
        	</p>
        	<p>
           <label Style = "font-size: 22px; font-weight: bold;">Please select the things you will do for a greener tomorrow</label><br>
           	</p>

           	<p>
           		<input type="checkbox" name="pledgeOptions1" value="1" <?php if(isset($_POST['pledgeOptions1'])) echo "checked"; ?>>
				<label>Use Biodegradable Products</label><br>
				<input type="checkbox" name="pledgeOptions2" value="2" <?php if(isset($_POST['pledgeOptions2'])) echo "checked"; ?>>
				<label >Plant more trees</label><br>
				<input type="checkbox" name="pledgeOptions3" value="3" <?php if(isset($_POST['pledgeOptions3'])) echo "checked"; ?>>
				<label >Decrease using single time use products</label><br>
				<input type="checkbox" name="pledgeOptions4" value="4" <?php if(isset($_POST['pledgeOptions4'])) echo "checked"; ?>>
				<label >Convert to Plant based diet</label><br>
				<input type="checkbox" name="pledgeOptions5" value="5" <?php if(isset($_POST['pledgeOptions5'])) echo "checked"; ?>>
				<label >Use emission free transport mode</label><br>
			</p>
				<p>
			<label>How would youlike to recieve information regarding environmental education?</label><br>
				</p>
				<p>
				<input type="radio" name="promotionRadioButton" value="email" required <?php if(isset($_POST['promotionRadioButton'])) echo "checked"; ?>>
				<label>Email only</label><br>
				<input type="radio" id="css" name="promotionRadioButton" value="text" required <?php if(isset($_POST['promotionRadioButton'])) echo "checked"; ?>>
				<label>Text only</label><br>
				<input type="radio"  name="promotionRadioButton" value="both" required <?php if(isset($_POST['promotionRadioButton'])) echo "checked"; ?>>
				<label>Both Email and Text</label><br>
				</p>
				<p>
			  	<button type="submit"  class = "button" name = "pledgeSubmitButton" value="Submit">Submit</button>
  				<button type="reset"  class = "button"  value="Reset">Reset</button><br>
  				</p>
  				<br>
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
