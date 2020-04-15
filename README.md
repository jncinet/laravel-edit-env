# laravel-edit-env

 * 代码参考自：
 * https://github.com/laravel-admin-extensions/env-manager/blob/master/src/Env.php

安装：

`composer require jncinet/edit-env`


使用方法：

// 读取.env键值
$env->getEnv($key = null)

// 更新保存.env文件
$env->setEnv(['key' => 'value']);