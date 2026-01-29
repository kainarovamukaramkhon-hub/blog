<a href="test29.php?null=8">Ссылка</a>
<a href="test29.php?number=4">Число</a>
<a href="test29.php?class=6">Число</a>
<?php
if (isset($_GET['null'])) echo $_GET['null'];
if (isset($_GET['number'])) echo $_GET['number'];
if (isset($_GET['class'])) echo $_GET['class'];