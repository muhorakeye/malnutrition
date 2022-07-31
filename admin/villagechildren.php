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
                <h2 class="text-warning">
                    Children to be cared in village
                </h2>
                <hr>
                <!-- Latest Users -->
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <button onclick="return print();" class="btn btn-success  pull-right">
                            <i class="fa fa-print"></i>
                            Print
                        </button>

                        <table class="table table-striped table-hover">
                            <thead>
                                <thead>
                                    <tr>
                                        <th>#</th>
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






$username=$_SESSION['caunsellor'];
$color="Yellow";
 $data=allchildby($username, $color);


 foreach($data as $datarecieved){ ?>

                                <tr>
                                    <td><?php echo $datarecieved->id;?></td>
                                    <td><?php echo $datarecieved->childname;?></td>
                                    <td><?php echo $datarecieved->fathername;?></td>
                                    <td><?php echo $datarecieved->mothername;?></td>
                                    <td class="bg-warning"><?php echo $datarecieved->childcolor;?></td>
                                    <!-- <td><?php echo $datarecieved->name;?></td>
                                    <td><?php echo $datarecieved->vname;?></td>
                                    <td><?php echo $datarecieved->weight;?></td>
                                    <td><?php echo $datarecieved->dob;?></td>
                                    <td><?php echo $datarecieved->weeks;?></td>
                                    <td><?php echo $datarecieved->kubyimba;?></td>
                                    <td><?php echo $datarecieved->yarakingiwe;?></td>
                                    <td><?php echo $datarecieved->ongera;?></td>
                                    <td><?php echo $datarecieved->sosoma;?></td>
                                    <td><?php echo $datarecieved->kwamuganga;?></td> -->

                                    <td>
                                        <!-- <a class="btn btn-secondary"
                                            href='view.php? id=<?php echo $district->id; ?>'>View

                                        </a> -->
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