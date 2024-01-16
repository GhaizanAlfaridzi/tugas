<!-- search.php -->
<?php
require_once 'connect.php';
require_once 'header.php';

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM users WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%' OR address LIKE '%$search%' OR contact LIKE '%$search%'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Search Results</h2>";
        // Tampilkan hasil pencarian
        if ($result->num_rows > 0) {
            echo "<h2>Search Results</h2>";
            echo "<table class='table table-bordered table-striped'>";
            echo "<tr>
                    <td>Firstname</td>
                    <td>Lastname</td>
                    <td>Address</td>
                    <td>Contact</td>
                  </tr>";
        
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['firstname'] .  "</td>";
                echo "<td>" . $row['lastname'] .  "</td>";
                echo "<td>" . $row['address'] .  "</td>";
                echo "<td>" . $row['contact'] .  "</td>";
                // ... (tambahkan kolom lainnya sesuai kebutuhan) ...
                echo "</tr>";
            }
        
            echo "</table>";
        } else {
            echo "<h2>No results found</h2>";
        }
        
    } else {
        echo "<h2>No results found</h2>";
    }
} else {
    header('location: index.php');
    exit;
}

require_once 'footer.php';
?>
