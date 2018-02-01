<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class SetNotificationPreferencesResponseType extends BaseResponseType
{

	/**
	 * @var int
	 *
	 * @Serializer\Type("integer")
	 */
	public $notificationId;

	/**
	 * @var int
	 *
	 * @Serializer\Type("integer")
	 */
	public $deliveryURLsProcessed;

	/**
	 * @var int
	 *
	 * @Serializer\Type("integer")
	 */
	public $eventsProcessed;
}