while [ true ]
do
 php /var/www/html/artisan queue:work --verbose --no-interaction &
 sleep 60
done