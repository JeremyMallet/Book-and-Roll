<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book and Roll</title>
</head>
<body>
    <?php
    require 'config.php';
    
    $sql = 'SELECT id, titre, date, description FROM evenements';
    $stmt = $pdo->query($sql);

    while ($row = $stmt->fetch()) {
        echo $row['titre'] . "<br>\n";
    }
    ?>
</body>
</html>
