<?php
echo '<style>
body {
    background-image: url(romario.jpg);
    background-repeat: no-repeat;
    text-align: center;
}
</style>';

echo '<table style="background-color: #2D57DF">
        <tr style="background-color: white;">
        <td>Nome: </td>
        <td>Numero: </td>
        </tr>
</table>';

function selecao94($nome, $numero, $corttt) { 
    echo '<table style="background-color: '.$corttt.';">
    <tr>
        <td>'.$nome.' </td>
        <td>'.$numero.' </td>
    </tr>
    </table>';
}

selecao94("Tafarel", 1, "green");
selecao94("Jorginho", 2, "yellow");
selecao94("Aldair", 13, "green");
selecao94("Márcio Santos", 15, "yellow");
selecao94("branco", 6, "green");
selecao94("Marcio Silva", 5, "yellow");
selecao94("Dunga", 8, "green");
selecao94("Marizinho", 17, "yellow");
selecao94("Zinho", 9, "green");
selecao94("Romario", 11, "yellow");
selecao94("Bebeto", 7, "green");
