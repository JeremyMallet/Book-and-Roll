<?php

$evenementObject = new Evenement($pdo);
$evenements = $evenementObject->readAll();

?>
<?php if (empty($evenements)) : ?>
    <p>Aucun événement à afficher.</p>
<?php else : ?>
    <div class="flex justify-center items-center h-screen mt-8">
        <div class="w-3/4">
            <h1 class="text-3xl font-bold mb-4">Événements</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">';
                <?php foreach ($evenements as $evenement) : ?>
                    <div class="bg-white shadow-md rounded p-4">
                        <img src="public/images/DALL·E-2024-03-14-14.39.jpg" alt="Image d\'accueil" class="w-full h-96 object-cover rounded-md shadow-md mb-8">
                        <h2 class="text-xl font-bold mb-2"><?= htmlspecialchars($evenement['titre']) ?></h2>
                        <p class="text-sm mb-2"><?= htmlspecialchars($evenement['description']) ?></p>
                        <p class="text-sm mb-2">Le <?= FrontUtils::FormatDate($evenement['date']) ?></p>
                        <a onclick="OpenModalEvenement();" class="voir-evenement bg-blue-500 text-white rounded p-2 hover:bg-blue-600">Voir l\'événement</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <script>
        function OpenModalEvenement(){
            Modal.open('<div class="text-xl font-semibold py-5 px-5 border-b">This is Toto header</div>', 
            '<div class="py-5 px-5">Toto body</div>', 
            '<div class="py-5 px-5 border-t">This is Toto footer</div>');
        }
    </script>
<?php endif; ?>