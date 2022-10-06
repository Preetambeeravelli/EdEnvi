<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Buy </title>
		<link rel="stylesheet" href="design.css">
		<!-- Created By Preetam Beeravelli (Id Number:700723604) -->
		
	</head>
	<body>
		
    		<?php 
    		//including the file which contains functions for printing header and footer
    		include('headandfoot.php');
    			
    			//calling function header to print the header
    			headerPrint();
    		?>
		
			<h1 class = "pageHeading" align="center"> Buy these environmentally friendly products </h1>
				<div class = "pageBody">
					<!-- Form which submits to buyConfirmation.php with method post  -->
					<form action = "buyConfirmation.php" method = "POST">
					
					<p id = "greetingDisplayPara"></p>
				<?php 
    				//including the file which contains functions associated with class product and its objects and also the constants for products price
    				include 'buyFunctions.php';
				
				        
				    // creating product 4 (Compostable Plates)
				    $product1 = new product();
				    //calling setProductNumber function which sets number 1 to this object
				    $product1->setProductNumber(1);
				    //calling setProductName function which sets name  to the object 1
				    $product1->setProductName('Compostable Plates (125 count)');
				    //calling setProductCategory function which sets Category to the object 1
				    $product1->setProductCategory('Household');
				    //calling setProductPrice function which sets price to the object 1 from constant in page buyFunctions.php
				    $product1->setProductPrice(PRODUCT1PRICE);
				    //calling setProductDescription function which sets description to the object 1
				    $product1->setProductDescription('100% sugarcane fiber: The nine-inch plate is made of 100% sugarcane fiber, a sustainable, renewable, and biodegradable material. A great alternative to traditional paper or plastic, The disposable plate offers the same sturdy function and easy cleanup, yet it’s completely tree and plastic-free.');
				    //calling getProducts function which displays each product details and also creates input box for entering the quantity by the user
				    $product1->getProducts();
				    
				    //creating product 2 (Cutlery )
				    $product2 = new product();
				    //calling setProductNumber function which sets number 2 to this object
				    $product2->setProductNumber(2);
				    //calling setProductName function which sets name  to this object 2
				    $product2->setProductName('Bio degradable cutlery set (100 forks, 50 spoons, 50 knives)');
				    //calling setProductCategory function which sets Category to the object 2
				    $product2->setProductCategory('Household');
				    //calling setProductPrice function which sets price to the object 2 from constant in page buyFunctions.php
				    $product2->setProductPrice(PRODUCT2PRICE);
				    //calling setProductDescription function which sets description to the object 2
				    $product2->setProductDescription('ECO-FRIENDLY -Bamboodlers are 100% Disposable, Biodegradable, Compostable, and Renewable <br> NON-TOXIC -Bamboodlers are 100% all natural and does not contain any plastics or harmful chemicals <br> LOOKS AWESOME -Chic, Stylish, Modern, Cool are just some of the words you will hear from guests <br> INSPIRING -Shows everyone that being environmentally responsible can also be cool, classy and trendy <br> CONVENIENT -Simply throw them away after use and have the peace of mind you won\'t have with plastic');
				    //calling getProducts function which displays each product details and also creates input box for entering the quantity by the user
				    $product2->getProducts();
				    
				    //creating product 3 (pPonges )
				    $product3 = new product();
				    //calling setProductNumber function which sets number 3 to this object
				    $product3->setProductNumber(3);
				    //calling setProductName function which sets name  to this object 3
				    $product3->setProductName('Biodegradable Sponges for kitchen (12 count)');
				    //calling setProductCategory function which sets Category to the object 3
				    $product3->setProductCategory('Household');
				    //calling setProductPrice function which sets price to the object 3 from constant in page buyFunctions.php
				    $product3->setProductPrice(PRODUCT3PRICE);
				    //calling setProductDescription function which sets description to the object 3
				    $product3->setProductDescription(' 100% BIODEGRADABLE ECO SPONGES,  Each sponge composts in weeks and means one less sponge in landfill, and our oceans. A truly zero waste product. Eco friendly cleaning products are the future, and we are leading the way with this eco cleaning sponge.');
				    //calling getProducts function which displays each product details and also creates input box for entering the quantity by the user
				    $product3->getProducts();
				    
				    //creating product 4 (Dental Floss)
				    $product4 = new product();
				    //calling setProductNumber function which sets number 4 to this object
				    $product4->setProductNumber(4);
				    //calling setProductName function which sets name  to this object 4
				    $product4->setProductName('Biodegradable Dental Floss (300 count)');
				    //calling setProductCategory function which sets Category to the object 4
				    $product4->setProductCategory('Dental');
				    //calling setProductPrice function which sets price to the object 4 from constant in page buyFunctions.php
				    $product4->setProductPrice(PRODUCT4PRICE);
				    //calling setProductDescription function which sets description to the object 4
				    $product4->setProductDescription('Clean Idea Eco Flosser is the most environmentally friendly dental floss pick on market. The handle is made from a proprietary blend of plant-based resins and starches, with no petroleum based PP like the competitors. Choose the responsible option - Ecoflosser!');
				    //calling getProducts function which displays each product details and also creates input box for entering the quantity by the user
				    $product4->getProducts();
				    
				    //creating product 5 (Dental Brushes)
				    $product5 = new product();
				    //calling setProductNumber function which sets number 5 to this object
				    $product5->setProductNumber(5);
				    //calling setProductName function which sets name  to this object 5
				    $product5->setProductName('Biodegradable Eco Friendly Brushes (4 count)');
				    //calling setProductCategory function which sets Category to the object 5
				    $product5->setProductCategory('Dental');
				    //calling setProductPrice function which sets price to the object 5 from constant in page buyFunctions.php
				    $product5->setProductPrice(PRODUCT5PRICE);
				    //calling setProductDescription function which sets description to the object 5
				    $product5->setProductDescription('GO GREEN! Why fill up landfills with plastic when you don\'t have to? Help the environment, and feel better about your mark on this world with Bamboo Toothbrush! It\'s the ecological way to not only keep your mouth fresh for just as long as a normal toothbrush, but help the environment at the same time!');
				    //calling getProducts function which displays each product details and also creates input box for entering the quantity by the user
				    $product5->getProducts();
				?>
					
					<!-- Submit button which posts to buyConfirmation.php -->
					<input type="submit"  class = "button" name = "buySubmitButton" value="Buy">
					<!--  Reset button -->
  					<input type="reset"  class = "button"  value="Reset"><br>
				
					</form>
				</div>
	
	
	
	
    	<footer>
    	
    			<?php 
    			//calling function header to print the header
    			  footerPrint();
    			?>
    	
    	</footer>
	</body>
</html>
