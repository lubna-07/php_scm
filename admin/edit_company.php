<?php
include 'header.php';
include "../user/connection.php";
$id=$_GET['id'];
$companyname ="";

$res=mysqli_query($link,"select * from company_name where id=$id");
while($row=mysqli_fetch_array($res))
{
    $companyname = $row['company_name'];
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
          <h5>Edit Company</h5>
        </div>
        <div class="widget-content nopadding">
          <form name="form1" action="" method="post" class="form-horizontal" >
            <div class="control-group">
              <label class="control-label">Company Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Company Name" name="company_name" value="<?php echo $companyname ?>"/>
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
    $q="update company_name set company_name='$_POST[company_name]' where id=$id ";
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