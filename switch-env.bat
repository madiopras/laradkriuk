@echo off

IF "%1"=="dev" (
    copy /Y .env.dev .env
    echo Switched to development environment
) ELSE IF "%1"=="sit" (
    copy /Y .env.sit .env
    echo Switched to staging environment
) ELSE IF "%1"=="prod" (
    copy /Y .env.prod .env
    echo Switched to production environment
) ELSE (
    echo Unknown environment. Use 'dev', 'sit', or 'prod'.
)

php artisan config:cache
