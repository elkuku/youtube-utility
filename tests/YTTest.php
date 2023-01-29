<?php

use PHPUnit\Framework\TestCase;
use Zanfi\ZanfiYouTube;

class YTTest extends TestCase
{
    public function testClassConstructor(): void
    {
        $zanfiYouTube = new ZanfiYouTube('John');
        $this->assertSame('John', $zanfiYouTube->video_id);

        $zanfiYouTube = new ZanfiYouTube('https://yt.xx?v=John');
        $this->assertSame('John', $zanfiYouTube->video_id);
    }
}
