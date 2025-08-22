说明
~~~
composer.json 里添加
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/wbufana/common-cache-key.git"
    }
],
"require": {
    "xsj/common-cache": "dev-main"
}

# 安装
composer require xsj/common-cache:dev-main
# 更新
composer update xsj/common-cache

# 配置redis
- 需要在186服务器安全里放行相应的IP
'stores' => [
    'redis_center' => [
        'type'      => 'redis',
        'host'      => '104.168.182.186',
        'port'      => 34379,
        'password'  => 'best@99.',
        'select'    => 0,
        'timeout'   => 0,
        'persistent'=> false,
    ],
],
# 使用
use Common\Cache\CacheHelper;
// 获取港股
$hkList = CacheHelper::getStockHkList();
// 获取加密货币
$cryptoList = CacheHelper::getCryptoList();
~~~



