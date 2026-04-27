<?php
$conn = new mysqli("db", "user", "pass", "db_objet");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM actions");

echo "<h1>Table actions</h1>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Date</th><th>Commande</th><th>Valeur</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row["id_action"]."</td>";
    echo "<td>".$row["id_date"]."</td>";
    echo "<td>".$row["commande"]."</td>";
    echo "<td>".$row["valeur"]."</td>";
    echo "</tr>";
}

echo "</table>";

$conn->close();
?>
