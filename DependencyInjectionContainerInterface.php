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
     * The object constructor.
     *
     * @param Backend\Interfaces\ConfigInterface $config The configuration file
     * to check for service and parameter definitions.
     */
    public function __construct(ConfigInterface $config);

    /**
     * Get the Implementation of the specified Component.
     *
     * @param string  $id               The Component identifier.
     * @param integer $invalidBehaviour The behavior when the service does not exist.
     *
     * @return object
     * @throws \Backend\Core\Exception
     */
    public function get($id, $invalidBehaviour);

    /**
     * Register an Implementation of the specified Component.
     *
     * @param string $id      The Component identifier.
     * @param object $service The component to register.
     *
     * @return object
     * @throws \Backend\Core\Exception
     */
    public function set($id, $service);

    /**
     * Remove the Implementation of the specified Component.
     *
     * @param string $id The identifier of the Component to remove.
     *
     * @return void
     */
    public function removeDefinition($id);

}
