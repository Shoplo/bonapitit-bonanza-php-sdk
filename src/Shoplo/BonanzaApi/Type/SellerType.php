<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class SellerType
{

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $feedbackRatingStar;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $feedbackScore;

	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $positiveFeedbackPercent;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $userId;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $sellerUserName;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $availableForChat;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $membershipLevel;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $userPicture;
}