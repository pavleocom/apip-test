### Issue:

Json field containing date does not convert into DateTime object during denormalization
when input class is used.

Run:

`composer install`

AND

`php -S localhost:8000 -t public/`

AND

`php scripts/create_book.php` 

OR 

```
curl --location --request POST 'http://127.0.0.1:8000/api/books' \
--header 'Content-Type: application/json' \
--data-raw '{
"publishedAt": "2020-01-01",
"title": "A book"
}'
```


## Expected response must contain (object(DateTime))

```
object(App\Entity\Book)#582 (2) {
["id"]=>
uninitialized(int)
["publishedAt"]=>
object(DateTime)#579 (3) {
["date"]=>
string(26) "2020-01-01 00:00:00.000000"
["timezone_type"]=>
int(3)
["timezone"]=>
string(13) "Europe/London"
}
["title"]=>
string(6) "A book"
}
```

