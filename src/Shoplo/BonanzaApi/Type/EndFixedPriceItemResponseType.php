<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class EndFixedPriceItemResponseType extends BaseResponseType
{
	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $itemsRemoved;
}