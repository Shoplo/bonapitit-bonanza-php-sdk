<?php

namespace Shoplo\BonanzaApi\Response;

use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\GetNotificationPreferencesResponseType;

class GetNotificationPreferencesResponse extends BaseResponse
{
	/**
	 * @var GetNotificationPreferencesResponseType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\GetNotificationPreferencesResponseType")
	 */
	public $getNotificationPreferencesResponse;
}