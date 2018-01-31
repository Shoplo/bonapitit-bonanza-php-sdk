<?php

namespace Shoplo\BonanzaApi\Type;

use JMS\Serializer\Annotation as Serializer;

class DeliveryURLDetailsType
{

    /**
     * @var string
     */
    public $deliveryURL;

    /**
     * @var string
     */
    public $status;
}