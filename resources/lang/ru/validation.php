<?php

return [

    'required' => 'Заполните обязательное поле :attribute',
    'max' => [
        'string' => 'Длина поля :attribute превышает допустимое количество символов',
    ],
    'custom' => [
        'FIO' => [
            'unique' => 'Автор с таким ФИО уже существует',    
            'max' => 'Длина поля :attribute превышает допустимое количество символов',
            ],
        'name' => [
            'unique' => 'Книга с таким названием уже существует',
        ],
        'price' => [
            'numeric' => 'Поле цена должно быть числом',
            'min' => 'Цена должна быть положительным числом',
            'max' => 'Цена должна быть меньше 100000000',            
        ],
        'author_id' => [
            'required' => 'У каждой книги должен быть автор',
        ]
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'FIO' => 'ФИО',
        'name' => 'Название',
        
    ],

];
