<?php  
include ('connection.php');


$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='makeup' LIMIT 4");

$stmt->execute();
$makeup_products = $stmt->get_result();//[]




?>