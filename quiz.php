<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Quiz</title>
	<link rel="stylesheet" href="design.css">
	<!-- Created by Mohan Venkat Sivakumar Davuluri (Id Number:700725267)  -->
	</head>
	<body>
	
		<?php 
			include('headandfoot.php');
			headerPrint();
		?>
	
				<h1 class = "pageHeading" align="center"> Ready to take Quiz??</h1>
		

 			<form action="quizresult.php" method="POST" id="quiz">
 				<div class = "pageBody">
                	<p>
                	<br>
                	<h3>1)Which day is Earth Day?</h3>
                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="April 22" required />
                    <label for="question-1-answers-A">A) April 22 </label>
                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="June 12" required />
                    <label for="question-1-answers-B">B) June 12</label>
                    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="December 23" required />
                    <label for="question-1-answers-C">C) December 23</label>
                    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="None of the above" required />
                    <label for="question-1-answers-D">D) None of the above</label>
                    <hr>
                	</p>
                    
                          
              
                	<p>
                	<h3>2)Biotic components includes</h3>
                    <input type="radio" name="question-2-answers" id="question-2-answers-A" value="All living organisms" required />
                    <label for="question-2-answers-A">A) All living organisms</label>
                    <input type="radio" name="question-2-answers" id="question-2-answers-B" value="Light, temperature etc" required />
                    <label for="question-2-answers-B">B) Light, temperature etc</label>
                    <input type="radio" name="question-2-answers" id="question-2-answers-C" value="Water, mineral and gases" required />
                    <label for="question-2-answers-C">C) Water, mineral and gases</label>
                    <input type="radio" name="question-2-answers" id="question-2-answers-D" value="Self-nourishing green plants"  required />
                    <label for="question-2-answers-D">D) Self-nourishing green plants </label>
                    <hr>
                	</p>
                    
          
                    
                    <p>
                    <h3>3)The human activity, among the following, which causes maximum environmental pollution having regional and global impact, is.</h3>
                    <input type="radio" name="question-3-answers" id="question-3-answers-A" value="Agriculture" required  />
                    <label for="question-3-answers-A">A) Agriculture</label>
                    <input type="radio" name="question-3-answers" id="question-3-answers-B" value="Industrialization" required  />
                    <label for="question-3-answers-B">B) Industrialization</label>
                    <input type="radio" name="question-3-answers" id="question-3-answers-C" value="Mining" required  />
                    <label for="question-3-answers-C">C) Mining </label>
                    <input type="radio" name="question-3-answers" id="question-3-answers-D" value="Urbanization" required  />
                    <label for="question-3-answers-D">D) Urbanization</label>
                    <hr>
                    </p>
                    
                 
                    
                    <p>
                    <h3>4)The science that deals with the relationship of various organisms with their environment is known as</h3>
                    <input type="radio" name="question-4-answers" id="question-4-answers-A" value="Anthropology" required  />
                    <label for="question-4-answers-A">A) Anthropology </label>
                    <input type="radio" name="question-4-answers" id="question-4-answers-B" value="Economics" required  />
                    <label for="question-4-answers-B">B) Economics</label>
                    <input type="radio" name="question-4-answers" id="question-4-answers-C" value="Geology" required  />
                    <label for="question-4-answers-C">C) Geology</label>
                    <input type="radio" name="question-4-answers" id="question-4-answers-D" value="Ecology" required  />
                    <label for="question-4-answers-D">D) Ecology</label>
                   	<hr>
                    </p>
                    
             
                    
                    <p>
                    <h3>5) An ecosystem consists of</h3>
                    <input type="radio" name="question-5-answers" id="question-5-answers-A" value="Population" required  />
                    <label for="question-5-answers-A">A) Population</label>
                    <input type="radio" name="question-5-answers" id="question-5-answers-B" value="A biotic community" required  />
                    <label for="question-5-answers-B">B) A biotic community</label>
                    <input type="radio" name="question-5-answers" id="question-5-answers-C" value="A population and its non-living elements"  required  />
                    <label for="question-5-answers-C">C)A population and its non-living elements</label>
                    <input type="radio" name="question-5-answers" id="question-5-answers-D" value="A biotic ecommunity and its non-living elements" required  />
                    <label for="question-5-answers-D">D) A biotic ecommunity and its non-living elements</label>
                	<hr>
                    </p>

               
                    
                    <p>
                    <h3>6)The perfect equilibrium existing in the biosphere between the various organisms is known as</h3>
                    <input type="radio" name="question-6-answers" id="question-6-answers-A" value="Ecological cycle" required  />
                    <label for="question-6-answers-A">A)Ecological cycle</label>
                    <input type="radio" name="question-6-answers" id="question-6-answers-B" value="Ecological balance" required  />
                    <label for="question-6-answers-B">B) Ecological balance</label>
                    <input type="radio" name="question-6-answers" id="question-6-answers-C" value="Environmental balance" required  />
                    <label for="question-6-answers-C">C) Environmental balance</label>
                    <input type="radio" name="question-6-answers" id="question-6-answers-D" value="None of these" required  />
                    <label for="question-6-answers-D">D)None of these </label>
                	<hr>
                    </p>
                    
   
                    
                    <p>
                    <h3>7) A simple detritus food chain starts with</h3>
                    <input type="radio" name="question-7-answers" id="question-7-answers-A" value="green plant" required  />
                    <label for="question-7-answers-A">A) green plant</label>
                    <input type="radio" name="question-7-answers" id="question-7-answers-B" value="wastes of organisms and dead organisms" required  />
                    <label for="question-7-answers-B">B) wastes of organisms and dead organisms </label>
                    <input type="radio" name="question-7-answers" id="question-7-answers-C" value="both of these" required  />
                    <label for="question-7-answers-C">C)both of the above</label>
                    <input type="radio" name="question-7-answers" id="question-7-answers-D" value="None of these" required  />
				    <label for="question-7-answers-D">D) none of these </label>
					<hr>
                    </p>
                   
                    <p>
                    <h3>8)Facultative Bacteria exisiing in which type of Environmental condition?</h3>
                    <input type="radio" name="question-8-answers" id="question-8-answers-A" value="Presence of oxygen" required  />
                    <label for="question-8-answers-A">A) Presence of oxygen	</label>
                    <input type="radio" name="question-8-answers" id="question-8-answers-B" value="Absence of oxygen" required  />
                    <label for="question-8-answers-B">B) Absence of oxygen</label>
                    <input type="radio" name="question-8-answers" id="question-8-answers-C" value="Both (a) and (b)" required  />
                    <label for="question-8-answers-C">C) Both (a) and (b)</label>
                    <input type="radio" name="question-8-answers" id="question-8-answers-D" value="None of these" required  />
                    <label for="question-8-answers-D">D) None of these</label>
                 	<hr>
                    </p>
                    
                    
                	<p>
                	<h3>9)Word "Environment" is derived from :</h3>
                    <input type="radio" name="question-9-answers" id="question-9-answers-A" value="Italy" required  />
                    <label for="question-9-answers-A">A)Italy  </label>
                    <input type="radio" name="question-9-answers" id="question-9-answers-B" value="French" required  />
                    <label for="question-9-answers-B">B) French</label>
                    <input type="radio" name="question-9-answers" id="question-9-answers-C" value="German" required  />
                    <label for="question-9-answers-C">C) German</label>
                    <input type="radio" name="question-9-answers" id="question-9-answers-D" value="English" required  />
                    <label for="question-9-answers-D">D) English</label>
               		<hr>
                	</p>
                    
                    
                	<p>
                	<h3>10)Organisms which directly feed on producers are called :</h3>
                    <input type="radio" name="question-10-answers" id="question-10-answers-A" value="Herbivores" required  />
                    <label for="question-10-answers-A">A) Herbivores</label>
                    <input type="radio" name="question-10-answers" id="question-10-answers-B" value="Omnivores" required  />
                    <label for="question-10-answers-B">B) Omnivores</label>
                    <input type="radio" name="question-10-answers" id="question-10-answers-C" value="Carnivores" required  />
                    <label for="question-10-answers-C">C) Carnivores</label>
                    <input type="radio" name="question-10-answers" id="question-10-answers-D" value="Decomposers" required  />
                    <label for="question-10-answers-D">D) Decomposers </label>
               		<hr>
                	</p>
                    
                  
                  
            		<p>
                    <input type="submit" value="Submit" name="quizSubmitButton" class = "button" />
                    <input type="reset" name="QuizResetButton" value="Reset Quiz" class = "button"/>
                    </p>
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