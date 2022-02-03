<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Fragment;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ControllerReference;

/**
 * Interface implemented by rendering strategies able to generate an URL for a fragment.
 *
 * @author Kévin Dunglas <kevin@dunglas.fr>
 */
interface FragmentUriGeneratorInterface
{
    /**
     * Generates a fragment URI for a given controller.
     *
     * @param bool $absolute Whether to generate an absolute URL or not
     * @param bool $strict   Whether to allow non-scalar attributes or not
     * @param bool $sign     Whether to sign the URL or not
<<<<<<< HEAD
     *
     * @return string
=======
>>>>>>> a7d9eccf4b14896e4ecddb0f9c0a2f156fa40d7d
     */
    public function generate(ControllerReference $controller, Request $request = null, bool $absolute = false, bool $strict = true, bool $sign = true): string;
}
