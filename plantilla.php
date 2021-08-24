<?php

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
        $htmlContent .='<tr><th>Destinity : </th><td>'.$dest.'</td></tr>';
    }
    $htmlContent .='</table>';
    $htmlContent .='<p>Message : '.$message2.'</p>';
    $htmlContent .='</body></html>';


