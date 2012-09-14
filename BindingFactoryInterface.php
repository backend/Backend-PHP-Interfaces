<?php
/**
 * File defining Backend\Interfaces\BindingFactoryInterface.
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
 * Class to create bindings.
 *
 * @category Backend
 * @package  Interfaces
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
interface BindingFactoryInterface
{
    /**
     * The class constructor.
     *
     * @param Backend\Interfaces\ConfigInterface $bindings    The bindings config.
     * @param Backend\Interfaces\ConfigInterface $connections The connections config.
     */
    public function __construct(ConfigInterface $bindings, ConfigInterface $connections);

    /**
     * Convert a string to a callback.
     *
     * @param string $modelName The name of the model to get the Binding for.
     *
     * @return CallbackInterface
     */
    public function build($modelName);

    /**
     * Get the Bindings Configuration.
     *
     * @return Backend\Interfaces\ConfigInterface
     */
    public function getBindings();

    /**
     * Set the Bindings Configuration.
     *
     * @param Backend\Interfaces\ConfigInterface
     *
     * @return Backend\Base\Utilities\BindingFactory
     */
    public function setBindings(ConfigInterface $bindings);

    /**
     * Get the specified Binding.
     *
     * @return array|null The Binding or null if it doesn't exist.
     */
    public function getBinding($name);

    /**
     * Set the values of the specified Binding.
     *
     * @param array $binding The Binding described as an array.
     *
     * @return Backend\Base\Utilities\BindingFactory
     */
    public function setBinding($name, array $binding);

    /**
     * Get the Connections Configuration.
     *
     * @return Backend\Interfaces\ConfigInterface
     */
    public function getConnections();

    /**
     * Set the Connections Configuration.
     *
     * @param Backend\Interfaces\ConfigInterface
     *
     * @return Backend\Base\Utilities\BindingFactory
     */
    public function setConnections(ConfigInterface $connections);

    /**
     * Get the specified Connection.
     *
     * @return array|null The Connection or null if it doesn't exist.
     */
    public function getConnection($name);

    /**
     * Set the values of the specified Connection.
     *
     * @param array $connection The Connection described as an array.
     *
     * @return Backend\Base\Utilities\BindingFactory
     */
    public function setConnection($name, array $connection);
}
