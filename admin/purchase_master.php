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
          <h5>Add new purchase</h5>
        </div>
        <div class="widget-content nopadding">
          <form name="form1" action="" method="post" class="form-horizontal" >
            <div class="control-group">
              <label class="control-label">Select Company :</label>
              <div class="controls">
                <select name="company_name" id="company_name">
                    <option value="">Select</option>
                    <?php
                      $res = mysqli_query($link,"select * from company_name");
                      while($row = mysqli_fetch_array($res))
                      {
                          echo "<option>";
                          echo $row['company_name'];
                          echo "</option>";
                      }
                    ?>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Select Product :</label>
              <div class="controls">
              <select name="company_name" id="company_name">
                    <option value="">Select</option>
                </select>
            </div>
            </div>

            <div class="control-group">
              <label class="control-label">Quantity :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Quantity" name="quantity" required/>
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Price :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Price" name="price" required/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Select Party Name :</label>
              <div class="controls">
              <select name="party_name" id="party_name">
                    <option value="">Select</option>
                </select> </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Select Purchase type:</label>
              <div class="controls">
              <select name="purchase_type" id="purchase_type">
                    <option value="">Select</option>
                    <option value="">Cash</option>
                    <option value="">Debit</option>
                </select> </div>
            </div>
            


            
            <div class="form-actions">
              <button type="submit" name="submit1" class="btn btn-success">Save</button>
            </div>

            <div class="alert alert-danger" style="display:none" id="error"> 
                <strong>Purchase Inserted Successfully.</strong>    
            </div>


          </form>


        </div>
        
      </div>
     

    </div>
</div>



<!--end-main-container-part-->

<?php
if(isset($_POST['submit1']))
{
    
        $query="insert into products 
        values(NULL, '$_POST[company_name]','$_POST[product_name]','$_POST[quantity]')";
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