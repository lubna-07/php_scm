<?php
include 'header.php';
include '../user/connection.php';

?>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            View Bills</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
        <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>View Bills</h5>
        </div>
        <table class="table table-bordered">
          <tr>
          <th>Bill No</th>
          <th>Full Name</th>
          <th>Bill Type</th>
          <th>Bill Date</th>
          <th>Bill Total</th>
          <th>View Details</th>
          </tr>
          <?php
           $res=mysqli_query($link,"select * from billing_header order by id desc");
           while($row = mysqli_fetch_array($res))
           {
               echo "<tr>";
               echo "<td>"; echo $row["bill_no"];echo "</td>"; 
               echo "<td>"; echo $row["full_name"];echo "</td>"; 
               echo "<td>"; echo $row["bill_type"];echo "</td>"; 
               echo "<td>"; echo $row["date"];echo "</td>"; 
               echo "<td>"; echo get_total($row["id"],$link);  echo "</td>"; 
               echo "<td>"; ?> <a href="view_bill_details.php?id=<?php echo $row["id"];?>"style="color:blue; ">View Details</a><?php echo "</td>";
               echo "</tr>";
            }


        ?>
          </table>

    </div>
</div>
<!--end-main-container-part-->



<!-- <script type="text/javascript"> -->
<?php
function get_total($bill_id,$link)
{
$res2=mysqli_query($link,"select * from billing_details where bill_id=$bill_id");
$total =0;
while($row2=mysqli_fetch_array($res2))
{
    $total=$total+($row2["price"]* $row2["qty"]);
}  
return $total;  
}
?>
<!-- </script> -->

<?php
include 'footer.php'

?>