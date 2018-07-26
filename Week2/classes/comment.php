<?php
namespace wp;

class Comment {
    protected $user;
    protected $message;

    function __construct($user, $message) {
        // creates an instance of the class with values passed to it
        $this->user     = $user;
        $this->message  = $message;
    }

    function getUser() {
        return $this->user; // returns username
    }

    function getCommentMessage() {
        return $this->message; // returns message
    }
}