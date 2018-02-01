<?php

namespace Shoplo\BonanzaApi\Type;

use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\ApplicationDeliveryPreferencesType;
use Shoplo\BonanzaApi\Type\UserDeliveryPreferenceArrayType;

class GetNotificationPreferencesResponseType extends BaseResponseType
{

    /**
     * @var ApplicationDeliveryPreferencesType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\ApplicationDeliveryPreferencesType")
     */
    public $applicationDeliveryPreferences;

    /**
     * @var UserDeliveryPreferenceArrayType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\UserDeliveryPreferenceArrayType")
     */
    public $userDeliveryPreferenceArray;
}