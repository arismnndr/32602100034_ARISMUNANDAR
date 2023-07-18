<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Ini adalah halaman service</h1>
                <p>This is the service page.</p>
            </div>
        </div>
    </div>

</body>
</html>

<?= $this->endSection(); ?>