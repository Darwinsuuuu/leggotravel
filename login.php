<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Login • LeggoTravel</title>
    <link rel="icon" href="style/resources/logo_orange_black.png">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/674b5b9445.js" crossorigin="anonymous"></script>

    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <!-- styling -->
    <link rel="stylesheet" href="style/login.css">

</head>
<body>
    



    <div class="login-wrapper">
        
        <h1 class="mb-5 text-center poppins">Login to Travel</h1>

        <form action="db/db_login_user.php" method="POST">

            <div class="form-group input-group-lg">
                <label for="getEmail" class="form-label">Email Address</label>
                <input type="text" class="form-control" id="getEmail" name="getEmail">
            </div>

            <div class="form-group input-group-lg mt-3">
                <label for="getPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="getPassword" name="getPassword">
            </div>


            <?php

                if(isset($_GET['error'])) {
                    echo "<div class='form-group mt-3'>"
                            ."<p class='form-label text-danger poppins text-center'>Incorrect email and password</p>"
                        ."</div>";
                }

            ?>
            

            <div class="form-group input-group-lg mt-3">
                <button type="submit" class="btn btn-success p-2 w-100">Login</button>
            </div>

            <div class="form-group mt-3">
                <p class="text-center fs-mid poppins">Don't have an account? <a href="signup.php" class="dark-blue">Sign up here!</a></p>
            </div>

        </form>
    </div>










    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   
    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>