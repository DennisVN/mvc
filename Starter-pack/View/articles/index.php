<?php 
require 'View/includes/header.php';
require_once 'Controller/ArticleController.php';
?>


<section>
    <p><a href="index.php">To home</a></p>
    <ul>
        <?php foreach ($articles as $article) : ?>
            <li><a href="index.php?show="><?= $article->title ?></a><?= $article->publishDate ?></li>
        <?php endforeach; ?>
    </ul>
</section>

<?php require 'View/includes/footer.php'?>