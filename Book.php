<?php

require_once ('library-broken.php');



class Book {

    public $title;
    public $author;
    public $status;

    function __construct($title, $author, $status) {
 
        $this->title = $title;
        $this->author = $author;
        $this->status = $status;
    
    }


}

class Library {
    public $books = [];

    function __construct($books) {
        foreach($books as $book => $data) {
            $title = $data['title'];
            $author = $data['author'];
            $status = $data['status'];

            $this->books = new Book($title, $author, $status);

        }

    }

    public function display(){

    }

    public function setStatus(){

    }


}

$library = new Library($books);
print_r($library->books);

?>