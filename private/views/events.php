<?php
require 'config.php';

$sql = 'SELECT * FROM evenements';
$stmt = $pdo->query($sql);
$evenements = $stmt->fetchAll();

if (empty($evenements)) {
    echo "<p>Aucun événement à afficher.</p>";
} else {
    echo '<div class="flex justify-center items-center h-screen mt-8">
            <div class="w-3/4">
                <h1 class="text-3xl font-bold mb-4">Événements</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">';
                
    foreach ($evenements as $evenement) {
        echo '<div class="bg-white shadow-md rounded p-4">
                <h2 class="text-xl font-bold mb-2">' . htmlspecialchars($evenement['titre']) . '</h2>
                <p class="text-sm mb-2">' . htmlspecialchars($evenement['description']) . '</p>
                <p class="text-sm mb-2">Le ' . FrontUtils::FormatDate($evenement['date']) . '</p>
                <a href="?view=evenement&id=' . htmlspecialchars($evenement['id']) . '" class="bg-blue-500 text-white rounded p-2 hover:bg-blue-600">Voir l\'événement</a>
            </div>';
    }

    echo '</div></div></div>';
}
?>
