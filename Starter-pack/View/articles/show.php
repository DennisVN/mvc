<?php
require 'View/includes/header.php';
?>
<style>
    ul.breadcrumb {background-color: pink;}
</style>
<nav aria-label="breadcrumb justify-content-center">
    <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="index.php?page=articles">Articles</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $showArticle->title?></li>
    </ol>
</nav>



<article>
    <p><?= $showArticle->description?></p>
</article>