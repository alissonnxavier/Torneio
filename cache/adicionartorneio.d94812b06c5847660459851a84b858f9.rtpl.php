<?php if(!class_exists('Rain\Tpl')){exit;}?>

<div class="container" style="font-family: Impact, Charcoal, sans-serif;">
    <form action="/slim/criatorneio" method="post">

        <div class="form-group" style="width: 10rem;">
            <label for="exampleFormControlSelect1">Selecione o nivel do cv</label>
            <select class="form-control" id="exampleFormControlSelect1" name="cv">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>8</option>
                <option>9</option>
                <option>12</option>
                <option>10</option>
            </select>
        </div> <br><br><br>

        <label>Selecione a data do torneio</label><br>
        <input type="date" name="data"><br><br><br>

        <label>Selecione a Hora do torneio</label><br>
        <input type="time" name="hora"><br><br><br>

        <button type="submit" class="btn btn-outline-success">Criar Torneio</button>
    </form>

    <p>---------------------------------</p>

    <?php $counter1=-1;  if( isset($var) && ( is_array($var) || $var instanceof Traversable ) && sizeof($var) ) foreach( $var as $key1 => $value1 ){ $counter1++; ?>
    <form action="/slim/deleta-torneio" method="post">
        
        <input type="" name="id" value="<?php echo htmlspecialchars( $value1["idtorneio"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" hidden=""><br>
        <h5><?php echo htmlspecialchars( $value1["niveldocv"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $value1["data"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $value1["hora"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>
        

        <button class="btn btn-outline-danger"> Excluir</button>
        

    </form>
    <?php } ?>


    <h4><a href="/slim">voltar</a></h4>

</div>
