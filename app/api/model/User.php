<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/12
 * Time: 22:55
 */

namespace app\api\model;


class User extends BaseModel
{
    public static function getByopenId($openid){
        $user =self::where('openid','=',$openid)->find();
        return $user;
    }
}