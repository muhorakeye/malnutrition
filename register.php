<?php session_start();

include("./connection/connection.php");
include('./function/functions.php');

if (isset($_POST["login"])) {
    $type =$_POST['type'];
    $username =$_POST['username'];
    $password =$_POST['password'];
    if(strtolower($type) =="admin") {
        
        $sql =  $conn->prepare("SELECT * FROM admin WHERE username= ? AND password= ? ");
        
        $sql->bindParam(1, $username);
        $sql->bindParam(2, $password);

        $sql->execute();

        if($sql->rowCount() > 0){
            

            $_SESSION['admin']= $username;
            header("location:./admin/");
            exit();
            
        }else{

            exit("Wromg Credentials");
        }
        
        

        
    
    } else if(strtolower($type) =="counsellor") {

        $stmt = $conn->prepare("SELECT * FROM consellor WHERE username=?  AND password=? ");

        $stmt->bindParam(1, $username);
        $stmt->bindParam(2, $password);

        $stmt->execute();
        if($stmt->rowCount() > 0){
            
          $_SESSION['caunsellor']=$username;   
        
          header("location:./admin/child.php");
          exit();

        }else{

            exit("Wromg Credentials");
            
        }
        
    } else {

        header("location:./");
        
    } 

 
    
    
}

// Register district  Start

if (isset($_POST["registerdistrict"])) {
    $dname = $_POST['dname'];
    $sql = "INSERT INTO district(dname) VALUES('$dname')";

    if($conn->query($sql)) 
    {

        header("location:district.php");
    } else {
        exit("failed");
        
    }
}
// Register district  end

// edit  district  
if (isset($_POST["editdistrict"])) {
    $id =$_POST['id'];
    $dname =$_POST['dname'];

 
    $sql = "UPDATE district set dname ='$dname'
     WHERE dis = '$id'";
     

    if($conn->query($sql)) 
    {

        header("location:district.php");
    } else {
        exit("failed");
        
    }

}

if (isset($_POST["search"])) {
    
    $color =$_POST['color'];
    
    function searchbycolor($id) {
        global $conn;
          $stmt = $conn->prepare("SELECT child.id, child.name, child.fathername, 
          child.mothername, child.weight, child.weight, child.dob, child.weeks, 
          child.kubyimba, child.yarakingiwe, child.ongera, child.sosoma, 
          
          child.kwamuganga, color.colorname, consellor.name, village.vname 
          FROM child JOIN color ON color.id=child.cid join 
          consellor on consellor.caid=child.caid join village on
           village.vid=consellor. WHERE  child.id = ? LIMIT 1
          ");
       $stmt->bindParam(1, $color);
       $stmt->execute(); 
       if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
        return $data;
      }
      } 
    
}



//delete
if (isset($_GET["dc"])) {

    $id = $_GET['dc'];
   $sql = "DELETE  FROM district WHERE dis = '$id' ";
    if($conn->query($sql)) 
    {

        header("location:district.php");
    } else {
        exit("failed");
        
    }  
}

//delete
if (isset($_GET["d"])) {

    $id = $_GET['d'];
   $sql = "DELETE  FROM parent WHERE pid = '$id' ";
    if($conn->query($sql)) 
    {

        header("location:parent.php");
    } else {
        exit("failed");
        
    }  
}







// Register sector Start

if (isset($_POST["registersector"])) {
$dname = $_POST['sname'];
$sql = "INSERT INTO sector(sname) VALUES('$dname')";

if($conn->query($sql))
{

header("location:sector.php");
} else {
exit("failed");

}
}
// Register sector end

// Register color Start

if (isset($_POST["registercolor"])) {

    $dname = $_POST['cname'];
    $sql = "INSERT INTO color(colorname) VALUES('$dname')";
    
    if($conn->query($sql))
    {
    
    header("location:color.php");
    } else {
    exit("failed");
    
    }
    }
    // Register color end

// edit district
if (isset($_POST["editsector"])) {
$id =$_POST['id'];
$dname =$_POST['sname'];


$sql = "UPDATE sector set sname ='$dname'
WHERE sid = '$id'";

if($conn->query($sql))
{

header("location:sector.php");
} else {
exit("failed");

}
}


// edit admin
if (isset($_POST["editadmin"])) {
    $id =$_POST['id'];
    $dname1 =$_POST['username'];
    $dname2 =$_POST['email'];
   
    
    
    $sql = "UPDATE admin set 
     username ='$dname1',
    email ='$dname2'
    
    WHERE adminid = '$id'";
    
    if($conn->query($sql))
    {
    
    header("location:viewadmin.php");
    } else {
    exit("failed");
    
    }
    }



















