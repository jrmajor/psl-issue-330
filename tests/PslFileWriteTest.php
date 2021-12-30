<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Psl\Filesystem;
use Psl\File;

final class PslFileWriteTest extends TestCase
{
    public function testIssue330(): void
    {
        $path = Filesystem\create_temporary_file();

        File\write($path, 'test');

        $this->assertNull(error_get_last());
        $this->assertSame('test', file_get_contents($path));
    }
}
