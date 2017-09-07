<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\FetchTokenResponseType;

class FetchTokenResponse extends BaseResponse
{
	/**
	 * @var FetchTokenResponseType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\FetchTokenResponseType")
	 */
	public $fetchTokenResponse;
}