<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="listar.css">
</head>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Funcionários</title>
    <link rel="stylesheet" href="styles.css"> <!-- Inclua o arquivo CSS -->
</head>
<body>
    <div class="container">
        <h2>Lista de alunos</h2>
        <table>
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data de Admissão</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Array fictício de funcionários
                $funcionarios = [
                    [
                        'nome' => 'Maria Silva',
                        'email' => 'maria@gmail.com',
                        'foto' => 'img/funcionaria.png', 
                        'data_admissao' => '2024-01-15'
                    ],
                    [
                        'nome' => 'João Pereira',
                        'email' => 'joao@gmail.com',
                        'foto' => 'img/funcionario.png',
                        'data_admissao' => '2024-02-20'
                    ],
                    [
                        'nome' => 'Ana Souza',
                        'email' => 'ana@gmail.com',
                        'foto' => 'img/funcionaria.png',
                        'data_admissao' => '2024-03-05'
                    ]
                ];

                // Exibir os dados dos funcionários
                foreach ($funcionarios as $funcionario) {
                    echo "<tr>";
                    echo "<td><img src='" . htmlspecialchars($funcionario['foto']) . "' alt='" . htmlspecialchars($funcionario['nome']) . "' class='foto'></td>";
                    echo "<td>" . htmlspecialchars($funcionario['nome']) . "</td>";
                    echo "<td>" . htmlspecialchars($funcionario['email']) . "</td>";
                    echo "<td>" . date('d/m/Y', strtotime($funcionario['data_admissao'])) . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
