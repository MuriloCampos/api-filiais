## Para executar

Esta api foi desenvolvida utilizando o Microframework Laravel/Lumen utilizando o SQLite para o BD. Para utilizá-la é necessário:

* Laravel/Lumen
* Composer
* Ativar o PDO do SQLite no arquivo php.ini (descomentar a linha do PDO SQLite)
* executar, na pasta do projeto, no terminal: `composer install`

Para subir o servidor, na pasta do projeto, execute no terminal:

`php -S (seu ip):(porta)`

**É importante usar o seu ip e a porta que quiser. Se usar localhost o dispositivo/emulador rodando o aplicativo de controle de filiais não conseguirá fazer requisições para o servidor**
