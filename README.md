This is my final year 1st semester project.
In this project i used laravel-11 to build the alumni website for my university.(On going) 
-------------------------------------------------------------------------------

Alert-message:
--------------
To run this project locally in your machine to show the output please follow all the instructions given in this README.md file

Features:
--------
    -> Diffrent department admin register and login system
    -> Member Register and login system
    -> All the nessary information shows here for my university alumni 
    -> Nessesary links like: university website, department website their facebook links and contact information and so on..
Overview:
--------
    -> you have a super admin already created for this project if you go through my "how to run it in your local machine steps"(email: superadmin@gmail.com, password:superadmin, and select department:superadmin, to login)
    -> Here we have a super admin who will give the permission of all department's admin to register.
    -> And Department admin will give the permission of member's register.

My Messages:
-----------
Feel free to run this on your local machine to see my works....

How to run it in your local machine step by step:
------------------------------------------------
	->first clone the project repo into your local machine
    ->run: cd Alumni-Website
	->then run: composer update
	->make: .env file into the project directory
	->copy everything from .env.example and paste it into .env file
	->run this command in project directory: php artisan key:generate
	->to get the databases run: php artisan migrate
    ->run the command: php artisan db:seed
	->then serve the project: php artisan serve
	->copy the url and paste it into your browser and you are ready to go...!


I will provide if any update comes or any changes i do.
so follow me on github to get up-to-date project............
