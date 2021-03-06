<?php
/**
 * File defining \Backend\Interfaces\SessionInterface
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
 * Interface for classes that do Session management.
 *
 * @category Backend
 * @package  Modules
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
interface SessionInterface extends \Iterator
{
    /**
     * Get a session value.
     *
     * @param string $name The name of the value to get.
     *
     * @return mixed The value.
     */
    public function get($name);

    /**
     * Set a session value.
     *
     * @param string $name  The name of the value to set.
     * @param mixed  $value The value to set.
     *
     * @return \Backend\Modules\Session
     */
    public function set($name, $value);

    /**
     * Remove a session value.
     *
     * @param string $name The name of the value to remove.
     *
     * @return \Backend\Modules\Session
     */
    public function remove($name);

    /**
     * Magic function to get a session value.
     *
     * @param string $name The name of the value to get.
     *
     * @return mixed The value.
     */
    public function __get($name);

    /**
     * Magic function to set a session value.
     *
     * @param string $name  The name of the value to set.
     * @param mixed  $value The value to set.
     *
     * @return \Backend\Modules\Session
     */
    public function __set($name, $value);

    /**
     * Close the session.
     *
     * This will destroy the session and it's associated data.
     *
     * @return \Backend\Modules\Session
     */
    public function close();
}
