<?php

namespace App2;

class SingleTon
{
    private static SingleTon $instance;

    // Защищаем конструктор от создания объекта через оператор new
    private function __construct()
    {
        // Инициализация объекта
    }

    // Защищаем от создания через клонирование
    private function __clone()
    {
        // Предотвращение клонирования объекта
    }

    // Защищаем от создания через unserialize
    private function __wakeup()
    {
        // Предотвращение десериализации объекта
    }

    // Метод для получения единственного экземпляра класса
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Другие методы класса
}