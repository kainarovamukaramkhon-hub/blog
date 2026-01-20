<?php require('header.php');?>
<div class="div-flex">

<form action="query.php" method="post">
<input type="hidden" name="create">
<label for="IDfirstname">Введите фамилию</label>    
<input type="text" name="firstname" id="IDfistname">
<label for="IDname">Введите имю</label>
<input type="text" name="name" id="IDname">
<label for="IDlastname">Введите отчеству</label>    
<input type="text" name="lastname" id="IDlastname">
<label for="IDtel">Введите телефон</label>
<input type="tel" name="phone" id="IDphone">
<label for="IDemail">Введите емайл</label>
<input type="IDemail" name="email" id="IDemail">
<label for="IDadres">Введите адрес</label>
<textarea name="adres" id="IDadres" cols="85" rows="5"></textarea>
<button type="submit">mnbbmb</button>
<!-- <button type="submit">Создать нового друга</button> -->
</form>

</div>
<?php require('footer.html');?>


 