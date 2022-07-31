<?php session_start();
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
                    <a href="childform.php" class="btn"><i class="fas fa-plus m-1"></i></i>Add New
                        child</a>
                    <div class="container">
                        <button onclick="return print();" class="btn btn-success  pull-right">
                            <i class="fa fa-print"></i>
                            Print
                        </button>


                        <table class="table table-striped table-hover">
                            <thead>
                                <thead>
                                    <tr>
                                        <!-- <th>#</th> -->
                                        <th>Child name</th>
                                        <th>father name</th>
                                        <th>mother name</th>
                                        <th>Color</th>
                                        <!-- <th>Caunselor</th>
                                        <th>Village</th>
                                        <th>Weight</th>
                                        <th>Date Of Birth</th>
                                        <th>Weeks</th>
                                        <th>Kibyimba</th>
                                        <th>Yarakingiwe</th>
                                        <th>Yahawae Ongera</th>
                                        <th>Yahwe sosomba</th>
                                        <th>Yoherejwe Kwa muganga</th> -->
                                        <th colspan="2">
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                            <tbody>

                                <?php


 $levels=allchildadmin();
  foreach($levels as $district){ ?>
                                <tr>
                                    <!-- <td><?php echo $district->id;?></td> -->
                                    <td><?php echo $district->childname;?></td>
                                    <td><?php echo $district->fathername;?></td>
                                    <td><?php echo $district->mothername;?></td>
                                    <td><?php echo $district->childcolor;?></td>
                                    <!-- <td><?php echo $district->name;?></td>
                                    <td><?php echo $district->vname;?></td>
                                    <td><?php echo $district->weight;?></td>
                                    <td><?php echo $district->dob;?></td>
                                    <td><?php echo $district->weeks;?></td>
                                    <td><?php echo $district->kubyimba;?></td>
                                    <td><?php echo $district->yarakingiwe;?></td>
                                    <td><?php echo $district->ongera;?></td>
                                    <td><?php echo $district->sosoma;?></td>
                                    <td><?php echo $district->kwamuganga;?></td> -->

                                    <td>
                                        <a class="btn btn-secondary"
                                            href='view.php? id=<?php echo $district->id; ?>'>View

                                        </a>
                                    </td>
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