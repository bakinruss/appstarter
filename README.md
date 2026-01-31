# Фундамент онлайн-школы (CodeIgniter 4)

Базовый каркас онлайн-школы на CodeIgniter 4 и PHP 8.2. Проект рассчитан на долгосрочное развитие, масштабирование и расширение без ломки архитектуры.

## Цели

- Масштабируемая основа без монолита и магии
- Разделение ответственности: контроллеры, сервисы, модели
- Подготовка к добавлению новых модулей и ролей
- Единый стиль для публичной части и отдельная админка

## Технологии

- PHP 8.2
- CodeIgniter 4 (актуальная стабильная версия)
- MySQL 8+
- Миграции и сидеры

## Структура

- `app/Controllers` — обработка HTTP-запросов
- `app/Models` — работа с БД
- `app/Entities` — сущности ORM
- `app/Modules/*` — модули (controllers/services/dto/entities)
- `app/Filters` — проверки доступа
- `app/Database/Migrations` — миграции
- `app/Database/Seeders` — сидеры
- `app/Views` — шаблоны
- `public` — публичный каталог

## Быстрый запуск (локально)

1) Установите PHP 8.2 и MySQL 8+
2) Скопируйте `.env.example` в `.env` и заполните данные БД
3) Установите зависимости:

```
composer install
```

4) Запустите миграции и сидеры:

```
php spark migrate
php spark db:seed App\\Database\\Seeders\\DatabaseSeeder
```

5) Запустите сервер:

```
php spark serve
```

Приложение будет доступно на `http://localhost:8080/`.

## Production (PHP-FPM)

Для продакшена используйте PHP-FPM + веб-сервер (например, Nginx).
Публичный каталог — `public/`. Все запросы должны идти через `public/index.php`.

## Учётные данные администратора (сидер)

Берутся из `.env`:
- `SEED_ADMIN_EMAIL`
- `SEED_ADMIN_PASSWORD`

## API (минимальные маршруты)

- `POST /auth/login`
- `POST /auth/logout`
- `POST /auth/register`
- `GET /auth/csrf`
- `GET /users/me`
- `GET /courses`
- `GET /courses/{id}`
- `POST /courses`
- `PUT /courses/{id}`
- `GET /courses/{id}/lessons`
- `GET /lessons/{id}`
- `GET /video/signed?lesson_id=...` (заглушка)
- `GET /health`

## Важно по безопасности

- Включён CSRF-фильтр для POST/PUT/DELETE.
- Для API передавайте CSRF-токен (например, через заголовок `X-CSRF-TOKEN`).
- Доступ к админке ограничен фильтром `admin`.

## Назначение проекта

Этот проект — фундамент. Бизнес-логика минимальна и служит каркасом для дальнейшего развития.
