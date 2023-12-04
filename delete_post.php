<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "posts";

error_reporting(0);

$msg = "";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if post_id is set and valid
if (isset($_POST['post_id']) && is_numeric($_POST['post_id'])) {
    $post_id = $_POST['post_id'];

    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM image WHERE id = ?");
    $stmt->bind_param("i", $post_id);

    // Execute and close
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        echo "Post deleted successfully";
    } else {
        echo "No post found with that ID";
    }
    $stmt->close();
} else {
    echo "Invalid Post ID";
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       

        .container {
            
            width: 45%;
            margin: 0 auto;
            padding: 20px;
            font-family: 'Poppins', sans-serif;
            color: white;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #686868;
            opacity: 0.8;
            
        }
        .login-form {
            
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .form-group {
           
           margin-bottom: 15px;
           text-align: center;
           font-size: 25px;
       }
        

        .form-control label {
            background-color: transparent;
            margin-bottom: 5px;
            
            
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0 20px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #2e2e2e;
            color: white;
        }
        input[type="password"], textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0 20px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #2e2e2e;
            color: white;
        }



        input[type="submit"] {
            display: inline-block;
            padding: 8px 35px;
            background-color: transparent;
            border: 1.5px solid #ffffff;
            color: #ffffff;
            border-radius: 0px;
            -webkit-transition: -webkit-transform 0.3s;
            transition: -webkit-transform 0.3s;
            transition: transform 0.3s;
            transition: transform 0.3s, -webkit-transform 0.3s;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 30px;
            margin-top: 35px;
            
        }
        input[type="submit"]:hover {
            color: black;
            background-color: white;
        }
    </style>
    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
      
        <title>Login to Dashboard</title>
      
        <!-- slider stylesheet -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
      
        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      
        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet" />
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />


        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

      </head>

      <body>
        <div class="hero_area" style=" background-image: url(../images/bg_dash.png);background-size:fill; background-attachment: fixed; height: 100vh;">
          <!-- header section strats -->
          <header class="header_section" >
            <div class="container-fluid" >
              <nav class="navbar navbar-expand-lg custom_nav-container " style="position: fixed;" >
                <a class="navbar-brand" href="index.html">
                  <span>
                    <img src="images/ttrlogo.png" alt="", style="width:100px; height: 50px;"  >
                  </span>
                </a>
                
               
                <button class="d-flex ml-auto flex-column flex-lg-row align-items-center" type="button" style="background-color: transparent; border:0px">
                    <ul class="navbar-nav  ">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Acasă<span class="sr-only">(current)</span></a>            
                    </ul>
               
                </button> 
              </nav>
            </div>
          </header>
          <!-- end header section -->
          <!-- slider section -->
            
                <div class="container" style="margin-top: 150px; margin-left: 450px; width: 1000px;">
                    <h1 style="margin-bottom: 20px;"><b>Postare ștearsă cu succes!</b></h1>
                    <button style="background-color:transparent; color: white; box-shadow: 0px; border:0px; font-size:30px" onclick="redirectToPage()">Înapoi la Dashboard</button>
                </div>

                <script>
        		function redirectToPage() {
            		window.location.href = 'dashboard.html'; 
        		}
    </script>
            
                

                
           
            
          <!-- end slider section -->
        </div>
        
      
       
            
</html>



