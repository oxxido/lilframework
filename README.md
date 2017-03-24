###Installing package requirements
* Composer
* `npm install -g yarn@0.17.10` (this will ensure we use same version locally and on circle ci)
* Bower
* Php 7 - Mysql
* Apache (for htaccess, otherwise it need to be converted)


###Typical Development
* `composer install`
* `bower install`
* rename and modify core/config/config-sample.ini to config.ini
* mysql -u somename -p dbname < migrate.sql
* php -S localhost:8000


###Building time:
1:00 Research

1:00 first version of framework

1:00 second version of framework

0:30 Research for frontend

1:00 building frontend (bower)

1:00 splitting frontend into views and cleaning up

0:30 building books and shelfs example

1:00 wiring up frontend with backend and backend with models

1:00 settings models, relationships, eloquent, etc

0:30 wrapping up: cleaning texts, adding json to fetch books
