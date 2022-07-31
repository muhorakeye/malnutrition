<?php 
     session_start();
 include('connection/connection.php');
  include('function/functions.php');
  include('header.php');    ?>
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
                <!-- Website Overview -->
                <div class="card">

                    <div class="card-header main-color-bg">
                        <h3 class="card-header">Dashboard</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 mt-3">
                        <div class="card-body bg-secondary">
                            <h3><i class="fas fa-chalkboard-teacher m-1"></i>
                                <?php
                        $stmt = $conn->prepare("SELECT * FROM district ");
                        $stmt->execute();
                         $stmt->rowCount();

                         echo( $stmt->rowCount());


                      ?>
                            </h3>
                            <h4>districts</h4>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="card-body bg-secondary">
                            <h3><i class="fab fa-cc-paypal m-1"></i>
                                <?php
                        $stmt = $conn->prepare("SELECT * FROM sector ");
                        $stmt->execute();
                         $stmt->rowCount();

                         echo( $stmt->rowCount());
;

                      ?></h3>
                            <h4>sectors</h4>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="card-body bg-secondary">
                            <h3><i class="fas fa-users"></i>
                                <?php
                        $stmt = $conn->prepare("SELECT * FROM cell ");
                        $stmt->execute();
                         $stmt->rowCount();

                         echo( $stmt->rowCount());
;

                      ?>
                            </h3>
                            <h4>cells</h4>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="card-body bg-secondary">
                            <h3><i class="fas fa-photo-video m-1"></i>
                                <?php
                        $stmt = $conn->prepare("SELECT * FROM village ");
                        $stmt->execute();
                         $stmt->rowCount();

                         echo( $stmt->rowCount());


                      ?>

                            </h3>
                            <h4>villages</h4>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="card-body bg-secondary">
                            <h2><i class="fas fa-users"></i></span>
                                <?php
                        $stmt = $conn->prepare("SELECT * FROM parent ");
                        $stmt->execute();
                         $stmt->rowCount();

                         echo( $stmt->rowCount());


                      ?>
                            </h2>
                            <h4>parents</h4>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="card-body bg-secondary">
                            <h2><i class="fas fa-user-tag m-1"></i></i>
                                <?php
                        $stmt = $conn->prepare("SELECT * FROM child ");
                        $stmt->execute();
                         $stmt->rowCount();

                         echo( $stmt->rowCount());

                      ?>
                            </h2>
                            <h4>children</h4>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="card-body bg-secondary">
                            <h2><i class="fas fa-user-tag m-1"></i></i>
                                <?php
                        $stmt = $conn->prepare("SELECT * FROM consellor ");
                        $stmt->execute();
                         $stmt->rowCount();

                         echo( $stmt->rowCount());

                      ?>
                            </h2>
                            <h4>consellors</h4>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="card-body bg-secondary">
                            <h2><i class="fas fa-user-tag m-1"></i></i>
                                <?php
                        $stmt = $conn->prepare("SELECT * FROM child ");
                        $stmt->execute();
                         $stmt->rowCount();

                         echo( $stmt->rowCount());

                      ?>
                            </h2>
                            <h4>Children</h4>
                        </div>
                    </div>






                </div>
                <hr>
                <!-- Latest Users -->
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>