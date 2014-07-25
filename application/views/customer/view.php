<?php
//Customer/view.php	
	$this->load->view($this->config->item('theme') . 'header');
	
	if($query->num_rows() > 0)
	
	{
    	   echo "<br><br><br><br><br>";
		   echo "<h1>Customer Details </h1>";
		   foreach($query->result() as $customer)
			{
				echo '<p>';
				echo "CustomerID :" . $customer->CustomerID . "<br>";
				echo "FirstName  :" . $customer->FirstName . "<br>";
				echo "LastName   :" . $customer->LastName . "<br>";
				echo "Email      :" . $customer->Email . "<br>";
				//echo "<code>" . $customer['FirstName'] . "</code><br>";
				echo '</p>';
			}
	}
	
	else 
	{
	
	echo "Sorry no such customer ";
	
	}
$this->load->view($this->config->item('theme') . 'footer');
	
?>