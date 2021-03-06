<?php

declare(strict_types = 1);

include "config.php";

class ArticleController
{   
    private $databaseManager;

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager; 
    }
    public function index()
    {
        // Load all required data
        $articles = $this->getArticles();
        //var_dump($articles);
        //var_dump('shibby');
        // Load the view
        require 'View/articles/index.php';

    }

    // Note: this function can also be used in a repository - the choice is yours
    public function getArticles()
    {
        // TODO: prepare the database connection
        // Note: you might want to use a re-usable databaseManager class - the choice is yours
        // TODO: fetch all articles as $rawArticles (as a simple array)

        $sql= "SELECT * FROM mvc.articles";
        $result = $this->databaseManager->connection->query($sql)->fetchAll();
        $rawArticles = $result;
        //var_dump($rawArticles);
        
        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            // We are converting an article from a "dumb" array to a much more flexible class
            $articles[] = new Article($rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date']);
            //var_dump($rawArticle['publish_date']);
        }
        return $articles ;
    }

    public function show($articleTitle)
    {

        $sql= "SELECT * FROM mvc.articles WHERE title = '".$articleTitle."'";
        $result = $this->databaseManager->connection->query($sql)->fetchAll();
        $showArticle = new Article($result[0]['title'], $result[0]['description'], $result[0]['publish_date']);
        // TODO: this can be used for a detail page


        require_once 'View/articles/show.php';
        return $result;
    }
}