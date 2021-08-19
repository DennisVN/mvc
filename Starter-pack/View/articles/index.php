<?php require 'config.php'?>
<?php require 'View/includes/header.php'?>
<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>



<?php 
$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect;
?>

<section>
    <p><a href="index.php">To home</a></p>

    <ul>
        <?php foreach ($articles as $article) : ?>
            <li><?= $article->title ?> (<?= $article->formatPublishDate() ?></li>
        <?php endforeach; ?>
    </ul>
</section>

<?php require 'View/includes/footer.php'?>