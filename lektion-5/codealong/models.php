<?php

abstract class BaseLibraryModel{
    public $title;
    public $genre;
    public $isBorrowed;

}
class BookModel extends BaseLibraryModel{
    public $author;
    public $pageCount;

    public function __construct($title,$author,$genre,$pageCount,$isBorrowed){
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->pageCount = $pageCount;
        $this->isBorrowed = $isBorrowed;

    }
}

class CDModel extends BaseLibraryModel{
    public $artist;
    public $length;
    public function __construct($songName,$artist,$length,$isBorrowed){
        $this->artist = $artist;
        $this->length = $length;
        $this->songName = $songName;
        $this->isBorrowed = $isBorrowed;

    }
}
