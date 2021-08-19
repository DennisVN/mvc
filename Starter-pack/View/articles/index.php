<?php require 'View/includes/header.php'?>


<section>
    <p><a href="index.php">To home</a></p>

    <ul>
        <?php foreach ($articles as $article) : ?>
            <li><a href="show.php"><?= $article->title ?> <?= $article->formatPublishDate('DD-MM-YYYY') ?></a></li>
        <?php endforeach; ?>
    </ul>
</section>

<?php require 'View/includes/footer.php'?>