// edit options
if (isset($_POST["editoptons"])) {
    $id =$_POST['id'];
    $dname1 = $_POST['ongera'];
    $dname2 = $_POST['kubyimba'];
    $dname3 = $_POST['urukingo'];
    $dname4 = $_POST['sosoma'];
    $dname5 = $_POST['muganga'];   
    
    
    $sql = "UPDATE options set 
    kubyimba ='$dname1',
    yarakingiwe ='$dname2',
    ongera ='$dname3',
    sosoma ='$dname4',
    kwamuganga ='$dname5',
    
    WHERE opid = '$id'";
    
    if($conn->query($sql))
    {
    
    header("location:options.php");
    } else {
    exit("failed");
    
    }
    }

    if (isset($_POST["editparent"])) {
        $id =$_POST['id'];
        $dname1 = $_POST['fname'];
        $dname2 = $_POST['mname'];
        $dname3 = $_POST['nid'];
        $dname4 = $_POST['ongera'];   
        $dname5 = $_POST['age'];
        $dname6 = $_POST['vname'];     
        $sql = "UPDATE parent set 
        fname ='$dname1',
        mname ='$dname2',
        nid ='$dname3',
        sex ='$dname4',
        age ='$dname5',
        vid = '$dname6'    
        WHERE pid = '$id'";
        
        if($conn->query($sql))
        {
        
        header("location:parent.php");
        } else {
        exit("failed");
        
        }
        }
//--------------------


if (isset($_POST["editfather"])) {
    $id =$_POST['id'];
    $dname1 = $_POST['vname'];
    $dname2 = $_POST['fname'];
    $dname3 = $_POST['age'];    
    $sql = "UPDATE father set 
    vid ='$dname1',
    fname ='$dname2',
    age ='$dname3'
    WHERE fatherid ='$id'";
    
    if($conn->query($sql))
    {
    
    header("location:father.php");
    } else {
    exit("failed");
    
    }
    }

























if (isset($_POST["editconsellor"])) {
    $id =$_POST['id'];
    $dname1 = $_POST['name'];
    $dname2 = $_POST['username'];
    $dname3 = $_POST['email'];
    $dname4 = $_POST['password'];   
    $dname5 = $_POST['age'];
    $dname6 = $_POST['vname'];     
    $sql = "UPDATE consellor set 
    name ='$dname1',
    username ='$dname2',
    email ='$dname3',
    password ='$dname4',
    age ='$dname5',
    vid = '$dname6'    
    WHERE caid = '$id'";
    
    if($conn->query($sql))
    {
    
    header("location:consellor.php");
    } else {
    exit("failed");
    
    }
    }










    

// edit district
if (isset($_POST["editcell"])) {
    $id =$_POST['id'];
    $dname =$_POST['cname'];
    
    
    $sql = "UPDATE cell set cname ='$dname'
    WHERE cid = '$id'";
    
    if($conn->query($sql))
    {
    
    header("location:cell.php");
    } else {
    exit("failed");
    
    } 
    }

if (isset($_GET["dc"])) {

$id = $_GET['dc'];
$sql = "DELETE FROM sector WHERE sid = '$id' ";
if($conn->query($sql))
{

header("location:sector.php");
} else {
exit("failed");

}
}



// Register cell Start
if (isset($_POST["registercell"])) {

  
   $dname=$_POST['cname'] ;
   $sql = "INSERT INTO cell(cname) VALUES('$dname')";
   if($conn->query($sql))
   {
   
   header("location:cell.php");
   } else {
   exit("failed");
   
   }  
}

// Register parent Start
if (isset($_POST["registerparent"])) {

    $dname2=$_POST['mname'] ;
    $dname5=$_POST['age'] ;
    $dname6=$_POST['vname'];
    $sql = "INSERT INTO parent(mname,age, vid) 
    VALUES('$dname2','$dname5','$dname6')";
    if($conn->query($sql))
    {
    
    header("location:parent.php");
    } else {
    exit("failed");
    
    }  
 }
 // Register father Start
if (isset($_POST["registerfather"])) {

    $dname1=$_POST['fname'] ;
    $dname2=$_POST['age'] ;
    $dname3=$_POST['vname'];
    // echo($dname1);
    // echo'<br>';
    // echo($dname2);
    //   echo'<br>';
    // echo($dname3);
    $sql = "INSERT INTO father(vid,fname,age) 
    VALUES('$dname3','$dname1','$dname2')";
    
    if($conn->query($sql))
    {
    
    header("location:father.php");
    } else {
    exit("failed");
    
    }  
 }
 // Register Admin Start
