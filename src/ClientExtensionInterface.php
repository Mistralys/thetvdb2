<?php

declare(strict_types=1);

namespace Adrenth\Thetvdb;

/** * Interface ClientExtensionInterface.
 *
 * @author   Alwin Drenth <adrenth@gmail.com>
 * @license  MIT
 *
 * @see     https://github.com/adrenth/thetvdb2
 */
interface ClientExtensionInterface
{
    public function __construct(ClientInterface $client);
}
