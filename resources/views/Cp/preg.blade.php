@extends('lay')

@section('content')
<br><br><br>
<h1>Creacion de Cuestionario</h1>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
    #btn1{
        border-radius: 25px;
    }

    #btn3{
        border-radius: 25px;
    }

    #detail{
          border: 2px solid;
          padding: 20px;
          width: 300px;
          resize: both;
          overflow: auto;
    }

    #sel{
        border-radius: 25px;
    }

</style>
<script>
$(document).ready(function() {
    var max_fields      = 50; //maximo de casetas permitidas
    var wrapper         = $(".input_fields_wrap");  //Fields wrapper
    var list            = $("selector");
    var add_button      = $(".add_field_button");   //Agregar boton Id
    var x = 1;                                      //Caja inicial

    //Funcion para agregar botones
    $(add_button).click(function(e){
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //incremento de cajas de texto
            $(wrapper).append('<div><input type="text" name="texto[]"/> <select name="respuesta[]" id="sel"> <option value="0" >V/F</option> <option value="1">Texto</option> <option value="2">Multiple</option> </select> <a href="#" class="remove_field">Remover</a></div>'); //agregar input box
        }
    });

    //Funcion para poder borrar un elemento
    $(wrapper).on("click",".remove_field", function(e){
        e.preventDefault(); $(this).parent('div').remove();
        x--;
    })
});
</script>

<form name="formulario" method="POST" enctype="multipart/form-data" multiple>
<div>
    <h2>Titulo</h2>
    <input type="text" name="titulo">
    <h2>Autor</h2>
    <input type="text" name="autor">
    <h2>Detalle</h2>
    <input type="text" name="detalle" id="detail">
    <h2>Folio</h2>
    <input type="text" name="folio">
</div>
<h1>Creación de las preguntas</h1>
<div class="input_fields_wrap">
    <button class="add_field_button" id="btn1">Agregar campos</button>
    <div><input type="text" name="texto[]"> <select name="respuesta[]" id="sel"> <option value="0">V/F</option> <option value="1">Texto</option> <option value="2">Multiple</option> </select> </div>
</div>
<h1>Terminar</h1>
{!! CSRF_field() !!}
<input type="submit" id="btn3">
</form>
@endsection
