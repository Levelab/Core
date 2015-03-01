<?php
namespace Levelab\Model\Core\Types;

use Levelab\Model\Core\Values\Id\Id;

interface Comment {
    /**
     * @return Id
     */
    function getId();
} 