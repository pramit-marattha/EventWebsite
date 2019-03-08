<?php
require '../connection.php';
?>
<div class="event_wrapper">
	<div class="container-fluid">
		<h3>Innovative expo in nepal</h3>
		<div class="row">
			<div class="col-lg-1">
			</div>
			<div class="col-lg-10">
			<?php
			$sql   = "select * from event";
    		$query = mysqli_query($conn, $sql);
    		echo "<div class='row'>";
    		echo "<div class='col-lg-12'>";
    		while ($line = mysqli_fetch_assoc($query))
    		{
    			echo "<div class='row'>";
    			echo "<hr>";
    			echo "<div class='col-lg-4'>";




          	    //echo '<img class="image" src="data:image;base64,' .base64_encode($line['event_image']). '"/>';        
                echo'<img src="data:image/png;base64,'.base64_encode( $line['event_image'] ).'"/>';




    			echo "</div>";
    			echo "<div class='col-lg-5'>";
    			echo "<div class='event_con'>";
    			echo '<h3>'.$line['event_name'].'</h3>';
    			echo $line['event_location'].'<br/><br/>';
    			echo $line['event_date'].'<br/>';
    			echo "</div>";
    			echo "</div>"; 
    			echo "<div class='col-lg-3'>";
    			echo "<div class='event_duration'>";
    			echo $line['event_duration'].'<br/>';
    			echo "</div>";
    			echo "</div>";
    			echo "</div>";
    			   		
    		}
    echo "</div>";
     echo "</div>";
         echo "</div>";
?>

			</div>
			<div class="col-lg-1">
				
			</div>
		</div>
	</div>
</div>


