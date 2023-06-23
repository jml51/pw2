<?php
    include_once __DIR__ . '/../../../pages/client/templates/header.php';

    include_once __DIR__ . '/../../../database/connections/request.php';

    include_once __DIR__ . '/../../../src/middleware/autenticado.php';

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

<div class="container">
<?php
        include_once __DIR__. '/../../../pages/client/templates/login_form.php';


        include_once __DIR__ . '/../../../src/middleware/autenticado.php';
?>

<?php
    include_once __DIR__.'/../../../pages/client/templates/rodape.php';
?>
    
</body>
</html>