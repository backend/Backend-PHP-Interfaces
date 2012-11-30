<?php
/**
 * File defining Backend\Interfaces\CallbackFactoryInterface.
 *
 * PHP Version 5.3
 *
 * @category  Backend
 * @package   Interfaces
 * @author    J Jurgens du Toit <jrgns@backend-php.net>
 * @copyright 2011 - 2012 Jade IT (cc)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @link      http://backend-php.net
 */
namespace Backend\Interfaces;

/**
 * Class to create callbacks from strings and arrays.
 *
 * @category Backend
 * @package  Interfaces
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
interface CallbackFactoryInterface
{
    /**
     * Convert a string to a callback.
     *
     * @param string $string    The string representation of the callback.
     * @param array  $arguments The arguments for the callback.
     *
     * @return CallbackInterface
     */
    public function fromString($string, array $arguments = array());
}
