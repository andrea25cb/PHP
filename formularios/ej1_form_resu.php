<?php if ($_POST['edad']>=18) : ?>
    <!-- Esta bien -->
    <h1>Pagina resultados</h1>
    <p>Has enviado los datos</p>
    <pre>
        <?php print_r($_POST) ?>
    </pre>
<?php else:
   include("ej1_form_error.php");
endif; 

