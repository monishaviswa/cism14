<?php
//Customer/default.php	
	$this->load->view($this->config->item('theme') . 'header2');
	
    	   echo "<br><br><br><br>";

		 print '<h1>' . $query->channel->title . '</h1>';
		  foreach($query->channel->item as $story)
			  {
				echo "<code>";
				echo '<a href="' . $story->link . '">' . $story->title . '</a><br />'; 
				echo '<p>' . $story->description . '</p><br /><br />';
				echo "</code>";
			  } 

	
$this->load->view($this->config->item('theme') . 'footer');
	
?>