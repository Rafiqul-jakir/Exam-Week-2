<?php
class Book
{
    // Add properties as Private
    private $title;
    private $availableCopies;

    // Constructor to initialize properties
    public function __construct($title, $availableCopies)
    {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Add getTitle method
    public function getTitle()
    {
        return $this->title;
    }

    // Add getAvailableCopies method
    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }

    //Add borrowBook method
    public function borrowBook()
    {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    // Add returnBook method
    public function returnBook()
    {
        $this->availableCopies++;
    }
}

class Member
{
    //Add properties as Private
    private $name;

    // Constructor to initialize properties
    public function __construct($name)
    {
        $this->name = $name;
    }

    //Add getName method
    public function getName()
    {
        return $this->name;
    }

    //Add borrowBook method
    public function borrowBook($book)
    {
        $book->borrowBook();
    }

    // Add returnBook method
    public function returnBook($book)
    {
        $book->returnBook();
    }
}

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrow books
$member1->borrowBook($book1);
$member2->borrowBook($book2);


// Print available copies
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";
