<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 23-07-2016
 * Time: 11:10 PM
 */
?>
<?php
    $valor = null;
    if (isset($tag)) {
        $valor = $tag->name;
    }
?>
<div class="form-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name',$valor,['class' => 'form-control','placeholder' => 'Nombre del Tag', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
</div>
