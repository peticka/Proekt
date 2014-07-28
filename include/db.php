<?php


function db_insert($table, $data)
{
    global $db_connection;
    $keys = implode(",", array_keys($data));
    foreach ($data as $key => $value) {
        $val[] = '"' . $value . '"';
    }
    $vals = implode(",", $val);
    $buf = mysqli_query(
        $db_connection,
        '
        INSERT INTO '.$table.'('.$keys.')
        VALUES ('.$vals.')'
    );
    return $buf;
}

?>