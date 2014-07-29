<?php
/**
 * Created by PhpStorm.
 * User: simonjhang
 * Date: 2014/7/29
 * Time: 下午 2:33
 */

namespace Mypack;


class Generator {
    private $redis;
    public function before(){
        $this->redis = \Redis_Db::forge('mystore');
    }
    public function  getWord()
    {
        return chr(rand(0,127));
    }
    public function getMd5CryptedValue($str){
        return md5($str);
    }
    public function setRedis($key,$value){
       $this->redis = \Redis_Db::forge('mystore');
        $this->redis->set($key,$value);
    }
    public function getRedis($key){
        $this->redis = \Redis_Db::instance('mystore');
        return   $this->redis->get($key);
    }
} 
