<?php

return [
    'basic' => [
        'name' => 'required|min:3|max:30',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:3|max:20|confirmed',
    ],

    'information' => [
        'birth_place' => 'required|min:3|max:60',
        'mother_name' => 'required|min:3|max:60',
        'birth_date' => 'required|date|before:'.date('Y-m-d'),
    ]
];
