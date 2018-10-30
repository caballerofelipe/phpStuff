<?

//*****************************************************************
//	Flat Estrategia Digital <http://www.flat.cl/>
//	<contacto@flat.cl>
//
//	Description:
//		Tabulation using printf
//	Un par de links de ayuda
//		http://alvinalexander.com/programming/printf-format-cheat-sheet
//*****************************************************************

$letra = array(
	'a',
	'b',
	'c',
	'd',
	'e',
);

$fraseCorta = array(
	'hola que tal?',
	'bien y tu?',
	'como te va?',
	'donde estas?',
	'que haces?',
);

header('Content-Type: text/plain');

echo "Más info aquí: http://alvinalexander.com/programming/printf-format-cheat-sheet\n\n\n";

echo "Estas son las variables usadas:\n";
echo ".....................\n";
echo <<<'EOF'
$letra = array(
	'a',
	'b',
	'c',
	'd',
	'e',
);

$fraseCorta = array(
	'hola que tal?',
	'bien y tu?',
	'como te va?',
	'donde estas?',
	'que haces?',
);
EOF;
echo "\n\n";
echo "\n\n\n******************************************\n\n\n";

echo "Este código:\n";
echo ".....................\n";
echo <<<'EOF'
echo "Tabla, los valores justificados a la DERECHA:\n";
printf("%5s%6s%15s\n", 'fila', 'letra', 'frase corta');
for ($i = 0; $i < count($fraseCorta); $i++) {
	printf("%5s%6s%15s\n", $i, $letra[$i], $fraseCorta[$i]);
}
EOF;
echo "\n.....................\n";
echo "Genera lo siguiente:\n";
echo ".....................\n";
echo "Tabla, los valores justificados a la DERECHA:\n";
printf("%5s%6s%15s\n", 'fila', 'letra', 'frase corta');
for ($i = 0; $i < count($fraseCorta); $i++) {
	printf("%5s%6s%15s\n", $i, $letra[$i], $fraseCorta[$i]);
}
echo "\n\n\n******************************************\n\n\n";

echo "Este código:\n";
echo ".....................\n";
echo <<<'EOF'
echo "Tabla, los valores justificados a la IZQUIERDA:\n";
printf("%-5s%-6s%-15s\n", 'fila', 'letra', 'frase corta');
for ($i = 0; $i < count($fraseCorta); $i++) {
	printf("%-5s%-6s%-15s\n", $i, $letra[$i], $fraseCorta[$i]);
}
EOF;
echo "\n.....................\n";
echo "Genera lo siguiente:\n";
echo ".....................\n";
echo "Tabla, los valores justificados a la IZQUIERDA:\n";
printf("%-5s%-6s%-15s\n", 'fila', 'letra', 'frase corta');
for ($i = 0; $i < count($fraseCorta); $i++) {
	printf("%-5s%-6s%-15s\n", $i, $letra[$i], $fraseCorta[$i]);
}
echo "\n\n";
echo "\n\n\n******************************************\n\n\n";

echo "Este código:\n";
echo ".....................\n";
echo <<<'EOF'
echo "Tabla, los valores justificados a la DERECHA con CEROS al principio:\n";
printf("%05s%06s%015s\n", 'fila', 'letra', 'frase corta');
printf("%5s%6s%15s\n", 'fila', 'letra', 'frase corta');
for ($i = 0; $i < count($fraseCorta); $i++) {
	printf("%05s%06s%015s\n", $i, $letra[$i], $fraseCorta[$i]);
}
EOF;
echo "\n.....................\n";
echo "Genera lo siguiente:\n";
echo ".....................\n";
echo "Tabla, los valores justificados a la DERECHA con CEROS al principio:\n";
printf("%05s%06s%015s\n", 'fila', 'letra', 'frase corta');
printf("%5s%6s%15s\n", 'fila', 'letra', 'frase corta');
for ($i = 0; $i < count($fraseCorta); $i++) {
	printf("%05s%06s%015s\n", $i, $letra[$i], $fraseCorta[$i]);
}