<?php

declare(strict_types=1);

namespace Doctrine\Bundle\DoctrineBundle\CacheWarmer;

use Symfony\Bundle\FrameworkBundle\CacheWarmer\AbstractPhpFileCacheWarmer;

/**
 * BC layer for Symfony < 8.2, where the base cache warmer lives in FrameworkBundle.
 *
 * On Symfony >= 8.2, DoctrineMetadataCacheWarmer aliases this class name to
 * Symfony\Component\Cache\CacheWarmer\AbstractPhpFileCacheWarmer, so that this
 * file is never loaded and the deprecated class above is never triggered.
 *
 * @internal
 */
abstract class BaseCacheWarmer extends AbstractPhpFileCacheWarmer
{
}
