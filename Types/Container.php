<?php
namespace Levelab\Model\Core\Types;

interface Container {
    /**
     * @param Content $content
     */
    function addContent(Content $content);

    /**
     * @param Content $content
     */
    function removeContent(Content $content);
} 