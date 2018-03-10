<?php
declare(strict_types=1);
/**
 * Genial Framework.
 *
 * @link    <https://github.com/genial-framework/logger> Github repository.
 * @license <https://github.com/genial-framework/logger/blob/master/LICENSE> GPL-3.0 License.
 */

namespace Genial\Logger;

/**
 * RegisterInterface.
 */
interface RegisterInterface
{
    /**
     * Register a new logger.
     *
     * @param object $config The logger config.
     *  
     * @return void.
     */
    function __construct(ConfigInterface $config);
    
}
