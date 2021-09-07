# Установка

## Сервер

Работаю под `win 10`. Использовал `Laragon` для настройки окружения.

Настраивал следующим образом.

1. Установил `Laragon full`: https://laragon.org/download/
2. Запускаем `Laragon`
1. Жмем "База данных" в `Laragon` и добавляем БД.
4. Затем Терминал. Смотрим чтобы каталог был `www`
5. Заргужаем проект: `git clone https://psqq@bitbucket.org/psqq/feedback-form.git`
6. `cd feedback-form`
7. `composer install`
8. `npm i`
8. `npm run dev`
9. `cp .env.example .env` и подставляем в `.env` настройки почты и имя бд `DB_DATABASE`.
1. `php artisan migrate:fresh`
3. Жмем "Запустить все"
6. Переходим по адресу `http://feedback-form.test` и все должно работать

## Почта

У меня почта работала через yandex. В `.env` нужно добавить

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.yandex.ru
MAIL_PORT=465
MAIL_USERNAME=name
MAIL_PASSWORD=pass
MAIL_ENCRYPTION=SSL
MAIL_FROM_ADDRESS=name@ya.ru
MAIL_FROM_NAME="${APP_NAME}"
```

Подставив свой логин пароль от яндекса в `MAIL_USERNAME` и `MAIL_PASSWORD` и адрес `MAIL_FROM_ADDRESS` тоже яндекса: `MAIL_USERNAME@ya.ru`.
