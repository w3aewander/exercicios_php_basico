<h4>Variáveis</h4>
<hr>

<div style="margin: 10px auto; padding: 20px;">

    <p>
    Em PHP, as variáveis são usadas para armazenar e manipular dados. Elas podem conter diferentes tipos de valores, como números, strings, booleanos, arrays, entre outros. As variáveis são flexíveis e podem ser reatribuídas com diferentes valores ao longo do código.
    </p>

    <p>
        Exemplo de uso de variáveis em PHP:
    </p>
    <code>
        <pre>
        // Definindo uma variável numérica
        $idade = 25;

        // Definindo uma variável de string
        $nome = "João";

        // Definindo uma variável booleana
        $temCarro = true;

        // Definindo uma variável array
        $cores = array("vermelho", "azul", "verde");

        // Usando as variáveis definidas
        echo "A idade é: " . $idade;
        echo "O nome é: " . $nome;
        echo "Tem carro? " . ($temCarro ? "Sim" : "Não");
        echo "A segunda cor é: " . $cores[1];


        </pre>
    </code>

    <p>
    Nesse exemplo, definimos quatro variáveis: $idade, $nome, $temCarro e $cores. Em seguida, usamos essas variáveis em um script para exibir seus valores. Podemos acessar o valor de uma variável usando o operador de concatenação . para juntar o valor da variável com uma string. As variáveis em PHP não precisam ser declaradas com um tipo específico, pois o tipo é determinado dinamicamente com base no valor atribuído. Isso permite uma maior flexibilidade no uso das variáveis.
    Lembre-se de que, em PHP, as variáveis começam com o caractere $ seguido pelo nome da variável. Além disso, o nome das variáveis é case-sensitive, o que significa que $nome e $Nome são consideradas variáveis diferentes.
    </p>
</div>