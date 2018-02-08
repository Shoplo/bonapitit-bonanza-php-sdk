<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class FixedPriceItemResponseType extends BaseResponseType
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $sellingState;

    /**
     * @var int
     *
     * @Serializer\Type("int")
     */
    public $categoryId;

    /**
     * @var int
     *
     * @Serializer\Type("int")
     */
    public $itemId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $message;
}