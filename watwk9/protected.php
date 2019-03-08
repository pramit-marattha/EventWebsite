<?php
include 'init.php';//establsihing a connection
if(!isset($_SESSION['user'])){
    header ('location:watWk9.php');
}
?>
