# Treffio - TaskManager

## About the application:
>This TaskManager was a simple application respecting the principles of **CRUD** made in Javascript using **VueJS** framework on the frontend and PHP **Laravel** on the backend.

## Setting up - Backend

### Initial Setup:

>1. To start the API application simply clone the project and open the folder `treffio-api`
> 
>2. Once cloned connect the .env of the `treffio-api` folder to **your MYSQL credentials**
>
>3. After that run `composer install` to install all the dependecies
> 
>4. Now inside the folder run `php artisan serve --port=80`, notice that the port can be changed depending on your needs but make sure to change the .env `VUE_APP_API_HOST` variable in the **VueJS application**

### Migrations and Seeds:
> 1. Run the *last migration* in order to setup your database with the required table, to run the migration you can simple type on your terminal:
> 
>   `php artisan migrate:refresh --path=/database/migrations/2023_03_22_150732_create_tasks_table.php` 
>
> You can also run the migration with a seed by typing: (This is only optional)
>    
>    `php artisan migrate:refresh --path=/database/migrations/2023_03_22_150732_create_tasks_table.php --seed`
>    

### API Documentation:

#### Endpoint ==> /api/v1/tasks
> 
> Allowed Methods: **GET**, **POST**
> 
> About: This endpoint can be used to **GET** all the tasks, or **POST** a new task

#### Endpoint ==> /api/v1/tasks/{id}
>
>Allowed Methods: **GET**, **PUT**, **DELETE**
>
>About: This endpoint can be used to **GET** a single the task, **PUT** new changes in a specific task, or **DELETE** a task

## Setting up - Frontend

### Initial Setup:
>1. To start the VueJS application simply clone the project and open the folder `treffio_vuejs`
> 
>2. Once cloned change the .env file `VUE_APP_API_HOST` variable to the url of your api. **DO NOT** add the path and the endpoint in the same variable, the endpoint is already set in `VUE_APP_API_ENDPOINT`, example: 
>
>     `VUE_APP_API_HOST=http://localhost`
>
>     `VUE_APP_API_ENDPOINT=/api/v1/tasks`
> 
>3. Now inside the folder run `npm run serve`
> 
>4. **The frontend should be up by now**
> 

### Quick guide on the User Interface:

#### Menu:
<ul>
  <li>On the application you notice a square in the top left corner, by click on it, it will open a Sidebar Menu where we can use to navigate the application.</li>
  <li>To close the **SideBar** just click on the **3 bars** next to the title</li>
</ul>

#### SideBar Options:
<ul>
  <li>Home -> Home Page</li>
  <li>New Task -> Create a new task</li>
  <li>Task List -> Lists all tasks created</li>
</ul>

#### Home Page:
<ul>
  <li>It has all the routes available</li>
  <li>The card Completed Tasks show all the completed tasks</li>
</ul>

#### New Task:
<ul>
  <li>To create a new task add a Task Name (Task Description is not necessary)</li>
  <li>By toggling on Add a new deadline to this task a calendar option will pop up and you can had a new deadline to the task, the time you most add manually right next to the date.</li>
</ul>

#### Tasks List:
<ul>
  <li>The tasks are divided in 3 places All Tasks, Deadlines and Done!</li>
  <li>By click in one task you will see all the details of a task</li>
</ul>

#### Single Task View:
<ul>
  <li>After clicking on a task a card will popup</li>
  <li>There you can see all the information related to that task</li>
  <li>You can click Done! to set the task as Done or Undo to set the task back do not done.</li>
  <li>You can click Edit and new options will appear (also notice the locker opens on the right corner of the card), here you can update the task by changing it's values and clicknig Save! or you can undo you changes by clicking Undo</li>
  <li>You also have the Delete options that deletes the task</li>
</ul>
