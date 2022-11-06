<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title>Insert title here</title>
    </head>
    <body>
        <h1>Procesando formulario</h1>
        <?php if($errores): ?>
        <div style="border: 1px solid #ccc; color: red">
            <ul><?php foreach($errores as $texto): ?>
                <li><?=$texto?></li>
                <?php endforeach;?>
            </ul>
        </div>
        <?php endif; ?>
        <FORM action="" METHOD="post">
            <p>Nombre: 
                <INPUT TYPE="text" NAME="nombre"
                       value="<?=ValorPost('nombre')?>">
                <?=TextoError('nombre')?>
            </p>
            <p>Edad: 
                <INPUT TYPE="text" NAME="edad"
                       value="<?=ValorPost('edad')?>">
            </p>
            <button name="button" type="submit">Enviar </button>
        </FORM>
    </body>
</html>