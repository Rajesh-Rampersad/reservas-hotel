<div class="content-wrapper" style="min-height: 717px;">

  <section class="content-header">

    <div class="container-fluid">

      <div class="row mb-2">

        <div class="col-sm-6">

          <h1>Categorías</h1>

        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
            <li class="breadcrumb-item active">Categorías</li>

          </ol>

        </div>

      </div>

    </div><!-- /.container-fluid -->

  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">

      <div class="row">

        <div class="col-12">

          <!-- Default box -->
          <div class="card card-info card-outline">

            <div class="card-header">

              <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#crearCategoria">Crear nueva categoría</button>

            </div>
            <!-- /.card-header -->

            <div class="card-body">
              
              <table class="table table-bordered table-striped dt-responsive tablaCategorias" width="100%">
        
                <thead>

                  <tr>

                    <th style="width:10px">#</th> 
                    <th>Ruta</th>
                    <th>Color</th>
                    <th>Tipo</th>
                    <th>Imagen</th>
                    <th>Descripción</th>
                    <th>Características</th>
                    <th>Continental Temp. Alta</th>
                    <th>Continental Temp. Baja</th>
                    <th>Americano Temp. Alta</th>
                    <th>Americano Temp. Baja</th>
                    <th style="width:100px">Acciones</th>         

                  </tr>   

                </thead>

                <tbody>

                 <!--  <tr>
                    
                    <td>1</td>
                    
                    <td>
                      habitacion-tipo-suite
                    </td> 

                    <td>
                      <i style="color:#847059" class="fas fa-square"></i>
                    </td>

                    <td>
                      Suite
                    </td>

                    <td>
                      <img src="vistas/img/suite/portada.png" class="img-fluid">
                    </td> 

                    <td>
                      Lorem ipsum dolor sit amet
                    </td> 

                    <td>
                 
                      <div class="badge badge-secondary">
                        <i class="fas fa-bed"></i> 
                        cama 2 x 2
                      </div>
               
                      <div class="badge badge-secondary">
                        <i class="fas fa-tv"></i> 
                        TV de 42 Pulg
                      </div>
               
                      <div class="badge badge-secondary">
                       <i class="fas fa-tint"></i> 
                        Agua Caliente
                      </div>
               
                      <div class="badge badge-secondary">
                        <i class="fas fa-water"></i> 
                        Jacuzzi
                      </div>
               
                      <div class="badge badge-secondary">
                        <i class="fas fa-toilet"></i> 
                        Baño privado
                      </div>
               
                      <div class="badge badge-secondary">
                        <i class="fas fa-couch"></i> 
                       Sofá
                      </div>
               
                      <div class="badge badge-secondary">
                        <i class="far fa-image"></i> 
                        Balcón
                      </div>
               
                      <div class="badge badge-secondary">
                        <i class="fas fa-wifi"></i> 
                        Servicio Wifi
                      </div>
                       
                    </td>

                    <td>$ <?php echo number_format(350000)?></td>
                    <td>$ <?php echo number_format(300000)?></td>
                    <td>$ <?php echo number_format(420000)?></td>
                    <td>$ <?php echo number_format(380000)?></td>

                    <td>
                      <div class="btn-group">
                        <button class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt text-white"></i></button>  
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>  
                      </div>
                    </td>

                  </tr> -->

                </tbody>

              </table>

            </div>
            <!-- /.card-body -->

          </div>
          <!-- /.card -->

        </div>

      </div>

    </div>

  </section>
  <!-- /.content -->

</div>

<!--=====================================
Modal Crear Categorías
======================================-->

