## Installation

Clone the repository

    https://github.com/iambasanta/movies.git

Switch to the repo folder

    cd movies

Install all the dependencies using composer

    composer install

Install npm dependencies

    npm install

Copy the example `.env.example` in `.env` file

    cp .env.example .env

Open and make the required configuration changes in the .env file

-`DB_DATABASE` -`DB_USERNAME` -`DB_PASSWORD`

Set your `TMDB_TOKEN` in your `.env` file. You can get an API key [here](https://www.themoviedb.org/documentation/api). Make sure to use the "API Read Access Token (v4 auth)" from the TMDb dashboard.

Generate a new application key

    php artisan key:generate

Start the local development server

    php artisan serve

Visit http://localhost:8000 in your browser
