<?php
include "../user/connection.php";
include "header.php" ;
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
          <h5>Request product</h5>
        </div>
        <div class="widget-content nopadding">
          <form name="form1" action="" method="post" class="form-horizontal" >
            <div class="control-group">
              <label class="control-label">Company Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Company Name" name="company_name" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Product Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Product Name" name="product_name" required/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Quantity :</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="Quantity" name="qty" required/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Name" name="name" required/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Phone Number :</label>
              <div class="controls">
                <input type="number" class="span11" placeholder="Phone Number" name="num" required/>
              </div>
            </div>

            <div class="alert alert-danger" style="display:none" id="error"> 
                <strong>Error in sending request.</strong>    
            </div>

            <div class="form-actions">
              <button type="submit" name="submit1" class="btn btn-success">Save</button>
            </div>

            <div class="alert alert-success" style="display:none" id="success"> 
                <strong>Request sent Successfully! </strong>
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
       
          $query="insert into request_for_stock 
          values(NULL,'$_POST[name]', '$_POST[company_name]','$_POST[product_name]',$_POST[qty],$_POST[num])";
          $res=mysqli_query($link,$query);
          ?>
          <script type="text/javascript">
          document.getElementById("success").style.display="block";
          document.getElementById("error").style.display="none";
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