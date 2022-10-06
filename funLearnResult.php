<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
    	<title>Fun Learn</title>
    	<link rel="stylesheet" href="design.css">
    	<!-- Created By Preetam Beeravelli -->
    	<style>
    	   .funPageImage{
            	display: block;
             	margin-left: auto;
            	margin-right: auto;
            	height:300px;
            	width:300px;
                }
    	</style>
	</head>
	<body>
    		<?php 
    		//including the file which contains functions for printing header and footer
    			include('headandfoot.php');
    			//calling function header to print the header
    			headerPrint();
    		?>
		<h1 class = "pageHeading" align = "center" >Images of the Plants</h1>
            <?php 
             
                //condition where bean submit button is set
                if (isset($_POST['beanSubmitButton'])){
                    
                        //printing the html div start tag
                       echo ('<div class = "pageBody">');
                       
                      //call function to display images
                      getBeanImages();
                      
                      //printing a html paragraph tag with content
                      echo '<p align = "center"> You can go back to the previous page by clicking the button below </p>';
                      
                      //printing the html div end tag
                      echo ('</div>');
                 }
            ?>
      
        
          <?php
          //condition where carrot submit button is set
                if (isset($_POST['carrotSubmitButton'])){
                    
                    //printing the html div start tag
                      echo ('<div class = "pageBody">');
                        
                      //call function to display results
                      getcarrotImages();
                      
                      //printing a html paragraph tag with content
                      echo '<p align = "center"> You can go back to the previous page by clicking the button below </p>';
                        
                      //printing the html div end tag
                       echo ('</div>');
                }
            ?>
      

            <?php 
                //condition if all three button is select
                    if(isset($_POST['potatoSubmitButton'])){
                        
                        //printing the html div start tag
                        echo ('<div class = "pageBody">');
                        
                        //calling function to display images
                        getPotatoImages();
                        
                        //printing a html paragraph tag with content
                        echo '<p align = "center"> You can go back to the previous page by clicking the button below </p>';
                        
                        //printing the html div end tag
                        echo ('</div>');
                        
                    }
            ?>
             <?php
                  //condition where potato submit button is set
                    if (isset($_POST['allThreePlants'])){
                        
                        //printing the html div start tag
                        echo ('<div class = "pageBody">');
                        
                      //call function to display images
                        echo '<p align = "center"> Bean plant</p>';
                        
                        //calling function to display images
                        getBeanImages();
                        
                         //printing a html paragraph tag with content
                         
                         echo '<p align = "center"> carrot plant</p>';
                         //calling function to display images
                         
                         getcarrotImages();
                         //printing a html paragraph tag with content
                         
                         echo '<p align = "center"> Potato plant</p>';
                         //calling function to display images
                         getPotatoImages();
                         
                         //printing a html paragraph tag with content
                         echo '<p align = "center"> You can go back to the previous page by clicking the button below </p>';
                      
                        //printing the html div end tag
                         echo ('</div>');
                    }
            ?>
    		<div class = "pageBody">
        			<!-- Form which submits to game.php with method post  -->
        			<form action = "funLearn.php" method = "POST">
        					<p style="text-align:center;">
        						<!-- Submit button which go backs to game page -->
                				<input type = "submit" class = "button" value = "GO BACK" name = "backSubmitButton">
                			</p>
              		</form>
              	
    		</div>
         
        
    <?php
    //function to return images 
      function getBeanImages(){

        //setting variable with desired option selected by user
          $beanDaysSelected = $_POST['plantSelectBox'];
          
                //Switch statement to return specific image selected by user
                 switch ($beanDaysSelected){
        
                  case "seed":
                   echo "<p>".'<img src = "images/Bean/beanSeed.png" class = "funPageImage">'."<p>";
                  break;
                  case 0:
                   echo "<p>".'<img src = images/Bean/bean0.png class = "funPageImage">'."<p>";
                  break;
                  case 15:
                   echo "<p>".'<img src = images/Bean/bean15.png class = "funPageImage">'."<p>";
                  break;
                  case 30:
                   echo "<p>".'<img src = images/Bean/bean30.png class = "funPageImage">'."<p>";
                  break;
                  case 45:
                   echo "<p>".'<img src = images/Bean/bean45.png class = "funPageImage">'."<p>";
                  break;
                  case 60:
                   echo "<p>".'<img src = images/Bean/bean60.png class = "funPageImage">'."<p>";
                  break;
                  case 75:
                   echo "<p>".'<img src = images/Bean/bean75.png class = "funPageImage">'."<p>";
                  break; 
                  case 90:
                   echo "<p>".'<img src = images/Bean/bean90.png class = "funPageImage">'."<p>";
                  
                }//end switch
        
      }// end gerBeanImages function
      
      
      ?>
        <?php 
        //function to return images
          function getcarrotImages(){
              
              //setting variable with desired option selected by user
              $carrotDaysSelected = $_POST['plantSelectBox'];
    
                     //Switch statement to return specific image selected by user
                    switch ($carrotDaysSelected){
            
                      case "seed":
                       echo "<p>".'<img src = images/carrot/carrotSeed.png class = "funPageImage">'."<p>";
                      break;
                      case 0:
                       echo "<p>".'<img src = images/carrot/carrot0.png class = "funPageImage">'."<p>";
                      break;
                      case 15:
                       echo "<p>".'<img src = images/carrot/carrot15.png class = "funPageImage">'."<p>";
                      break;
                      case 30:
                       echo "<p>".'<img src = images/carrot/carrot30.png class = "funPageImage">'."<p>";
                      break;
                      case 45:
                       echo "<p>".'<img src = images/carrot/carrot45.png class = "funPageImage">'."<p>";
                      break;
                      case 60:
                       echo "<p>".'<img src = images/carrot/carrot60.png class = "funPageImage">'."<p>";
                      break;
                      case 75:
                       echo "<p>".'<img src = images/carrot/carrot75.png class = "funPageImage">'."<p>";
                      break;
                      case 90:
                       echo "<p>".'<img src = images/carrot/carrot90.png class = "funPageImage">'."<p>";
                      
                    }// end switch            
          }//end getcarrotImages function
          
          
          ?>
        <?php
              //function to return images
              function getPotatoImages(){
                    
                  //setting variable with desired option selected by user
                  $potatoDaysSelected = $_POST['plantSelectBox'];
                  
                      //Switch statement to return specific image selected by user
                        switch ($potatoDaysSelected){
                
                          case "seed":
                           echo "<p>".'<img src = images/Potato/potatoSeed.png class = "funPageImage">'."<p>";
                          break;
                          case 0:
                           echo "<p>".'<img src = images/Potato/potato0.png class = "funPageImage">'."<p>";
                          break;
                          case 15:
                           echo "<p>".'<img src = images/Potato/potato15.png class = "funPageImage">'."<p>";
                          break;
                          case 30:
                           echo "<p>".'<img src = images/Potato/potato30.png class = "funPageImage">'."<p>";
                          break;
                          case 45:
                           echo "<p>".'<img src = images/Potato/potato45.png class = "funPageImage">'."<p>";
                          break;
                          case 60:
                           echo "<p>".'<img src = images/Potato/potato60.png class = "funPageImage">'."<p>";
                          break;
                          case 75:
                           echo "<p>".'<img src = images/Potato/potato75.png class = "funPageImage">'."<p>";
                          break;
                          case 90:
                           echo "<p>".'<img src = images/Potato/potato90.png class = "funPageImage">'."<p>";
                          
                        }//end switch
                
              }//end getPotatoImages function
              ?>
      
       		 <footer>
        		
        			  <?php 
        			  //calling function header to print the footer
        			     footerPrint();
        			  ?>
        		
        	</footer>
        </body>
</html>
