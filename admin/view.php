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

                    <div class="row">
                        <?php
                if($_GET['id']) {

                 $dis=allchildByid($_GET['id']);  
                 
                    }
                    ?>

                        <div class="jumbotron jumbotron-fluid">
                            <h1>INFORMATION ABOUT <?php echo $dis->childname;?></h1>
                            <div class="container-fluid">
                                <div class="card" style="width: 50rem;">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"> <span style="color:black">Name </span>
                                            :<?php echo $dis->childname;?></li>
                                        <li class="list-group-item"> <span style="color:black">Father Name </span>
                                            :<?php echo $dis->fathername;?></li>
                                        <li class="list-group-item"> <span style="color:black">Mother Name </span>
                                            :<?php echo $dis->mothername;?></li>
                                        <li class="list-group-item"> <span style="color:black"> color </span>
                                            :<?php echo $dis->childcolor;?></li>
                                        <li class="list-group-item"> <span style="color:black"> Weight </span>
                                            :<?php echo $dis->weight;?></li>
                                        <li class="list-group-item"> <span style="color:black">Date of Birth </span>
                                            :<?php echo $dis->dob;?></li>
                                        <li class="list-group-item"> <span style="color:black">Months </span>
                                            :<?php echo $dis->weeks;?></li>
                                        <li class="list-group-item"> <span style="color:black">odema: </span>
                                            :<?php echo $dis->kubyimba;?></li>
                                        <li class="list-group-item"> <span style="color:black">Vacinnated </span>
                                            :<?php echo $dis->yarakingiwe;?></li>
                                        <li class="list-group-item"> <span style="color:black">Yahawe Ongera </span>
                                            :<?php echo $dis->ongera;?></li>
                                        <li class="list-group-item"> <span style="color:black">Yahawe Sosoma </span>
                                            :<?php echo $dis->sosoma;?></li>
                                        <li class="list-group-item"> <span style="color:black">Yoherejwe kwamuganga
                                            </span>
                                            :<?php echo $dis->kwamuganga;?></li>

                                    </ul>
                                </div>


                            </div>
                        </div>




                    </div>

                </div>
            </div>
        </div>