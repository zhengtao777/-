<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdminUsers extends Model
{

    //  指定数据表的名字
    protected $table = "admin_users";

    //  public $timestamos = true;


    /**
     * @desc  通过用户名获取用户数据[正常状态]
     * @param $username
     * @return array
     */
    public static function getUserByName($username)
    {

        $userInfo = self::where('username', $username)
                         ->where('status',1)
                         ->first();

        return $userInfo;

    }

}
