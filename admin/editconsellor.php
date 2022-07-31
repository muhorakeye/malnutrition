<?php 

session_start();
  include('connection/connection.php');
  include('./function/functions.php');
  include('header.php');   
  
  ?>
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="mt-1"><i class="fas fa-cog"></i> </span>Dashboard</h1>

            </div>
            <div class="col-md-4">
                <h2 class="text-center mt-1">

                    <b>
                        <i class="fa fa-user fa-lg"></i>

                    </b>

                </h2>
            </div>
        </div>
    </div>
</header>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="active">Dashboard</li>
        </ol>
    </div>
</section>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <?php 

include('./nav.php');

?>

                </div>
            </div>

            <div class="col-md-9">

                <div class="card">

                    <div class="card-header main-color-bg">
                        <h3 class="card-header"> <small> Counsellor <span>/</span>Edit</small></h3>
                    </div>
                </div>

                <div class="row">
                    <?php
                if($_GET['u']) {

                 $dis=findconsellorByid($_GET['u']);  
                 
                    }
                    ?> </div>
                <hr>
                <div class="jumbotron jumbotron-fluid">
                    <div class="container" style="margin-top:0px">
                        <form action="register.php" method="POST">
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $dis->caid; ?>" class="form-control"
                                    required>
                            </div>


                            <div class="form-group">
                                <label for="fname">Full Name</label>
                                <input type="text" name="name" value="<?php echo $dis->name; ?>" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="fname">Username</label>
                                <input type="text" name="username" value="<?php echo $dis->username; ?>"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="fname">Email</label>
                                <input type="email" name="email" value="<?php echo $dis->email; ?>" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="fname">Password</label>
                                <input type="password" name="password" value="<?php echo $dis->password; ?>"
                                    class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="fname">Age</label>
                                <input type="namber" name="age" value="<?php echo $dis->age; ?>" class="form-control"
                                    required>
                            </div>

                            <div class="form-group">
                                <label>Select Your village</label>
                                <select class="form-control form-control-lg" value="<?php echo $dis->vid; ?>"
                                    id="course" name="vname">
                                    <?php 
      $districts= village();
      foreach ($districts as $district) {   ?>
                                    <option value="<?php echo $district->vid; ?>">
                                        <?php echo $district->vname; ?>
                                    </option>
                                    <?php  }  ?>
                                </select>
                            </div>

                            <button type="submit" name="editconsellor"
                                class="btn btn-success form-control">Update</button>
                        </form>


                    </div>
                </div>
            </div>