<?php
namespace wp;

class Post{
    // create the variables required for the class
    protected $user;
    protected $message;
    protected $image;
    protected $date;
    protected $comments = array();

    function __construct($user, $message, $image, $date) {
        // creates an instance of the class with values passed to it
        $this->user     = $user;
        $this->message  = $message;
        $this->image    = $image;
        $this->date     = $date;
    }

    function getUser() {
        return $this->user; // returns username
    }

    function getMessage() {
        return $this->message; // returns message
    }

    function getImage() {
        return $this->image; // returns image link
    }

    function getDate() {
        return $this->date; // returns date
    }

    function addComment($user, $comment) {
        // add a coment to the list of comments
        $this->comments[] = array('user' => $user, 'comment' => $comment);
    }

    function getComments() {
        return $this->comments; // returns comments
    }
}
?>