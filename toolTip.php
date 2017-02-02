<?php

	$room= (string) $_GET["room"];
	$building= (string) $_GET["building"];

echo 
  '<h3 class="text-info text-center"> Room: ' . $room .'</h3>
  <p class="text-center" style=" font-weight: bold; font-size: 1.2em">Name Here</p>
  <p>Phone: 2-3456</p>
  <h4> Notes:</h4>
  <p>”This is a demonstration only: The information in this tool tip changes based on the room information entered in the form/db. This is a demonstration only."</p>';


?>
