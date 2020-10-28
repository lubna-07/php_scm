<?php
include 'header.php';
include "../user/connection.php";
$id=$_GET['id'];
$firstname ="";
$lastname ="";
$businessname ="";
$contact="";
$address="";
$city="";
$res=mysqli_query($link,"select * from party_info where id=$id");
while($row=mysqli_fetch_array($res))
{
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $businessname = $row['businessname'];
    $contact=$row['contact'];
    $address=$row['address'];
    $city=$row['city'];
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
          <h5>Edit Party</h5>
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
              <label class="control-label">Business Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="username" name="businessname"  value="<?php echo $businessname ?>" readonly/>
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Contact :</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="contact"  name="contact" value="<?php echo $contact ?>" required/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="address"  name="address" value="<?php echo $address ?>" required/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">City :</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="city"  name="city" value="<?php echo $city ?>" required/>
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
    $q="update party_info set firstname='$_POST[firstname]',lastname='$_POST[lastname]',contact='$_POST[contact]',
    address='$_POST[address]',city='$_POST[city]' where id=$id ";
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