<div class="modal" id="crearCategoria">

  <div class="modal-dialog">

    <div class="modal-content">

      <form method="post" enctype="multipart/form-data">

        <!-- Modal Header -->
        <div class="modal-header bg-info">
          <h4 class="modal-title">Crear Categoría</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">

          <div class="input-group mb-3">
           
            <div class="input-group-append input-group-text">
              <span class="fas fa-list-ul"></span>
            </div>

            <input type="text" class="form-control" name="rutaCategoria" placeholder="Ingresa la ruta de la categoría" required> 

          </div>

           <div class="colorPicker input-group mb-3 colorpicker-component">        

             <div class="input-group-append input-group-text">
               <span class="input-group-addon"><i style="background-color:rgb(166, 85, 85); "></i></span>
            </div> 

            <input type="text" placeholder="&#xf0a5; Elige color" class="form-control" style="font-family:Source Sans Pro, Font Awesome\ 5 Free" name="colorCategoria" required>

          </div>

          <div class="input-group mb-4">
           
            <div class="input-group-append input-group-text">
              <span class="fas fa-certificate"></span>
            </div>

            <input type="text" class="form-control" name="tipoCategoria" placeholder="Ingresa el tipo de categoría" required> 

          </div>

          <hr class="pb-2">

          <div class="form-group">

            <div class="form-group my-2">

              <div class="btn btn-default btn-file">

                  <i class="fas fa-paperclip"></i> Adjuntar Imagen de la Categoría

                  <input type="file" name="subirImgCategoria">
                 
              </div>

              <img class="previsualizarImgCategoria img-fluid py-2">

               <p class="help-block small">Dimensiones: 359px * 254px | Peso Max. 2MB | Formato: JPG o PNG</p>

            </div>

            <p>Escriba la descripción de la Categoría:</p>

            <textarea class="p-3" name="descripcionCategoria" style="width: 100%" maxlength="30"></textarea>

          </div>

          <hr class="pb-2">

          <p>Características de la Categoría:</p>

          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" type="checkbox" class="ml-3" value="Cama 2 x 2,fas fa-bed"> 
            <span class="badge badge-secondary"><i class="fas fa-bed"></i> Cama 2 x 2 </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" type="checkbox" class="ml-3" value="TV de 42 Pulg,fas fa-tv"> 
            <span class="badge badge-secondary"><i class="fas fa-tv"></i> TV de 42 Pulg </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" type="checkbox" class="ml-3" value="Agua Caliente,fas fa-tint"> 
            <span class="badge badge-secondary"><i class="fas fa-tint"></i> Agua Caliente </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" type="checkbox" class="ml-3" value="Jacuzzi,fas fa-water"> 
            <span class="badge badge-secondary"><i class="fas fa-water"></i> Jacuzzi </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" type="checkbox" class="ml-3" value="Baño privado,fas fa-toilet">
            <span class="badge badge-secondary"><i class="fas fa-toilet"></i> Baño privado </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" type="checkbox" class="ml-3" value="Sofá, as fa-couch"> 
            <span class="badge badge-secondary"><i class="fas fa-couch"></i> Sofá </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" type="checkbox" class="ml-3" value="Balcón,far fa-image"> 
            <span class="badge badge-secondary"><i class="far fa-image"></i> Balcón </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" type="checkbox" class="ml-3" value="Servicio Wifi,fas fa-wifi"> 
            <span class="badge badge-secondary"><i class="fas fa-wifi"></i> Servicio Wifi </span>
            </label>
          </div>

          <input type="hidden" name="caracteristicasCategoria">         

          <hr class="pb-2">

          <div class="input-group mb-3">
           
            <div class="input-group-append input-group-text">
              <span class="fas fa-dollar-sign"></span>
            </div>
            
            <input type="number" min="0" step="any" class="form-control" name="continental_alta" placeholder="Precio Plan Continental temporada alta" required> 

          </div>

           <div class="input-group mb-3">
           
            <div class="input-group-append input-group-text">
              <span class="fas fa-dollar-sign"></span>
            </div>
            
            <input type="number" min="0" step="any" class="form-control" name="continental_baja" placeholder="Precio Plan Continental temporada baja" required> 

          </div>

          <div class="input-group mb-3">
           
            <div class="input-group-append input-group-text">
              <span class="fas fa-dollar-sign"></span>
            </div>
            
            <input type="number" min="0" step="any" class="form-control" name="americano_alta" placeholder="Precio Plan americano temporada alta" required> 

          </div>

           <div class="input-group mb-3">
           
            <div class="input-group-append input-group-text">
              <span class="fas fa-dollar-sign"></span>
            </div>
            
            <input type="number" min="0" step="any" class="form-control" name="americano_baja" placeholder="Precio Plan americano temporada baja" required> 

          </div>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-between">

          <div>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>

          <div>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>

        </div>

        <?php

          $registroCategoria = new ControladorCategorias();
          $registroCategoria -> ctrRegistroCategoria();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
Modal Editar Categorías
======================================-->

