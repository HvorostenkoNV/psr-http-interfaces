<?php

declare(strict_types=1);

namespace Psr\Http\Message;

use InvalidArgumentException;

use const UPLOAD_ERR_OK;

/**
 * Uploaded file factory interface.
 */
interface UploadedFileFactoryInterface
{
    /**
     * Create a new uploaded file.
     *
     * If a size is not provided it will be determined by checking the size of
     * the stream.
     *
     * @see http://php.net/manual/features.file-upload.post-method.php
     * @see http://php.net/manual/features.file-upload.errors.php
     *
     * @param StreamInterface $stream          the underlying stream representing
     *                                         the uploaded file content
     * @param null|int        $size            the size of the file in bytes
     * @param null|int        $error           the PHP file upload error
     * @param null|string     $clientFilename  the filename as provided by
     *                                         the client, if any
     * @param null|string     $clientMediaType the media type as provided by
     *                                         the client, if any
     *
     * @throws InvalidArgumentException file resource is not readable
     *
     * @return UploadedFileInterface uploaded file
     */
    public function createUploadedFile(
        StreamInterface $stream,
        ?int $size               = null,
        ?int $error              = UPLOAD_ERR_OK,
        ?string $clientFilename     = null,
        ?string $clientMediaType    = null,
    ): UploadedFileInterface;
}
