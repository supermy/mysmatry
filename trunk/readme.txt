轻快的,与rails类似的风格。

开发环境：nginx+php(codeigniter,smarty)+mongodb
http://www.codeigniter.org.tw/user_guide/toc.html


1.php+mongodb
php.ini:
    extension=php_mongo.dll
使用里面的 php_mongo-1.2.10-5.4-vc9-nts.dll  [fastcgi要使用非线程安全版,注意与php
的版本要对应]
2.nginx+php
  php-cgi.exe -b 127.0.0.1:9000 -c php.ini
	nginx.conf 中配置
        location  ~ \.php($|/){
            #root           html;
	    root I:\env-php\mysmatry\smarty;
            fastcgi_pass   127.0.0.1:9000;
            fastcgi_index  index.php;
            fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
            include        fastcgi_params;
        }

3.codeIgniter+mongodb
    smarty driver mongodb
安装方法：
3.1.将mongodb.php 放到config目录
3.2.将Mongo_db.php放到library目录

4.测试
   routes.php
   //标准界面
	$route['default_controller'] = 'welcome';
    http://127.0.0.1/welcome

    http://codeigniter.org.cn/user_guide/tutorial/static_pages.html
	$route['pages/(:any)'] = 'pages/view/$1';
    http://127.0.0.1/pages/home
	http://127.0.0.1/pages/about


    http://codeigniter.org.cn/user_guide/tutorial/create_news_items.html                  


	codeIgniter+smarty  fixme
	http://localhost/example
	
	codeIgniter+mongodb
	https://github.com/alexbilbie/codeigniter-mongodb-library/tree/v2/libraries
	http://127.0.0.1/index.php?/MongoTest
	http://localhost/welcome
	