<?php

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

                    <a href="index.php" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="district.php" class="list-group-item list-group-item-action"><i
                            class="fas fa-list-alt m-1"></i>District</a>
                    <a href="sector.php" class="list-group-item list-group-item-action"><i
                            class="fas fa-list-alt m-1"></i>Sector</a>
                    <a href="cell.php" class="list-group-item list-group-item-action active"><i
                            class="fas fa-list-alt m-1"></i>Cell</a>
                    <a href="village.php" class="list-group-item list-group-item-action"><i
                            class="fas fa-list-alt m-1"></i>Village</a>
                    <a href="color.php" class="list-group-item list-group-item-action active"><i
                            class="fas fa-list-alt m-1"></i>Color</a>
                    <a href="../logout.php" class="list-group-item list-group-item-action btn btn-danger">
                        <i class="fa fa-lock m-1"></i>
                        Logout
                    </a>

                </div>
            </div>
            <div class="col-md-9">
                <div class="row">

                </div>
                <hr>
                <!-- Latest Users -->
                <div class="jumbotron jumbotron-fluid">
                    <a href="districform.php" class="btn"><i class="fas fa-plus m-1"></i></i>Add New
                        Father</a>
                    </br>
                    <d<iv class="container">


                        <form action="register.php" method="POST">

                            <div class="form-group">
                                <label for="fname">Father Full Name</label>
                                <input type="text" name="fname" value="" class="form-control" required>
                            </div>


                            <div class="form-group">
                                <label for="fname">Age</label>
                                <input type="namber" name="age" value="" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Select Your village</label>
                                <select class="form-control form-control-lg" id="course" name="vname">
                                    <?php 
      $districts= village();
      foreach ($districts as $district) {   ?>
                                    <option value="<?php echo $district->vid; ?>">
                                        <?php echo $district->vname; ?>
                                    </option>
                                    <?php  }  ?>
                                </select>
                            </div>

                            <button type="submit" name="registerfather" class="btn btn-success form-control">Sign
                                Up</button>
                        </form>
                </div>


            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
</section>

</div>
</div>
</div>
</script>

<?php
include('modal/model.php');
  ?>