<?php include 'auth.php'; include 'db_connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="d-flex justify-content-between mb-4">
        <h1>📘 My Blog</h1>
        <div>
            <a href="create.php" class="btn btn-primary">+ New Post</a>
            <a href="logout.php" class="btn btn-outline-secondary">Logout</a>
        </div>
    </div>
    <?php
    $result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
    while ($row = $result->fetch_assoc()) {
        echo "<div class='card mb-3'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>{$row['title']}</h5>";
        echo "<p class='card-text'>{$row['content']}</p>";
        echo "<small class='text-muted'>Posted on {$row['created_at']}</small><br>";
        echo "<a href='edit.php?id={$row['id']}' class='btn btn-sm btn-warning mt-2'>Edit</a> ";
        echo "<a href='delete.php?id={$row['id']}' class='btn btn-sm btn-danger mt-2'>Delete</a>";
        echo "</div></div>";
    }
    ?>
</div>
</body>
</html>
