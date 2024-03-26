<?php

return [
    'name' => 'required|min:3|max:30',
    'email' => 'required|email|unique:users,email',
    'password' => 'required|min:3|max:20|confirmed',
];
