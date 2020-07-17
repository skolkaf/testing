<?php declare(strict_types = 1);

namespace SlevomatCsobGateway;

use Consistence\Enum\Enum;

class Currency extends Enum
{

	public const CZK = 'CZK';
	public const EUR = 'EUR';
	public const USD = 'USD';
	public const GBP = 'GBP';
	public const HRK = 'HRK';
	public const HUF = 'HUF';
	public const PLN = 'PLN';
	public const RON = 'RON';
	public const NOK = 'NOK';
	public const SEK = 'SEK';

}
