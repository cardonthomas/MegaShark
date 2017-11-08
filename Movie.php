<?php

class Movie
{
    private $name=null;
    private $desc=null;
    private $releaseDate=null;
    private $duration=120;
    
    public $showMovie;
    
    public function __construct($name="")
    {
        
    }
    //--------------------
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name="a Movie Name | ")
    {
        $this->name = $name;
    }
    
    public function getDesc()
    {
        return $this->desc;
    }
    
    public function setDesc($desc="a Movie Desc")
    {
        $this->desc = $desc;
    }
    public function getRD()
    {
        return $this->releaseDate;
    }
    
    public function setRD($releaseDate="")
    {
        $this->releaseDate = $releaseDate;
    }
    
    //------------------------
    function showMovie()
    {
        print ' Movie Name :'.$this->name." | ";
        print ' Movie Desc :'.$this->desc." | ";
        print ' Movie Release Date :'.$this->releaseDate." | ";
        print ' Movie Duration :'.$this->duration." | ";
    }
}

$movie = new Movie;
echo $movie->getName();
$movie->setName("Taxi 3 ");
$movie->setDesc("Encore un film avec samy naceri");
$movie->setRD("");
echo $movie->showMovie();