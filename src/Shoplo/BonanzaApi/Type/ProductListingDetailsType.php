<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class ProductListingDetailsType
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $mpn;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $isbn;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $upc;
}