<?php
return [

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

'accepted' => ':attribute elfogadása kötelező.',
'accepted_if' => ':attribute elfogadása kötelező, amikor :other :value.',
'active_url' => ':attribute nem érvényes URL.',
'after' => ':attribute dátumnak kell lennie :date után.',
'after_or_equal' => ':attribute dátumnak kell lennie :date után vagy ugyanazon a napon.',
'alpha' => ':attribute csak betűket tartalmazhat.',
'alpha_dash' => ':attribute csak betűket, számokat, kötőjeleket és alulvonásokat tartalmazhat.',
'alpha_num' => ':attribute csak betűket és számokat tartalmazhat.',
'array' => ':attribute tömbnek kell lennie.',
'before' => ':attribute dátumnak kell lennie :date előtt.',
'before_or_equal' => ':attribute dátumnak kell lennie :date előtt vagy ugyanazon a napon.',
'between' => [
    'numeric' => ':attribute értéke :min és :max között kell legyen.',
    'file' => ':attribute mérete :min és :max kilobájt között kell legyen.',
    'string' => ':attribute hossza :min és :max karakter között kell legyen.',
    'array' => ':attribute tömbnek :min és :max közötti elemből kell állnia.',
],
'boolean' => ':attribute mezőnek igaznak vagy hamisnak kell lennie.',
'confirmed' => ':attribute megerősítése nem egyezik meg.',
'current_password' => 'A jelszó helytelen.',
'date' => ':attribute nem érvényes dátum.',
'date_equals' => ':attribute dátumának egyeznie kell a követelt :date értékkel.',
'date_format' => ':attribute formátuma nem egyezik a követelményekkel: :format.',
'declined' => ':attribute elutasítása kötelező.',
'declined_if' => ':attribute elutasítása kötelező, ha :other :value.',
'different' => ':attribute és :other különbözőnek kell lennie.',
'digits' => ':attribute értéke :digits számjegyből kell állnia.',
'digits_between' => ':attribute értéke :min és :max számjegy között kell lennie.',
'dimensions' => ':attribute érvénytelen képméretekkel rendelkezik.',
'distinct' => ':attribute mező értéke ismétlődő.',
'email' => ':attribute érvényes e-mail címnek kell lennie.',
'ends_with' => ':attribute értékének az alábbiak egyikével kell végződnie: :values.',
'enum' => 'A kiválasztott :attribute érvénytelen.',
'exists' => 'A kiválasztott :attribute érvénytelen.',
'file' => ':attribute fájlnak kell lennie.',
'filled' => ':attribute mezőnek értékkel kell rendelkeznie.',
'gt' => [
    'numeric' => ':attribute értéke nagyobbnak kell lennie :value-nál.',
    'file' => ':attribute mérete nagyobbnak kell lennie :value kilobájtnál.',
    'string' => ':attribute hosszúsága nagyobbnak kell lennie :value karakternél.',
    'array' => ':attribute tömbnek több elemből kell állnia, mint :value.',
],
'gte' => [
    'numeric' => ':attribute értéke nagyobbnak vagy egyenlőnek kell lennie :value-nál.',
    'file' => ':attribute mérete nagyobbnak vagy egyenlőnek kell lennie :value kilobájtnál.',
    'string' => ':attribute hosszúsága nagyobbnak vagy egyenlőnek kell lennie :value karakternél.',
    'array' => ':attribute tömbnek :value vagy több elemet kell tartalmaznia.',
],
'image' => ':attribute képnek kell lennie.',
'in' => 'A kiválasztott :attribute érvénytelen.',
'in_array' => ':attribute értéke nem létezik :other-ben.',
'integer' => ':attribute értéknek egész számnak kell lennie.',
'ip' => ':attribute érvényes IP címnek kell lennie.',
'ipv4' => ':attribute érvényes IPv4 címnek kell lennie.',
'ipv6' => ':attribute érvényes IPv6 címnek kell lennie.',
'json' => ':attribute érvényes JSON karaktersorozatnak kell lennie.',
'lt' => [
    'numeric' => ':attribute értéke kisebbnek kell lennie :value-nál.',
    'file' => ':attribute mérete kisebbnek kell lennie :value kilobájtnál.',
    'string' => ':attribute hosszúsága kisebbnek kell lennie :value karakternél.',
    'array' => ':attribute tömbnek kevesebb elemet kell tartalmaznia, mint :value.',
],
'lte' => [
    'numeric' => ':attribute értéke kisebbnek vagy egyenlőnek kell lennie :value-nál.',
    'file' => ':attribute mérete kisebbnek vagy egyenlőnek kell lennie :value kilobájtnál.',
    'string' => ':attribute hosszúsága kisebbnek vagy egyenlőnek kell lennie :value karakternél.',
    'array' => ':attribute tömbnek nem lehet több eleme, mint :value.',
],
'mac_address' => ':attribute érvényes MAC címnek kell lennie.',
'max' => [
    'numeric' => ':attribute értéke nem lehet nagyobb, mint :max.',
    'file' => ':attribute mérete nem lehet nagyobb, mint :max kilobájt.',
    'string' => ':attribute hosszúsága nem lehet nagyobb, mint :max karakter.',
    'array' => ':attribute tömb nem tartalmazhat több elemet, mint :max.',
],
'mimes' => ':attribute fájltípusnak kell lennie: :values.',
'mimetypes' => ':attribute fájltípusnak kell lennie: :values.',
'min' => [
    'numeric' => ':attribute értéke legalább :min kell legyen.',
    'file' => ':attribute mérete legalább :min kilobájt kell legyen.',
    'string' => ':attribute hosszúsága legalább :min karakter kell legyen.',
    'array' => ':attribute tömbnek legalább :min elemet kell tartalmaznia.',
],
'multiple_of' => ':attribute értékének többszörösének kell lennie :value-nak.',
'not_in' => 'A kiválasztott :attribute érvénytelen.',
'not_regex' => ':attribute formátuma érvénytelen.',
'numeric' => ':attribute értékének számnak kell lennie.',
'password' => 'A jelszó helytelen.',
'present' => ':attribute mezőnek jelen kell lennie.',
'prohibited' => ':attribute mező tilos.',
'prohibited_if' => ':attribute mező tilos, ha :other :value.',
'prohibited_unless' => ':attribute mező tilos, kivéve ha :other :values.',
'prohibits' => ':attribute mező megtiltja, hogy :other jelen legyen.',
'regex' => ':attribute formátuma érvénytelen.',
'required' => ':attribute mező kötelező.',
'required_array_keys' => ':attribute mező értékeket kell tartalmazzon: :values.',
'required_if' => ':attribute mező kötelező, ha :other :value.',
'required_unless' => ':attribute mező kötelező, kivéve ha :other :values.',
'required_with' => ':attribute mező kötelező, ha van :values.',
'required_with_all' => ':attribute mező kötelező, ha mindegyik :values érték jelen van.',
'required_without' => ':attribute mező kötelező, ha nincs :values.',
'required_without_all' => ':attribute mező kötelező, ha egyik :values sem jelen van.',
'same' => ':attribute és :other megegyező kell legyen.',
'size' => [
    'numeric' => ':attribute értéke :size kell legyen.',
    'file' => ':attribute mérete :size kilobájt kell legyen.',
    'string' => ':attribute hosszúsága :size karakter kell legyen.',
    'array' => ':attribute tömbnek tartalmaznia kell :size elemet.',
],
'starts_with' => ':attribute értékének az alábbiak egyikével kell kezdődnie: :values.',
'string' => ':attribute értékének szövegnek kell lennie.',
'timezone' => ':attribute érvényes időzónának kell lennie.',
'unique' => ':attribute már foglalt.',
'uploaded' => ':attribute feltöltése sikertelen.',
'url' => ':attribute érvényes URL-nek kell lennie.',
'uuid' => ':attribute érvényes UUID-nek kell lennie.',

/*
|--------------------------------------------------------------------------
| Custom Validation Language Lines
|--------------------------------------------------------------------------
|
| Here you may specify custom validation messages for attributes using the
| convention "attribute.rule" to name the lines. This makes it quick to
| specify a specific custom language line for a given attribute rule.
|
*/

'custom' => [
    'attribute-name' => [
        'rule-name' => 'egyedi-üzenet',
    ],
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
    'name' => 'A név',
    'email' => 'Az email',
    'password' => 'A jelszó',
    'birth_place'=>'A születési hely',
    'birth_date'=>'A születési dátum',
    'mother_name'=>'Az édesanya'
],


];
