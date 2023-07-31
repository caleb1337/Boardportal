<?php
session_start();
if(isset($_SESSION['user'])){
require 'templates/header.php';
require 'templates/navbar.php';

?>
<div class="container-lg">
<form class="form-floating" method="post" action="./php/controllers/advert-place.php">
  <textarea class="form-control" name="userAdvertText" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Текст объявления</label>
  <p>Ограничение по длине текста: 5000 символов</p>
  <button type="submit" class="btn btn-primary">Разместить</button>
</form>
</div>

<?php
require 'templates/footer.php';
}else{
   http_response_code(401);
   die('CODE 401. UNAUTHORIZED!!!.PLEASE LOG IN TO CONTINUE'); 
};
?>