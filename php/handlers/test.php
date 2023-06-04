<?php
$user = [
    "email" => "admin@admin.com",
    "password" => "000",
];
//echo isset($user["email"]);
function validator($user): void
{
    try {
        foreach ($user as $item => $value) {
            if (empty($value)) {
                throw new Exception("Ошибка! Не указан" . " " . $item);
            }
        }
    } catch(Exception $e){
        echo "Ошибка! Данные не валидны.", $e->getMessage();
    }
}



validator($user);