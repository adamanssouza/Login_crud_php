<?php
require_once '../vendor/autoload.php';
require_once '../Controladores/banco.php';

use Dompdf\Dompdf;

$banco = new Banco();
$pessoas = $banco->getPessoas();

$html = '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Pessoas</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        h1 { text-align: center; }
    </style>
</head>
<body>
    <h1>Lista de Pessoas</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>Endereço</th>
            </tr>
        </thead>
        <tbody>';

foreach ($pessoas as $p) {
    $nomeCompleto = htmlspecialchars($p['nome'] . ' ' . $p['sobrenome']);
    $idade = htmlspecialchars($p['idade']);
    $sexo = htmlspecialchars($p['sexo']);
    $endereco = htmlspecialchars($p['endereco']);

    $html .= "<tr>
                <td>{$nomeCompleto}</td>
                <td>{$idade}</td>
                <td>{$sexo}</td>
                <td>{$endereco}</td>
              </tr>";
}

$html .= '
        </tbody>
    </table>
</body>
</html>';

// Gera o PDF
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("lista_pessoas.pdf", ["Attachment" => false]); 
exit;
?>
