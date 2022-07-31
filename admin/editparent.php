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
                    <?php 

include('./nav.php');

?>


                </div>
            </div>

            <div class="col-md-9">

                <div class="card">

                    <div class="card-header main-color-bg">
                        <h3 class="card-header"> <small> District <span>/</span>Edit</small></h3>
                    </div>
                </div>

                <div class="row">
                    <?php
                if($_GET['u']) {

                 $dis=findparentByid($_GET['u']);  
                 
                    }
                    ?>

                    <form action="register.php" method="POST">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $dis->pid; ?>" class="form-control"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="fname">Father Full Name</label>
                            <input type="text" name="fname" value="<?php echo $dis->fname; ?>" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="fname">Mother Full Name</label>
                            <input type="text" name="mname" value="<?php echo $dis->mname; ?>" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="fname">Family Nation ID</label>
                            <input min="16" type="number" name="nid" value="<?php echo $dis->nid; ?>"
                                class="form-control" required>
                        </div>
                        <label>Sex</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ongera" id="exampleRadios2"
                                value="<?php echo $dis->sex; ?>">
                            <label class="form-check-label" for="exampleRadios2">
                                Female / Gore
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ongera" id="exampleRadios2"
                                value="<?php echo $dis->sex; ?>" checked>
                            <label class="form-check-label" for="exampleRadios2">
                                Male / Gabo
                            </label>
                        </div>
                        </br>



                        <div class="form-group">
                            <label for="fname">Age</label>
                            <input type="number" name="age" value="<?php echo $dis->age; ?>" class="form-control"
                                required>
                        </div>

                        </br>
                        <div class="form-group">
                            <label>Select Your village</label>
                            <select class="form-control form-control-lg" value="<?php echo $dis->vid; ?>" id="course"
                                name="vname">
                                <?php 
                          $districts= village();
                          foreach ($districts as $district) {   ?>
                                <option value="<?php echo $district->vid; ?>">
                                    <?php echo $district->vname; ?>
                                </option>
                                <?php  }  ?>
                            </select>

                        </div>


                        <button type="submit" name="editparent" class="btn btn-success form-control">Update
                            Parent</button>
                    </form>

                </div>
            </div>
        </div>