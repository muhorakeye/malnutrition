<?php

function searchbycolor($id) {
  global $conn;
    $stmt = $conn->prepare("SELECT child.id, child.childname,
     child.fathername, 
    child.mothername, child.weight, child.weight, child.dob, 
    child.weeks, child.kubyimba, child.yarakingiwe, child.ongera, 
    child.sosoma, child.kwamuganga, child.childcolor, consellor.name,
    village.vname FROM child join consellor 
    on consellor.caid=child.caid join village on village.vid=consellor.vid 
    WHERE child.childcolor = ? 
    ");
 $stmt->bindParam(1, $id);
 $stmt->execute(); 
 $data = $stmt->fetchAll(PDO::FETCH_OBJ);  
 return $data;
}
 



function district() {
  global $conn;
    $stmt = $conn->prepare("SELECT * FROM district ");
    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);  
    return $data;
}

function sector() {
  global $conn;
    $stmt = $conn->prepare("SELECT * FROM sector ");
    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);  
    return $data;

}

function allConsellor() {
  global $conn;
    $stmt = $conn->prepare("SELECT 
    consellor.caid, consellor.name, consellor.username, 
    consellor.email, village.vname, cell.cname,
     sector.sname, district.dname 
     from consellor 
     join village 
     ON village.vid=consellor.vid 
     join cell on cell.cid=consellor.cid 
     JOIN sector ON sector.sid=consellor.sid 
     JOIN district ON district.dis=consellor.dis 
     ORDER BY consellor.caid
    ");
    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);  
    return $data;

}

function allConsellorbyid($name) {
  global $conn;
    $stmt = $conn->prepare("SELECT consellor.caid, consellor.name, consellor.username, 
    consellor.email, village.vname, cell.cname, sector.sname, 
    district.dname from consellor join village
    ON village.vid=consellor.vid join cell
     on cell.cid=consellor.cid
     JOIN sector ON sector.sid=consellor.sid
      JOIN district ON district.dis=consellor.dis 
  WHERE consellor.username= ? ; 
    ");
   $stmt->bindParam(1, $name);
   $stmt->execute();
       
   if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
     return $data;
 }
}


 function findPageName($name){
 
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM page WHERE  page_name = ?  ");

  $stmt->bindParam(1, $name);
  $stmt->execute();
      
  if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
    return $data;
  }
}





















function cell() {
  global $conn;
    $stmt = $conn->prepare("SELECT * FROM cell ");
    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);  
    return $data;

}
function village() {
  global $conn;
    $stmt = $conn->prepare("SELECT * FROM village ");
    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);  
    return $data;

}
function parent() {
  global $conn;
    $stmt = $conn->prepare("SELECT * FROM parent ");
    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);  
    return $data;

}
function consellor() {
  global $conn;
    $stmt = $conn->prepare("SELECT * FROM consellor ");
    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);  
    return $data;

}

