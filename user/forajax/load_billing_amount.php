<?php   
 session_start();
 

 $qty_session=0;
 $maxi=0;
 $gtotal=0;
 if(isset($_SESSION['cart']))
 {
 $maxi=sizeof($_SESSION['cart']);
//  echo $maxi;
 for ($i=0;$i<$maxi;$i++)
 {
     
    
     $price_session="";
      if(isset ($_SESSION ['cart'] [$i]))
      {
          foreach ( $_SESSION['cart'][$i] as $key => $val)
          {
            
           
            // echo $key;
            // echo $val;
            if($val != "" && $key== "qty")
             {
                $qty_session=$val;
             }

             if($val != "" && $key=="price")
             {
                 $price_session=$val;
             } 
         
        }

        if($qty_session != "" && $price_session != "")
        {
            // echo $qty_session;
            // echo " ";
            // echo $price_session;
           $gtotal=$gtotal+($qty_session * $price_session);
        }
    }   
}
// echo $qty_session;
// echo $price_session;
echo $gtotal;
 }
?>


 

 
 
         
