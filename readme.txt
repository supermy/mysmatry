����,��rails���Ƶķ��

����������nginx+php(codeigniter,smarty)+mongodb
http://www.codeigniter.org.tw/user_guide/toc.html


1.php+mongodb
php.ini:
    extension=php_mongo.dll
ʹ������� php_mongo-1.2.10-5.4-vc9-nts.dll  [fastcgiҪʹ�÷��̰߳�ȫ��,ע����php
�İ汾Ҫ��Ӧ]
2.nginx+php
  php-cgi.exe -b 127.0.0.1:9000 -c php.ini
	nginx.conf ������
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
��װ������
3.1.��mongodb.php �ŵ�configĿ¼
3.2.��Mongo_db.php�ŵ�libraryĿ¼

4.����
   routes.php
   //��׼����
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
	