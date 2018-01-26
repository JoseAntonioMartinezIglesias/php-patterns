<?php

class Item {

    private $user;
    private $title;

    function __construct($title, $user) {
        $this->user = $user;
        $this->title = $title;
    }

    function getUser() {
        return $this->user;
    }

    function getTitle() {
        return $this->title;
    }

    function getUserAndTitle() {
        return $this->getTitle() . ' by ' . $this->getUser();
    }

}
