
if [ "$1" == "dev" ]; then
    cp .env.dev .env
    echo "Switched to development environment"
elif [ "$1" == "sit" ]; then
    cp .env.sit .env
    echo "Switched to staging environment"
elif [ "$1" == "prod" ]; then
    cp .env.prod .env
    echo "Switched to production environment"
else
    echo "Unknown environment. Use 'dev', 'sit', or 'prod'."
fi

php artisan config:cache