function options() {
  global $conn;
    $stmt = $conn->prepare("SELECT * FROM options ");
    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);  
    return $data;
}
function admin() {
  global $conn;
    $stmt = $conn->prepare("SELECT * FROM admin ");
    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);  
    return $data;
}
function color() {
  global $conn;
    $stmt = $conn->prepare("SELECT * FROM color ");
    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);  
    return $data;
}
function counsellor() {
  global $conn;
    $stmt = $conn->prepare("SELECT * FROM consellor ");
    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);  
    return $data;
}
function father() {
  global $conn;
    $stmt = $conn->prepare("SELECT * FROM father ");
    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);  
    return $data;
}
function allchild($user) {
  global $conn;
    $stmt = $conn->prepare("SELECT child.id, child.childname,
     child.fathername, child.mothername, child.weight, 
     child.weight, child.dob, child.weeks, child.kubyimba, 
     child.yarakingiwe, child.yarakingiwe, child.ongera, 
     child.sosoma, child.kwamuganga, child.childcolor, 
     consellor.name, village.vname FROM child join consellor
      on consellor.caid=child.caid join village 
    on village.vid=consellor.vid WHERE consellor.username= ? ORDER BY child.id DESC
    ");
  $stmt->bindParam(1, $user);
  $stmt->execute(); 
  $data = $stmt->fetchAll(PDO::FETCH_OBJ);  
  return $data;
}

function allchildadmin() {
  global $conn;
    $stmt = $conn->prepare("SELECT child.id, child.childname,
     child.fathername, child.mothername, child.weight, 
     child.weight, child.dob, child.weeks, child.kubyimba, 
     child.yarakingiwe, child.yarakingiwe, child.ongera, 
     child.sosoma, child.kwamuganga, child.childcolor, 
     consellor.name, village.vname FROM child join consellor
      on consellor.caid=child.caid join village 
    on village.vid=consellor.vid ORDER BY child.id DESC
    ");
 $stmt->execute();       
 $data = $stmt->fetchAll(PDO::FETCH_OBJ);
  return $data;

}


















function allchildby($colors,$another) {
  global $conn;
    $stmt = $conn->prepare("SELECT child.id, child.childname, 
    child.fathername, child.mothername, child.weight, child.weight, 
    child.dob, child.weeks, child.kubyimba, child.yarakingiwe, child.yarakingiwe, 
    child.ongera, child.sosoma, child.kwamuganga, child.childcolor, consellor.name, 
    village.vname FROM child join consellor on consellor.caid=child.caid
     join village on village.vid=consellor.vid 
    where consellor.username= ? AND child.childcolor= ?
    ");
       $stmt->bindParam(1, $colors);
       $stmt->bindParam(2, $another);
       $stmt->execute(); 
       $data = $stmt->fetchAll(PDO::FETCH_OBJ);  
       return $data;
}















function allchildByid($id) {
  global $conn;
    $stmt = $conn->prepare("SELECT child.id, child.childname, 
    child.fathername, child.mothername, 
    child.weight, child.weight, child.dob, child.weeks, child.kubyimba, 
    child.yarakingiwe, child.ongera, child.sosoma, child.childcolor,
    child.kwamuganga, consellor.name, village.vname 
    FROM child
     join consellor on consellor.caid=child.caid
      join village on village.vid=consellor.vid WHERE  child.id = ? LIMIT 1
    ");
 $stmt->bindParam(1, $id);
 $stmt->execute(); 
 if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
  return $data;
}
}
function findistrictByid($districtId){
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM district WHERE  dis = ?  LIMIT 1");

  $stmt->bindParam(1, $districtId);
  $stmt->execute();
      
  if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
    return $data;
  }
}
function findfatherByid($districtId){
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM father WHERE  fatherid = ?  LIMIT 1");

  $stmt->bindParam(1, $districtId);
  $stmt->execute();
      
  if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
    return $data;
  }
}

function findadminByid($districtId){
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM admin WHERE  adminid = ?  LIMIT 1");

  $stmt->bindParam(1, $districtId);
  $stmt->execute();
      
  if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
    return $data;
  }}

function findparentByid($districtId){
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM parent WHERE  pid = ?  LIMIT 1");

  $stmt->bindParam(1, $districtId);
  $stmt->execute();
      
  if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
    return $data;
  }
}


function findsectorByid($districtId){
 
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM sector WHERE  sid = ?  LIMIT 1");

  $stmt->bindParam(1, $districtId);
  $stmt->execute();
      
  if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
    return $data;
  }
}

function findoptionsByid($districtId){
 
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM options WHERE  opid = ?  LIMIT 1");

  $stmt->bindParam(1, $districtId);
  $stmt->execute();
      
  if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
    return $data;
  }
}
function findcellByid($districtId){
 
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM cell WHERE  cid = ?  LIMIT 1");

  $stmt->bindParam(1, $districtId);
  $stmt->execute();
      
  if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
    return $data;
  }
}


 

















 

