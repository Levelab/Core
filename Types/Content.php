<?php
namespace Levelab\Model\Core\Types;

use Levelab\Model\Core\Values\Id\Id;

interface Content {
    /**
     * @return Id
     */
    public function getId();
} 