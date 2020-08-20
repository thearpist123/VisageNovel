
## Gheeruh
Demo project to emulate a task/project/user workflow.  

### Set up
This project has been tested to run on the laravel [Homestead vagrant machine](https://laravel.com/docs/7.x/homestead).  
To initialize after cloning the repository, first set the database root password in ```.env```.  
Then, to initialize the MySQL tables, run ```php artisan migrate:fresh``` to set up the mysql database.  
Finally, run ```php artisan tinker``` and then ```factory(App\Task::class, 5)->create();``` from the shell to add 5 projects, users, and tasks. From the homepage, you can access the User list, Poject list, and Task list.