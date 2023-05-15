<h4>Vetores</h4>

<div style="margin: 10px auto; padding: 20px;">
 
    <!-- introdução -->
    <p>
       Em PHP, as funções são blocos de código nomeados que podem ser reutilizados em diferentes partes do programa. Elas permitem organizar o código em unidades lógicas e modularizadas. Aqui estão alguns exemplos de definição e uso de funções em PHP:
    </p>


    <!-- exemplo de código -->
    <p>
        Exemplo de uso de funções em PHP:
    </p>
    <code>
    <pre>
    // Definindo uma função simples sem parâmetros
    function exibirMensagem()
    {
        echo "Olá, mundo!";
    }

    // Definindo uma função com parâmetros
    function somar($a, $b)
    {
        $resultado = $a + $b;
        return $resultado;
    }

    // Chamando as funções definidas
    exibirMensagem();

    $valor1 = 5;
    $valor2 = 3;
    $soma = somar($valor1, $valor2);
    echo "A soma de $valor1 e $valor2 é: $soma";

    </pre>
    </code>

    <!-- resumo do conteúdo -->
    <p>
    Nesse exemplo, definimos duas funções. A primeira função, exibirMensagem(), 
    <br>não recebe nenhum parâmetro e apenas exibe a mensagem "Olá, mundo!". 
    <br>A segunda função, somar($a, $b), recebe dois parâmetros $a e $b, realiza a soma e retorna o resultado.
    <br>Para chamar as funções, basta utilizar o nome da função seguido por parênteses. <br>No caso da função somar(), passamos os valores $valor1 e $valor2 como argumentos para os parâmetros $a e $b, respectivamente.
Lembre-se de que as funções podem ter parâmetros opcionais, retornar valores ou não retornar nada (nesse caso, elas executam uma ação). Também é possível criar funções com qualquer quantidade de parâmetros.
    </p>
</div>