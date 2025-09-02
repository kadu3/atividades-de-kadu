// questão 1 
<?php
for ($i = 1; $i <= 30; $i++) {
    echo $i . PHP_EOL;
}
?>

// questão 2
<?php
$numero = 7; 
$contador = 1;

while ($contador <= 10) {
    $resultado = $numero * $contador;
    echo "$numero x $contador = $resultado\n";
    $contador++;
}
?>

//questão 3
<?php
$soma = 0;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $soma += $i;
    }
}

echo "A soma dos números pares de 1 a 100 é: $soma";
?>

// questão 4 
<?php

$notas = [8.5, 7.0, 9.2, 6.8, 8.0];

$soma = 0;

foreach ($notas as $nota) {
    $soma += $nota;
}

$media = $soma / count($notas);

echo "Média de Satisfação: " . number_format($media, 1);

?>

// quetão 5
<?php

$leituras = [10, 12, 15, 15, 18, 20, 20, 21];

$anterior = null;

foreach ($leituras as $leitura) {
    if ($leitura === $anterior) {
        echo "Primeiro valor repetido consecutivamente: $leitura";
        break; 
    }
    $anterior = $leitura;
}

?>
// questão 6
<?php

$nomes = ["joão", "maria", "", "ana", "CARLOS", " "];

foreach ($nomes as $nome) {
    
    $nome = trim($nome);
    
    if ($nome !== "") {
        
        $nomeNormalizado = ucfirst(strtolower($nome));
        echo $nomeNormalizado . "\n";
    }
}

?>
 //questão 7
<?php

$produtos = [
    [
        "nome" => "Teclado",
        "preco" => 120.50,
        "quantidade" => 10
    ],
    [
        "nome" => "Mouse",
        "preco" => 60.00,
        "quantidade" => 25
    ],
    [
        "nome" => "Monitor",
        "preco" => 899.99,
        "quantidade" => 5
    ],
    [
        "nome" => "Cabo HDMI",
        "preco" => 25.00,
        "quantidade" => 30
    ]
];

$valorTotalEstoque = 0;

echo "Relatório de Estoque\n";
echo "---------------------\n";

foreach ($produtos as $produto) {
    $nome = $produto["nome"];
    $preco = $produto["preco"];
    $quantidade = $produto["quantidade"];
    $totalProduto = $preco * $quantidade;

    $valorTotalEstoque += $totalProduto;

    echo "Produto: $nome\n";
    echo "Preço: R$ " . number_format($preco, 2, ',', '.') . "\n";
    echo "Quantidade: $quantidade\n";
    echo "Total: R$ " . number_format($totalProduto, 2, ',', '.') . "\n";
    echo "---------------------\n";
}

echo "Valor Total em Estoque: R$ " . number_format($valorTotalEstoque, 2, ',', '.') . "\n";

?>
//questão 8
<?php

$contador = 10;

do {
    echo $contador . "\n";
    $contador--;
} while ($contador > 0);

echo "Lançar!\n";

?>
//questão 9
<?php

$vendas = [120, 80, 100, 150, 90, 60, 70]; // 

$soma = 0;
$dias = 0;

foreach ($vendas as $venda) {
    $soma += $venda;
    $dias++;
    if ($soma >= 500) {
        break;
    }
}

echo "Dias necessários para atingir R$500: $dias\n";

?>
//questão 10
<?php

$produtos = [
    ["nome" => "HD Externo", "categoria" => "armazenamento", "preco" => 350.00],
    ["nome" => "Monitor", "categoria" => "periféricos", "preco" => 900.00],
    ["nome" => "SSD", "categoria" => "armazenamento", "preco" => 500.00],
    ["nome" => "Teclado", "categoria" => "periféricos", "preco" => 150.00],
    ["nome" => "Pen Drive", "categoria" => "armazenamento", "preco" => 80.00],
];

echo "Produtos da categoria 'armazenamento':\n";

foreach ($produtos as $produto) {
    if ($produto["categoria"] === "armazenamento") {
        echo "- " . $produto["nome"] . " (R$ " . number_format($produto["preco"], 2, ',', '.') . ")\n";
    }
}

?>
//questão 11
<?php

$pontuacoes = [45, 78, 32, 90, 56, 89, 12];

$maior = null;
$menor = null;

foreach ($pontuacoes as $pontuacao) {
    if ($maior === null || $pontuacao > $maior) {
        $maior = $pontuacao;
    }
    if ($menor === null || $pontuacao < $menor) {
        $menor = $pontuacao;
    }
}

echo "Maior pontuação: $maior\n";
echo "Menor pontuação: $menor\n";

?>
// questão 12
<?php

$alunos = [
    "Ana" => [true, true, true, true, false],
    "Bruno" => [true, false, false, true, false],
    "Carla" => [true, true, true, true, true],
    "Daniel" => [true, false, true, false, true],
    "Eva" => [false, false, false, true, false]
];

echo "Alunos com frequência igual ou superior a 75%:\n";

foreach ($alunos as $nome => $presencas) {
    $totalAulas = count($presencas);
    $presentes = 0;

    foreach ($presencas as $presente) {
        if ($presente) {
            $presentes++;
        }
    }

    $percentual = ($presentes / $totalAulas) * 100;

    if ($percentual >= 75) {
        echo "- $nome: " . number_format($percentual, 0) . "%\n";
    }
}

