<?php

/**
 * [XinFox System] Copyright (c) 2011 - 2021 XINFOX.CN
 */

declare(strict_types=1);

namespace XinFox\ThinkPHP\Oss\AliYun\Driver;

use League\Flysystem\AdapterInterface;
use think\filesystem\Driver;
use XinFox\Flysystem\AliYun\AliYunOssAdapter;
use XinFox\Flysystem\AliYun\OssClient;

class AliyunOss extends Driver
{
    /**
     * @throws \OSS\Core\OssException
     */
    protected function createAdapter(): AdapterInterface
    {
        $config = $this->config;
        $client = new OssClient(
            $config['access_key_id'],
            $config['access_key_secret'],
            $config['endpoint'],
            $config['is_cname'] ?? false,
            $config['security_token'] ?? null,
            $config['request_proxy'] ?? null
        );

        return new AliYunOssAdapter($client, $config['bucket'], $config['prefix'] ?? '', $config['options'] ?? []);
    }
}
