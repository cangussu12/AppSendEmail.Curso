<?php


//tenha uma lógica
try {
    //tenha uma lógica onde possa ocorrer um potencial erro ( exceção );
    echo '<h3> *** Try *** </h3> ';
    //$sql = 'Select * from clientes';
    //mysql_query($sql); //erro

    if(!file_exists('require_arquivo_a.php')) {
        throw new Error('O arquivo em questão deveria estar disponível as ' .date('d/m/Y H:i:s') . '(x horas mas não esyava. Vamos seguir mesmo assim.');
    }


} catch (Error $e) {
    echo '<h3> *** Catch Error *** </h3> ';
    echo '<p style="color: red">' . $e; '</p>';

} catch (Exception $e) {
    echo '<h3> *** Catch Excessão *** </h3>';
    echo '<p style="color: red">' . $e; '</p>';
} finally {
    echo '<h3> *** Finally *** </h3>';
}

?>