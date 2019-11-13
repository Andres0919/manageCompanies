# Manage Companies

## first step:
>git clone git@github.com:Andres0919/manageCompanies.git

## second step:
copy `.env.example` and paste it as `.env` and complete the configuration of the database.<br/>

## third step:
run commands in this order <br/>
`composer update`<br/>
`artisan key:generate`<br/>
`php artisan config:cache`<br/>
`php artisan migrate:fresh --seed`<br/>
`php artisan serve`

