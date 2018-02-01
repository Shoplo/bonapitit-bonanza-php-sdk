<?php

namespace Shoplo\BonanzaApi\Type;

use JMS\Serializer\Annotation as Serializer;

class UserDeliveryPreferenceArrayType
{

	/**
	 * @var NotificationEnableType[]
	 *
	 * @Serializer\Type("array<Shoplo\BonanzaApi\Type\NotificationEnableType>")
	 */
	public $notificationEnable;
}