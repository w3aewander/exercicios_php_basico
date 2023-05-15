<h4>Manipulando arquivos de texto</h4>

<div style="margin: 10px auto; padding: 20px;">
 
    <!-- introdução -->
    <p>
    Em PHP, existem diversas funções disponíveis para manipulação de arquivos de texto. Vou mostrar alguns exemplos básicos de como realizar operações como ler, escrever, pesquisar e excluir dados de arquivos de texto.
    </p>


    <!-- exemplo de código -->
    <!-- ler dados de um arquivo -->
    <h5>Ler dados em arquivo de texto</h5>
    <p>
        <code>
            <pre>
            $nomeArquivo = 'dados.txt';
            $conteudo = file_get_contents($nomeArquivo);
            echo $conteudo;
            </pre>
        </code>
    </p>
    <h5>Ler dados em arquivo de texto</h5>
    <p>
        <code><pre>
        //variável contendo o caminho do arquivo no sistema.
        $path = "caminho_do_arquivo";    
        
        //abra o arquivo de texto no modo leitura (r)
        $fp = fopen($path, 'r');

        //percorra cada linha do arquivo
        while ( ! feof($p)){
            echo fgets($fp, 1020);
        }
        //fechar o arquivo
        fclose($fp);

        </pre></code>
    </p>

    <h5>Escrever dados em arquivo de texto</h5>
    <p>
        <code><pre>
        //variável contendo o caminho do arquivo no sistema.
        $path = "caminho_do_arquivo";    
        
        //abra o arquivo de texto no modo escrita (r)
        file_put_contents($path, "dados para serem gravados");

        </pre></code>
    </p>
    <p>
        <code><pre>
        //variável contendo o caminho do arquivo no sistema.
        $path = "caminho_do_arquivo";    
        
        //abra o arquivo de texto no modo leitura (r)
        $fp = fopen($path, 'w');

        //grave o conteúdo desejado no arquivo
        fwrite($fp, "conteudo ou a string desejada para gravar", 1024);
        
        //fechar o arquivo
        fclose($fp);

        </pre></code>
    </p>

    <h5>Pesquisar dados em um arquivo de texto</h5>
    <p>
        <code><pre>
        $nomeArquivo = 'dados.txt';
        $conteudo = file_get_contents($nomeArquivo);
        if (strpos($conteudo, 'exemplo') !== false) {
            echo "A palavra 'exemplo' foi encontrada no arquivo.";
        } else {
            echo "A palavra 'exemplo' não foi encontrada no arquivo.";
        }
        </pre></code>
    </p>

    <h5>Excluir dados em arquivo de texto</h5>
    <p>
        <code><pre>
        $nomeArquivo = 'dados.txt';
        file_put_contents($nomeArquivo, '');
        echo "Dados excluídos com sucesso!";
        </pre></code>
    </p>/
    <p>Também pode-se abrir o arquivo percorrer linha a linha, enviar 
       apenas o conteúdo da linha que se quer manter para outro arquivo,
       e depois desse procedimento,  apagar o conteúdo do arquivo original e em seguindo gravar o conteudo do arquivo gerado temporariamente para o arquivo original e por último, apagar o arquivo auxliar.. (visto na prática)

    <!-- resumo do conteúdo -->
    <p>
    
    </p>
</div>