<?php

namespace Shoplo\BonanzaApi\Type;

use JMS\Serializer\Annotation as Serializer;

class ApplicationDeliveryPreferencesType
{

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $applicationEnable;

	/**
	 * @var DeliveryURLDetailsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\DeliveryURLDetailsType")
	 */
	public $deliveryURLDetails;
}