<?php

declare(strict_types=1);

    class Article
    {
        public string $title;
        public ?string $description;
        public ?string $publishDate;

        public function __construct(string $title, ?string $description, ?string $publishDate=('DD-MM-YYYY'))
        {
            $this->title = $title;
            $this->description = $description;
            $this->publishDate = $publishDate;
        }

        /*public function formatPublishDate()
        {
            // TODO: return the date in the required format
            return $this->publishDate;
            
        }*/
    }