<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        echo "helloworld";
        echo $_SERVER['SCRIPT_FILENAME'];
    }
    public function test(){
    	echo "a";
    }
}
