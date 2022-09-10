<?php
    header('content-type: text/css');
    $bgColor = 'darkgreen';
?>

:root{
    --font-color: lime;
}

html, body{
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

body {
    background-color: <?=$bgColor?>;
    color: var(--font-color);
}

form {
    margin :16px;
    text-align: center;
}

div {
    padding: 4px;
}

.row {
    display: flex;
    flex-direction: row;
}

.col {
    display: flex;
    flex-direction: column;
}