?>

//questão 13
<?php

$pedidos = [
    ["total" => 150.00, "status" => "pago"],
    ["total" => 200.00, "status" => "pendente"],
    ["total" => 100.00, "status" => "pago"],
    ["total" => 80.00,  "status" => "cancelado"],
    ["total" => 120.00, "status" => "pago"]
];

$somaPagos = 0;
$quantidadePagos = 0;

foreach ($pedidos as $pedido) {
    if ($pedido["status"] === "pago") {
        $somaPagos += $pedido["total"];
        $quantidadePagos++;
    }
}

if ($quantidadePagos > 0) {
    $ticketMedio = $somaPagos / $quantidadePagos;
    echo "Ticket médio dos pedidos pagos: R$ " . number_format($ticketMedio, 2, ',', '.') . "\n";
} else {
    echo "Nenhum pedido pago encontrado.\n";
}

?>

//questão 14
<?php

$respostas = [200, 404, 200, 404, 500, 302];

$padrão = [404, 200, 404];

$encontrado = false;

for ($i = 0; $i <= count($respostas) - 3; $i++) {
    if (
        $respostas[$i]     === $padrão[0] &&
        $respostas[$i + 1] === $padrão[1] &&
        $respostas[$i + 2] === $padrão[2]
    ) {
        $encontrado = true;
        break;
    }
}

if ($encontrado) {
    echo "Padrão 404, 200, 404 encontrado.\n";
} else {
    echo "Padrão 404, 200, 404 não encontrado.\n";
}

?>
// questão 15
<?php

$livros = [
    ["titulo" => "O Hobbit", "disponivel" => true],
    ["titulo" => "1984", "disponivel" => true],
    ["titulo" => "Dom Casmurro", "disponivel" => false],
    ["titulo" => "A Revolução dos Bichos", "disponivel" => false],
    ["titulo" => "Capitães da Areia", "disponivel" => true]
];

$encontrado = false;

foreach ($livros as $livro) {
    if (!$livro["disponivel"]) {
        echo "Primeiro livro indisponível: " . $livro["titulo"] . "\n";
        $encontrado = true;
        break;
    }
}

if (!$encontrado) {
    echo "Todos os livros estão disponíveis.\n";
}

?>

// questão 16

<?php

$cadastros = [
    ["nome" => "Ana",     "email" => "ana@email.com",   "idade" => 22, "senha" => "123456"],
    ["nome" => "",        "email" => "bruno@email.com", "idade" => 30, "senha" => "abcdef"],
    ["nome" => "Carla",   "email" => "carlamail.com",   "idade" => 25, "senha" => "123456"],
    ["nome" => "Daniel",  "email" => "daniel@mail.com", "idade" => 17, "senha" => "123456"],
    ["nome" => "Eva",     "email" => "eva@mail.com",    "idade" => 20, "senha" => "123"]
];

foreach ($cadastros as $index => $usuario) {
    $mensagem = "OK";

    if (trim($usuario["nome"]) === "") {
        $mensagem = "Erro: nome vazio";
    } elseif (!filter_var($usuario["email"], FILTER_VALIDATE_EMAIL)) {
        $mensagem = "Erro: e-mail inválido";
    } elseif ($usuario["idade"] < 18) {
        $mensagem = "Erro: idade menor que 18";
    } elseif (strlen($usuario["senha"]) < 6) {
        $mensagem = "Erro: senha muito curta";
    }

    echo "Cadastro " . ($index + 1) . ": $mensagem\n";
}
?>

// questão 17
<?php

$temperaturas = [18, 22, 27, 19, 21, 25, 30, 17, 23, 26];

$frio = 0;
$ameno = 0;
$quente = 0;

foreach ($temperaturas as $temp) {
    if ($temp < 20) {
        $frio++;
    } elseif ($temp <= 25) {
        $ameno++;
    } else {
        $quente++;
    }
}

echo "Classificação de Temperaturas:\n";
echo "Frio (<20°C): $frio\n";
echo "Ameno (20–25°C): $ameno\n";
echo "Quente (>25°C): $quente\n";

?>
// questão 18
<?php

$produtos = [
    ["nome" => "Teclado",     "estoque" => 15],
    ["nome" => "Mouse",       "estoque" => 0],
    ["nome" => "Monitor",     "estoque" => 5],
    ["nome" => "Pen Drive",   "estoque" => 0],
    ["nome" => "HD Externo",  "estoque" => 8],
    ["nome" => "SSD",         "estoque" => 0]
];

$rupturas = 0;

echo "Produtos com ruptura de estoque:\n";

foreach ($produtos as $produto) {
    if ($produto["estoque"] === 0) {
        echo "- " . $produto["nome"] . "\n";
        $rupturas++;
    }
}

echo "Total de rupturas: $rupturas\n";

?>

//questão 19
<?php

$tentativas = 0;

do {
    $numero = rand(1, 100);
    $tentativas++;
} while ($numero !== 50);

echo "Número 50 sorteado após $tentativas tentativa(s).\n";

?>
// questão 20
<?php

$linhas = 4;
$colunas = 5;

$contador = 1;

for ($i = 0; $i < $linhas; $i++) {
    for ($j = 0; $j < $colunas; $j++) {
      
        printf("%4d", $contador);
        $contador++;
    }
    echo "\n"; 
}

?>
