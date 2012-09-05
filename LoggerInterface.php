<?php
/**
 * File defining Backend\Interfaces\LoggerInterface.
 *
 * PHP Version 5.3
 *
 * Copied from the Symfony 2 Project.
 *
 * @category  Backend
 * @package   Interfaces
 * @author    Fabien Potencier <fabien@symfony.com>
 * @copyright Fabien Potencier <fabien@symfony.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @link      https://raw.github.com/symfony/HttpKernel/master/Log/LoggerInterface.php
 */
namespace Backend\Interfaces;

/**
 * Logging interface through which messages can be logged.
 *
 * @category Backend
 * @package  Interfaces
 * @author   Fabien Potencier <fabien@symfony.com>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     https://raw.github.com/symfony/HttpKernel/master/Log/LoggerInterface.php
 */
interface LoggerInterface
{
    /**
     * Adds a log record at the EMERGENCY level.
     *
     * @param string $message The log message
     * @param array  $context The log context
     *
     * @return boolean Whether the record has been processed
     */
    public function emerg($message, array $context = array());

    /**
     * Adds a log record at the ALERT level.
     *
     * @param string $message The log message
     * @param array  $context The log context
     *
     * @return boolean Whether the record has been processed
     */
    public function alert($message, array $context = array());

    /**
     * Adds a log record at the CRITICAL level.
     *
     * @param string $message The log message
     * @param array  $context The log context
     *
     * @return boolean Whether the record has been processed
     */
    public function crit($message, array $context = array());

    /**
     * Adds a log record at the ERROR level.
     *
     * @param string $message The log message
     * @param array  $context The log context
     *
     * @return boolean Whether the record has been processed
     */
    public function err($message, array $context = array());

    /**
     * Adds a log record at the WARNING level.
     *
     * @param string $message The log message
     * @param array  $context The log context
     *
     * @return boolean Whether the record has been processed
     */
    public function warn($message, array $context = array());

    /**
     * Adds a log record at the NOTICE level.
     *
     * @param string $message The log message
     * @param array  $context The log context
     *
     * @return boolean Whether the record has been processed
     */
    public function notice($message, array $context = array());

    /**
     * Adds a log record at the INFO level.
     *
     * @param string $message The log message
     * @param array  $context The log context
     *
     * @return boolean Whether the record has been processed
     */
    public function info($message, array $context = array());

    /**
     * Adds a log record at the DEBUG level.
     *
     * @param string $message The log message
     * @param array  $context The log context
     *
     * @return boolean Whether the record has been processed
     */
    public function debug($message, array $context = array());
}