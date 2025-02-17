<!DOCTYPE html>
<html>
<head>
    <title>Teste de Ranking</title>
</head>
<body>
    <h1>Ranking</h1>

    <p>Quantidade de acessos ao site: {{ $param['contAcesso'] }} </p>
    <p>Contagem de diferentes ips ao site: {{ $param['contVisitantes'] }} </p>

    <p>Contagem de acesso por rotas da aplicação: </p>

    <table style="border: solid 2px black; text-align: center;" >
    <thead>
        <tr>
            <th style="border: solid 2px black; text-align: center;">Rotas</th>
            <th style="border: solid 2px black; text-align: center;">Qt Acessos</th>
        </tr>
    </thead>
    <tbody>
        @foreach($param['contAcessRotas'] as $item)
            <tr>
                <td style="border: solid 2px black; text-align: center;" >{{ $item['rota'] }}</td>
                <td style="border: solid 2px black; text-align: center;" >{{ $item['contRota'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


    <hn>

</body>
</html>
