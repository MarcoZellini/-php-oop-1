<?php

class Movie
{
    public $poster;
    public $title;
    public $vote;
    public $genres;
    public $language;

    function __construct($_posterId, $_title, $_vote, $_genres, $_language)
    {
        $this->setPoster($_posterId);
        $this->setTitle($_title);
        $this->setVote($_vote);
        $this->setGenres($_genres);
        $this->setLanguage($_language);
    }

    public function getPoster()
    {
        return $this->poster;
    }

    public function setPoster($_posterId)
    {
        $this->poster = 'https://picsum.photos/200/200?random=' . $_posterId;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($_title)
    {
        $this->title = $_title;
    }

    public function getVote()
    {
        return $this->vote;
    }

    public function setVote($_vote)
    {
        $this->vote = $_vote;
    }

    public function getGenres()
    {
        return $this->genres;
    }

    public function setGenres($_genres)
    {
        $this->genres = $_genres;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($_language)
    {
        $this->language = $_language;
    }
}
