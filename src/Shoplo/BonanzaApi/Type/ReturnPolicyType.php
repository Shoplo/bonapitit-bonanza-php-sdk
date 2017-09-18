<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class ReturnPolicyType
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $description;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $returnsAcceptedOption;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $returnsAccepted;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $returnsWithinOption;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $returnsWithin;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $shippingCostPaidByOption;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $shippingCostPaidBy;
}