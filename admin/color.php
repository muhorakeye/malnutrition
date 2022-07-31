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
                    <a href="villageform.php" class="btn"><i class="fas fa-plus m-1"></i></i>Add New
                        color</a>
                    <div class="container">

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <!-- <th class="text-center" colspan='3'>Action</th>
                                    <th></th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                 $levels=color();
                  foreach($levels as $district){ ?>
                                <tr>
                                    <!-- <td><?php echo $district->id;?></td> -->
                                    <td><?php echo $district->colorname;?></td>
                                </tr>

                                <?php
                   }
                   ?>

                            </tbody>
                        </table>
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