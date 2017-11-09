<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class GetBoothResponseType extends BaseResponseType
{
	/**
	 * @var StoreType[]
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\StoreType")
	 */
	public $store;
}