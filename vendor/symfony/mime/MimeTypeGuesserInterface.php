<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime;

/**
 * Guesses the MIME type of a file.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface MimeTypeGuesserInterface
{
    /**
     * Returns true if this guesser is supported.
     */
    public function isGuesserSupported(): bool;

    /**
     * Guesses the MIME type of the file with the given path.
     *
<<<<<<< HEAD
     * @return string|null
     *
=======
>>>>>>> a7d9eccf4b14896e4ecddb0f9c0a2f156fa40d7d
     * @throws \LogicException           If the guesser is not supported
     * @throws \InvalidArgumentException If the file does not exist or is not readable
     */
    public function guessMimeType(string $path): ?string;
}
