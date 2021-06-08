<?php

/**
 * [XinFox System] Copyright (c) 2011 - 2021 XINFOX.CN
 */
declare(strict_types=1);

namespace XinFox\ThinkPHP\Oss\AliYun;

use think\Service;

class OssService extends Service
{
    public function register(): void
    {
        $this->app->bind('filesystem', Filesystem::class);
    }
}