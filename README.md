### Login e perfil

Esse sistema tem como objetivo realizar um login, consultando as credenciais fornecidas pelo usuário no banco de dados, e caso corretas, exibir um perfil com informações daquele usuário. E realizar o cadastro de novos usuários, salvando suas informações no banco.

#### Tecnologias usadas

- HTML
- PHP
- MYSQL
- XAMPP

#### Instruções para executar

Antes de iniciar, será necessário a instalação da plataforma de desenvolvimento XAMPP

###### link para download:[](https://www.apachefriends.org/pt_br/download.html)

- 1º Após baixar este repositório, ele devera ser salvo dentro da pasta xampp>htdocs

- 2º O banco de dados presente na pasta db deste repositório, devera ser importado no phpmyadmin.

- 3º  Abra o XAMPP e de start nos módulos Apache e MySQL

- 4º No navegador execute localhost/o nome dado ao repositório/

  

#### Instruções de uso

- A tela inicial do site é uma tela de login, nela é solicitado ao usuário(email)  e a senha. Também e possível realizar um cadastro, apresentado em um botão no lodo superior direito.

  ![image-20210813221425748](C:\Users\mathe\AppData\Roaming\Typora\typora-user-images\image-20210813221425748.png)

  - O banco de dados já vem com um usuário cadastrado para o teste se preferir:

    - login: jao@gmail.com

    - senha: 1234

      

- Ao efetuar o login o usuário é direcionado para a pagina de perfil, onde no centro e possível ver suas informações salvas no cadastro e no canto superior esquerdo é apresentada uma saudação com o nome do usuário e o botão para sair.

  ![image-20210813221556538](C:\Users\mathe\AppData\Roaming\Typora\typora-user-images\image-20210813221556538.png)

  

- Se optar por realizar um cadastro, o usuário é direcionado para a pagina de cadastro, onde é apresentado um formulário para cadastro, e que depois de preenchido e confirmado, se todos os campos preenchidos corretamente, será direcionado novamente para o inicio para que seja feito o login.

  ![image-20210813221518928](C:\Users\mathe\AppData\Roaming\Typora\typora-user-images\image-20210813221518928.png)



