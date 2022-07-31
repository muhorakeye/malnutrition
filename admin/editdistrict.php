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
                        <h3 class="card-header"> <small> District <span>/</span>Edit</small></h3>
                    </div>
                </div>

                <div class="row">
                    <?php
                if($_GET['u']) {

                 $dis=findistrictByid($_GET['u']);  
                    }
                    ?> </div>
                <hr>
                <div class="jumbotron jumbotron-fluid">
                    <div class="container" style="margin-top:0px">
                        <form action="register.php" method="POST">
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" value="<?php echo $dis->dis; ?>">
                            </div>
                            <div class="form-group">
                                <label for="fname">name</label>
                                <input type="text" name="dname" class="form-control" value="<?php echo $dis->dname; ?>">
                            </div>
                            <button type="submit" name="editdistrict" class="btn btn-success">Update</button>
                        </form>

                    </div>
                </div>
            </div>