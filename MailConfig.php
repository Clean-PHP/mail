<?php
/*
 * Copyright (c) 2023. Ankio.  由CleanPHP4强力驱动。
 */
/**
 * Package: app\objects\config
 * Class MailConfig
 * Created By ankio.
 * Date : 2023/7/19
 * Time : 11:13
 * Description :
 */

namespace library\mail;

use library\verity\VerityObject;
use library\verity\VerityRule;

class MailConfig extends VerityObject
{

    public string $smtp = "";
    public string $user = "";
    public string $password = "";
    public int $port = 0;
    function getRules(): array
    {
        return [
            "smtp"=>new VerityRule(VerityRule::DOMAIN,"smtp服务器填写有误"),
            "user"=>new VerityRule(VerityRule::MAIL,"发件人邮箱错误"),
            "password"=>new VerityRule(null,"密码不允许为空"),
            "port"=>new VerityRule("^(?:6553[0-5]|655[0-2]\d|65[0-4]\d{2}|6[0-4]\d{3}|[1-5]\d{4}|[1-9]\d{0,3}|[1-9])$","端口范围错误")
        ];
    }
}