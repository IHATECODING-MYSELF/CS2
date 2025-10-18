<?php
// retrieve data from form  
$name = $_POST['Fname'] ?? '';
$quote = $_POST['Quote'] ?? '';    
$gender = $_POST['gender'] ?? '';
$age = $_POST['age'] ?? ''; 

// display the data
echo "You are $name, a $age year old $gender. Your motto is: $quote <br>";
