<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class GetUserResponseType extends BaseResponseType
{

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $billingEmail;

	/**
	 * @var boolean
	 *
	 * @Serializer\Type("boolean")
	 */
	public $bonanzaGoodStanding;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $email;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $feedbackScore;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $postiveFeedbackPercentage;

	/**
	 * @var AddressType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\AddressType")
	 */
	public $registrationAddress;

	/**
	 * @var SellerInfoType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\SellerInfoType")
	 */
	public $sellerInfo;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $userID;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $userName;
}