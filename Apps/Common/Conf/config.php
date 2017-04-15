<?php
return array(
	//'配置项'=>'配置值'
	//PDO连接方式
	'DB_TYPE' => 'mysql',   //数据库类型
	'DB_USER' => 'root',   //用户名
	'DB_PWD' => '',        //密码
	'DB_PREFIX' => 'lamp_',   //数据库表前缀
    'DB_PORT' =>  '3306',        // 端口
    'DB_NAME' =>  'lampzyjf',  // 数据库名
    'DB_HOST' =>  'localhost', // 服务器地址
	'DB_CHARSET'=> 'utf8', // 字符集
    
	// 'DB_DSN' => 'mysql:host=localhost;dbname=lampzyjf;port=3306;charset=utf8',  //DSN
	// 'SHOW_PAGE_TRACE' => true    //一旦代码有错不显示
    'DB_DEBUG'				=>  true, 	 // 数据库调试模式 开启后可以记录SQL日志
	
	'SESSION_OPTIONS'         =>  array(
        'name'                =>  'XYLSESSION',                    //设置session名
        'expire'              =>  3600*3,                         //SESSION保存1小时
        'use_trans_sid'       =>  1,                               //跨页传递
        'use_only_cookies'    =>  0,                               //是否只开启基于cookies的session的会话方式
    ),
);