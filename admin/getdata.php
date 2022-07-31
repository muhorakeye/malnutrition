<?php 
session_start();

  include('connection/connection.php');
  include('./function/functions.php');

  if($_GET['u']) {
    $data=searchbycolor($_GET['u']);
    foreach($data as $datarecieved){ ?>

<tr>
    <td>
        <?php echo $datarecieved->childname;?>
    </td>

    <td>
        <?php echo $datarecieved->childcolor;?>
    </td>


    <td>
        <?php echo $datarecieved->vname;?>
    </td>



    <td>
        <?php echo $datarecieved->mothername;?>
    </td>
    <td>
        <?php echo $datarecieved->fathername;?>
    </td>
</tr>



<?php  } }?>