<?php
//function to print the header in the web pages
function headerPrint(){
    print "<div class=\"header\">";
    print " <a href=\"home.php\"><img src=\"images/logo.png\" alt=\"Company Logo\" width=\"122\" height=\"122\" align=\"left\" ></a>";
	print " <nav>\n";
	print "		 <ul>\n";
	print "			 <li><a href = \"about.php\">About</a></li>\n";
	print "			 <li><a href = \"pollutionCalculator.php\">Pollution Calculator</a></li>\n";
	print "			 <li><a href = \"learnMore.php\">Learn More</a></li>\n";
	print "			 <li><a href = \"plantDetails.php\">Plant Details</a></li>\n";
	print "			 <li><a href = \"pledge.php\">Pledge</a></li>\n";
	print "			 <li><a href = \"buy.php\">Buy</a></li>\n";
	print "			 <li><a href = \"funLearn.php\">Fun Learn</a></li>\n";
	print "			 <li><a href = \"quiz.php\">Quiz</a></li>\n";
	print "			 <li><a href = \"news.php\">News</a></li>\n";
	print "  		 <li><a href = \"home.php\">Home</a></li>\n";
	print "		 </ul>\n";
	print "	 </nav>";
	print " </div>";



}//end headerPrint function

//function to print the footer of the web page
function footerPrint(){
    print "     <div class=\"footer\">";
    print "			  <img src=\"images/footerBackground.png\" alt=\"Trees Background\" style=\"width:100%;height: 200px;\">\n";
  //  print "			  <div class=\"bottom-left\">CopyRight <span style=\"font-weight:bold; font-size: medium;\">EdEnvi?</span></div>\n";
    print "			  <div class=\"top-left\" style=\"color:white;\">Quick Navigation\n";
    print "			  	<nav style=\"font-size:14px;color: white;\">\n";
    print "					\n";
    print "			  			<a href = \"home.php\"style=\"color:white;\">Home</a><br>\n";
    print "						<a href = \"news.php\"style=\"color:white;\">News</a><br>\n";
    print "						<a href = \"quiz.php\"style=\"color:white;\">Quiz</a><br>\n";
    print "						<a href = \"buy.php\"style=\"color:white;\">Buy</a><br>\n";
    print "						<a href = \"funLearn.php\"style=\"color:white;\">Fun Learn</a><br>\n";
    print "						<a href = \"pledge.php\"style=\"color:white;\">Pledge</a><br>\n";
    print "						<a href = \"plantDetails.php\"style=\"color:white;\">Plant Details</a><br>\n";
    print "						<a href = \"learnMore.php\"style=\"color:white;\">Learn More</a><br>\n";
    print "			  			<a href = \"pollutionCalculator.php\"style=\"color:white;\">Pollution Calculator</a><br>\n";
    print "						<a href = \"about.php\"style=\"color:white;\">About</a><br>\n";
    print "				</nav>\n";
    print "			  </div>\n";
    print "			  <div class=\"top-right\"><span style=\"font-weight: 700;color: white;\">Follow us on:</span>\n";
    print "			  	<p><a href=\"http://www.facebook.com\" target = \"_blank\" style=\"color:white;\"><img src=\"images/facebookLogo.png\" alt=\" Facebook Logo\" style=\"width:35px;height: 35px;\" ></a></p>\n";
    print "			  	<p><a href=\"http://www.instagram.com\" target = \"_blank\" style=\"color:white;\"><img src=\"images/instagramLogo.png\" alt=\"instagram Logo \" style=\"width:25px;height: 25px;\" ></a></p>\n";
    print "			  	<p><a href=\"http://www.twitter.com\" target = \"_blank\" style=\"color:white;\"><img src=\"images/twitterLogo.png\" alt=\"Twitter Logo\" style=\"width:25px;height: 25px;\" ></a></p>\n";
    print "			  </div>\n";
    print "			  <div class=\"bottom-right\">EdEnvi &copy All Rights Recieved(2022)</div>\n";
    print "			  <div class=\"centered\"><p>\n";
    print "          			<span style=\"font-weight: 700;\">EdEnvi Org</span>\n";
    print "          			<br>1101 NW Innovation Parkway<br>\n";
    print "          			Lee's Summit<br>Missouri,64086<br>\n";
    print "          			United States of America<br>\n";
    print "						\n";
    print "          			<a href=\"mailto:edenvi@gmail.com\" style=\"color:white;\">Email Us</a>\n";
    print "        		</p></div>\n";
    print "    </div>";
}//end function footerprint

?>
