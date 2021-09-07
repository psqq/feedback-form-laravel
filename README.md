# Установка

## Сервер

Работаю под `win 10`. Использовал `Laragon` для настройки окружения.

## Почта

У меня почта работала локально через yandex. В `.env` нужно добавить

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

Подставив свой логин пароль от яндекса в `MAIL_USERNAME` и `MAIL_PASSWORD` и адрес `MAIL_FROM_ADDRESS`.
