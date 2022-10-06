<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
    	<title>Fun Learning</title>
    	<link rel="stylesheet" href="design.css">
    	<!--  Created by preetam Beeravelli -->
	</head>
	<body>
    	
    		<?php 
    		//including the file which contains functions for printing header and footer
    			include('headandfoot.php');
    			//calling function header to print the header
    			headerPrint();
    		?>
    	
    		<!-- Form which submits to gameResult.php with method post  -->
            <form action = "funLearnResult.php" method = "POST">
                <h1 class = "pageHeading" align = "center" >Are you ready to witness the growth of a plant from a seed</h1>
                	<div class = "pageBody">
                
                        <h2>This is a fun learning of various growth stages of different plants</h2>
                		<p>
                			This page has a drop down menu where you select the satge of the plant and under it it has a three buttons representing three different plants, you can select the plant you wish to see the stage and the mage will be dispalyed.
                			<h4>There are three different plants you can get to know:</h4>
                			1.Bean<br>
                			<p>Common bean plants (Phaseolus vulgaris) are either pole bean varieties that grow long vines or low-growing bush beans. Most varieties are green, but there are also purple, red, yellow, and streaked beans. Common beans are several inches long and either round or flattened in shape. Bean plants are annual vegetables that grow quickly and are best planted in the spring. The flowers appear about two months after planting. Harvest time varies greatly, depending on the type of bean. Note that the seeds of raw or undercooked beans can be toxic to people1 and animals.<strong>source:thespurse.com</strong><br><img src = "images/Bean/beanPara.png" class = "newsImage"></p>
                			2.Carrot<br>
                			<p> Carrots are biennial vegetables, though they are typically harvested in their first year of growth before they overwinter and set flowers the following year. Carrot foliage is finely dissected with fern-like compound leaves. Carrot flowers have five petals and sepals and are born in compound umbels. Most carrot roots are about one inch in diameter and anywhere from one inch to more than 12 inches long. Carrots are best known for long, orange roots, but they actually come in several colors and shapes.<strong>source:thespurse.com</strong><br><img src = "images/Carrot/carrotPara.png" class = "newsImage"></p>
                			3.Potato<br>
                			<p>Potato (Solanum tuberosum) is arguably one of the world's most important food plants and commercial crops, providing nutrients and digestible carbohydrates in the tuberous roots. Over centuries, these annual root vegetables have prevented famine and starvation in many regions of the world, and few vegetables are more versatile.Potatoes are a member of the nightshade (Solanum) family of plants, a group that contains a number of important food vegetables, including tomatoes, eggplant, and peppers. Like those plants, potatoes contain toxic alkaloid compounds in the leaves and other green parts. But the mature roots of potatoes are deliciously edible.Potatoes are relatively inexpensive to purchase, but freshly dug potatoes from your own home garden seem to have a flavor all their own. Oval baking potatoes and red potatoes have dominated the market, but there are actually over 1,000 different varieties of potatoes available for growing. At any given time, home gardeners have at least 100 varieties of seed potatoes that are readily available to purchase. The texture of and shape of the potatoes, even more so than the flavor, is very different from variety to variety, especially with heirloom potatoes.<strong>source:thespurse.com</strong><br><img src = "images/Potato/potatoPara.png" class = "newsImage"></p>
                		
                		</p>
                			
                		<h2 align ="center">Please select the stage of the plant you wish to see</h2>
                        <p style="text-align:center">
                        	 <select name = "plantSelectBox" id = "days" class ="input">
                            		<option value = "seed">Seed Stage</option>
                                    <option value = 15>15 days</option>
                                    <option value = 30>30 Days</option>
                                    <option value = 45>45 Days</option>
                                    <option value = 60>60 Days</option>
                                    <option value = 75>75 Days</option>
                                    <option value = 90>90 Days</option>
                            </select><br>
                            	<!-- Submit button for Bean plant -->
                                <input type = "submit" class = "button" value = "Bean Plant" name = "beanSubmitButton"><br>
                                
                                <!-- Submit button for carrot plant -->
                                <input type = "submit" class = "button" value = "Carrot Plant" name = "carrotSubmitButton"><br>
                                
                                <!-- Submit button for Potato plant -->
                                <input type = "submit" class = "button" value = "Potato Plant" name = "potatoSubmitButton"><br>
                                <br>
                                <h4>You can select the below button to display images from three plants</h4>
                                <!-- Submit button for all three  plant -->
                                <input type = "submit" class = "button" value = "ALL THREE" name = "allThreePlants"><br>
                        </p>
                    	
                     </div>  
                 
            </form>
       	
    		<footer>
        		
            		<?php 
            		  //calling function header to print the footer
            		  footerPrint();
            		?>
        			  
        	
    		</footer>
	</body>
</html>