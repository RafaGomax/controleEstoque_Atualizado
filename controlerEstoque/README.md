Passo a passo para a instação dos aplicativos
1º fazer a instalção do Xamp e fazer as configurações padroes do mesmo
link para baixar https://www.apachefriends.org/pt_br/index.html

2º Instalar o Mysql

3º Fazer a instalação do Visual Studio Code


Apos concluir a instalação dos principais programas, esta com um pequeno erro de comunicação com o banco,
deve ser abrir a documentação e copiar o arquivo do banco e colar no Mysql para que possa rodar. Deste modo 
voce ira criar as tabelas do seu banco de dados, depois te ser feito deste modo. 

Para colocar o Xamp para funcionar deve ser seguido alguns passos, para abrir arquivos PHP no localhost, voce precisa coloca-los
na pasta "htdoc" do XAMPP, que é o diretorio padrão para os arquivos da web no XAMPP. Para a melhor compreensão segue um 
passo a passo.

1. Abra o Explore d Windows e vá para a pasta onde seus arquivos PHP estão salvos.

2. Selecione os arquivos PHP que deseja abrir no localhost e copie-os.

3. Navegue até a pasta "htdocs" do XAMPP. Por padrão, essa pasta deve estar localizada em "C:\xampp\htdocs" supondo que voce
fez a instalação do XAMPP na unidade C, acaso tenha instalado o XAMPP em outro diretorio ajuste os caminhos de acordo.

4.Cole os arquivos PHP na pasta "htdocs".

5. Abra o navegador e digite "http://localhost/nome_do_arquivo.php" na barra de endereço, se tudo estives configurado 
corretamente voce devera ver o resultado da execução do seu arquivo PHP no navegar. 

Lembrando que o servidor do Apache do XAMPP dever estar em execução para que possa acessar seus arquivos PHP no localhost
Para verificar se o servidor esta em execução pode ver abrindo o painel de controle do XAMPP e verificando o status do Apache.


O nosso sistema e feito com funções em PHP e com o frameworkd Bootstrap - aonde o mesmo e um frameword de codigo-livre para o desenvolvimento de 
interface de front-end para sites e aplicaçoes web, usando HTML, CSS e JavaScript, baseado em modelos para tipografia, melhorando
a experiencia do usuario em um site.

Referente ao nosso sistema o mesmo e um software de controle de estoque, no qual ingloba todas as operações de crud 
o INSERT, DELETE, UPDATE e o SELECT, ele tem a finalidade de ajudar no controle de estoque de algum estabelecimento ou empresa
dando a possibilidade de requisitar o material, dar entrada do material no estoque ele consegue cadastrar um novo item 
e dentro outras opções referente a cadastro de novo usuario. E tem painel para o Usuario para o Adminstrador, e algumas 
funcionalidade direcionadas ao Usuario e outras funcionalidades apenas o Adminstrado pode ter.