<?php
if(isset($_POST['send'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $duration = $_POST['duration'];
    $season = $_POST['season'];
    $travellers = $_POST['travellers'];
    $triptype = $_POST['triptype'];
    $specifications = $_POST['specifications'];
    $message = $_POST['message'];

    // $data = file_get_contents('contactes.json');
    // $data;
    // $data = json_decode($data,true);

    $input = array(
        'name' => $_POST['name'],
        'surname' => $_POST['surname'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'city' => $_POST['city'],
        'state' => $_POST['state'],
        'zipcode' => $_POST['zipcode'],
        'duration' => $_POST['duration'],
        'season' => $_POST['season'],
        'travellers' => $_POST['travellers'],
        'triptype' => $_POST['triptype'],
        'specifications' => $_POST['specifications'],
        'message' => $_POST['message'],
    );
    $data[] = $input;
    $data = json_encode($data, JSON_PRETTY_PRINT);
     file_put_contents('contact'.$name.'.'.'json', $data);
    

     echo "contact saved";

}

