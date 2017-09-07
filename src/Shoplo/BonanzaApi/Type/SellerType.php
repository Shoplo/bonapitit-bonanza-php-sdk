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
}