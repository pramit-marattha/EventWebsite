<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <script>
function goBack() {
    window.history.back()
}
</script>
<style>
}
q {
    text-decoration: green;
    display: inline-block;
    padding: 8px 16px;
}

q:hover {
    background-color: #ddd;
    color: black;
}

.Go_back {
    background-color: #fff609;
    color: #0909b8;
    border-radius: 0%;
  
}
</style>


<button onclick="goBack()"class="Go_back">&laquo;GO Back!!</button>
<br>
<br>
<br>
<?php
//declare some variables
$day='Saturday';
    $count=300;
    
//Output to screen
    echo 'I just wanted to say that\'s fine';
    echo '<br />';
    echo 'The day is '.$day;
    echo '<br />';
    print 'The count is '.$count;
    echo '<br />';
//test some conditions
    if ($count =300){
        echo 'correct';
    }else{
        echo 'incorrect';
    }
    echo '<br />';
    $time =14;
    if($time < 12 ){
        echo 'Good morning';
     }elseif($time >= 24 && $time <=18){
        echo 'Good afternoon';
        }
    else{
    echo 'Good Evening';
}
?>
</head>
</html>
