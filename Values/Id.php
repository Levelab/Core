<?php
namespace Levelab\Model\Core\Values\Id;

abstract class Id {
    protected $id;

    public function __construct($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function compareAgainst(Id $id) {
        return $this->getId() === $id->getId();
    }
} 