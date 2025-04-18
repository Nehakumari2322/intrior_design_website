<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interior Webiste </title>
    <link rel="icon" type="images/x-icon" href="<?php echo URLROOT."/img/logoo.png";?>" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/60c047d98e.js" crossorigin="anonymous"></script>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap');

    .back-video {
        position: absolute;
        right: 0;
        bottom: 0;
        z-index: -1;
    }
    body{
        font-family: 'Inter', sans-serif;
        color:white;
    }

    .card{
      background:none;
      border:none;
    }

    .btn1{
      color:white;
      background:#696542;
      width: 200px;
      padding:10px;
      border-radius:0px;
      display:block;
      margin:auto;
    }
    .mgg{
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    
    .mgg img{
      height:70px;
      width: 70px;
      display:block;
      margin:auto;
      
    }
    .mgg p{
        /* align-items:center; */
        font-family: "Inter", sans-serif;
        font-weight:200;
        font-size:1.7rem;

    }
    @media(min-aspect-ratio:16/9) {
        .back-video {
            width: 100%;
            height: auto;
        }
    }

    @media(max-aspect-ratio:16/9) {
        .back-video {
            width: auto;
            height: 100%;
        }
    }

    .hero {
        width: 100%;
        height: 100vh;
        position: relative;
        padding: 0 5%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    nav {
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        padding: 0px 8%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    nav ul li {
        list-style: none;
        display: inline-block;
        margin-left: 40px;
    }

    nav ul li .btn2 {
        text-decoration: none;
        color: #fff;
        font-family: "Inter", sans-serif;
        font-size: 20px;
    }

    nav ul li .btn2:hover {
        text-decoration: underline;
        color: #ffff;
    }

    .content {
        text-align: center;
    }

    .content h1 {
        font-size: 80px;
        color: #fff;
        font-weight: 600;
        transition: 0.5s;
        margin-bottom:0.2rem;
        font-family: "Akaya Telivigala", system-ui;
        position: absolute;
        top:250px;
    white-space: nowrap;
    animation: floatText 5s infinite alternate ease-in-out;

    }

    .content p{
        font-family: "Akaya Telivigala", system-ui;
        display: inline-block;
        color: #fff;
        font-size: 40px;  
       
    }

    @-webkit-keyframes floatText{
  from {
    left: 00%;
  }

  to {
    /* left: auto; */
    left: 35%;
  }
}

   


    </style>
</head>

<body style="background:black">