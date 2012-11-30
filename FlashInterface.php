<?php
/**
 * File defining \Backend\Interfaces\FlashInterface
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
 * Interface for classes that do Flash Session management.
 *
 * A flash session differs from normal sessions in that the values being stored
 * are deleted once fetched from the store.
 *
 * @category Backend
 * @package  Modules
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
interface FlashInterface extends SessionInterface
{
    /**
     * Get a flash session value.
     *
     * The value will be removed after retreiving it.
     *
     * @param string  $name The name of the value to get.
     * @param boolean $keep If the value should be removed or not.
     *
     * @return mixed The value.
     */
    public function get($name, $keep = false);
}
