<?php
/**
 * File defining Backend\Interfaces\EventSubscriberInterface.
 *
 * PHP Version 5.3
 *
 * Copied from the Symfony 2 Project.
 *
 * @category  Backend
 * @package   Interfaces
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 * @author  Bernhard Schussek <bschussek@gmail.com>
 * @copyright Fabien Potencier <fabien@symfony.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @link      https://raw.github.com/symfony/HttpKernel/master/Log/LoggerInterface.php
 */
namespace Backend\Interfaces;

/**
 * An EventSubscriber knows himself what events he is interested in.
 * If an EventSubscriber is added to an EventDispatcherInterface, the manager invokes
 * {@link getSubscribedEvents} and registers the subscriber as a listener for all
 * returned events.
 *
 * @category Backend
 * @package  Interfaces
 * @author   Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author   Jonathan Wage <jonwage@gmail.com>
 * @author   Roman Borschel <roman@code-factory.org>
 * @author   Bernhard Schussek <bschussek@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     https://raw.github.com/symfony/HttpKernel/master/Log/LoggerInterface.php
 */
interface EventSubscriberInterface
{
    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * The array keys are event names and the value can be:
     *
     *  * The method name to call (priority defaults to 0)
     *  * An array composed of the method name to call and the priority
     *  * An array of arrays composed of the method names to call and respective
     *    priorities, or 0 if unset
     *
     * For instance:
     *
     *  * array('eventName' => 'methodName')
     *  * array('eventName' => array('methodName', $priority))
     *  * array('eventName' => array(array('methodName1', $priority), array('methodName2'))
     *
     * @return array The event names to listen to
     */
    public static function getSubscribedEvents();
}