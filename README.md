API Rest com Laravel, tudo ja esta pronto para uso, os dados estão dentro de um arquivo sqlite, para fazer mais dados, basta usar o "php artisan db:seed", pois ja existe uma factory criada ela cria 10 stores com 10 produtos

Rotas

http://127.0.0.1:8000/api/stores/ Get //HTTP Method: Get

http://127.0.0.1:8000/api/stores/{id}/products Get producs with a store //HTTP Method: Get

http://127.0.0.1:8000/api/stores Insert //HTTP Method: Post
http://127.0.0.1:8000/api/stores/{id} Update //HTTP Method: Patch
http://127.0.0.1:8000/api/stores/{id} Delete //HTTP Method: Delete
