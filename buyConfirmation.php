<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Buy</title>
		<link rel="stylesheet" href="design.css">
		<!-- Preetam Beeravelli (Id Number:700723604) -->
	</head>
	<body>
		
		<?php 
		//including the file which contains functions for printing header and footer
			include('headandfoot.php');
			
			//calling function header to print the header
			headerPrint();
		?>
			<h1 class = "pageHeading" align="center"> Thank You for Buying Products from us </h1>
				<div class = "pageBody">
					<h1 align="center"><strong>Order Details</strong></h1>
    			<?php
    			
    			 //Checking for round trip
        			if(isset($_POST['buySubmitButton'])){
        			     //check ing if the product 1 quantity is set and if it is greater than 1
        			    if (isset($_POST['product1BuyNumberBox']) && $_POST['product1BuyNumberBox'] >= 1 ) {
        			        //assigning the product quantity t0 the variable
        			    $product1Qty = $_POST['product1BuyNumberBox'];
        			    }else{$product1Qty = 0;}// end product 1 if, else statement when product 1 quantity is not set and assigning quantity to 0
        			     //check ing if the product 2 quantity is set and if it is greater than 1
        			    if (isset($_POST['product2BuyNumberBox']) && $_POST['product2BuyNumberBox'] >= 1 ) {
        			        //assigning the product quantity t0 the variable
        			      $product2Qty = $_POST['product2BuyNumberBox'];
        			    }else{$product2Qty = 0;}//end product 2 if, else statement when product 2 quantity is not set and assigning quantity to 0
        			    //check ing if the product 3 quantity is set and if it is greater than 1
        			    if (isset($_POST['product3BuyNumberBox'])&& $_POST['product3BuyNumberBox'] >= 1 ) {
        			        //assigning the product quantity t0 the variable
        			      $product3Qty = $_POST['product3BuyNumberBox'];
        			    }else{$product3Qty = 0;}//end product 3 if, else statement when product 3 quantity is not set and assigning quantity to 0
        		          //check ing if the product 4 quantity is set and if it is greater than 1
        		        if (isset($_POST['product4BuyNumberBox'])&& $_POST['product4BuyNumberBox'] >= 1) {
        		            //assigning the product quantity t0 the variable
        			      $product4Qty = $_POST['product4BuyNumberBox'];
        		        }else{$product4Qty = 0;}//end product 4 if, else statement when product 4 quantity is not set and assigning quantity to 0
        			     //check ing if the product 5 quantity is set and if it is greater than 1
        			    if (isset($_POST['product5BuyNumberBox'])&& $_POST['product5BuyNumberBox'] >= 1 ) {
        			        //assigning the product quantity t0 the variable
        			      $product5Qty = $_POST['product5BuyNumberBox'];
        			     }else{$product5Qty = 0;}//end product 5 if, else statement when product 5 quantity is not set and assigning quantity to 0
        			}//END ROUND TRIP
        			
        			//calling the function AND SUPPLYING THE PARAMETERS WHICH ARE PRODUCT TOTALS
    			calculateTotal($product1Qty, $product2Qty, $product3Qty, $product4Qty, $product5Qty);
    		?>
    		<?php 
    			
    		//creating the function which takes five prameters which are product quantity
    			function calculateTotal($product1qty, $product2qty, $product3qty, $product4qty, $product5qty){
    			    
    			    //including buyFunctions.php which has the constants for prices
    			    include 'buyFunctions.php';
    			    
    			    //declaring and calculating the total amount for product 1 bought
    			    $product1Total = ($product1qty * PRODUCT1PRICE);
    			    
    			    //declaring and calculating the total amount for product 2 bought
    			    $product2Total = ($product2qty * PRODUCT2PRICE);
    			    
    			    //declaring and calculating the total amount for product 3 bought
    			    $product3Total = ($product3qty * PRODUCT3PRICE);
    			    
    			    //declaring and calculating the total amount for product 4 bought
    			    $product4Total = ($product4qty * PRODUCT4PRICE);
    			    
    			    //declaring and calculating the total amount for product 5 bought
    			    $product5Total = ($product5qty * PRODUCT5PRICE);
    			    
    			    //Total amount of five products
    			    $totalAmount = number_format($product1Total + $product2Total + $product3Total + $product4Total + $product5Total,2);
    			    
    			    //calculating the tax for total amount
    			    $taxAmount = number_format($totalAmount * 0.1,2);
    			    
    			    //summing the tax with total amount
    			    $totalAmountWithTax = number_format($totalAmount + $taxAmount,2);
    			    
    			    
    			    //if statement when tax amount is greater than 1 which indicates that there ia product bought
    			    if ($taxAmount > 1) {
    			        
    			        //printing the total amount whithou adding tax
    			        echo ("Your Total amount for the selected products is:$ ". $totalAmount."<br>");
    			        
    			        //printing statement to indicate price breakup for individual products
    			        echo ("Individual Product price break down <br>");
    			        
    			        //if statement to check if product 1 quantity is not equal to zero
    			        if ($product1qty != 0) {
    			            
    			            //printing the quantity of product 1 bought and its total amount and each rate of product 1
    			            echo ("Product 1 quantity bought = ".$product1qty." ,Amount for these products is:$ ".$product1Total." @ ". PRODUCT1PRICE." $ each"."<br>");
    			        }else echo("You did not select quantity for product 1 <strong>(Compostable Plates)</strong><br>");//end product 1 if statement  and else statement to display if the product quantity is equal to 0
    			        
    			        //if statement to check if product 2 quantity is not equal to zero
    			        if ($product2qty != 0) {
    			            
    			            //printing the quantity of product 2 bought and its total amount and each rate of product 2
    			            echo ("Product 2 quantity bought = ".$product2qty." ,Amount for these products is:$ ".$product2Total." @ ". PRODUCT2PRICE." $ each"."<br>");
    			        }else echo("You did not select quantity for product 2 <strong>(Biodegrdable cutlery)</strong><br>");//end product 2 if statement  and else statement to display if the product quantity is equal to 0
    			       
    			        //if statement to check if product 3 quantity is not equal to zero
    			        if ($product3qty != 0) {
    			           
    			                //printing the quantity of product 3 bought and its total amount and each rate of product 3
    			            echo ("Product 3 quantity bought = ".$product3qty." ,Amount for these products is:$ ".$product3Total." @ ". PRODUCT3PRICE." $ each"."<br>");
    			        }else echo("You did not select quantity for product 3 <strong>(Biodegrdable Sponges)</strong><br>");//end product 3 if statement  and else statement to display if the product quantity is equal to 0
    			        
    			        //if statement to check if product 4 quantity is not equal to zero
    			        if ($product4qty != 0) {
    			           
    			                //printing the quantity of product 4 bought and its total amount and each rate of product 4
    			            echo ("Product 4 quantity bought = ".$product4qty." ,Amount for these products is:$ ".$product4Total." @ ". PRODUCT4PRICE." $ each"."<br>");
    			        }else echo("You did not select quantity for product 4 <strong>( Biodegradable Dental FLoss)</strong><br>");//end product 4 if statement  and else statement to display if the product quantity is equal to 0
    			        
    			        //if statement to check if product 5 quantity is not equal to zero
    			        if ($product5qty != 0) {
    			            //printing the quantity of product 5 bought and its total amount and each rate of product 5
    			            echo ("Product 5 quantity bought = ".$product5qty." ,Amount for these products is:$ ".$product5Total." @ ". PRODUCT5PRICE." $ each"."<br>");
    			        }else echo("You did not select quantity for product 5 <strong>( Biodegradable Dental Brushes)</strong>   <br>");//end product 5 if statement  and else statement to display if the product quantity is equal to 0
    			        
    			        //displaying the total amount of the products with tax included
    			        echo ("Total amount after tax is: $".$totalAmountWithTax."<br>");
    			        
    			        //displaying the thank you message
    			        echo ("Thank you for placing an order with us");
    			    
    			    }else {echo("You did not place any order with us!!!!!");}//end if and else statement when taxAmount is greater than 1 and equals to 0
    			        
    			}//end function calculateTotal
    			?>
				
				</div>
		<footer>
    		
    			<?php 
    			 //calling function header to print the footer
    			  footerPrint();
    			?>
    		
    	</footer>
	</body>
</html>
				