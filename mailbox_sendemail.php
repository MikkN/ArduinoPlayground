<?php

$text = "Ny post i postlådan!";

$admin_email = "mikkelsenniklas@gmail.com";
$email = "mikkelsenniklas@gmail";
$subject = "Post i brevlådan!"

 // Send email
 mail($admin_email, "$subject", $text, "From" . $email);
 
?>