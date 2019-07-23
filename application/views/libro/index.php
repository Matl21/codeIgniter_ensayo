<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">

    <title>SU CHERO</title>
  </head>
  <body>

  <div>
	<a href="#">HOME</a> | 
	<a href="#">CONTACT</a> | 
	<a href="#">ABOUT</a> |
	<a href="#">SITEMAP</a>
</div>

    <h1 class="mt-5 ml-3 text-center">LIBRO</h1>

    
    
         <!-- FORMULARIO DE INGRESO DE DATOS -->
    <div id="frm" class="container mt-5" >
    
    <div class="row">

    <div class="col-4">
        <div class="form-group">
        <!-- <input class="form-control"  type="hidden" name="id" id="id_libro"> -->
        <label class="mrg-spr-ex mt-3" for="txtTitulo">Titulo</label>
        <input class="form-control"  type="text" name="titulo" id="titulo">
        </div>
        

        <div class="form-group">
        <label class="mrg-spr-ex" for="txtDescripcion">Descripcion</label>
        <input class="form-control"  type="text" name="descripcion" id="descripcion">
        </div>


        <div class="form-group">
        <label class="mrg-spr-ex" for="txtAutor">Autor</label>
        <input class="form-control"  type="text" name="autor" id="autor">
        </div>
        <!-- style="display: none" -->

        <!-- DIV OCULTO PARA REGISTRA ESTADO -->
        <div id="oculto"  class="form-group"> 
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
                <label class="custom-control-label" for="defaultUnchecked">Default unchecked</label>
            </div>
                
        <!-- Default checked -->
           <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios" checked>
            <label class="custom-control-label" for="defaultChecked">Default checked</label>
            </div>
                
        </div>    
        <button class="text-center btn btn-success" type="submit" value="agregar" id="btn">AGREGAR</button>



    
    </div>
   






    <!-- TABLA DE LOS DATOS -->
    <!-- <div class="container mt-3"> -->
    <div class="col-8">
        <table class="table">
            <!-- ENCABEZADO DE LA TABLA LIBROS-->
            <thead class="thead">
                <tr class="bg-primary">
                    <!-- <th>ID_LIBRO</th> -->
                    <th>TITULO</th>
                    <th>DESCRIPCION</th>
                    <th>AUTOR</th>
                    <th>ESTADO</th>
                    <th colspan="2">OPCIONES</th>

                </tr>
                
            </thead>
            <!-- DATOS PARA CARGAR DINAMICAMENTE -->
            <tbody id="cuerpo" class="tbody">
                
            </tbody>

        </table>
    </div>


    </div>














    </div>
   




<!-- JAVA SCRIPT DE CARGA DE DATOS -->
    <script src="<?= base_url('assets/js/script.js')?>"> </script>
    </body>
</html>