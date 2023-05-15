<h4>Contantes</h4>
<hr>

<div style="margin: 10px auto; padding: 20px;">

    <p>
        Em PHP, as constantes são valores que não podem ser alterados durante a execução do programa.
        Elas são úteis para armazenar valores fixos que são usados repetidamente em um script. As constantes são definidas usando a função `define()` e seguem algumas regras:

        - O nome de uma constante deve começar com uma letra ou sublinhado, seguido por qualquer número de letras, números ou sublinhados.
        - Por padrão, as constantes são case-sensitive, o que significa que `MENSAGEM` e `mensagem` são considerados constantes diferentes.
        - Por convenção, os nomes das constantes são escritos em letras maiúsculas.
    </p>

    <p>
        Exemplo de uso de constantes em PHP:
    </p>
    <code>
        <pre>
        // Definindo uma constante simples
        define("PI", 3.14159);

        // Definindo uma constante com um valor de string
        define("MENSAGEM", "Olá, mundo!");

        // Definindo uma constante com um valor booleano
        define("ATIVO", true);

        // Usando as constantes definidas
        echo "O valor de PI é: " . PI;
        echo MENSAGEM;
        echo "A constante ATIVO está definida como: " . (ATIVO ? "verdadeiro" : "falso");

        </pre>
    </code>

    <p>
        Nesse exemplo, definimos três constantes: `PI`, `MENSAGEM` e `ATIVO`. Em seguida, usamos essas constantes em um script para exibir seus valores. Note que não podemos atribuir um novo valor a uma constante após sua definição, pois elas são imutáveis durante a execução do programa.

    </p>
</div>