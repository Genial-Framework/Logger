<?php
declare(strict_types=1);
/**
 * Genial Framework.
 *
 * @link    <https://github.com/genial-framework/logger> Github repository.
 * @license <https://github.com/genial-framework/logger/blob/master/LICENSE> GPL-3.0 License.
 */

namespace Genial\Logger\Config;

use Genial\Logger\Exception\RuntimeException;
use Genial\Logger\Exception\UnexpectedValueException;
use Genial\Logger\Exception\DomainException;
use Traversable;

/**
 * Validate.
 */
class Validate extends Traversable implements ValidateInterface
{
    
    /**
     * Validate the configuraton depth.
     *
     * @param mixed $config The logger configuration.
     *
     * @throws DomainException If the configuration has
     *                         incorrect depth.
     *      
     * @return void.
     */
    private function validDepth($config): void
    {
        if (\depth($config) != 2) {
            throw new DomainException(\sprintf(
                'The configuration has incorrect depth. Passed "%s".',
                \depth($config)
            ));
        }
    }
    
}
