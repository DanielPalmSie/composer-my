<?php

namespace DanielPalm\StringGenerator;

class NumberGenerator
{
    public function sumNumbersRecursively($number, $sum = 0) {
        // Добавляем текущее число к сумме
        $sum += $number;

        // Если число меньше 10, продолжаем рекурсию с увеличенным значением
        if ($number < 10) {
            return $this->sumNumbersRecursively($number + 1, $sum);
        } else {
            // Когда число достигает 10, возвращаем сумму
            return $sum;
        }
    }
}