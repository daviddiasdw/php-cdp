# DOCKER + NGINX + LARAVEL 5.7 + MYSQL

O que você encontra aqui:
    
    * Uma imagem com ALPINE + NGINX - web-base
    * Uma imagem com ALPINE + PHP7.2-fpm
    * Uma imagem com MYSQL

## Instalação

* Faça o clone do projeto:

```bash
    git clone git@github.com:GieandesSilva/docker-nginx-1.git nome-do-projeto
```

* Entre na pasta nome-do-projeto e rode:

```bash
    docker-compose up -d
```

* Verifique se os containers estão de pé [opcional]:

```bash
    docker ps
```

* Acesse o container do aplicativo para instalar as dependências:

```bash
    docker exec -ti app-base sh
```    
* Dentro do container execute os comandos:
    
```bash
    * Instale as dependências com composer:
    
        composer install

    * Faça uma cópia do .env.example:

        cp .env.example .env

    * Gere a chave para o aplicativo:
    
        php artisan key:generate
```
            
