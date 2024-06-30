<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>

<?php

echo lang('Web.title');
echo "<br>";
echo anchor($locale.'/list', 'Link');
?>
<?= $this->endSection(); ?>