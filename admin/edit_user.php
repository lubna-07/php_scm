<?php
include 'header.php';
include "../user/connection.php";
$id=$_GET['id'];
$firstname ="";
$lastname ="";
$username ="";
$role="";
$status="";
$res=mysqli_query($link,"select * from user_registration where id=$id");
while($row=mysqli_fetch_array($res))
{
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $username = $row['username'];
    $role=$row['role'];
    $status=$row['status'];
}
?>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit User</h5>
        </div>
        <div class="widget-content nopadding">
          <form name="form1" action="" method="post" class="form-horizontal" >
            <div class="control-group">
              <label class="control-label">First Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="First name" name="firstname" value="<?php echo $firstname ?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Last Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Last name" name="lastname" value="<?php echo $lastname ?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">User Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="username" name="username" value="<?php echo $username ?>" readonly/>
              </div>
            </div>
            

            <div class="control-group">
              <label class="control-label">Select status :</label>
              <div class="controls">
                  <select name="status" class="span11">
                      <option <?php if($status == 'active') {echo "selected";}?>>Active</option>
                      <option <?php if($status == 'inactive') {echo "selected";}?>>Inactive</option>
                  </select>
                  </div>
            </div>

           

            <div class="form-actions">
              <button type="submit" name="submit1" class="btn btn-success">Save</button>
            </div>

            <div class="alert alert-success" style="display:none" id="success"> 
                <strong>Updated Successfully! </strong>
            </div>
            
          </form>


        </div>
        
      </div>
        </div>

    </div>
</div>

<!--end-main-container-part-->
<?php
if(isset($_POST['submit1']))
{
    $q="update user_registration set firstname='$_POST[firstname]',lastname='$_POST[lastname]',status='$_POST[status]' where id=$id ";
    $a=mysqli_query($link,$q);
    ?>
   <script type="text/javascript">
        document.getElementById("success").style.display="block";
        setTimeout(function () {
            window.location.href = window.location.href;
        }, 3000);
        </script>
        <?php
}
?>
<?php
include 'footer.php'

?>