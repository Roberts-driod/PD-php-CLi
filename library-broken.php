<?php

$books = [
    1 => [
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
        'status' => 'available',
    ],
    2 => [
        'title' => '1984',
        'author' => 'George Orwell',
        'status' => 'available',
    ],
    3 => [
        'title' => 'Pride and Prejudice',
        'author' => 'Jane Austen',
        'status' => 'available',
    ]
];

function showAllBooks($books){
          foreach ($books as $id => $book) {
            displayBook($id, $book);
        }
}

function showBook($books){
            $id = readline("Enter book id: ");
            displayBook($id, $books[$id]);
}

function addBook(&$books) {
    $title = readline("Enter title: ");
    $author = readline("Enter author: ");
    $status = "available";
    $books[] = ['title' => $title, 'author' => $author, 'status' => $status];
}

function deleteBook(&$bookList) {
    $id = readline("Enter book ID you want to delete: ");
    unset($bookList[$id]);
}

function displayBook($id , $book) {
    echo "ID: {$id} // Title: ". $book['title'] . " // Author: " . $book['author']. " // Status: " . $book['status'] ."\n\n";
}

function setStatus(&$books){
        $id = readline("Enter book ID which you want to change status: ");
        $status = readline("Status (available/not available) --> ");
        if($status == "available" || $status == "not available"){
            $books[$id]["status"] = $status;
        }

}

echo "\n\nWelcome to the Library\n";

do {
    $continue = true;

    echo "\n\n";
    echo "1 - show all books\n";
    echo "2 - show a book\n";
    echo "3 - add a book\n";
    echo "4 - delete a book\n";
    echo "5 - quit\n";
    echo "6 - set status\n\n";
    $choice = readline();

    switch ($choice) {
        case 1:
            showAllBooks($books);
            break;
        case 2:
            showBook($books);
            break;
        case 3:
            addBook($books);
            break;
        case 4:
            deleteBook($books);
            break;
        case 5:
            echo "Goodbye!\n";
            $continue = false;
            break;
        case 6:
            setstatus($books);
            break;
        case 13:
            print_r($books); // hidden option to see full $books content
            break;
        default:
            echo "Invalid choice\n";
    };

} while ($continue == true);