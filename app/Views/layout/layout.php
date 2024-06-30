<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= lang('Web.title-web')  ?></title>
    <?= $this->include('layout/assets') ?>
</head>
<body>
    <?= $this->include('layout/navbar') ?>
    <?= $this->renderSection('content'); ?>
</body>
</html>