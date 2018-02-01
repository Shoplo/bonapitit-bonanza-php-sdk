<?php

namespace Shoplo\BonanzaApi\Type;

use JMS\Serializer\Annotation as Serializer;

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