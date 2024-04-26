# Employee Management System (EMS)

- Postman test [documenter](https://documenter.getpostman.com/view/28836077/2sA3Bt3AF3)
_ Here are the instructions for setting up the project: <br/>
NOTE: you need to install xammp and any editor on your desktop. <br/>
1- Clone the repository to your local machine using the following command: 
<code>
git clone https://github.com/stevejobs/laravel-example.git
</code>
2- Navigate to the project directory: 
<code>
    cd laravel-example
</code>
3- Install the project dependencies using Composer: 
<code>
    composer install
</code>
4- Create a copy of the .env.example file and rename it to .env: 
<code>
    cp .env.example .env
</code>
5- Generate a new application key: 
<code>
    php artisan key:generate
</code>
6- Configure the database connection in the .env file: 
<code>
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel_example
    DB_USERNAME=root
    DB_PASSWORD=
</code>
7- Run the database migrations: 
<code>
php artisan migrate
</code>
8- Seed the database with sample data (optional): 
<code>
    php artisan db:seed
</code>
9- Start the development server: 
<code>
    php artisan serve
</code>
10- Access the application in your web browser at http://localhost:8000. 
