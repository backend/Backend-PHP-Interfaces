<?php
/**
 * File defining Backend\Interfaces\EventDispatcherInterface.
 *
 * PHP Version 5.3
 *
 * Copied from the Symfony 2 Project.
 *
 * @category  Backend
 * @package   Interfaces
 * @author    Bernhard Schussek <bschussek@gmail.com>
 * @copyright Fabien Potencier <fabien@symfony.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @link      https://raw.github.com/symfony/HttpKernel/master/Log/LoggerInterface.php
 */
namespace Backend\Interfaces;

/**
 * The EventDispatcherInterface is the central point of Symfony's event listener system.
 * Listeners are registered on the manager and events are dispatched through the
 * manager.
 *
 * @category Backend
 * @package  Interfaces
 * @author   Bernhard Schussek <bschussek@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     https://raw.github.com/symfony/HttpKernel/master/Log/LoggerInterface.php
 */
interface EventDispatcherInterface
{
    /**
     * Dispatches an event to all registered listeners.
     *
     * @param string $eventName The name of the event to dispatch. The name of
     *                          the event is the name of the method that is
     *                          invoked on listeners.
     * @param Event $event The event to pass to the event handlers/listeners.
     *                          If not supplied, an empty Event instance is created.
     *
     * @return Event
     */
    public function dispatch($eventName, $event = null);

    /**
     * Adds an event listener that listens on the specified events.
     *
     * @param string   $eventName The event to listen on
     * @param callable $listener  The listener
     * @param integer  $priority  The higher this value, the earlier an event
     *                            listener will be triggered in the chain (defaults to 0)
     */
    public function addListener($eventName, $listener, $priority = 0);

    /**
     * Adds an event subscriber.
     *
     * The subscriber is asked for all the events he is
     * interested in and added as a listener for these events.
     *
     * @param EventSubscriberInterface $subscriber The subscriber.
     */
    public function addSubscriber(EventSubscriberInterface $subscriber);

    /**
     * Removes an event listener from the specified events.
     *
     * @param string|array $eventName The event(s) to remove a listener from
     * @param callable     $listener  The listener to remove
     */
    public function removeListener($eventName, $listener);

    /**
     * Removes an event subscriber.
     *
     * @param EventSubscriberInterface $subscriber The subscriber
     */
    public function removeSubscriber(EventSubscriberInterface $subscriber);

    /**
     * Gets the listeners of a specific event or all listeners.
     *
     * @param string $eventName The name of the event
     *
     * @return array The event listeners for the specified event, or all event listeners by event name
     */
    public function getListeners($eventName = null);

    /**
     * Checks whether an event has any registered listeners.
     *
     * @param string $eventName The name of the event
     *
     * @return Boolean true if the specified event has any listeners, false otherwise
     */
    public function hasListeners($eventName = null);
}