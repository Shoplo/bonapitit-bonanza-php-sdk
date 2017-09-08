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
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $returnsWithinOption;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $shippingCostPaidByOption;
}