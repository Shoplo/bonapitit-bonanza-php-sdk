<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class GetOrdersReponseType extends BaseResponseType
{

	/**
	 * @var boolean
	 *
	 * @Serializer\Type("boolean")
	 */
	public $hasMoreOrders;

	/**
	 * @var PaginationOutputType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\PaginationOutputType")
	 */
	public $paginationOutput;

	/**
	 * @var OrderArrayType[]
	 *
	 * @Serializer\Type("array<Shoplo\BonanzaApi\Type\OrderArrayType>")
	 */
	public $orderArray;
}