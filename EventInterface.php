<?php
/**
 * File defining Backend\Interfaces\EventInterface.
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
 * Logging interface through which messages can be logged.
 *
 * @category Backend
 * @package  Interfaces
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
interface EventInterface extends \SplSubject
{
    /**
     * Returns if the event is still propagating.
     *
     * @return boolean
     */
    public function isPropagating();

    /**
     * Stop the event from propagating further.
     *
     * @return EventInterface
     */
    public function stopPropagation();
}