<?php
class Movie
{
    public $title;
    public $img;
    public $genre;
    public $timing;
    public $rating;
    public $year;
    public $cast;

    /**
     * @param String $title
     * @param String $genre
     * @param String $timing
     * @param Number $rating
     * @param Number $year
     * @param Cast $cast
     */
    public function __construct($_title, $_genre, $_timing, $_rating, $_year, Cast $_cast = null)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->timing = $_timing;
        $this->rating = $_rating;
        $this->year = $_year;
        $this->cast = $_cast;
    }

    public function setImg($_img)
    {
        $this->img = $_img;
    }

    public function getImg()
    {
        $placeholder = 'https://t4.ftcdn.net/jpg/05/07/58/41/360_F_507584110_KNIfe7d3hUAEpraq10J7MCPmtny8EH7A.jpg';
        if ($this->img) return $this->img;
        return $placeholder;
    }
}
