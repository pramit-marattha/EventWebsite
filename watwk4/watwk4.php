<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Web Applications and Technologies</title>
      <link type="text/css" rel="stylesheet" href="css/main.css" />
   </head>
   <script>
function goBack() {
    window.history.back()
}
</script>
   <body>
      <header>
        <button onclick="goBack()"class="Go_back">&laquo;GO Back!!</button>
         <h1>Pramit marattha <br> 77190063</h1> 
      </header>

      <section id="container">

         <h1>Fundamentals of PHP</h1>
         <?php
            echo "<h1> Arrays </h1> <br/>";
            echo "<h3> Simple Arrays </h3> <br/>";
            $simpleArray=array("t-shirt","cap","mug");
            print_r($simpleArray);
            echo "<br/>";
           $simpleArray=array("t-shirt","shirt","mug");
            print_r($simpleArray);
            echo "<br/>";
            $simpleArray=array("t-shirt","shirt","mug", "skirt");
            print_r($simpleArray);
            echo "Items in my product array <br/>";
            next($simpleArray);
            next($simpleArray);
            echo "The item at index[2] is :" .pos($simpleArray) . "<br/>"; 
            next($simpleArray);
            echo "The item at index[3] is :" .pos($simpleArray) ."<br/>"; 
            echo "<h3> Associative Array </h3> <br/>";
             $customer=array('CustID'=>12, 'CustName'=>'Sarah', 'CustAge'=>23, 'CustGender'=>'F' );
              print_r($customer);
              echo "<br/>";

               $customer=array('CustID'=>12, 'CustName'=>'Sarah', 'CustAge'=>32, 'CustGender'=>'F','CustEmail'=>'sarah@gmail.com');
              print_r($customer);   
               echo "<br/>";

              echo "Items in my customer array";
               echo "<br/>";
               next($customer);
               echo "The item at index[CustName] is: ".pos($customer). "<br/>";
               next($customer);
               next($customer);
               next($customer);
               echo "The item at index[CustEmail] is: ".pos($customer). "<br/>";

                echo "<h3> MultiDimensional Array </h3> <br/>";

                 $stockArray=array(
                  "id1"=> array(
                     "description" =>" t-shirt ",
                  "price"=>" 9.99 ",
                    "stock"=>" 100 ",
                  "colour"=>"green","blue","red",
               ),
                  "id2"=> array(
                     "description" =>" cap ",
                  "price"=>" 4.9 ",
                    "stock"=>" 50 ",
                  "colour"=>" grey "," blue "," black ",
               ),
                  "id3"=> array(
                     "description" =>" mug ",
                  "price"=>" 6.9 ",
                    "stock"=>" 30 ",
                  "colour"=>" yellow "," green "," pink ",
               ),
);
                  echo "this is my order: <br/>";

                 echo $stockArray["id1"]["colour"] .' '.$stockArray["id1"]["description"];
                 echo "<br/>";
                 echo "Price: &pound  " .$stockArray["id1"]["price"];
                  echo "<br/>";

                 echo $stockArray['id2']['colour'] .' '.  $stockArray["id2"]["description"];
                 echo "<br/>";
                 echo "Price: &pound  " .$stockArray["id2"]["price"];
                 echo "<br/>";
   
                 echo "<h1> Loops </h1> <br/>";
                 echo "<h3> While Loops </h3> <br/>";

                 $counter="1";
                 while ($counter < "6"){
                  echo "Count: ".$counter. "<br/>";
                  $counter++;

                 }
                 echo "<br/>";
                 $count="1";
                 $shirt_price ="9.99";
                 while ($count <= "10"){
                  $total=$count*$shirt_price;

                 
                    echo $count.'. &pound '.$total. "<br/>";
                     $count++;
               
                  }

                  echo"<br/>";
                  $countTable="0";
                  $shirt_price="9.99";
                  echo"<table border=1><tr><th>Quantity</th>
                  <th>Price</th>
                  </tr>";
                  while($countTable< "10"){
                     $countTable++;
                     echo "<tr><td>".$countTable."</td><td> &pound".$countTable*$shirt_price. "</td>";

                  }
                  echo"</table><br/>";

echo "<h3> For Loops </h3> <br/>";
$name=array("Peter","kat","laura", "Ali", "Popacatapetal");
for($i=0; $i<5; $i++){
   
   echo  $name[$i] .'<br />';
} 

echo "<h3> ForEach Loops </h3> <br/>";
$names=array("Peter"=>"c123456","Kat"=>"c654321","Laura"=>"c987654", "Ali"=>"c654987", "Popacatapetal"=>"c765984");
foreach ($names as $k => $v) {
   echo "Name: ".$k ."ID: ".$v ."<br/>";

}


      ?>

<h1>Extension</h1>
<h5>Declare a $city array:</h5>
<?php
 function tolower($lower)
      {
         $lower=strtolower($lower);
         return $lower;
      }
      function firstuppercase($first)
      {
         $first=ucfirst($first);
         return $first;
      }
      $city=array("Peter"=>"LEEDS","Kat"=>"bradford","Laura"=>"wakeFIeld");
      echo "<br/>";
         print_r($city);
      echo "<br/> <br/>";
         $city=array_map("tolower", $city);
         $city=array_map("firstuppercase", $city);
         print_r($city);

?>




      </section>
      <footer>   
         <small> <a href="../index.html">Home</a></small>
      </footer>
   </body>
</html>
