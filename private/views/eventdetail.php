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

<div class="flex justify-center items-center my-8 min-h-screen">
    <div class="w-3/4">
        <img src="public/images/DALL·E-2024-03-14-14.39.jpg" alt="Image d\'accueil" class="w-full h-96 object-cover rounded-md shadow-md mb-8">
        <h1 class="text-3xl font-bold mb-4"><?= htmlspecialchars($evenement['titre']) ?></h1>
        <p class="text-sm mb-2"><?= htmlspecialchars($evenement['description']) ?></p>
        <p class="text-sm mb-2">Le <?= FrontUtils::FormatDate($evenement['date']) ?></p>

        <h2>Tables de l'événement :</h2>
        <?php foreach ($tables as $table) : ?>
            <div class="bg-white shadow-md rounded p-4">
                <h3 class="text-xl font-bold mb-2"><?= htmlspecialchars($table['nom']) ?></h3>
                <p class="text-sm mb-2"><?= htmlspecialchars($table['description']) ?></p>
                <p class="text-sm mb-2">Places disponibles : ' . $table['places_disponibles'] . '</p>
            </div>
        <?php endforeach; ?>
    </div>
</div>