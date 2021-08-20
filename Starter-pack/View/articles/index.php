<?php 
require 'View/includes/header.php';
//require_once 'Controller/ArticleController.php';
?>
<style> </style>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page" >Articles</li>
    </ol>
</nav>

<section class="text-center" style="font-size: 1.8rem" >
    <ul>
        <?php foreach ($articles as $article) : ?>

            <li><a href="index.php?page=article&show=<?=$article->title?>"><?= $article->title ?></a><?= $article->formatPublishDate(); ?></li>

        <?php endforeach; ?>
    </ul>
</section>



<?php require 'View/includes/footer.php'?>