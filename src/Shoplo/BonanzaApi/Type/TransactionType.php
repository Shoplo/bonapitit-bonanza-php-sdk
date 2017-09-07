<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class TransactionType
{
	/**
	 * @var BuyerType
	 *
	 * @Serializer\Ty   pe("string")
	 */
	public $buyer;

	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $finalValueFee;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $providerName;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $providerID;
}