# Employee Management System (EMS)

- Postman test [documenter](https://documenter.getpostman.com/view/28836077/2sA3Bt3AF3)
- Here are the instructions for setting up the project: <br/>
NOTE: you need to install xammp and any editor on your desktop.
<br>1- Clone the repository to your local machine using the following command: 
<br><code>git clone https://github.com/MoonesMezher/ems-by-laravel.git</code><br>
2- Navigate to the project directory: 
<br><code>cd laravel-example</code><br>
3- Install the project dependencies using Composer: 
<br><code>composer install</code><br>
4- Create a copy of the .env.example file and rename it to .env: 
<br><code>cp .env.example .env</code><br>
5- Generate a new application key: 
<br><code>php artisan key:generate</code><br>
6- Configure the database connection in the .env file: 
<br><code>DB_CONNECTION=mysql<br>
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=laravel_example
        DB_USERNAME=root
        DB_PASSWORD=></code><br>
7- Run the database migrations: 
<br><code>php artisan migrate</code><br>
8- Seed the database with sample data (optional): 
<br><code>php artisan db:seed</code><br>
9- Start the development server: 
<br><code>php artisan serve</code><br>
10- Access the application in your web browser at http://localhost:8000. 
