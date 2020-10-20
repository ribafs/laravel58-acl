# Implementação de ACL no Laravel 5.8

Usando users, roles, permissions, trait, middleware, provider, etc

## Testado em

- Windows 7
- Linux Mint 20

## Criar um novo aplicativo com laravel 5.8
```bash
laravel new acl --auth
```
```bash
cd acl
```
### Criar e configurar o banco

.env

## Instalar o laravel58-acl
```bash
composer require ribafs/laravel58-acl
```

## Publicar
```bash
php artisan vendor:publish --provider="Ribafs\Laravel58Acl\Laravel58AclServiceProvider"
```

## Copiar alguns arquivos existentes

- DatabaseSeeder.php
- routes/web.php
- views/welcome.blade.php
- views/layouts/app.blade.php

O comando fará uma cópia de cada arquivo sobrescrito, adicionando BAK ao seu nome. Exemplo: routes/webBAK.php

### Executar
```bash
php artisan copy:files
```
Agora quase todos os arquivos do pacote já estão em seu aplicativo: migrations, seeders, Models, middleware, provider, etc

### Ajustar o título do aplicativo (opcional)
Editar o .env e mudar a linha com APP_NAME, para algo como: APP_NAME='ACL to Laravel 8'

## Executar

Após adicionar seu CRUD, execute e teste o ACL no controle do acesso do seu aplicativo.
```bash
php artisan migrate --seed
php artisan serve
localhost:8000/login
```
### Use como exemplo:

- super@gmail.com
- 123456

Depois teste com os demais: admin, manager e user

## Documentação

As informações acima e muito mais informações de como tirar o máximo proveito deste pacote no site abaixo:

[https://ribafs.github.io/laravel58-acl](https://ribafs.github.io/laravel58-acl)

## Versão para o Laravel 6

Se deseja um pacote para usar com a versão 6 do laravel, clique abaixo:

[https://github.com/ribafs/laravel6-acl](https://github.com/ribafs/laravel6-acl)

## Versão para o Laravel 7

Se deseja um pacote para usar com a versão 7 do laravel, clique abaixo:

[https://github.com/ribafs/laravel7-acl](https://github.com/ribafs/laravel7-acl)

## Versão para o Laravel 8

Se deseja um pacote para usar com a versão 8 do laravel, clique abaixo:

[https://github.com/ribafs/laravel-acl](https://github.com/ribafs/laravel-acl)

## Licença

MIT

