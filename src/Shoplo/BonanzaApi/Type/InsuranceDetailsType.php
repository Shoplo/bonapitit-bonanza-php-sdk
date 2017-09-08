<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class InsuranceDetailsType
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $insuranceOption;

	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $insuranceFee;
}