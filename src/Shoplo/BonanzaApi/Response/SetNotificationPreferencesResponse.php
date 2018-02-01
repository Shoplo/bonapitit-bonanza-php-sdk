<?php

namespace Shoplo\BonanzaApi\Response;

use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\SetNotificationPreferencesResponseType;

class SetNotificationPreferencesResponse extends BaseResponse
{
	/**
	 * @var SetNotificationPreferencesResponseType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\SetNotificationPreferencesResponseType")
	 */
	public $setNotificationPreferencesResponse;
}