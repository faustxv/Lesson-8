<?php
//Приклад реалызацыъ методу фабрика

//Створюємо інтерфейс Продукти
interface Product{
    public function GetName();
}
//Створюємо клас А з інтерфейсом Продукти
class ConcreteProductA implements Product{
    public function GetName() { return "ProductA"; }
} 
 //Створюємо клас В з інтерфейсом Продукти
class ConcreteProductB implements Product{
    public function GetName() { return "ProductB"; }
}
//Створюємо інтерфейс Створити 
interface Creator{
    public function FactoryMethod();
} 
//Створюємо клас створитиА з інтерфейсом Створити 
class ConcreteCreatorA implements Creator{
	//В даному методі створюємо та повертаємо обєкт А
    public function FactoryMethod() { return new ConcreteProductA(); }
}
//Створюємо клас створитиВ з інтерфейсом Створити
class ConcreteCreatorB implements Creator{
	//В даному методі створюємо та повертаємо обєкт В
    public function FactoryMethod() { return new ConcreteProductB(); }
}

// Створимо масив з обєктами для перевірки роботи шаблону Фабрика
$creators = array( new ConcreteCreatorA(), new ConcreteCreatorB() );
// Переберемо масив з обєктами щоб побачити що вони мітять в собі інші обєкти
for($i = 0; $i < count($creators); $i++){
    $products[] = $creators[$i]->FactoryMethod()->getName();
}
//Зробимо гарний вигляд для виводу нашого масиву 
header("content-type:text/plain");
//виводимо масив
echo var_export($products);
 
?>