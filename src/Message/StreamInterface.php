<?php

declare(strict_types=1);

namespace Psr\Http\Message;

use RuntimeException;

/**
 * Describes a data stream.
 *
 * Typically, an instance will wrap a PHP stream; this interface provides
 * a wrapper around the most common operations, including serialization of
 * the entire stream to a string.
 */
interface StreamInterface
{
    /**
     * Reads all data from the stream into a string, from the beginning to end.
     *
     * This method MUST attempt to seek to the beginning of the stream before
     * reading data and read the stream until the end is reached.
     *
     * Warning: This could attempt to load a large amount of data into memory.
     *
     * This method MUST NOT raise an exception in order to conform with PHP
     * string casting operations.
     *
     * @see http://php.net/manual/en/language.oop5.magic.php#object.tostring
     *
     * @return string all data from the stream
     */
    public function __toString(): string;

    /**
     * Closes the stream and any underlying resources.
     */
    public function close(): void;

    /**
     * Separates any underlying resources from the stream.
     *
     * After the stream has been detached, the stream is in an unusable state.
     *
     * @return null|resource underlying PHP stream, if any
     */
    public function detach();

    /**
     * Get the size of the stream if known.
     *
     * @return null|int size in bytes if known, or null if unknown
     */
    public function getSize(): ?int;

    /**
     * Returns the current position of the file read/write pointer.
     *
     * @throws RuntimeException error
     *
     * @return int position of the file pointer
     */
    public function tell(): int;

    /**
     * Returns true if the stream is at the end of the stream.
     *
     * @return bool stream is at the end of the stream
     */
    public function eof(): bool;

    /**
     * Returns whether the stream is seekable.
     *
     * @return bool stream is seekable
     */
    public function isSeekable(): bool;

    /**
     * Seek to a position in the stream.
     *
     * @see http://www.php.net/manual/en/function.fseek.php
     *
     * @param int $offset stream offset
     * @param int $whence Specifies how the cursor position
     *                    will be calculated based on the seek offset.
     *                    Valid values are identical to the built-in
     *                    PHP $whence values for `fseek()`.
     *                    SEEK_SET: Set position equal to offset bytes
     *                    SEEK_CUR: Set position to current location plus offset
     *                    SEEK_END: Set position to end-of-stream plus offset.
     *
     * @throws RuntimeException failure
     */
    public function seek(int $offset, int $whence = SEEK_SET): void;

    /**
     * Seek to the beginning of the stream.
     *
     * If the stream is not seekable, this method will raise an exception;
     * otherwise, it will perform a seek(0).
     *
     * @see seek()
     * @see http://www.php.net/manual/en/function.fseek.php
     *
     * @throws RuntimeException failure
     */
    public function rewind(): void;

    /**
     * Returns whether the stream is readable.
     *
     * @return bool stream is readable
     */
    public function isReadable(): bool;

    /**
     * Read data from the stream.
     *
     * @param int $length Read up to $length bytes from the object
     *                    and return them. Fewer than $length bytes
     *                    may be returned if underlying stream
     *                    call returns fewer bytes.
     *
     * @throws RuntimeException error occurs
     *
     * @return string data read from the stream,
     *                or an empty string if no bytes are available
     */
    public function read(int $length): string;

    /**
     * Returns whether the stream is writable.
     *
     * @return bool stream is writable
     */
    public function isWritable(): bool;

    /**
     * Write data to the stream.
     *
     * @param string $string string that is to be written
     *
     * @throws RuntimeException failure
     *
     * @return int number of bytes written to the stream
     */
    public function write(string $string): int;

    /**
     * Returns the remaining contents in a string.
     *
     * @throws RuntimeException unable to read or occurs while reading
     *
     * @return string remaining contents
     */
    public function getContents(): string;

    /**
     * Get stream metadata as an associative array or retrieve a specific key.
     *
     * The keys returned are identical to the keys returned from PHP
     * stream_get_meta_data() function.
     *
     * @see http://php.net/manual/en/function.stream-get-meta-data.php
     *
     * @param string $key specific metadata to retrieve
     *
     * @return mixed Returns an associative array
     *               if no key is provided. Returns a specific
     *               key value if a key is provided and the
     *               value is found, or null if the key is not found.
     */
    public function getMetadata(string $key = ''): mixed;
}
