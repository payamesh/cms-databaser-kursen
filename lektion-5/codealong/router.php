<?php

require('views.php');
require('models.php');

switch ($page) {
    case 'home':
        HomeView::render();
    break;
    case 'book':
    $heads= "<tr><th>Title</th><th>Author</th><th>Genre</th><th>Page Count</th><th>Available?</th></tr>";

    $data = [
        new BookModel('The Alchemist', 'Paulo Coelho','Adventure',163,'<i class="icon icon-check"></i>'),
        new BookModel('The Da Vinci Code', 'Dan Brown','Mystery',689,'<i class="icon icon-check"></i>'),
        new BookModel('Twilight', 'Stephenie Meyer','Romance',498,'<i class="icon icon-cross"></i>')


    ];
        BookView::render($heads,$data);
        break;
    case 'cd':
            $heads = "<tr><th>Artist</th><th>Length</th><th>Song Name</th><th>Available?</th></tr>";
            $data = [
                new CDModel('Dance with the devil', 'Immortal Technique','6.30','<i class="icon icon-check"></i>'),
                new CDModel('74 bars', 'Z.E', '4.20','<i class="icon icon-cross"></i>'),
            ];
            CDView::render($heads,$data);
    break;
  default:
        PageNotFoundView::render();
}