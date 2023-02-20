# PHP Crash Course Files

A crash course following a tutorial by Brad Traversy:
https://www.youtube.com/watch?v=BUCiSSyIGGU

# Environment variables
Create .env file in root and add a value for your database password:
```
DB_PASS=your-pass-here
```

# Database

To check the container names:
```
docker ps --format '{{.Names}}'
```

To enter the database container via cli (get the database container name from previous command)
```
docker exec -ti php-crash-mysql-1 bash
```

To enter the database (run the command inside the db container)
```
mysql -uroot -p
```
and add password