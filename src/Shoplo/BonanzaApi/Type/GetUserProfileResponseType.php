<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class GetUserProfileResponseType extends BaseResponseType
{
	/**
	 * @var FeedbackHistoryType
	 *
	 * @Serializer\Type("string")
	 */
	public $feedbackHistory;

	/**
	 * @var UserType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\UserType")
	 */
	public $user;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $storeURL;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $storeName;
}