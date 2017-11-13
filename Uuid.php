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

use Ramsey\Uuid\Uuid as RamseyUuid;

/**
 * @author  Iqbal Maulana <iq.bluejack@gmail.com>
 */
class Uuid implements Identifier
{
    /**
     * @var RamseyUuid
     */
    private $id;

    public function __construct(string $id)
    {
        $this->id = RamseyUuid::fromString($id);
    }

    /**
     * Generate new id.
     *
     * @return static
     */
    public static function generate()
    {
        return new static((string) RamseyUuid::uuid4());
    }

    /**
     * {@inheritdoc}
     */
    public function getScalarValue()
    {
        return (string) $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function equals(Identifier $other): bool
    {
        return get_class($this) === get_class($other)
            && $this->getScalarValue() === $other->getScalarValue();
    }
}
