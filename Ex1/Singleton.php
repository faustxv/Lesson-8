<?php 
	/*
	Приклад використання шаблону Одинак. 
	*/

	class Singleton {
		//Статична властивість в якій зберігається екземпляр класу
		private static $obj = NULL;
		//Запобігаємо створенню обєкта ззовні та його копій
		private function __construct() {}
		private function __clone()     {}
		private function __wakeup()    {}
		//Повертаємо екземпляр класа або створюємо новий при його відсутності
		//Таким чином може бути лише 1 обєкт класу Singleton
		public static function getObj(){	
			if (self::$obj === NULL) {
				self::$obj = new Singleton();
			}
			return self::$obj;
		}
		// Метод додавання
		public function summ($a, $b){
			echo $a+$b;
		}
		// Метод множення
		public function mult($a, $b){
			echo $a*$b;
		}
		// Метод віднімання
		public function sub($a, $b){
			echo $a-$b;
		}
	}
//Створюється обєкт класу Singleton
Singleton::getObj()->summ(5,6);
echo '<br>';
//Обєкт вже не створюєтся, тут йде посилання на існуючий обєкт
Singleton::getObj()->mult(5,6);
echo '<br>';
//Обєкт вже не створюєтся, тут йде посилання на існуючий обєкт
Singleton::getObj()->sub(5,6);


?>