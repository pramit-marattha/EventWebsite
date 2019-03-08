  <h1>Manage Products</h1>
    <table border=2px id="dataTable" width="50%" cellspacing="0">
                   <thead>
                    <tr>
                      <th>ProductName</th>
                      <th>ProdcutPrice</th>
                      <th>Image</th>  
                         <th>Amend</th>   
                         <th>Delete</th>
                  
                    </tr>
                  </thead>
<?php
                  include('connection.php');  

//querying data from Customer table
  $stmt="SELECT * FROM products";
  $qry=mysqli_query($conn, $stmt);
  //Counting record
  $count=mysqli_num_rows($qry);
    
    while($row=mysqli_fetch_array($qry))
    {
                 echo "<tbody><tr>";
                 echo "<td>" .$row['ProductName']. "</td>";
                  echo"<td>" .$row['ProductPrice']."</td>";
                   $image=$row['ProductImageName'] ;
                 echo"<td><img src='images/$image' width=50 height=50 ></td>";  
                   echo "<td><a href='AmendProduct.php?id=".$row['ProductID']."'>Amend</a></td>"; 
                                      echo "<td><a href='DeleteProduct.php?id=".$row['ProductID']."'> Delete</a></td>"; 
         
                 echo"</tr></tbody>" ;
                  }
                   

                  ?>
                </table>