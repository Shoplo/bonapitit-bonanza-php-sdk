<?php

namespace Shoplo\BonanzaApi\Response;

use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\ErrorMessageType;

abstract class BaseResponse
{
    /**
     * @var \DateTime
     *
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s.u\Z'>")
     */
    public $timestamp;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $version;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $ack;

    /**
     * @var ErrorMessageType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\ErrorMessageType")
     */
    public $errorMessage;
}