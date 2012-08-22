<?php
/**
 * File defining Backend\Interfaces\DependencyInjectionContainerInterface.
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
 * A dependency injection container that manages dependencies.
 *
 * @category Backend
 * @package  Interfaces
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
interface DependencyInjectionContainerInterface
{
    /**
     * Get the Implementation of the specified Component.
     *
     * @param string  $id               The Component identifier.
     * @param integer $invalidBehaviour The behavior when the service does not exist.
     *
     * @return object
     * @throws \Backend\Core\Exception
     */
    public function get($id, $invalidBehaviour = null);

    /**
     * Register an Implementation of the specified Component.
     *
     * @param string $id      The Component identifier.
     * @param object $service The component to register.
     *
     * @return object
     * @throws \Backend\Core\Exception If the component doesn't exist.
     */
    public function set($id, $service);

    /**
     * Check if the specified Component has been registered with the container.
     *
     * @param string $id The Component identifier.
     *
     * @return boolean
     */
    public function has($id);

    /**
     * Get the specified Parameter.
     *
     * @param string $name The Parameter name.
     *
     * @return mixed
     */
    public function getParameter($name);

    /**
     * Set the value of the specified Parameter.
     *
     * @param string $name  The Parameter name.
     * @param mixed  $value The value of the Parameter.
     *
     * @return void
     */
    public function setParameter($name, $value);

    /**
     * Check if the specified Parameter has been registered with the container.
     *
     * @param string $name The Parameter name.
     *
     * @return boolean
     */
    public function hasParameter($name);

    /**
     * Remove the Implementation of the specified Component.
     *
     * @param string $id The identifier of the Component to remove.
     *
     * @return void
     */
    public function removeDefinition($id);

}
