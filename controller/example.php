<?php
/**
 * Created by PhpStorm.
 * User: simonjhang
 * Date: 2014/7/29
 * Time: 下午 3:09
 */
class Controller_Example extends Controller
{

    public function action_index()
    {
        Package::load('mypack');
        $generator=new Mypack\Generator();
        $content='';
        $data=$generator->getWord();
        $content=$content.'The Word: '.$data.'<br />';
        $key=$generator->getMd5CryptedValue($data);
        $content=$content.'The Hash ID is: '.$key.'<br />';
        $content=$content.'Now set to redis!'.'<br />';
        $generator->setRedis($key,$data);
        $content=$content.'Retriving from redis by key: '.$key.'<br />';
        $retrieveddData=$generator->getRedis($key);
        $content=$content."The data is: ".$retrieveddData."<br/>";
        $view=View::forge('example/index');
        $view->set('content',$content,false);
        return $view;
    }
}