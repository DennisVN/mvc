<?php
require 'View/includes/header.php';
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="index.php?page=articles">Articles</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $showArticle->title?></li>
    </ol>
</nav>



<article>
    <p><?= $showArticle->description?></p>
</article>

