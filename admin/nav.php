<?php   
if (isset($_SESSION['admin'])) {  ?>


<a href="index.php" class="list-group-item list-group-item-action active">Dashboard</a>
<a href="district.php" class="list-group-item list-group-item-action"><i class="fas fa-list-alt m-1"></i>District</a>
<a href="sector.php" class="list-group-item list-group-item-action"><i class="fas fa-list-alt m-1"></i>Sector</a>
<a href="cell.php" class="list-group-item list-group-item-action"><i class="fas fa-list-alt m-1"></i>Cell</a>
<a href="village.php" class="list-group-item list-group-item-action"><i class="fas fa-list-alt m-1"></i>Village</a>
<a href="counselor.php" class="list-group-item list-group-item-action"><i class="fas fa-list-alt m-1"></i>Counselor</a>
<a href="childadmin.php" class="list-group-item list-group-item-action"><i class="fas fa-list-alt m-1"></i>Child</a>
<a href="report.php" class="list-group-item list-group-item-action"><i class="fas fa-list-alt m-1"></i>report</a>
<a href="logout.php" class="list-group-item list-group-item-action btn btn-danger">
    <i class="fa fa-lock m-1"></i>
    Logout
</a>
<?php }
else if(isset($_SESSION['caunsellor'])) {?>


<a href="child.php" class="list-group-item list-group-item-action"><i class="fas fa-list-alt m-1"></i>Child</a>
<a href="viewConselor.php" class="list-group-item list-group-item-action"><i
        class="fas fa-list-alt m-1"></i>Counselor</a>
<a href="transfer.php" class="list-group-item list-group-item-action"><i class="fas fa-list-alt m-1"></i>Transferred
    Children</a>
<a href="villagechildren.php" class="list-group-item list-group-item-action"><i class="fas fa-list-alt m-1"></i>
    Monitored in village</a>
<a href="report.php" class="list-group-item list-group-item-action"><i class="fas fa-list-alt m-1"></i>report</a>
<a href="logout.php" class="list-group-item list-group-item-action btn btn-danger">
    <i class="fa fa-lock m-1"></i>
    Logout
</a>
<?php  }  ?>