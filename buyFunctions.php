<?php
//Preetam Beeravelli (Id Number:700723604)

//defining constant which hold price of prouct 1
define ("PRODUCT1PRICE", 20 );

//defining constant which hold price of prouct 2
define ("PRODUCT2PRICE", 15 );

//defining constant which hold price of prouct 3
define ("PRODUCT3PRICE", 12 );

//defining constant which hold price of prouct 4
define ("PRODUCT4PRICE", 17 );

//defining constant which hold price of prouct 5
define ("PRODUCT5PRICE", 6 );

//defining constant which hold tax value
define ("TAX", 0.1);

//creating  a product class
class product {
    
    //declaring public variables whch hold values for different product details
    public $productNumber;
    public $productName;
    public $productCategory;
    public $productPrice;
    public $productDescription;
    

//method to set product number
function setProductNumber($productnumber){
    $this->productNumber = $productnumber;
}

//method to set product name
function setProductName($productname){
    $this->productName = $productname;
}

//method to set product category
function setProductCategory($productcategory){
    $this->productCategory = $productcategory;
}

//method to set product name
function setProductPrice($productprice){
    $this->productPrice = $productprice;
}

//method to set product decription
function setProductDescription($productdescription){
    $this->productDescription = $productdescription;
}

//method to get product number
function getProductNumber(){
    return $this->productNumber;
}

//method to get product name
function getProductName(){
    return $this->productName;
}

//method to get product category
function getProductCategory(){
    $this->productCategory;
}

//method to get product name
function getProductPrice(){
   return $this->productPrice;
}

//method to get product decription
function getProductDescription($productdescription){
    return $this->productDescription;
}

//creating get product function which creates products on web pages
function getProducts(){
    //statement for printing the image tags in html to display image
     echo ("<img src = \"images/buy/buyImage".$this->productNumber.".png\" alt = \"product".$this->productNumber."image\" height = 400px width = 400px/>");
     
     //printing the html paragaraph start tag
     echo ("<p>");
     
     //printing the product number
     echo ("Product number: ".$this->productNumber."<br>");
     
     //printing the product name
     echo ("Product Name: "."<strong>".$this->productName."</strong>"."<br>");
     
     //printing the product category
     echo ("Product Category: ".$this->productCategory."<br>");
     
     //printing the product price
     echo ("Product Price(\$): ".$this->productPrice."<br>");
     
     //printing the product quantity that can be bought
     echo ("Please select the quantiy you need (Maximum of 5 products each can be bought) for"."Product ".$this->productNumber."<br>");
     
     //printing the input box
     echo ("<input type =\"number\" class =\"input\" min = 0 max = 5 name = \"product".$this->productNumber."BuyNumberBox\">"."<br>");
     
     //printing ht eproduct description
     echo ("Product Decription:<br>"."<strong>".$this->productDescription."</strong>");
     
     //printing the html paragaraph end tag
     echo ("</p>");
     
     //printing the html horizontal line
     echo("<hr>");
    }//end get product method
}//end product class
?>