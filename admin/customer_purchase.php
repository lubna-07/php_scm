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
          <h5>Requested product</h5>
        </div>
        
        
      </div>
      <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Company Name</th>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <th>Customer Name</th>
                  <th>Contact Number</th>
                  <th>Status</th>
                  <th>Check delivery status</th>
                </tr>
              </thead>
              <tbody>

              <?php
                    $res=mysqli_query($link,"select * from customer_request");
                    while($row=mysqli_fetch_array($res))
                    {
                        ?>
                        <tr>
                        <td><?php echo $row['product_company']; ?></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td><?php echo $row['qty']; ?></td>
                        <td><?php echo $row['full_name']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><a href="https://rainfallprediction-api.herokuapp.com/">View</a></td>
                       </tr>
                        <?php
                       
                    }
                   
              ?>
                
                
              </tbody>
            </table>
          </div>
        </div>

    </div>
</div>



<!--end-main-container-part-->

  

<?php
include 'footer.php'

?>