<?php

/**
 * [XinFox System] Copyright (c) 2011 - 2021 XINFOX.CN
 */
declare(strict_types=1);

namespace XinFox\ThinkPHP\Oss\AliYun;

class Filesystem extends \think\Filesystem
{
    protected function resolveClass(string $type): string
    {
        if ('aliyun_oss' === $type) {
            $this->namespace = '\\XinFox\ThinkPHP\Oss\AliYun\\Driver\\';
        }

        return parent::resolveClass($type);
    }
}