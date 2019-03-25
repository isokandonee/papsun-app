<?php include "../controller/connect.php";
// $ln = $_SESSION['lnames'];
$fetch = mysqli_query($conn,"SELECT first_name,last_name,balance,account_number from user_tb left OUTER join user_account ON 
(user_tb.id = user_account.user_id) where last_name = 'Paul'");
$r = mysqli_fetch_array($fetch);
$f = $r['first_name'];
$l = $r['last_name'];
$fl = $f." ".$l; 
?>