<div class="modal" id="editarCategoria">

  <div class="modal-dialog">

    <div class="modal-content">

      <form method="post" enctype="multipart/form-data">

        <!-- Modal Header -->
        <div class="modal-header bg-info">
          <h4 class="modal-title">Editar Categoría</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">

          <input type="hidden" class="form-control" name="idCategoria">

          <div class="input-group mb-3">
           
            <div class="input-group-append input-group-text">
              <span class="fas fa-list-ul"></span>
            </div>

            <input type="text" class="form-control" name="editarRutaCategoria" required> 

          </div>

           <div class="colorPicker input-group mb-3 colorpicker-component">        

             <div class="input-group-append input-group-text">
               <span class="input-group-addon"><i></i></span>
            </div> 

            <input type="text" class="form-control" style="font-family:Source Sans Pro, Font Awesome\ 5 Free" name="editarColorCategoria" required>

          </div>

          <div class="input-group mb-4">
           
            <div class="input-group-append input-group-text">
              <span class="fas fa-certificate"></span>
            </div>

            <input type="text" class="form-control" name="editarTipoCategoria" required readonly> 

          </div>

          <hr class="pb-2">

          <div class="form-group">

            <div class="form-group my-2">

              <div class="btn btn-default btn-file">

                  <i class="fas fa-paperclip"></i> Adjuntar Imagen de la Categoría

                  <input type="file" name="editarImgCategoria">

                  <input type="hidden" name="imgCategoriaActual">
                 
              </div>

              <img class="previsualizarImgCategoria img-fluid py-2">

               <p class="help-block small">Dimensiones: 359px * 254px | Peso Max. 2MB | Formato: JPG o PNG</p>

            </div>

            <p>Escriba la descripción de la Categoría:</p>

            <textarea class="p-3" name="editarDescripcionCategoria" style="width: 100%" maxlength="30"></textarea>

          </div>

          <hr class="pb-2">

          <p>Características de la Categoría:</p>

          <div class="form-check">
            <label class="form-check-label">
            <input class="editarCheckbox" type="checkbox" class="ml-3" value="Cama 2 x 2,fas fa-bed"> 
            <span class="badge badge-secondary"><i class="fas fa-bed"></i> Cama 2 x 2 </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="editarCheckbox" type="checkbox" class="ml-3" value="TV de 42 Pulg,fas fa-tv"> 
            <span class="badge badge-secondary"><i class="fas fa-tv"></i> TV de 42 Pulg </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="editarCheckbox" type="checkbox" class="ml-3" value="Agua Caliente,fas fa-tint"> 
            <span class="badge badge-secondary"><i class="fas fa-tint"></i> Agua Caliente </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="editarCheckbox" type="checkbox" class="ml-3" value="Jacuzzi,fas fa-water"> 
            <span class="badge badge-secondary"><i class="fas fa-water"></i> Jacuzzi </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="editarCheckbox" type="checkbox" class="ml-3" value="Baño privado,fas fa-toilet"> 
            <span class="badge badge-secondary"><i class="fas fa-toilet"></i> Baño privado </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="editarCheckbox" type="checkbox" class="ml-3" value="Sofá,fas fa-couch"> 
            <span class="badge badge-secondary"><i class="fas fa-couch"></i> Sofá </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="editarCheckbox" type="checkbox" class="ml-3" value="Balcón,far fa-image"> 
            <span class="badge badge-secondary"><i class="far fa-image"></i> Balcón </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="editarCheckbox" type="checkbox" class="ml-3" value="Servicio Wifi,fas fa-wifi"> 
            <span class="badge badge-secondary"><i class="fas fa-wifi"></i> Servicio Wifi </span>
            </label>
          </div>

          <input type="hidden" name="editarCaracteristicasCategoria">         

          <hr class="pb-2">

          <div class="input-group mb-3">
           
            <div class="input-group-append input-group-text">
              <span class="fas fa-dollar-sign"></span>
            </div>
            
            <input type="number" min="0" step="any" class="form-control" name="editar_continental_alta" placeholder="Precio Plan Continental temporada alta" required> 

          </div>

           <div class="input-group mb-3">
           
            <div class="input-group-append input-group-text">
              <span class="fas fa-dollar-sign"></span>
            </div>
            
            <input type="number" min="0" step="any" class="form-control" name="editar_continental_baja" placeholder="Precio Plan Continental temporada baja" required> 

          </div>

          <div class="input-group mb-3">
           
            <div class="input-group-append input-group-text">
              <span class="fas fa-dollar-sign"></span>
            </div>
            
            <input type="number" min="0" step="any" class="form-control" name="editar_americano_alta" placeholder="Precio Plan americano temporada alta" required> 

          </div>

           <div class="input-group mb-3">
           
            <div class="input-group-append input-group-text">
              <span class="fas fa-dollar-sign"></span>
            </div>
            
            <input type="number" min="0" step="any" class="form-control" name="editar_americano_baja" placeholder="Precio Plan americano temporada baja" required> 

          </div>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-between">

          <div>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>

          <div>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>

        </div>

        <?php

          $editarCategoria = new ControladorCategorias();
          $editarCategoria -> ctrEditarCategoria();

        ?>

      </form>

    </div>

  </div>

</div>