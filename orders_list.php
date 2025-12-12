
<?php
session_start();
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Orders List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>All Orders (From Database)</h1>

<?php
// نجيب كل البيانات من جدول orders
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>Meal ID</th>
            <th>Quantity</th>
            <th>Customer Name</th>
            <th>Customer Phone</th>
            <th>Notes</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['meal_id']."</td>";
        echo "<td>".$row['quantity']."</td>";
        echo "<td>".$row['customer_name']."</td>";
        echo "<td>".$row['customer_phone']."</td>";
        echo "<td>".$row['notes']."</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "<p>No orders in database yet.</p>";
}
?>

</body>
</html>