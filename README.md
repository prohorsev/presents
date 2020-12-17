## Git ##
Примерный план действий с git:
* fork - создать свой репозиторий в GitHub от репозитория https://github.com/prohorsev/presents
* clone - развернуть проект локально от своего репозитория
* внести изменения
* commit - создать коммит изменений
* push - загрузить изменения в свой репозиторий
* pull request - загрузить изменения из своего репозитория в первоначальный
* в дальнейшем перед выполнением задач выгружать последнюю версию из первоначального репозитория
## Разворачивание проекта ##
* скопировать .env.example в .env, указать соответствующие настройки БД
* настроить web-сервер, php7.3
* composer install
* npm install
* php artisan key:generate
* php artisan migrate
* php artisan db:seed (если ошибка composer dump-autoload)
* npm run dev
