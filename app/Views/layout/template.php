<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Web</title>
</head>
<body>
    <!-- Memanggilm komponen navbar -->
    <?= $this ->include('layout/navbar'); ?>

    <?= $this ->renderSection('content'); ?>
    
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <footer>
                Ini adalah Footer
                </footer>
            </div>
        </div>
    </div>

</body>
</html>