 <?php
  
   echo '<h1>MY ASSIGNMENT</h1>';
   echo '<h2>String Functions</h2>';
     
     $obj = new main();
     $text = "Hii I am Sowmya";
     $array = array(1,2,3,4);
     $array2 = array("red","green","blue","pink");
     $array1 = array("red","green","blue");
     $number = range(0,5);
     
     $obj->printing($text);
     $obj->strlength($text);
     $obj->reversestr($text);
     $obj->searchwrdstr($text);
     $obj->replacewrdstr($text);
     $obj->splitcharstr($text);
     $obj->substr($text);
     $obj->lastocc($text);
     $obj->remvchar($text);
     $obj->repeatstr($text);
     
   echo '<h2>Array Functions</h2>';
     
     $obj->printarray($array);
     $obj->lengarray($array);
     $obj->combarray($array,$array2);
     $obj->comparray($array1,$array2);
     $obj->splitarray($array2);
     $obj->merge2array($array2,$array);
     $obj->slicearray($array2);
     $obj->sumarray($array);
     $obj-> rangearray($number);
     $obj->rrarray($array,$array2);
 
   class main {
 
       public function printing($text) {
       echo '<h1>(1)Printing a string </h1>';
       print($text);
       echo '<hr>';
     }
     
     
       public function  strlength($text) {
       echo '<h1>(2)Length of a string </h1>';
       echo  strlen($text);
 		   echo '<hr>';
     }
 
 
     public function  reversestr($text) {
 	   echo '<h1>(3)Reverse a string </h1>';
     echo  strrev($text);
 		 echo '<hr>';
    }
 
 
      public function  searchwrdstr($text) {
 	    echo '<h1>(4)Search for specific word in the string </h1>';
      echo strpos($text, "Sowmya");
 	  	echo '<hr>';
    }
 
     public function  replacewrdstr($text) {
 	   echo '<h1>(5)Replacing a text</h1>';
     echo str_replace("Hii", "Hello", $text);
 	 	echo '<hr>';
    }
 
 
     public function  splitcharstr($text) {
 	   echo '<h1>(6)Spliting a string after each character</h1>';
     echo chunk_split($text,1,".");
 		 echo '<hr>';
    }
 
 
     public function  substr($text) {
 	   echo '<h1>(7)Substring</h1>';
     echo substr($text,4);
 		 echo '<hr>';
    }
 
     public function  lastocc($text) {
 	   echo '<h1>(8)Finds the last occurance of a word</h1>';
 	   echo 'I love php, I love soo php too! - ';
     echo strripos("I love php, I love php too!","PHP");
 		 echo '<hr>';
    }
 
 	   public function  remvchar($text) {
 	   echo '<h1>(9)Remove characters</h1>';
 	   echo trim($text,"i");
 		 echo '<hr>';
    }
 
     public function  repeatstr($text) {
 	   echo '<h1>(10)Repeating a string</h1>';
 	   echo str_repeat("hiii",13);
 		 echo '<hr>';
    }
 
     public function  printarray($array) {
 	   echo '<h1>1.Print an array</h1>';
 	   print_r($array);
 		 echo '<hr>';
    }
 
     public function  lengarray($array) {
 	   echo '<h1>2.length of array</h1>';
 	   echo count($array);
 		 echo '<hr>';
    }
 
     public function  combarray($array,$array2) {
 	   echo '<h1>3.combine array</h1>';
 	   $c=array_combine($array,$array2);
     print_r($c);
 		 echo '<hr>';
    }
 
     public function  comparray($array1,$array2) {
 	   echo '<h1>4.compare value of 2 arrays</h1>';
 	   $result=array_diff($array2,$array1);
     print_r($result);
 		 echo '<hr>';
    }
 	   public function  splitarray($array2) {
 	   echo '<h1>5.split an array</h1>';
 	   print_r(array_chunk($array2,2));
 		 echo '<hr>';
    }
 
 	   public function  merge2array($array2,$array) {
 	   echo '<h1>6.Merge two arrays</h1>';
 	   print_r(array_merge($array2,$array));
 		 echo '<hr>';
    }
 
 
 	   public function  slicearray($array2) {
 	   echo '<h1>7.Slicing an array</h1>';
 	   print_r(array_slice($array2));
 		 echo '<hr>';
    }
 
 	   public function  sumarray($array) {
 	   echo '<h1>8.Sum of all values in array</h1>';
 	   echo array_sum($array);
 		 echo '<hr>';
    }
  
     public function  rangearray($number) {
 	   echo '<h1>9.Range of an array</h1>';
 	   print_r ($number);
 	   echo '<hr>';
    }
    
     public function  rrarray($array,$array2) {
 	   echo '<h1>10.Removing and replacing a element</h1>';
 	   array_splice($array,0,2,$array2);
     print_r($array);
     echo '<hr>';
	 }
 
 
 
 
   }