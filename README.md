
# Simple laravel auth Task management







## Features

o User registration requires a unique email address and a strong password.
o Users can only update their own profiles, and email addresses must remain
unique.
o Allow users to add new tasks.
o Allow users to mark tasks as completed.
o Allow users to delete tasks.


## Installation

first clone the repo 

```bash
  git clone https://github.com/Adarshjaiswal/simple-laravel-jetstream-auth-and-todo.git
```
Then, switch to the cloned folder.
```bash
  cd simple-laravel-jetstream-auth-and-todo
```
Install  the dependencies using composer and npm.
 ```bash
 composer install
``` 
and 
 ```bash
 npm install
```   
If any error during Installation on node modules due to version then please use 
 ```bash
 npm install --force
```  
Copy the .env.example file and make the required configuration changes in the .env file(Like database name, host, username and password)
```bash
cp .env.example .env
```

Run the database migrations (Set the database connection in .env before migrating)
```bash
php artisan migrate
```
Start the local development server
```bash
php artisan serve
```
Start Vite for bundling the assets or Hot Module Reload (required)
```bash
npm run dev
```
Woohoo! you are all done with Installation!

## Feedback

If you have any feedback, please reach out to us at admin@adarshjaiswal.com

