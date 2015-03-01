<?php
namespace Levelab\Model\Core\Types;

interface Commentable {
    function addComment(Comment $comment);

    function removeComment(Comment $comment);
} 