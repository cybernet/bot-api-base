<?php

declare(strict_types=1);

namespace Greenplugin\TelegramBot\Tests\Type;

use Greenplugin\TelegramBot\Type\PhotoSizeType;
use Greenplugin\TelegramBot\Type\UserProfilePhotosType;

class UserProfilePhotosTypeTest extends TypeTestCase
{
    public function testEncode()
    {
        $result = [
            'total_count' => 1,
            'photos' => [
                [
                    [
                        'file_id' => 'AgADBQADyKcxG5hmrglZIi4CcakAAf4_7r0yAAQ735Gp9Icu6KADAQABAg',
                        'file_size' => 91518,
                        'width' => 640,
                        'height' => 640,
                    ],
                    [
                        'file_id' => 'AgADBQADyKcxG5hmrglZIi4CcakAAf4_7r0yAASzMopVG_fq_qEDAQABAg',
                        'file_size' => 219720,
                        'width' => 1050,
                        'height' => 1050,
                    ],
                ],
            ],
        ];
        $botApi = $this->getBot($result);

        $type = $botApi->call(new \stdClass(), UserProfilePhotosType::class);

        $this->assertTrue($type instanceof UserProfilePhotosType);
        $this->assertEquals($type->totalCount, $result['total_count']);
        $this->assertEquals(\count($type->photos), 1);
        $this->assertEquals(\count($type->photos[0]), 2);
        $this->assertTrue($type->photos[0][0] instanceof PhotoSizeType);
        $this->assertTrue($type->photos[0][1] instanceof PhotoSizeType);
        $this->assertEquals($type->photos[0][0]->fileId, $result['photos'][0][0]['file_id']);
        $this->assertEquals($type->photos[0][0]->fileSize, $result['photos'][0][0]['file_size']);
        $this->assertEquals($type->photos[0][0]->width, $result['photos'][0][0]['width']);
        $this->assertEquals($type->photos[0][0]->height, $result['photos'][0][0]['height']);
        $this->assertEquals($type->photos[0][1]->fileId, $result['photos'][0][1]['file_id']);
        $this->assertEquals($type->photos[0][1]->fileSize, $result['photos'][0][1]['file_size']);
        $this->assertEquals($type->photos[0][1]->width, $result['photos'][0][1]['width']);
        $this->assertEquals($type->photos[0][1]->height, $result['photos'][0][1]['height']);
    }
}
