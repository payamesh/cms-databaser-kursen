<?php

class BaseView{
    
    public static function render($heads,$body){
        
        $out = '';
        $out .= '<table class="table">';
        $out .= $heads;
        $out .= '<tbody>';
        $out .= $body;
        $out .= '</tbody>';
        $out .= '</table>';
        return $out;
    }
}

class BookView extends BaseView{
    public static function render($heads,$books){
        $body = '';
        foreach ($books as $book) {
            $body .= '<tr>';
            $body .= '<td>' .$book->title . '</td>';
            $body .= '<td>' .$book->author . '</td>';
            $body .= '<td>' .$book->genre . '</td>';
            $body .= '<td>' .$book->pageCount . '</td>';
            $body .= '<td>' .$book->isBorrowed . '</td>';
            $body .= '</tr>';

           
        }
        echo parent::render($heads,$body);
    }
}

class HomeView{
    public static function render(){
        echo '<p>Welcome to the library. Please look around for something to borrow!</p>';
    }
}

class CDview extends BaseView{
    public static function render($heads,$cds){
        $body = '';
        foreach ($cds as $cd) {
            $body .= '<tr>';
            $body .= '<td>' .$cd->artist . '</td>';
            $body .= '<td>' .$cd->length . '</td>';
            $body .= '<td>' .$cd->songName . '</td>';
            $body .= '<td>' .$cd->isBorrowed . '</td>';
            $body .= '</tr>';

           
        }
        echo parent::render($heads,$body);
    }
}

class PageNotFoundView{

    public static function render(){
    echo "<p>Det finns inget att visa på denna sida</p>";
    }
}








?>