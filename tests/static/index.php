<?

//*****************************************************************
//	Flat Estrategia Digital <http://www.flat.cl/>
//	<contacto@flat.cl>
//
//	Description:
//		...
//*****************************************************************

abstract class father {

	public static $who = 'papa';
	public static $type = 'persona'; // Si se cambia este campo en child para father sigue siendo el mismo
	public static $name = 'Juan'; // Al no tener definido este campo en child, si se cambia en child, se cambia aquí

	public static function show() {
		echo '<b>method: ' . __METHOD__ . '</b><br>';
		echo 'self::$who:' . self::$who;
		echo '<br>';
		echo 'self::$type: ' . self::$type;
		echo '<br>';
		echo 'self::$name: ' . self::$name;
	}

	abstract public static function changeName($name);

	abstract public static function changeType($type);
}

class child extends father {

	public static $who = 'hijo';
	public static $name = 'Juanito';

	public static function show() {
		echo '<b>method: ' . __METHOD__ . '</b><br>';
		echo 'parent::$who: ' . parent::$who;
		echo '<br>';
		echo 'self::$who:' . self::$who;
		echo '<br>';
		echo 'self::$type: ' . self::$type;
		echo '<br>';
		echo 'self::$name: ' . self::$name;
	}

	public static function changeName($name) {
		self::$name = $name;
	}

	public static function changeType($type) {
		self::$type = $type;
	}

}

child::show();
echo '<hr>';
father::show();

echo '<hr>';
echo '<hr>';

echo 'child::changeName(\'Juan Alberto\')<br>';
child::changeName('Juan Alberto');
echo 'child::changeType(\'Persona de apellido perez\')<br>';
child::changeType('Persona de apellido perez');

echo '<hr>';
echo '<hr>';

child::show();
echo '<hr>';
father::show();
