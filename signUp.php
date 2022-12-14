<?php
 session_start();

    include("connection.php");
    include("functions.php");

    if ( $_SERVER['REQUEST_METHOD'] == "POST") {
        
        // to post login daten
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($username) && !empty($name) && !empty($email) && !empty($password) && !is_numeric($name)) {
          
            //save to the database
            $query = "insert into users (username,name,email,password) values ('$username','$name','$email','$password')";

            if ( mysqli_query($con,$query)) {
                echo "New record created successfully";
              }
            header("Location: login.php");
            die;


        } else {

            echo "Geben Sie bitte valide Informationen ein !";

        }
        
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>SignUp Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn"> 
                        <form class="myForm text-center" method ="post">
                            <header>Neues Konto erstellen</header>
                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input class="myInput" type="text" placeholder="Username" id="username" name="username" required> 
                            </div>

                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input class="myInput" type="text" placeholder="Name" id="name" name="name" required> 
                            </div>

                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                <input class="myInput" placeholder="Email" type="text" id="email" name="email" required> 
                            </div>

                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input class="myInput" type="password" id="password" placeholder="Password" name="password" required> 
                            </div>

                            <div class="form-group">
                                <label>
                                    <input id="check_1" name="check_1"  type="checkbox" required><small> Ich habe die Allgemeinen Gesch??ftsbedingungen gelesen und stimme ihnen zu.</small></input> 
                                    <div class="invalid-feedback">Das K??stchen muss angekreuzt werden.</div>
                                </label>
                            </div>

                            <input type="submit" class="butt" value="KONTO ERSTELLEN">
                            
                        </form>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="myRightCtn">
                            <div class="box"><header>Hello World!</header>
                            
                            <p>Ich bin Cedric Ndong, ein junger Student, 
                                der sich f??r Informatik 
                                und Softwareentwicklung begeistert.</p>
                                <a href="cedricOnlineCV.html"><input type="button" class="butt_out" value="Mehr ??ber mein Portfolio"/></a>
                            </div>
                                
                    </div>
                </div>
            </div>
        </div>
</div>
      
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</body>
</html>

