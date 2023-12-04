<?php
include 'db.php'; // Your database connection file

$sql = "SELECT COUNT(*) as postCount FROM image"; // Adjust 'posts' to your actual table name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // fetch the row
    $row = $result->fetch_assoc();
    $postCount = $row['postCount'];
} else {
    $postCount = 0;
}

$conn->close();
?>

<script>
    const postCount = <?php echo $postCount; ?>;
    document.getElementById('postCountDisplay').textContent = `Total Posts: ${postCount}`;
</script>