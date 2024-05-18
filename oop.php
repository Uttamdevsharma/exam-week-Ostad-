<?php
class Book {
    // Private properties
    private $title;
    private $availableCopies;
    
    // Constructor to initialize properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    //Method getTitle()
    public function getTitle() {
        return $this->title;
    }
    
    // Method getAvailableCopies()
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to borrow a book
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    // Method  returnBook()
    public function returnBook() {
        $this->availableCopies++;
    }
}


class Member {
    // Private property 
    private $name;

    // Initialize properties
    public function __construct($name) {
        $this->name = $name;
    }

    // method getNamy()
    public function getName() {
        return $this->name;
    }

    // Method borrowBook()
    public function borrowBook($book) {
        $book->borrowBook();
    }

    // Method to return a book
    public function returnBook($book) {
        $book->returnBook();
    }
}

// Creating 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Creating 2 members 
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrow books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Printing available copies with their name
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() ;
?>
