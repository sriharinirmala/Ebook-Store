<?php
$to=$_POST['email'];
$subject="Regarding book information";
$txt="Your order has been successfully placed.You can collect your book at ab1 portico tomorrow at 1 pm.";
mail($to,$subject,$txt);
echo 'Email sent successfully';

?>