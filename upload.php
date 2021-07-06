<?php
    $name = $_POST['name'];
    $folderPath = "upload/";
    $image_parts = explode(";base64,", $_POST['signed']); 
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $file = $folderPath . $name . '_' . uniqid() . '.'.$image_type;
    file_put_contents($file, $image_base64);
   
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <title>Pledge With Us</title>
<link rel="shortcut icon" href="KYW-main.png" type="image/x-icon">  
	        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="keywords" content="Kashmir,Youth,Web">
            <meta name="description" content="Watch Truth About Drugs Video &amp; Learn About Substance Addiction. Get The Facts About Painkillers, Marijuana, Cocaine, Meth &amp; Other Illegal Drugs.">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
  
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  
    <script type="text/javascript" src="jquery.signature/js/jquery.signature.min.js"></script>
    <link rel="stylesheet" type="text/css" href="jquery.signature/css/jquery.signature.css">
  
  

 <style>
    .header {
                padding: 12px;
                text-align: center;
                background-color: #fbb034;
                background-image: linear-gradient(315deg, #fbb034 0%, #ffdd00 74%);
                color: white;
              }
            .footer {
                padding: 12px;
                text-align: center;
                background-color: #fbb034;
background-image: linear-gradient(315deg, #fbb034 0%, #ffdd00 74%);
                width:100%;
                color: white;
              } body    
                {
                    font-family:Times New Roman;font-weight:500;
                    font-size:21px;background-color: #b8c6db;
background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%);
                } 
               .color
                  {
                    background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%) !important;
                  }  .kbw-signature { width: 400px; height: 200px;} img {
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                  }
    </style>
  </head>
  <body>
  <div class="header"></div>
    <div class="jumbotron text-center color">
        <br>
        <h1 class="display-3">Thank You!</h1>
        <br>
        <img src="anti-drug-pledge2.jpg" alt="..." class="img-thumbnail">
        <br><br>
        <p class="lead"><strong>Thanks for taking the pledge!</strong> Now invite your friends to take a stand against drugs too!</p>

        <br>
        <p class="lead">
          <a class="btn btn-warning btn-lg" href="https://kashmiryouthweb.com/" role="button">Continue to homepage</a>
        </p>
      </div><div class="footer"></div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>



