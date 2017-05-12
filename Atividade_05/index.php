<!DOCTYPE html>

<!--

    Faça um programa em que o usuário digite a sigla de um estado (ex.: RJ, SP). Se este estado for SP, escreva Paulista, se RJ, escreva Carioca, se MG, escreva Mineiro. Caso seja outro estado, escreva Outro Estado. 


-->

<html lang="pt-br">
    <head>
        <title>Formulário: combobox</title>
        <meta charset="utf-8">
    </head>
    <body>

        <form action="estado.php" method="POST">
            <p>
                <select name="estado">
                    <option value="outro">Outro estado</option>
                    <option value="sp">SP</option>
                    <option value="rj">RJ</option>
                    <option value="mg">MG</option>
                </select>
                <input type="submit" value="Enviar" />
            </p>
        </form>

    </body>
</html>