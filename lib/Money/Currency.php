<?php
/**
 * This file is part of the Money library
 *
 * Copyright (c) 2011-2013 Mathias Verraes
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Money;

class Currency
{
    /** @var string */
    private $name;

    /** @var array */
    private static $currencies;

	/** @var array */
	private static $formats;

    /**
     * @param string $name
     * @throws UnknownCurrencyException
     */
    public function __construct($name)
    {
        if(!isset(static::$currencies)) {
           static::$currencies = require __DIR__.'/currencies.php';
        }

	    if(!isset(static::$formats)) {
		    static::$formats = require __DIR__.'/formats.php';
	    }

        if (!array_key_exists($name, static::$currencies)) {
            throw new UnknownCurrencyException($name);
        }
        $this->name = $name;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param \Money\Currency $other
     * @return bool
     */
    public function equals(Currency $other)
    {
        return $this->name === $other->name;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }

	/**
	 * @author Gustav Wellner Bou <wellner@solutica.de>
	 * @return string
	 */
	public function getFormat()
	{
		return static::$formats[$this->name];
	}
}
