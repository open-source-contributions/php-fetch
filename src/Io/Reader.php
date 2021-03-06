<?php

/*
 * This file is part of the https://github.com/mnavarrocarter/php-fetch project.
 * (c) Matías Navarro-Carter <mnavarrocarter@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MNC\Http\Io;

/**
 * Interface Reader.
 */
interface Reader
{
    public const DEFAULT_CHUNK_SIZE = 4096;

    /**
     * Reads raw bytes from the source.
     *
     * Returns null on EOF
     *
     * @throws ReaderError when contents cannot be read
     */
    public function read(int $bytes = self::DEFAULT_CHUNK_SIZE): ?string;
}
