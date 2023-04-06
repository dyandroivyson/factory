# Factory

O **Factory** é um padrão criacional de projeto que fornece uma interface para criar objetos em uma superclasse, mas permite que as subclasses alterem o tipo de objetos que serão criados.

## Analogia com o mundo real
Imagine que você tenha uma aplicação e você precisa fazer várias consultas no banco de dados para cadastrar, listar, mostrar, listar e deletar produtos, por exemplo. Toda vez que você precisa fazer alguma dessas operações, você tem que abrir a conexão ao banco de dados para conseguir realizá-la. Além disso, pode ser que você precise utilizar mais de um banco de dados diferente dependendo do que o seu sistema faça. Ao invés de ter que criar a conexão todas as vezes, podemos separá-la em uma classe que ficará responsável por conectar, bem como reconhecer que banco usar.

## Aplicação
Use o **Factory** quando não souber de antemão os tipos e dependências exatas dos objetos com os quais seu código deve funcionar.

Use o quando desejar fornecer aos usuários da sua biblioteca ou framework uma maneira de estender seus componentes internos.

Use o quando deseja economizar recursos do sistema reutilizando objetos existentes em vez de recriá-los sempre.

## Implementação
Em nosso algoritmo, dividimos o problema na pasta *original* e a solução na pasta *refactored*.
Alteramos nosso arquivo index.php para, ao invés de mantér toda a lógica de escolha e conexão ao banco, separamos ela em uma classe especializada.

## Fonte
- <a href="https://refactoring.guru/design-patterns/factory-method" target="_blank">Refactoring Guru</a>
- <a href="https://codeinphp.github.io/post/factory-design-pattern/" target="_blank">Code In PHP</a>
