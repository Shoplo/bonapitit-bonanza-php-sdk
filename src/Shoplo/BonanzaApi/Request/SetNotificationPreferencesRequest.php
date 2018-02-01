<?php

namespace Shoplo\BonanzaApi\Request;

use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\ApplicationDeliveryPreferencesType;
use Shoplo\BonanzaApi\Type\UserDeliveryPreferenceArrayType;

class SetNotificationPreferencesRequest extends SecureRequest
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
