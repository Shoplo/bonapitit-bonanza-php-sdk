<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\AddItemType;
use Shoplo\BonanzaApi\Type\DeliveryURLDetailsType;
use Shoplo\BonanzaApi\Type\ApplicationDeliveryPreferences;
use Shoplo\BonanzaApi\Type\RequesterCredentialsType;
use Shoplo\BonanzaApi\Type\UserDeliveryPreferenceArrayType;

class SetNotificationPreferencesRequest
{
	/**
	 * @var RequesterCredentialsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\RequesterCredentialsType")
	 */
	public $requesterCredentials;

	/**
	 * @var ApplicationDeliveryPreferences
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\ApplicationDeliveryPreferences")
	 */
	public $applicationDeliveryPreferences;

    /**
     * @var UserDeliveryPreferenceArrayType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\UserDeliveryPreferenceArrayType")
     */
    public $userDeliveryPreferenceArray;
}
