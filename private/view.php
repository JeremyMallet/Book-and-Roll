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

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book and Roll</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="public/js/Confirm.js"></script>
    <script src="public/js/Modal.js"></script>
    <script src="public/js/Toast.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="mt-20">
    <?php include('./private/layouts/header.php'); ?>
    <?php include('./private/views/' . $view . '.php'); ?>
    <?php include('./private/views/table-modal.php'); ?>
    <?php include('./private/layouts/footer.php'); ?>
</body>

</html>