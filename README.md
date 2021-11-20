# COMO RODAR O PROJETO

# REQUISITOS

- PHP 7.4;
- Composer;
- Navegador ou Postman;

# COMANDOS

- composer install;
- php artisan serve;

# ROTAS DO TESTE

- http://localhost:8000/movie/upcoming/{page?}
- http://localhost:8000/movie/top_rated/{page?}
- http://localhost:8000/movie/single/{id}
- http://localhost:8000/movie/upcoming/genres/{id?}

# OBS

- Rotas com parâmetros opcionais tem o caractere "?";
- O projeto foi feito em Laravel 8
- O arquivo de rotas encontra-se na pasta routes/web.php
- A controller encontra-se em app/Http/Controllers/api/MovieController.php
