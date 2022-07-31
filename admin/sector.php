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
                    <a href="sectorform.php" class="btn"><i class="fas fa-plus m-1"></i></i>Add New
                        Sector</a>
                    <div class="container">

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                 $levels=sector();
                  foreach($levels as $district){ ?>
                                <tr>
                                    <!-- <td><?php echo $district->sid;?></td>
                                    <td><?php echo $district->did;?></td> -->
                                    <td><?php echo $district->sname;?></td>
                                    <td>
                                        <a class="btn btn-secondary"
                                            href='editsector.php?u=<?php echo $district->sid; ?>' title='View Record'
                                            data-toggle='tooltip'>
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>

                                    <!-- <td>
                                        <a class="btn btn-danger" href='register.php?dc=<?php echo $district->sid; ?>'
                                            title='View Record' data-toggle='tooltip'>
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td> -->


                                    <?php   }  ?>

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