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
                    <a href="index.php" class="list-group-item list-group-item-action active">Dashboard</a>
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

                <div class="card">

                    <div class="row">



                        <?php
if (isset($_POST["search"])) {
    $color =$_POST['color'];
    
        $stmt = $conn->prepare("SELECT child.id, child.name, child.fathername, 
        child.mothername, child.weight, child.weight, child.dob, child.weeks, 
        child.kubyimba, child.yarakingiwe, child.ongera, child.sosoma, 
        
        child.kwamuganga, color.colorname, consellor.name, village.vname 
        FROM child JOIN color ON color.id=child.cid join 
        consellor on consellor.caid=child.caid join village on
         village.vid=consellor. WHERE  color.colorname = ? LIMIT 1 ");
             $stmt->bindParam(1, $color);
             $stmt->execute();
             $data = $stmt->fetch(PDO::FETCH_OBJ);
            echo($data);
      
    }
                    ?>

                    </div>









                </div>

            </div>
        </div>
    </div>
    </div>


    </div>

    </div>
    </div>
    </div>