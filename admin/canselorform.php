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
                <div class="row">

                </div>
                <hr>
                <!-- Latest Users -->
                <div class="jumbotron jumbotron-fluid">
                    <a href="districform.php" class="btn"><i class="fas fa-plus m-1"></i></i>Add New
                        Caunsellor</a>
                    </br>
                    <d<iv class="container">


                        <form action="register.php" method="POST" class="row form">

                            <div class="form-group col-md-6">
                                <label for="fname">Full Name</label>
                                <input type="text" name="name" value="" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fname">Username</label>
                                <input type="text" name="username" value="" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fname">Email</label>
                                <input type="email" name="email" value="" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fname">Password</label>
                                <input type="password" name="password" value="" class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="fname">Age</label>
                                <input type="namber" name="age" value="" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">Select district</label>
                                <select class="form-control form-control-lg" id="course" name="dis">
                                    <?php 
                          $districts= district();
                          foreach ($districts as $district) {   ?>
                                    <option value="<?php echo $district->dis; ?>">
                                        <?php echo $district->dname; ?>
                                    </option>
                                    <?php  }  ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">Select sector</label>
                                <select class="form-control form-control-lg" id="course" name="sid">
                                    <?php 
                          $sectors= sector();
                          foreach ($sectors as $sector) {   ?>
                                    <option value="<?php echo $sector->sid; ?>">
                                        <?php echo $sector->sname; ?>
                                    </option>
                                    <?php  }  ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">Select cell</label>
                                <select class="form-control form-control-lg" id="course" name="cid">
                                    <?php 
      $sectors= cell();
      foreach ($sectors as $sector) {   ?>
                                    <option value="<?php echo $sector->cid; ?>">
                                        <?php echo $sector->cname; ?>
                                    </option>
                                    <?php  }  ?>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Select village</label>
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

                            <button type="submit" name="registercansellor" class="btn btn-success form-control">Sign
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