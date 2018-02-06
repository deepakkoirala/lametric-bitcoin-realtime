<?php
namespace Bitcoin;

class Exchange
{
    const ALLOWED_EXCHANGES = [
        'bitstamp',
        'bitfinex'
    ];

    /**
     * @var string
     */
    private $name;

    /**
     * Validation constructor.
     * @param array $parameters
     * @throws \Exception
     */
    public function __construct($parameters = [])
    {
        $exchange = strtolower(isset($parameters['marketplace']) ? $parameters['marketplace'] : '');
        $this->name  = in_array($exchange, self::ALLOWED_EXCHANGES) ? $exchange : self::ALLOWED_EXCHANGES[0];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}