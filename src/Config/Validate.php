<?php
declare(strict_types=1);
/**
 * Genial Framework.
 *
 * @link    <https://github.com/genial-framework/logger> Github repository.
 * @license <https://github.com/genial-framework/logger/blob/master/LICENSE> GPL-3.0 License.
 */

namespace Genial\Logger\Config;

use Genial\Logger\Exception\{
    RuntimeException,
    InvalidArgumentException,
    UnexpectedValueException,
    DomainException
};

use Traversable;

/**
 * Validate.
 */
class Validate extends Traversable implements ValidateInterface
{
    
    /**
     * Validate the configuration data type.
     *
     * @param mixed $config The logger configuration.
     *
     * @throws InvalidArgumentException If the configuration has
     *                                  an invalid data type.
     *
     * @return void.
     */
    private function validDataType($config): void
    {
        if (!\is_array($config) && !($config instanceof Traversable))
        {
            throw new InvalidArgumentException(\sprintf(
                'The configuration has an invalid data type. Passed "%s".',
                \gettype($config)
            ));
        }
    }
    
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
        if (\depth($config) != 2)
        {
            throw new DomainException(\sprintf(
                'The configuration has incorrect depth. Passed "%s".',
                \depth($config)
            ));
        }
    }
    
}