if (isset($_POST["registeradmin"])) {

    $dname1=$_POST['username'] ;
    $dname2=$_POST['email'] ;
    $dname3=$_POST['password'] ;
    $sql = "INSERT INTO admin(email,username,password) 
    VALUES('$dname1','$dname2','$dname3')";
    if($conn->query($sql))
    {
    
    header("location:viewadmin.php");
    } else {
    exit("failed");
    
    }  
 }

   // Register cansellor Start
if (isset($_POST["registercansellor"])) {

    $dname1=$_POST['name'] ;
    $dname2=$_POST['username'] ;
    $dname3=$_POST['email'] ;
    $dname4=$_POST['password'] ;
    $dname5=$_POST['age'] ;
    $dname6=$_POST['dis'];
    $dname7=$_POST['sid'];
    $dname8=$_POST['cid'];
    $dname9=$_POST['vname'];
    $sql = "INSERT INTO consellor(name,username,email, password, age, vid, cid, sid, dis) 
    VALUES('$dname1','$dname2','$dname3','$dname4','$dname5','$dname9','$dname8','$dname7','$dname6')";
    if($conn->query($sql))
    {
    
    header("location:counselor.php");
    } else {
    exit("failed");
    
    }  
 }
  
// Register village Start

if (isset($_POST["registervillage"])){
    $dname = $_POST['vname'];
    $sql = "INSERT INTO village(vname) VALUES('$dname')";
    
    if($conn->query($sql))
    {
    
    header("location:village.php");
    } else {
    exit("failed");
    
    }
    }
    // Register village end
    // Register village Start

if (isset($_POST["registeroption"])){

    $dname1 = $_POST['ongera'];
    $dname2 = $_POST['kubyimba'];
    $dname3 = $_POST['urukingo'];
    $dname4 = $_POST['sosoma'];
    $dname5 = $_POST['muganga'];    
    $sql = "INSERT INTO options(kubyimba, yarakingiwe, ongera, sosoma, kwamuganga) VALUES('$dname1','$dname2','$dname3','$dname4','$dname5')";
    
    if($conn->query($sql))
    {
    
    header("location:options.php");
    } else {
    exit("failed");
    
    }
    }
    
    if (isset($_POST["registerchild"])){
       $dname1 = $_POST['name'];
        $dname2 = $_POST['fname'];
        $dname3 = $_POST['mname'];
        $dname4 = $_POST['color'];
        $dname5 = $_POST['caunsellor']; 
        $dname6 = $_POST['vid'];
        $dname7= $_POST['weight'];
        $dname8 = $_POST['date'];
        $dname9 = $_POST['week'];
        $dname10 = $_POST['kubyimba'];
        $dname11= $_POST['urukingo'];
        $dname12 = $_POST['ongera'];
        $dname13 = $_POST['sosoma'];
        $dname14 = $_POST['muganga'];    

        
        
        // echo($dname1);
        // echo '</br>';
        // echo($dname2);
        //  echo '</br>';
        // echo($dname3);
        //  echo '</br>';
        // echo($dname4);
        // echo '</br>';
        // echo($dname5);
        // echo '</br>';
        // echo($dname6);
        // echo '</br>';
        // echo($dname7);
        // echo '</br>';
        // echo($dname8);
        // echo '</br>';
        // echo($dname9);
        //  echo '</br>';
        // echo($dname10);
        //  echo '</br>';
        // echo($dname11);
        // echo '</br>';
        // echo($dname12);
        //  echo '</br>';
        // echo($dname13);
        // echo '</br>';
        // echo($dname14);
    
        
        
        $sql = "INSERT INTO child(name,fathername,mothername, cid, caid,vid, weight,dob, weeks, kubyimba, yarakingiwe, ongera, sosoma, kwamuganga) VALUES('$dname1','$dname2','$dname3','$dname4','$dname5','$dname6','$dname7','$dname8','$dname9','$dname10','$dname11','$dname12','$dname13','$dname13')";
        
        if($conn->query($sql))
        {
        
        header("location:child.php");
        } else {
        exit("failed");
        
        }
    }
    // Register village end

    //delete
if (isset($_GET["dc"])) {

    $id = $_GET['dc'];
   $sql = "DELETE  FROM cell WHERE cid = '$id' ";
    if($conn->query($sql)) 
    {

        header("location:cell.php");
    } else {
        exit("failed");
        
    }  
}



?>

?>