function viewLesson($courseId){

    global $conn;
    $stmt = $conn->prepare("SELECT * FROM lesson WHERE CourseId =? ORDER BY LessonId DESC");

    $stmt->bindParam(1, $courseId);
    $stmt->execute();       

    $data = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $data;

  }

  function myCourse($user, $status){

    global $conn;
    $stmt = $conn->prepare("SELECT * FROM student S, tbl_payment P  WHERE (S.SId = P.SId) AND (S.userId =?) AND (P.status =?) ORDER BY S.SId DESC");

    $stmt->bindParam(1, $user);
    $stmt->bindParam(2, $status);

    $stmt->execute();       

    $data = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $data;

  }


 


  function findEnrolCourseById($enrolId){
 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM student WHERE  SId = ?  LIMIT 1");

    $stmt->bindParam(1, $enrolId);
    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }


  function findPaidCourseById($transactionId, $status){
 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM tbl_payment WHERE  (TransactionId = ?) AND (status = ?)  LIMIT 1");

    $stmt->bindParam(1, $transactionId);
    $stmt->bindParam(2, $status);

    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }

  function level(){

    global $conn;
    $stmt = $conn->prepare("SELECT * FROM level ");

    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

     return $data;

  }
  
  function course(){

    global $conn;
    $stmt = $conn->prepare("SELECT * FROM courses LEFT join category ON
     category.CaId=courses.CaId LEFT JOIN level on level.id =courses.levelId order by courses.CourseId ASC");
    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);
   return $data;
  }

  function role(){

    global $conn;
    $stmt = $conn->prepare("SELECT * FROM role ");

    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

     return $data;

  }

  
  function page(){

    global $conn;
    $stmt = $conn->prepare("SELECT * FROM page");

    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

     return $data;

  }

  function payment(){

    global $conn;
    $stmt = $conn->prepare("SELECT student.SId, tbl_payment.tbl_paid_courseDate, tbl_payment.TransactionId, tbl_payment.PaymentMethod FROM tbl_payment INNER JOIN student on student.SId=tbl_payment.SId ORDER BY tbl_payment.SId

    ");

    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

     return $data;

  }
  function user(){

    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users ");

    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

     return $data;

  }
  function student(){

    global $conn;
    $stmt = $conn->prepare("SELECT student.SId,courses.CourseName, users.name, student.date,student.status FROM student INNER join users ON users.id=student.userId INNER JOIN courses on courses.CourseId=student.CourseId ORDER BY student.SId ");

    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

     return $data;

  }
  function lesson(){

    global $conn;
    $stmt = $conn->prepare("SELECT lesson.LessonId,lesson.LessonName,courses.CourseName, users.name, lesson.LessonDesc, lesson.video FROM lesson join courses ON courses.CourseId=lesson.CourseId JOIN users on users.id =lesson.UserId ORDER BY lesson.LessonId");

    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

     return $data;

     
  }
  function findCategoryByid($id){
 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM category WHERE  CaId = ?  LIMIT 1");

    $stmt->bindParam(1, $id);
    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }


  function findStudentByid($id){
 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM student WHERE  SId = ?  LIMIT 1");

    $stmt->bindParam(1, $id);
    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }
  function findLevelByid($id){
 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM level WHERE  id = ?  LIMIT 1");

    $stmt->bindParam(1, $id);
    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }
  function findRoleByid($id){
 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM role WHERE  RoleId = ?  LIMIT 1");

    $stmt->bindParam(1, $id);
    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }

  function findUserByid($id){
 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users WHERE  id = ?  LIMIT 1");

    $stmt->bindParam(1, $id);
    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }

  function findCourseByImage($id){
 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM courses WHERE  CourseId = ?  LIMIT 1");

    $stmt->bindParam(1, $id);
    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }


  function findLessonByid($id){
 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM lesson WHERE  LessonId = ?  LIMIT 1");

    $stmt->bindParam(1, $id);
    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }

  
  function findPageByid($id){
 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM page WHERE  page_id = ?  LIMIT 1");

    $stmt->bindParam(1, $id);
    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }

  function findconsellorByid($canselid){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM consellor WHERE  caid = ?  LIMIT 1");
  
    $stmt->bindParam(1, $canselid);
    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }




?>