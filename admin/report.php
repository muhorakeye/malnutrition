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
                <button onclick="return print();" class="btn btn-success  pull-right">
                    <i class="fa fa-print"></i>
                    Print
                </button>
                <div class="card">
                    <button class=" btn btn-success btn-lg pull-right">
                        <i class="fa fa-print"></i>
                        Report
                    </button>
                    <div class="row">
                        <div style="width: 18rem; margin-left:10rem;">
                            <form class="example" action="postreport.php" method="post">
                                <div class=" form-group">
                                    <label for="exampleFormControlSelect1">Report by color</label>
                                    <select onchange="changeColor();" class="form-control form-control-lg btn"
                                        id="color" name="color">
                                        <option value="Yellow">Yellow</option>
                                        <option value="Green">Green</option>
                                        <option value="Red">Red</option>
                                    </select>
                                </div>
                            </form>
                        </div>


                    </div>

                    <table class="table">
                        <th>Name</th>
                        <th>Color</th>
                        <th>Village</th>
                        <th>Mother Name</th>
                        <th>Father Name</th>



                        <tbody id="tbody">

                        <tbody>

                    </table>

                </div>

            </div>
        </div>
    </div>
    </div>


    </div>

    </div>
    </div>
    </div>
    <script>
    function changeColor() {

        var color = document.getElementById("color").value;



        var xmlhttp = new XMLHttpRequest();

        xmlhttp.open("GET", "./getdata.php?u=" + color, false);

        xmlhttp.send(null);

        document.getElementById("tbody").innerHTML = xmlhttp.responseText;


    }
    </script>