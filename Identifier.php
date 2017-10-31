<?php
/**
 * This file is part of the Borobudur package.
 *
 * (c) 2017 Borobudur <http://borobudur.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Borobudur\Component\Identifier;

/**
 * @author  Iqbal Maulana <iq.bluejack@gmail.com>
 */
interface Identifier
{
    /**
     * Gets the scalar value.
     *
     * @return int|string
     */
    public function getScalarValue();

    /**
     * Check whether the given other identifier matches with current identifier.
     *
     * @param Identifier $other
     *
     * @return bool
     */
    public function equals(Identifier $other): bool;
}
