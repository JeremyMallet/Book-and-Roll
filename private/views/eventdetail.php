<?php

$eventId = isset($_GET['event_id']) ? (int) $_GET['event_id'] : 0;

if ($eventId > 0) {
    $stmt = $pdo->prepare("SELECT * FROM evenements WHERE id = ?");
    $stmt->execute([$eventId]);
    $evenement = $stmt->fetch();

    $stmt = $pdo->prepare("SELECT * FROM tables WHERE evenement = ?");
    $stmt->execute([$eventId]);
    $tables = $stmt->fetchAll();
} else {
    echo "Événement non trouvé.";
    exit;
}
?>

<div>
    <h1><?= htmlspecialchars($evenement['titre']) ?></h1>
    <p><?= htmlspecialchars($evenement['description']) ?></p>
    <p>Le <?= FrontUtils::FormatDate($evenement['date']) ?></p>

    <h2>Tables de l'événement :</h2>
    <?php foreach ($tables as $table): ?>
        <div>
            <h3><?= htmlspecialchars($table['nom']) ?></h3>
            <p><?= htmlspecialchars($table['description']) ?></p>
        </div>
    <?php endforeach; ?>
</div>
