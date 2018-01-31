<?php

namespace Shoplo\BonanzaApi\Type;

use JMS\Serializer\Annotation as Serializer;

class NotificationEnableType
{

    /**
     * @var string
     */
    public $eventEnable;

    /**
     * @var EventNotificationType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\EventNotificationType")
     */
    public $eventType;

    /**
     * @var bool
     */
    public $detailed;
}