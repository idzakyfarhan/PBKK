# Twitter Mock-Up Laravel Project
### Framework Programming Final Project

Group Member

| NAME                          | NRP       |
|-------------------------------|-----------|
|Muhammad Dzaky Farhan          |5025211069 |
|Mochammad Naufal Ihza Syahzada |5025211260 |

## Project Demonstration Video

[![Project-Page](https://github.com/idzakyfarhan/PBKK/assets/89951546/1cb8429e-e6c2-4bca-b0a2-ac70afaec885)](https://youtu.be/r-qkzb7tYdM)

(click the image for youtube link)


## Useful Artisan Command

- `php artisan migrate` or `php artisan migrate:fresh`

To migrate all migration and with fresh added there, it will help to drop + migrate the migration in one command 

- `php artisan db:seed --class=UserSeeder`

Store user that already been set up, for development purposes. In this case is admin user

- `php artisan db:seed --class=PostSeeder`

Store posts that already been made by faker, for development purposes

- `php artisan queue:work`

To get the data from news API (dispatch). This must be run through out the program
