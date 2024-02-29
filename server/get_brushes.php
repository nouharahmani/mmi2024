<?php  
include ('connection.php');


$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='brush' LIMIT 4");

$stmt->execute();
$brushes_products = $stmt->get_result();//[]




?>