 <?php
 if(isset($_POST['update'])){
     $user_id=$_POST['id'];
     $email=$_POST['email'];
     $contact=$_POST['contact'];
     $role= $_POST['role'];
     $gender=$_POST['gender'];
     $username=$_POST['username'];
     $fname= $_POST['fname'];
    
     $lname=$_POST['lname'];
     $age=$_POST['age'];
     $tmpname=$_FILES['img']['tmp_name'];
     $name=$_FILES['img']['name'];
     $size=$_FILES['img']['size'];
     $type=$_FILES['img']['type'];
   
     
     
                  $tmpname=$_FILES['img']['tmp_name'];
             $name=$_FILES['img']['name'];
             $size=$_FILES['img']['size'];
             $type=$_FILES['img']['type'];
             if($type=='img/png' or $type=='img/jpg' or $type='img/jpeg' or $type='img/gif'){
                 if($size<= 1048576){
              $patternforname= '/^([a-z])+$/i';
              $patternforpassword= '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';
              
              
              if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                  if(preg_match('/^([a-z])+$/i', $fname)){
                      if(preg_match('/^([a-z])+$/i', $lname)){
                //                  

                      if(!empty($email) and !empty($username) and !empty($age) and !empty($lname) and !empty($fname) and !empty($gender) and !empty($role) and !empty($contact)){
                 
                  
                      
                 
                                $updatequery="UPDATE user_info SET email='$email',lname='$lname',fname='$fname',age='$age',contact='$contact',role='$role',gender='$gender',profile='$name'  where user_id={$user_id}";
//     echo $updatequery;
                 
            
                  if(!mysqli_query($conn,$updatequery))
                  {
                       echo("Error description: " . mysqli_error($r)); 
                      
                  }else{
                      
                          $dir="uploads";
                     if(!file_exists($dir) && !is_dir($dir)){
                         mkdir($dir);
                     }
                     $uploadfull ="$dir/$name";
                     $upload = move_uploaded_file($tmpname,$uploadfull);
                  
                     echo '<script language="javascript">';
                        echo 'alert("Congratss!! Successfully Updated")';
                        echo '</script>'; 
                                          }
                         
              
                  
              }else{
                   echo "<div class='alert alert-danger' role='alert'>
                       Empty!!!
                   </div>";
              }
                      }else{
                        echo "<div class='alert alert-danger' role='alert'>
                      Alphabet!! only
                   </div>";
                         }
//                    
                      }else{
                        echo "<div class='alert alert-danger' role='alert'>
                      Alphabet!!only
                   </div>";
                  }
                  
                  
              }else{
                    echo "<div class='alert alert-danger' role='alert'>
                          Email is invalid!!
                   </div>";
              }
               
            }else{
             echo "<div class='alert alert-danger' role='alert'>
                          Image should less than 1 MB!!
                   </div>";
         }
          }else{
            echo "<div class='alert alert-danger' role='alert'>
                          File type should be Image!!
                   </div>";
     }
     
     
 }










?>
 