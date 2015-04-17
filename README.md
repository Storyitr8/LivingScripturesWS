Living Scriptures Web Services
===

This is the web services applications that handles all the api requests for Sales Rabbit. As well as handles the Inside Sales contract entering

Couple of setup items to keep in mind.

The network drives need to be mounted (sudo vim /etc/fstab):

    //SQ2/WebOrders /mnt/weborders cifs credentials=/home/ubuntu/.fstabcredentials,iocharset=utf8,sec=ntlm 0 0
    //SQ2/d$/Databases/csv /mnt/csv cifs credentials=/home/ubuntu/.fstabcredentials,iocharset=utf8,sec=ntlm 0 0


In the credentials file you need:

    username=Administrator
    password=<password>
    domain=GROUP1

Then just the usual symfony setup:

    composer install
    php app/console cache:clear --env=prod
    php app/console assetic:dump --env=prod
    
Make sure the webserver can write where it needs to:

    HTTPDUSER=`ps aux | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1`
    sudo setfacl -R -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX app/cache app/logs
    sudo setfacl -dR -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX app/cache app/logs

Then also make sure that the SSL certs are installed and configured with nginx. If they have been lost then i guess replace them...