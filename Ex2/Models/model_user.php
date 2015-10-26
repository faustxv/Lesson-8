<?php 
	class Model_Login  extends Model{
	
		public function log_in(){	
			return array(
			  // Логін, з яким можна зайти на сайт.
			  'name' => 'admin',
			  // пароль "123", але ми його не зберігаємо у відкритому вигляді, ми вписуємо тільки хеш md5.
			  'pass' => '202cb962ac59075b964b07152d234b70',
			);
		}
		public function log_out(){	
			session_start();
			session_destroy();
			// Направляємо користувача на головну сторінку.
			header('Location: /');
		}
	}
?>