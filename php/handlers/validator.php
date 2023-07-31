<?php
function validator($user)
{
        foreach ($user as $item => $value) {
            if($value === 0) continue;
            if (empty($value)) {
               return throw new Exception("Ошибка! Не указан" . " " . $item);
            }
        }
}
// Здесь выбрасываю только ошибку без обертки try catch , т.к валидатор будет встраиваться в другие скрипты с уже
//существующей оберткой







    