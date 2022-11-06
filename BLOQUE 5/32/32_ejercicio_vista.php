
   <form action="32_ejercicio.php" method="POST">
        Nombre: <input type="text" name="nombre" value="<?=isset($_POST['nombre']) ? $_POST['nombre']: ''?>">
        
        <?=VerError('nombre')?>
        
        <p>Apellidos: <input type="text" name="apellidos" value="<?=isset($_POST['apellidos']) ? $_POST['apellidos']: ''?>">

        <?=VerError('apellidos')?>
      
        <p>Sexo:
        Mujer<input type="radio" name="sexo" value="mujer"
        <?php if (filter_input(INPUT_POST,'sexo')=='mujer')
            echo 'checked';
        ?>>


        Hombre<input type="radio" name="sexo" value="hombre"
        <?php if (filter_input(INPUT_POST,'sexo')=='hombre')
            echo 'checked';
        ?>>
        <?=VerError('sexo')?>

    </p>Curso:

    <?php
$opciones_dis = [
    ""=>"",
    "1"=>"1ºSMR",
    "2"=>"2ºSMR",
    "3"=>"1ºASIR",
    "4"=>"2ºASIR",
    "5"=>"1ºDAW",
    "6"=>"2ºDAW",
    ]

?>
<select name="curso">
    <?php foreach($opciones_dis as $value=>$desc) :?>
        <option value="<?=$value?>"
        <?php if (filter_input(INPUT_POST, 'opcion')==$opciones_dis)
        echo 'selected';?>><?=$desc?>
        </option>
    <?php endforeach; ?>
</select>

    <?=VerError('curso')?>

   <p>Fecha nacimiento:
        <input type="date" name="fecha" value="<?=isset($_POST['fecha']) ? $_POST['fecha']: ''?>"> <?=VerError('fecha')?></p> 
    <p>Observaciones:</p>
    <textarea id="texto" name="texto"></textarea><br><br>
        <input type="submit" value="Guardar">
       
    </form>