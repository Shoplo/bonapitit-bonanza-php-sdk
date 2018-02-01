<?php


namespace Shoplo\BonanzaApi\Request;

use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\AddItemType;
use Shoplo\BonanzaApi\Type\DeliveryURLDetailsType;
use Shoplo\BonanzaApi\Type\ApplicationDeliveryPreferencesType;
use Shoplo\BonanzaApi\Type\RequesterCredentialsType;
use Shoplo\BonanzaApi\Type\UserDeliveryPreferenceArrayType;

class GetNotificationPreferencesRequest
{
	/**
	 * @var RequesterCredentialsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\RequesterCredentialsType")
	 */
	public $requesterCredentials;
}
