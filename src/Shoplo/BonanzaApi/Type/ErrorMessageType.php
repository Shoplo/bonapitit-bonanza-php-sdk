<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class ErrorMessageType
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $message;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $type;
}