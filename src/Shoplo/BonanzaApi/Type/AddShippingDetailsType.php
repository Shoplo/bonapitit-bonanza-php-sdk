<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class AddShippingDetailsType
{
	/**
	 * @var CalculatedShippingRateType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\CalculatedShippingRateType")
	 */
	public $calculatedShippingRate;

	/**
	 * @var InsuranceDetailsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\InsuranceDetailsType")
	 */
	public $insuranceDetails;

	/**
	 * @var InternationalShippingServiceOptionType[]
	 *
	 * @Serializer\Type("array<Shoplo\BonanzaApi\Type\InternationalShippingServiceOptionType>")
	 */
	public $internationalShippingServiceOption;

	/**
	 * @var ShippingServiceOptionsType[]
	 *
	 * @Serializer\Type("array<Shoplo\BonanzaApi\Type\ShippingServiceOptionsType>")
	 */
	public $shippingServiceOptions;
}