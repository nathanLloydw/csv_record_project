<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    include 'records.php';

    $Records_controller = new Records_controller();

    // collect value of input field
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $Records_controller->add_record($first_name,$last_name,$email,$mobile);

    echo $first_name,$last_name,$email,$mobile;
}

?>