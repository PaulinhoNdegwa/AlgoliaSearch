## Description

This is a simple Laravel project that implements searchinh an Eloquet model using Algolia

## How to run locally

PS: Ensure you have PHP, Laravel and Composer installed to your computer

- Clone repo 
`git clone https://github.com/PaulinhoNdegwa/AlgoliaSearch.git`

- Create a database with your name of choice and edit the .env with the `username`, `password` and new `database name`

- Run migrations
`php artisan migrate`

- Seed the database with test data
`php artisan db:seed`

- Create an account on Algolia and add the following variable to the .env
```
ALGOLIA_APP_ID=app_id
ALGOLIA_SECRET=secret_key
```

- Serve the application
`php artisan serve`

- Send a POST request to route `http://127.0.0.1:8000/api/messages` with the search phrase in the request body 
Eg. `{
  "phrase": "I am a search phrase"
}`
