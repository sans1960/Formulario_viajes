<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso</title>
    <link rel="stylesheet" href="formulari.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="proceso">

    <?php
if(isset($_POST['send'])){
    $code = $_POST['code'];
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
    if(isset($_POST['specifications'])){
        $specifications = $_POST['specifications'];
    }else{
        $specifications = null;
    }
   
    if(isset($_POST['children'])){
        $children =$_POST['children'];
    }else{
        $children = null;
    }
    if(isset($_POST['destinity'])){
        $destinity = $_POST['destinity'];
    }else{
        $destinity=null;
    }
   
    $message2 = $_POST['message2'];

     $data = file_get_contents('data/contactes.json');
     $data = json_decode($data,true);

    $input = array(
        'code'=>$_POST['code'],
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
        'specifications' => $specifications,
        'children'=>  $children,           
        'destinity'=>$destinity,
        'message' => $_POST['message2'],
    );
    $data[] = $input;
    $data = json_encode($data, JSON_PRETTY_PRINT);
     file_put_contents('data/contactes.json', $data);
    

     echo "<div class='alert'>";
     echo "<p>Thanks you : ".$name." ".$surname." "."</p>";
     echo "<p>We will contact with you</p>";
     echo "<p>We will recived a email</p>";

     echo "</div>";

    

     $to = $email;
     $subject = "Contact for trip";
     $headers = "MIME-Version: 1.0" . "\r\n";
     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
     $message ="Thanks you : ".$name." ".$surname." "."</p>";
     mail($to, $subject, $message, $headers);  

     $htmlContent =  '<html lang="en">
<head>

    <title>Email</title>
    <style>
        *{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        h1{
            text-align:center ;
        }
        table{
            margin: 20px auto;
            padding: 10px;
        }
    </style>
</head>
<body>
<h1>Welcome to Soujourplanet </h1>
<table>
    <tr>
        <th>Name : </th><td>'.$name.'</td>
    </tr>
    <tr>
        <th>Surname : </th><td>'.$surname.'</td>
    </tr>
    <tr>
        <th>Email : </th><td>'.$email.'</td>
    </tr>
    <tr>
        <th>Phone : </th><td>'.$phone.'</td>
    </tr>
    <tr>
        <th>City : </th><td>'.$city.'</td>
    </tr>
    <tr>
        <th>State : </th><td>'.$state.'</td>
    </tr>
    <tr>
        <th>Zipcode : </th><td>'.$zipcode.'</td>
    </tr>
    <tr>
        <th>Duration : </th><td>'.$duration.'</td>
    </tr>
    <tr>
        <th>Season : </th><td>'.$season.'</td>
    </tr>
    <tr>
        <th>Tavellers : </th><td>'.$travellers.'</td>
    </tr>
    <tr>
        <th>Triptype : </th><td>'.$triptype.'</td>
    </tr> ';
    if(!empty( $specifications)){
        foreach($specifications as $specification){
            $htmlContent .='<tr><th>Specifications : </th><td>'.$specification.'</td></tr>';
        }
       
        } else{
            $htmlContent .='<tr><th>Specifications : </th><td>null</td></tr>';
    }
    if(!empty($children)){
        $htmlContent .='<tr><th>Children : </th><td>'.$children.'</td></tr>';
    }else{
        $htmlContent .='<tr><th>Children : </th><td>null</td></tr>';
    }
    if(!empty($destinity)){
        foreach($destinity as $dest){
            $htmlContent .='<tr><th>Destinity : </th><td>'.$dest.'</td></tr>';
        }
    }else{
        $htmlContent .='<tr><th>Destinity : </th><td>null</td></tr>';
    }
    $htmlContent .='</table>';
    $htmlContent .='<p>Message : '.$message2.'</p>';
    $htmlContent .='</body></html>';


  
    mail('g.sans.real@gmail.com',$subject,$htmlContent,$headers);








     echo "<div class='enlace'>";
     echo "<a href='formulario.php'>Back</a>";
     echo "</div>";
}
?>
    

    </div>
    
</body>
</html>



















