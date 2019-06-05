<?php
namespace App\Model;


class Post{
    private $id;

    private $name;

    private $slug;

    private $content;

    private $created_at;


    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getSlug(){
        return $this->slug;
    }

    public function getContent(){
        return $this->content;
    }


    public function getCreatedAt(): \DateTime
    {
        return (new \DateTime($this->created_at));
    }
}