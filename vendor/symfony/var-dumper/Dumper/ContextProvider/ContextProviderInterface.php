<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Dumper\ContextProvider;

/**
 * Interface to provide contextual data about dump data clones sent to a server.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
interface ContextProviderInterface
{
<<<<<<< HEAD
    /**
     * @return array|null
     */
=======
>>>>>>> a7d9eccf4b14896e4ecddb0f9c0a2f156fa40d7d
    public function getContext(): ?array;
}
