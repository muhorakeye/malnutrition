<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CNM</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="./css/style.css" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    </div>
    <div id="RegContainer">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-xs-12">
            </div>

            <div class="col-lg-6 col-md-6 col-xs-12 " id="register">
                <div class="user_register ">
                    <center>
                        <h2></span><strong>CNMS</strong> Log in</h2>
                    </center>

                    <form action="register.php" method="POST">
                        <br />
                        <div class="form-group">
                            <label>
                                Log As</label>
                            <select class="form-control" name="type">
                                <option value="counsellor">Counsellor</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="email">Username:</label>
                            <input type="text" name="username" class="form-control" required>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <br>

                        <div class="form-group has-feedback">
                            <label for="email">Password:</label>
                            <input type="password" name="password" class="form-control" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <br>

                        <button type="submit" name="login" class="btn btn-success" class="form-control">Log In</button>
                        <!-- <a href=" forgot_user_pass.php" class="text-danger pull-right">forgot password?</button>
                            -->


                        <a class="btn" href="index.php">Back<a>


                    </form>

                </div>
            </div>

            <div class=" col-lg-3 col-md-3 col-xs-12">
            </div>
        </div>
    </div>

    <?php  ?>