<?php

class Videogame {

    private $id;

    private $name;

    private $release_date;

    private $editor;

    private $developer;


    public function getId() {

        return $this->id;

    }

    public function setId($id) {

        $this->id = $id;
        return $this;

    }

    public function getName() {

        return $this->name;

    }

    public function setName($name) {

        $this->name = $name;
        return $this;

    }

    public function getRelease_date() {

        return $this->release_date;

    }

    public function setRelease_date($release_date) {

        $this->release_date = $release_date;
        return $this;

    }

    public function getEditor() {

        return $this->editor;

    }

    public function setEditor($editor) {

        $this->editor = $editor;
        return $this;

    }

    public function getDeveloper() {

        return $this->developer;

    }

    public function setDeveloper($developer) {

        $this->developer = $developer;
        return $this;

    }

}