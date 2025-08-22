说明
~~~
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
composer.json 里添加
"repositories": [
    {
        "type": "vcs",
        "url": "http://23.254.167.182:23408/root/common-cache.git"
    }
],
"require": {
    "xsj/common-cache": "dev-main"
}

composer require xsj/common-cache:dev-main

composer update xsj/common-cache
~~~



