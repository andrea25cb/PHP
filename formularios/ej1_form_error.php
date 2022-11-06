<!DOCTYPE html>
<html>
    <head>
        <title>Insert title here</title>
    </head>
    <body>
        <h1>Procesando formulario</h1>
        <div style="border: 1px solid #ccc; color: red">
            Hay errores en los  campos
        </div>
        <FORM action="" METHOD="post">
            <p>HEdad: 
                <INPUT TYPE="text" NAME="edad" 
                       value="<?= $_POST['edad'] ?>">
            </p>

            <button name="button" type="submit">Enviar </button>
        </FORM>
    </body>
</html>


