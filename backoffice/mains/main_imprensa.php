<?php 

$imprensa = getTodaImprensa();

?>

<main class="container-fluid">

    <div class="caixa mt-5">
        <table>
            <tr>
                <th>Imagem</th>
                <th>Título</th>
                <th>Texto</th>
                <th>Data Publicação</th>
                <th>Acções</th>
            </tr>

            <?php foreach($imprensa as $i): ?>

                <tr>
                    <td> <img src="<?= $i["imagem"]; ?>" alt=""></td>
                    <td><?= $i["titulo"]; ?></td>
                    <td><?= $i["texto"]; ?></td>
                    <td><?= $i["data_publicacao"]; ?></td>
                    <td>
                        <form action="editar_imprensa.php">
                            <button class="btn-editar" name="editar" value="<?= $i["id"]; ?>">
                                Editar
                            </button>
                        </form>
                        <br>
                        <form action="apagar_imprensa.php">
                            <button class="btn-apagar" name="apagar" value="<?= $i["id"]; ?>">
                                Apagar
                            </button>
                        </form>
                    </td>
                </tr>

            <?php endforeach; ?>

        </table>

        <a href="novo_imprensa.php" class="mt-5">
            <button class="btn-novo">Criar Nova Publicação</button>
        </a>
    </div>

</main>