# Webcomics Scraper

A webcomics scraper built with Laravel to download new comics every day from around the internet and store them locally.

### Installation
1. Clone the repository

    `git clone https://github.com/your-username/webcomics-scraper.git`

2. Change into the project directory

    `cd webcomics-scraper`

3. Install dependencies

    `composer install`

4. Create a copy of the `.env.example` file and name it `.env`

    `cp .env.example .env`

5. Generate an application key

    `php artisan key:generate`

6. Update the `.env` file with your database and email settings

7. Run the migrations
    
    `php artisan migrate`

8. Seed the database with sample data (optional)

    `php artisan db:seed`

### Usage

1. Start the development server

    `php artisan serve`
   
2. Visit the webcomics scraper in your web browser at `http://localhost:8000`

### Features

* Download new comics every day
* Store comics locally
* Graceful error handling and logging of download activities
* Check for duplicates to avoid downloading the same comic multiple times
* Scheduled task to check if a comic hasn't been downloaded in the last X number of days
* Store additional information about comics, such as the name of the author and a link to the comic logo
* Store the URL to the homepage of the comic and a separate URL if the comic is not available on the homepage
* Allow for comics to have multiple sources
* Store information about the update interval and last update time for each source

### Contributing
Contributions are welcome! Please open a pull request or an issue to suggest changes or report bugs.

### License

The webcomics scraper is open-sourced software licensed under the MIT license.
