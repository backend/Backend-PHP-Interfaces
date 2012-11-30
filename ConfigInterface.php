<?php
/**
 * File defining Backend\Interfaces\ConfigInterface.
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
 * Class to abstract config file operations.
 *
 * @category Backend
 * @package  Interfaces
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
interface ConfigInterface extends \Iterator
{
    /**
     * Magic function that returns the config values on request
     *
     * @param string $propertyName The name of the property being accessed
     *
     * @return mixed The value of the property
     */
    public function __get($propertyName);

    /**
     * Get the named config value.
     *
     * @param string $name The name of the config value. Omit to get the whole
     * config.
     * @param mixed $default The default value to return should the value not
     * be found.
     *
     * @return mixed The config setting
     */
    public function get($name = false, $default = null);

    /**
     * Magic function that sets the config value on request
     *
     * @param string $propertyName The name of the config value.
     * @param mixed  $value        The value of the setting.
     *
     * @return mixed The value of the property
     */
    public function __set($propertyName, $value);

    /**
     * Set a named config value.
     *
     * @param string $name  The name of the config value.
     * @param mixed  $value The value of the setting.
     *
     * @return \Backend\Interfaces\ConfigInterface The current config.
     */
    public function set($name, $value);

    /**
     * Set all of the config values.
     *
     * @param mixed $config The configuration, either as an array of values
     * or the name of the config file.
     *
     * @return \Backend\Interfaces\ConfigInterface The current config.
     */
    public function setAll($config);

    /**
     * Check if the config has the specified value.
     *
     * @param mixed $name The name of the config value to check.
     *
     * @return boolean If the config has the specified value.
     */
    public function has($name);
}
