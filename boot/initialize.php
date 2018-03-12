<?php
declare(strict_types=1);
/**
 * Genial Framework.
 *
 * @link    <https://github.com/genial-framework/logger> Github repository.
 * @license <https://github.com/genial-framework/logger/blob/master/LICENSE> GPL-3.0 License.
 */
 
if (!function_exists('e'))
{
    function e($text): string
    {
        return htmlentities($text, ENT_QUOTES);
    }
}

if (!function_exists('depth'))
{
    function depth($text): int
    {
        if (!canVarLoop($input)) {
            return "0";
        }
        $arrayiter = new RecursiveArrayIterator($input);
        $iteriter = new RecursiveIteratorIterator($arrayiter);
        foreach ($iteriter as $value) {
            $d = $iteriter->getDepth() + 1;
            $result[] = "$d";
        }
        return max($result);
    }
}

function canVarLoop($input) {
    return (bool) (is_array($input) || $input instanceof Traversable) ? true : false;
}
