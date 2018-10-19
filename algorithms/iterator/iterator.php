<?php
// Your code here!
interface Aggregate {
    function iterator();
}

interface MyIterator {
    function hasNext();
    function next();
}

class Book {
    public $name;
    function __construct($name){
        $this->name= $name;
    }
}

class BookShelf implements Aggregate {
    private $books=[];
    
    function getBookAt($index){
        return $this->books[$index];
    }
    
    function appendBook(Book $book){
        return $this->books[] = $book;
    }
    
    function getLength(){
        return count($this->books);
    }
    
    function iterator(){
        return new BookShelfIterator($this);
    }
}

class BookShelfIterator implements MyIterator{
    private $bookShelf;
    private $index=0;
    function __construct(BookShelf $bookShelf){
        $this->bookShelf = $bookShelf;
    }
    function hasNext(){
        return $this->index < $this->bookShelf->getLength();
    }
    function next(){
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;
        return $book;
    }
}


$bookShelf = new BookShelf();
$bookShelf->appendBook(new Book("bookA"));
$bookShelf->appendBook(new Book("bookB"));
$it = $bookShelf->iterator();

while($it->hasNext()){
    print_r($it->next()->name. "\n");
}


function test($low, $high){
    return $low < $high;
}


var_dump(test(1,3));


?>
