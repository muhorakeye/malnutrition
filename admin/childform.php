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
                    <a href="childform.php" class="btn"><i class="fas fa-plus m-1"></i></i>Add New
                        Child</a>
                    </br>
                    <d<iv class="container">

                        <form action="register.php" method="POST" class="row form">

                            <div class="form-group col-md-6">
                                <label for="fname">Full Name</label>
                                <input type="text" name="name" value="" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fname">Father Name</label>
                                <input type="text" name="fname" value="" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fname">Mother Name</label>
                                <input type="text" name="mname" value="" class="form-control" required>
                            </div>

                            <!-- <div class="form-group col-md-6">
                                <label>Select color</label>
                                <select class="form-control form-control-lg" id="course" name="color">
                                    <?php 
      $districts= color();
      foreach ($districts as $district) {   ?>
                                    <option value="<?php echo $district->id; ?>">
                                        <?php echo $district->colorname ?>
                                    </option>
                                    <?php  }  ?>
                                </select>
                            </div> -->


                            <div class="form-group col-md-6">
                                <label>Select caunsellor</label>
                                <select class="form-control form-control-lg" id="course" name="caunsellor">
                                    <?php 
      $districts= counsellor();
      foreach ($districts as $district) {   ?>
                                    <option value="<?php echo $district->caid; ?>">
                                        <?php echo $district->name; ?>
                                    </option>
                                    <?php  }  ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fname">Weight</label>
                                <input type="number" name="weight" value="" class="form-control" step="0.1" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fname">Dirth of birth</label>
                                <input type="date" name="date" value="" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fname">Height</label>
                                <input type="number" name="height" value="" class="form-control"
                                    placeholder="Enter Height" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">Select Village</label>
                                <select class="form-control form-control-lg" id="course" name="vid">
                                    <?php 
                          $sectors= village();
                          foreach ($sectors as $sector) {   ?>
                                    <option value="<?php echo $sector->vid; ?>">
                                        <?php echo $sector->vname; ?>
                                    </option>
                                    <?php  }  ?>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Kubyimba / Oedema </label>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="kubyimba" id="exampleRadios2"
                                        value="false">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Oya / No
                                    </label>
                                </div>
                                <div class=" form-check">
                                    <input class="form-check-input" type="radio" name="kubyimba" id="exampleRadios1"
                                        value="true" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Yego / Yes
                                    </label>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Gucurama umusatsi </label>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="gucurama" id="exampleRadios2"
                                        value="false">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Oya / No
                                    </label>
                                </div>
                                <div class=" form-check">
                                    <input class="form-check-input" type="radio" name="gucurama" id="exampleRadios1"
                                        value="true" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Yego / Yes
                                    </label>
                                </div>
                            </div>









                            <div class="form-group col-md-6">

                                <label>Yarakingiwe / Is vacinnated ? </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="urukingo" id="exampleRadios2"
                                        value="false">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Oya / No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="urukingo" id="exampleRadios1"
                                        value="true" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Yego / Yes
                                    </label>
                                </div>
                            </div>


                            <div class="form-group col-md-6">
                                <div class="form-check">
                                    <label>Yafashe ongera / Did child take Ongera ?</label>
                                    </br>
                                    <input class="form-check-input" type="radio" name="ongera" id="exampleRadios1"
                                        value="true" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Yego / Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ongera" id="exampleRadios2"
                                        value="false">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Oya / No
                                    </label>
                                </div>

                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-check">
                                    <label>Yafashe Sosoma / Did child take Sosoma ?</label>
                                    </br>
                                    <input class="form-check-input" type="radio" name="sosoma" id="exampleRadios1"
                                        value="true" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Yego / Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sosoma" id="exampleRadios2"
                                        value="false">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Oya / No
                                    </label>
                                </div>
                            </div>




                            <div class="form-group col-md-6">
                                <div class="form-check">
                                    <label>Yoherejwe kwamuganga / Did Transferred ?</label>
                                    </br>
                                    <input class="form-check-input" type="radio" name="muganga" id="exampleRadios1"
                                        value="true" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Yego / Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="muganga" id="exampleRadios2"
                                        value="false">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Oya / No
                                    </label>
                                </div>
                            </div>
                            <button type="submit" name="registerchild" class="btn btn-success form-control">Sign
                                Up</button>
                        </form>


                </div>


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