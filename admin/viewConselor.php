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
                        <!-- <?php  echo ($_SESSION['caunsellor']); ?> -->
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
                    <div class="container">

                        <table class="table table-striped table-hover">
                            <thead>
                                <thead>
                                    <tr>


                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Village</th>
                                        <th>Cell</th>
                                        <th>Sector</th>
                                        <th>District</th>
                                        <th colspan="2">
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                            <tbody>

                                <?php
                   $levels=allConsellorbyid($_SESSION['caunsellor']);
                                 ?>
                                <tr>
                                    <!-- <td><?php echo $levels->caid;?></td> -->
                                    <td><?php echo $levels->name;?></td>
                                    <td><?php echo $levels->username;?></td>
                                    <td><?php echo $levels->vname;?></td>
                                    <td><?php echo $levels->cname;?></td>
                                    <td><?php echo $levels->sname;?></td>
                                    <td><?php echo $levels->dname;?></td>


                                    <td>
                                        <a class="btn btn-secondary"
                                            href='editconsellor.php?u=<?php echo $levels->caid;?>' title='View Record'
                                            data-toggle='tooltip'>
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>

                                    <!-- <td>
                                        <a class="btn btn-danger" href='register.php?d=<?php echo $district->pid; ?>'
                                            title='View Record' data-toggle='tooltip'>
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td> -->
                                </tr>



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