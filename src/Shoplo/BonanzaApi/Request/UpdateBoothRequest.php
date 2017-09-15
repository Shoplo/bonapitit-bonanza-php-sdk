<?php


namespace Shoplo\BonanzaApi\Request;


use Shoplo\BonanzaApi\Type\RequesterCredentialsType;

class UpdateBoothRequest
{
	/**
	 * @var RequesterCredentialsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\RequesterCredentialsType")
	 */
	public $requesterCredentials;
}