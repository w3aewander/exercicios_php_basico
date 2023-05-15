<h4>Vetores</h4>

<div style="margin: 10px auto; padding: 20px;">

    <p>
      Em PHP, um vetor (ou array) é uma estrutura de dados que permite armazenar múltiplos valores em uma única variável. Os vetores podem conter elementos de diferentes tipos, como números, strings, booleanos, outros vetores e assim por diante. Aqui estão alguns exemplos de definição e uso de vetores em PHP: 
    </p>

    <p>
        Exemplo de uso de vetores em PHP:
    </p>
    <code>
    <pre>
    // Definindo um vetor numérico
    $idades = [25, 30, 35, 40];

    // Definindo um vetor de strings
    $nomes = ["João", "Maria", "Pedro"];

    // Definindo um vetor misto
    $informacoes = ["João", 25, true];

    // Definindo um vetor associativo
    $aluno = [
        "nome" => "Maria",
        "idade" => 30,
        "cidade" => "São Paulo"
    ];

    // Usando os vetores definidos
    echo "Idades: " . implode(", ", $idades);
    echo "Nomes: " . implode(", ", $nomes);
    echo "Informações: " . implode(", ", $informacoes);

    echo "Nome do aluno: " . $aluno["nome"];
    echo "Idade do aluno: " . $aluno["idade"];
    echo "Cidade do aluno: " . $aluno["cidade"];


    </pre>
    </code>

    <p>
    Nesse exemplo, definimos quatro vetores: $idades, $nomes, $informacoes e $aluno. Os primeiros três são exemplos de vetores indexados, onde os elementos são acessados por índices numéricos. O último exemplo é um vetor associativo, onde os elementos são associados a chaves (ou nomes) em vez de índices numéricos. 
    Usamos a função implode() para converter os elementos do vetor em uma string separada por vírgulas, para exibi-los na tela. Também podemos acessar elementos individuais do vetor associativo usando a sintaxe $vetor[chave], onde chave é o nome atribuído ao elemento.
    Esses são apenas exemplos básicos de vetores em PHP. Existem muitas outras operações e funcionalidades que podem ser realizadas com vetores, como adicionar elementos, remover elementos, percorrer o vetor com loops, entre outros.
    </p>
</div>