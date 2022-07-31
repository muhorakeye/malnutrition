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
                    <a href="cell.php" class="list-group-item list-group-item-action"><i
                            class="fas fa-list-alt m-1"></i>Cell</a>
                    <a href="village.php" class="list-group-item list-group-item-action"><i
                            class="fas fa-list-alt m-1"></i>Village</a>
                    <a href="color.php" class="list-group-item list-group-item-action"><i
                            class="fas fa-list-alt m-1"></i>Color</a>
                    <a href="parent.php" class="list-group-item list-group-item-action active"><i
                            class="fas fa-list-alt m-1"></i>Mother</a>
                    <a href="father.php" class="list-group-item list-group-item-action"><i
                            class="fas fa-list-alt m-1"></i>Father</a>
                    <a href="counselor.php" class="list-group-item list-group-item-action"><i
                            class="fas fa-list-alt m-1"></i>Counselor</a>
                    <a href="child.php" class="list-group-item list-group-item-action"><i
                            class="fas fa-list-alt m-1"></i>Child</a>
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
                    <a href="parentform.php" class="btn"><i class="fas fa-plus m-1"></i></i>Add New mother
                    </a>
                    <div class="container">

                        <table class="table table-striped table-hover">
                            <thead>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Village</th>
                                        <th colspan="2">
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                            <tbody>
                                <?php
                    $levels=parent();
                    foreach($levels as $district){ ?>

                                <tr>
                                    <td><?php echo $district->pid;?></td>
                                    <td><?php echo $district->mname;?></td>
                                    <td><?php echo $district->age;?></td>
                                    <td><?php echo $district->vid;?></td>
                                    <td>
                                        <a class="btn btn-secondary"
                                            href='editdistrict.php?u=<?php echo $district->pid; ?>' title='View Record'
                                            data-toggle='tooltip'>
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>

                                    <!-- <td>
                                        <a class="btn btn-danger" href='register.php?dc=<?php echo $district->pid; ?>'
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