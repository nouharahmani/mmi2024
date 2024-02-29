<?php  
include ('connection.php');


$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='skincare' LIMIT 4");

$stmt->execute();
$skincare_products = $stmt->get_result();//[]




?>