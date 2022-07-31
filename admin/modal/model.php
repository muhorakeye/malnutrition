 
   <!-- The Modal -->
   <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">User</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method='POST'  action ="register.php" id="levelRegisterForm" enctype="multipart/form-data">
   <div class="form-group">
    <label for="exampleFormControlSelect1">User Type</label>
    <select class="form-control form-control-lg" id="courolerse" name="roleId" >
    <?php 
     $roles = role();
 foreach ($roles as $role) {   ?>
  <option value="<?php echo ($role->RoleId); ?>">
       <?php echo ($role->RoleName); ?>
       </option>
      <?php  }  ?>
       </select>
  </div>

  <div class="form-group">
    <label for="name">Name</label>
    <small id="courseMsg1"></small>
    <input type="text" class="form-control" id="name" name="uname" placeholder=" Your Name">
     </div>
    <div class="form-group">
    <label for="name"> Email</label>
    <small id="courseMsg1"></small>
    <input type="email" class="form-control" id="name" name="uemail" placeholder="Your Email">
     </div>
     <div class="form-group">
    <label for="name">Phone</label>
    <small id="courseMsg1"></small>
    <input type="number" class="form-control" id="name" name="uphone" placeholder="Phone Number">
     </div>
     <div class="form-group">
    <label for="name">Password</label>
    <small id="courseMsg1"></small>
    <input type="Password" class="form-control" id="name" name="upassword" placeholder="Your Password">
     </div>
  <input type="submit" class="btn btn-lg btn-primary" name="RegisterUser" id="btn" value="Register">
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  

<!-- The Modal -->
<div class="modal fade" id="role">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Role</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
   <form method='POST'  action ="register.php" id="levelRegisterForm" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name"> Role name</label>
    <small id="courseMsg1"></small>
    <input type="text" class="form-control" id="name" name="Loname" placeholder="Role Name">  
  </div>
  <br>
  <small id="courseMsg"></small>
   <input type="submit" class="btn form-control btn-danger" name="RegisterRole" id="btn" value="Register">
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>













  
  
  
  <!-- ---------------------------------level Start -------------------------------------------- -->

  <!-- The Modal -->
  <div class="modal fade" id="level">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Level</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method='POST'  action ="register.php" id="levelRegisterForm" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name"> Level name</label>
    <small id="courseMsg1"></small>
    <input type="text" class="form-control" id="name" name="Lename" placeholder="Lesson Name">
    
  </div>
  <br>
  <small id="courseMsg"></small>
  
 
  <input type="submit" class="  form-control btn btn-lg btn-danger" name="Registerlevel" id="btn" value="Register">
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
   <!-- ---------------------------------level End -------------------------------------------- -->


<!-- Courses modal start -->
 
 
 <!-- The Modal -->
 <div class="modal fade" id="courses">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Courses</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method='POST'  action ="register.php" id="courseRegisterForm" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">name</label>
    <small id="courseMsg1"></small>
    <input type="text" class="form-control" id="name" name="name" placeholder="course name">
     </div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Select Category</label>
    <select class="form-control form-control-lg" id="category" name="CatId" >
    <?php 
     $categories= category();
 foreach ($categories as $cat) {   ?>
  <option value="<?php echo ($cat->CaId); ?>">
       <?php echo ($cat->CaName); ?>
       </option>
<?php  }  ?>
       </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Course Level</label>
    <select class="form-control" id="exampleFormControlSelect1" name="LevelId">
    <?php 
     $levels = level();
 foreach ($levels as $level) {   ?>
  <option value="<?php echo ($level->id); ?>">
       <?php echo ($level->name); ?>
       </option>
<?php  }  ?>
       </select>
  </div>


  <div class="form-group">
    <label for="exampleFormControlSelect1">Pay Type</label>
    <select class="form-control" id="exampleFormControlSelect1" name="payTypeId">
    <?php 
     $payModel = payType();
 foreach ($payModel as $pay) {   ?>
  <option value="<?php echo ($pay->tbl_pay_typeId); ?>">
       <?php echo ($pay->tbl_pay_typeName); ?>
       </option>
<?php  }  ?>
       </select>
  </div>


  <div class="form-group">
    <label for="des">description</label>
    <small id="courseMsg2"></small>
    <input type="text" class="form-control" id="desc"  name ="desc" placeholder="description">
  </div>
  
  <div class="form-group">
    <label for="name">course duration</label>
    <small id="courseMsg3"></small>
    <input type="number" class="form-control" id="duration" name="duration" placeholder="duration">
    
  </div>
  <div class="form-group">
    <label for="name">course  price</label>
    <small id="courseMsg4"></small>
    <input type="number" class="form-control" id="price2" name="price" placeholder="selling price">
    
  </div>
  <div class="form-group">
    <label for="name">image</label>
    <small id="courseMsg5"></small>
    <input type="file" class="form-control" id="img" name="course_image">
    
  </div>
  <br>
  <small id="courseMsg"></small>
  
 
  <input type="submit" class="form-control btn btn-danger" name="Register" id="btn" value="Register">
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

<!-- Courses modal end -->


<!-- The Page -->
<div class="modal fade" id="page">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Role</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
   <form method='POST'  action ="register.php" id="pageRegisterForm" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name"> Page name</label>
    <small id="courseMsg1"></small>
    <input type="text" class="form-control" id="name" name="pname" placeholder="Role Name">  
  </div>
  <div class="form-group">
    <label for="name"> Page Title</label>
    <small id="courseMsg1"></small>
    <input type="text" class="form-control" id="title" name="title" placeholder="Role Name">  
  </div>
  <div class="form-group">
    <label for="name"> Page Description</label>
    <small id="courseMsg1"></small>
    <textarea class="form-control" rows="5" id="description" name="description"></textarea>
    
  </div>
  <br>
  <small id="courseMsg"></small>
   <input type="submit" class="btn form-control btn-danger" name="RegisterPage" id="btn" value="Register">
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


















 <!-- category modal -->


 <!-- The Modal -->
 <div class="modal fade" id="Category">
   <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
     
       <!-- Modal Header -->
       <div class="modal-header">
         <h4 class="modal-title">Category</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       
       <!-- Modal body -->
       <div class="modal-body">
       <form method='POST'  action ="save.php" id="levelRegisterForm" enctype="multipart/form-data">
 <div class="form-group">
   <label for="name">Name</label>
   <small id="courseMsg1"></small>
   <input type="text" class="form-control" id="name" name="cname" placeholder="Category Name">   
 </div>
 <br>
 <small id="courseMsg"></small>
<div class="form-group">
<input type="submit" class="form-control btn-danger" name="registerCategory" id="btn" value="Register">
</div>
</form>
       </div>
       
       <!-- Modal footer -->
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
       </div>
   </div>
   
 <!-- category modal end-->




 
     
     
     
     
     


     
     
     


  
  
    
    
  
  
  










     
     
     
     
     
     
     
     
     
   



    
  







 