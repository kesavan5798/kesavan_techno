

1) First Download the project in github
2) .envexample file convert to .env
3) then run command composer update
4) the run command php artisan key generate
5) Next config your database
6)  Next file name techno.sql insert your database
7). Insert file success run bellow command one by one
	-	php artisan db:seed
	-	php artisan db:seed --class=UserGroupSeeder
	-	php artisan db:seed --class=UserSeeder
	-	php artisan db:seed --class=ProductSeeder
	-	php artisan db:seed --class=InventorySeeder
8) Next clear the cahce using bellow command
	- php artisan config:clear
	- php artisan cache:clear
9) final step run php artisan serve command