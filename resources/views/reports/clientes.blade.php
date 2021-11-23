<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        .borda{
            border: solid 1px #000;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div style="text-align: center">
                <h2>Relatório de clientes</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table style="width: 100%" class="borda">
                    <thead>
                        <tr class="borda">
                            <th class="borda">Código</th>
                            <th class="borda">Nome</th>
                            <th class="borda">Telefone</th>
                            <th class="borda">Celular</th>
                            <th class="borda">Cidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cli)
                            <tr class="borda">
                                <td>{{ $cli->id }}</td>
                                <td>{{ $cli->nome }}</td>
                                <td>{{ $cli->telefone }}</td>
                                <td>{{ $cli->celular }}</td>
                                <td>{{ $cli->cidade_id }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
