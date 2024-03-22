<script>
    $(document).ready(function() {
        $('.voir-evenement').click(function() {
            var evenementId = $(this).data('evenement-id');

            $('#modalEvenement').show();

            $.ajax({
                url: 'private/views/gettables.php',
                type: 'GET',
                data: {
                    evenementId: evenementId
                },
                success: function(response) {
                    var tables = JSON.parse(response);
                    var htmlContent = "";
                    tables.forEach(function(table) {
                        htmlContent += "<p>" + table.nom + "</p>";
                    });
                    $('#tablesEvenement').html(htmlContent);
                }

            });
        });

        $('.close').click(function() {
            $('#modalEvenement').hide();
        });
    });
</script>
<?php
$sql = 'SELECT * FROM evenements';
$stmt = $pdo->query($sql);
$evenements = $stmt->fetchAll();
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
                        <a href="#" class="voir-evenement bg-blue-500 text-white rounded p-2 hover:bg-blue-600" data-evenement-id="<?= htmlspecialchars($evenement['id']) ?>">Voir l\'événement</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>