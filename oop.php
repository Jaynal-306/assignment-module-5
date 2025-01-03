<?php
class Book {
    private $title;
    private $availableCopies;
    public function __construct($title, $availableCopies){
        $this->title = $title;
        $this->availableCopies = $availableCopies;

    }
    //--------------Get for title method------------
    public function getTitle(){
        return $this->title;
    }
    //--------------Get for available copies method---------
    public function getAvailableCopies(){
        return $this->availableCopies;
    }

    //--------------Borrow book method------------
    public function borrowBook(){
        if($this->availableCopies > 0){
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    //--------------Return book method------------
    public function returnBook(){
        $this->availableCopies++;
    }
}

class Member{

    //--------------Private properties------------
    private $name;
    //--------------Initialize properties to constructor------------
    public function __construct($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function borrowBook($book){
        if($book->borrowBook()){
            return $this->name . $book->getTitle();
        }else{
            exit;
        }
    }


    //------------Method to return a book--------------
    public function returnBook($book) {
        $book->returnBook();
        echo $this->name . " returned '" . $book->getTitle() . "'.\n";
    }
}

//-------- Create 2 books--------
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

//------Create 2 members--------
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

//-------Members borrow books---------
$member1->borrowBook($book1);
$member2->borrowBook($book2);

//-----Print available copies with their names------------
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";

