<?php
session_start();
include "../user/connection.php";
unset($_SESSION['cart']);
mysqli_query($link,"TRUNCATE TABLE billing_header") or die(mysqli_error($link));
mysqli_query($link,"TRUNCATE TABLE billing_details") or die(mysqli_error($link));
?>
<script type="text/javascript">    
      window.location.href="index.php";
</script>