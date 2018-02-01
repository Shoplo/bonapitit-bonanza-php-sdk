<?php


namespace Shoplo\BonanzaApi\Credentials;


/**
 * Implementation of the CredentialsInterface that allows client code
 * to pass in their credentials in the constructor.
 */
class Credentials implements CredentialsInterface
{
	/**
	 * @var string $certId Certificate ID
	 */
	private $certId;

	/**
	 * @var string $devId Developer ID
	 */
	private $devId;

	/**
	 * @param string $certId Certificate ID
	 * @param string $devId Developer ID
	 */
	public function __construct($devId, $certId = null)
	{
		$this->devId = trim($devId);

		if ($certId)
		{
			$this->certId = trim($certId);
		}
	}

	/**
	 * Returns the certificate ID.
	 *
	 * @return string
	 */
	public function getCertId()
	{
		return $this->certId;
	}

	/**
	 * Returns the developer ID.
	 *
	 * @return string
	 */
	public function getDevId()
	{
		return $this->devId;
	}
}