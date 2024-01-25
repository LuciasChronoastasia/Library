<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addtocart'])) {
// Assuming you have a database connection established
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloths";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Define your table and field names
$tableName = "cart";
$productIdField = "Product_ID";
$productNameField = "Product_Name";
$priceField = "Price";
$quantityField = "Quantity";
$imageField = "Product_Image";

// Predefined values (set by the web developer)
$productId = $a; // Replace with the actual product ID
$productName = $b; // Replace with the actual product name
$price = $c; // Replace with the actual price
$quantity = $d; // Replace with the actual quantity
$imageUrl = $e;

// SQL query to insert data into the cart table
$sql = "INSERT INTO $tableName ($productIdField, $productNameField, $priceField, $quantityField, $imageField)
VALUES ($productId, '$productName', $price, $quantity, '$imageUrl')";

if ($conn->query($sql) === TRUE) {
// Redirect to Cart.html
header("Location: Cart.html");
exit();
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
else {
    echo "Error";
}
?>