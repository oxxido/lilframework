###Installing package requirements
* Composer
* Bower
* Php 7 - Mysql
* Apache (for htaccess, but running from localhost is also possible)


###Typical Development
* `composer install`
* `bower install`
* rename and modify core/config/config-sample.ini to config.ini
* mysql -u somename -p dbname < migrate.sql
* php -S localhost:8000

###Process

I only had 8 hours to complete the project, so i decided to organize myself, and start making decisions. I decided to separate the task in 4 steps: 1 investigation, which i dedicated one hor for it, and then a couple of minutes to decide next steps. I faced this problem as it was a client needing a site, requiring me not to use an existing framework, and expecting a ready-to-publish final result. I could have build the entire framework from ground up, but to do so i would need some effords in building classes for everything. so I choosed to use composer to get a couple of helpful packages. Of course i could have included a router, probably httpFoundation package, a class loader, etc, but then it would be the same as using an existing framework, so i decided to use just a couple of packages and build the rest. After this decision, i had step 2 ready: build framework, step 3 use a template to build the frontend, and step 4 wire everything up, cleanup, etc.

You will see building time below what i did with my time. 

Things i didn't have enough time to do:
- Better router. Use public/index.php to only call framework, instead using it as router
- Json calls and request handling: I wanted to separate requests (POST, GET, etc) and change headers to reply with html, json, etc. a better use of ajax
- Rendering templates: With json, i could have use something like mustache to render the jsons into books.
- Small CRUD for api.
- API for pagination / search 
With 8 more hours i could have finish everything (probably)

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
