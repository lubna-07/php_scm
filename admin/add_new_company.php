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
          <h5>Add Company</h5>
        </div>
        <div class="widget-content nopadding">
          <form name="form1" action="" method="post" class="form-horizontal" >
            <div class="control-group">
              <label class="control-label">Company Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Company Name" name="company_name" required/>
              </div>
            </div>
           

            <div class="alert alert-danger" style="display:none" id="error"> 
                <strong>This username already exists. Try another.</strong>    
            </div>

            <div class="form-actions">
              <button type="submit" name="submit1" class="btn btn-success">Save</button>
            </div>

            <div class="alert alert-success" style="display:none" id="success"> 
                <strong>Inserted Successfully! </strong>
            </div>
            
          </form>


        </div>
        
      </div>
      <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Company Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>

              <?php
                    $res=mysqli_query($link,"select * from company_name");
                    while($row=mysqli_fetch_array($res))
                    {
                        ?>
                        <tr>
                        <td><?php echo $row['company_name']; ?></td>
                        <td><a href="edit_company.php?id=<?php echo $row['id'];?>">Edit</a></td>
                        <td><a href="delete_company.php?id=<?php echo $row['id'];?>">Delete</a></td>
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
if(isset($_POST['submit1']))
{
    $query="select * from company_name where company_name='$_POST[company_name]'";
    $res=mysqli_query($link,$query);
    $count =0;
    $count=mysqli_num_rows($res);

    if($count > 0)
            {
              
                ?>
                <script type="text/javascript">
                document.getElementById("success").style.display="none";
                document.getElementById("error").style.display="block";
                
                </script>
                <?php
            }

     else
        {
        $query="insert into company_name 
        values(NULL, '$_POST[company_name]')";
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

}
?>  

<?php
include 'footer.php'

?>