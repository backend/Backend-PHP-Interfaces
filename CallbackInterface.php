<?php
/**
 * File defining Backend\Interfaces\CallbackInterface.
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
 * Callable functions or object\class and method pairs to be executed by the
 * Application.
 *
 * @category Backend
 * @package  Interfaces
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
interface CallbackInterface
{
    /**
     * Set the class name for a static method call.
     *
     * @param string $class The name of the class of the callback.
     *
     * @return CallbackInterface The current callback.
     */
    public function setClass($class);

    /**
     * Get the class name of the static method call.
     *
     * @return string
     */
    public function getClass();

    /**
     * Set the object for a method call.
     *
     * @param object $object The object of the callback.
     *
     * @return CallbackInterface The current callback.
     */
    public function setObject($object);

    /**
     * Get the object of the method call.
     *
     * @return object
     */
    public function getObject();

    /**
     * Set the method name for a method call.
     *
     * @param string $method The method name of the callback.
     *
     * @return CallbackInterface The current callback.
     */
    public function setMethod($method);

    /**
     * Get the method name of the method call.
     *
     * @return string
     */
    public function getMethod();

    /**
     * Set the function as the callback.
     *
     * @param callable $function The function.
     *
     * @return CallbackInterface The current callback.
     */
    public function setFunction($function);

    /**
     * Get the callback function.
     *
     * @return callable
     */
    public function getFunction();

    /**
     * Set the arguments for the callback.
     *
     * @param array $arguments The arguments for the callback.
     *
     * @return CallbackInterface The current callback.
     */
    public function setArguments(array $arguments);

    /**
     * Get the arguments of the callback.
     *
     * @return array
     */
    public function getArguments();

    /**
     * Execute the callback.
     *
     * @param array $arguments The arguments with which to execute the callback.
     *
     * @return mixed The result of the callback.
     */
    public function execute(array $arguments = array());

    /**
     * Convert the callback to a string.
     *
     * @return string
     */
    public function __toString();
}
