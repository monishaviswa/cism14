<?php
//Customer/default.php	
	$this->load->view($this->config->item('theme') . 'header');
	
    	   echo "<br><br><br><br><br><br><br>";
		   foreach($query as $customer)
			{
				echo "<code>" . $customer['FirstName'] . "</code><br>";
			}
	
$this->load->view($this->config->item('theme') . 'footer');
	
?>