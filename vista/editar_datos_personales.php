<?php
    session_start();
    if($_SESSION['us_tipo']==1)
    {
        include_once 'layouts/header.php';
?>
  <title>EDITAR DATOS</title>
  <!-- Tell the browser to be responsive to screen width -->
<?php
    include_once 'layouts/nav.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATOS PERSONALES</h1>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../vista/adm_catalogo.php">Home</a></li>
              <li class="breadcrumb-item active">Datos personales</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section>
        <div class="content">
          <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                  <div class="card card-success card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                              <img src="../img/avatar.png" class="profile-user-img img-fluid img-circle">
                              
                            </div>
                            <h3 class="profile-username text-center text-success">
                                  nombre
                              </h3>
                              <p class="text-muted text-center">
                                Apellidos
                              </p>
                              <ul class="list-group list-group-unbordered mb-3">

                                <li class="list-group-item">
                                  <b style="color:#0B7300">Edad</b> <a class="float-right">12</a>
                                </li>
                                <li class="list-group-item">
                                  <b style="color:#0B7300">DNI</b> <a class="float-right">12</a>
                                </li>
                                <li class="list-group-item">
                                  <b style="color:#0B7300">TIPO USUARIO</b> 
                                  <span class="float-right badge badge-primary">Administrador</span>
                            
                                </li>

                              </ul>
                        </div>
                  </div>
                        <div class="card card-success">
                          <div class="card-header">
                                <h3 class="card-title">SOBRE MI</h3>
                          </div>
                          <div class="card-body">
                                <strong style="color:#0B7300" >
                                  <i class="fas fa-phone mr-1"></i> TELEFONO
                                </strong>
                                <p class="text-muted">7224608656</p>
                                <strong style="color:#0B7300" >
                                  <i class="fas fa-map-marker-alt mr-1"></i> Residencia
                                </strong>
                                <p class="text-muted">valle</p>
                                <strong style="color:#0B7300" >
                                  <i class="fas fa-at mr-1"></i> Correo
                                </strong>
                                <p class="text-muted">099</p>
                                <strong style="color:#0B7300" >
                                  <i class="fas fa-smile-wink mr-1"></i> Sexo
                                </strong>
                                <p class="text-muted">099</p>
                                <strong style="color:#0B7300" >
                                  <i class="fas fa-pencil-alt mr-1"></i>Informacion Adicional
                                </strong>
                                <p class="text-muted">099</p>
                                <button class="btn btn-block bg-gradient-danger">EDITAR</button>
                          </div>
                          <div class="card-footer">
                            <p class="text-muted">click en boton si desea editar</p>

                          </div>
                        </div>
                </div>
                <div class="col-md-9">
                  <div class="card card-succes">
                    <div class="card-header">
                      <h3 class="card-title">Editar datos Personales</h3>
                    </div>
                    <div class="card-body">
                        <form action="" class="form-horizontal">
                          <div class="form-group row">
                              <label for="telefono" class="col-sm-2" col-form-label>Telefono</label>
                              <div class="col-sm-10">
                              <input type="number" id="telefono" class="form-control">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="Residencia" class="col-sm-2" col-form-label>Residencia</label>
                              <div class="col-sm-10">
                              <input type="text" id="residencia" class="form-control">
                              </div>
                              <div class="form-group row">
                              <label for="correo" class="col-sm-2" col-form-label>Correo</label>
                              <div class="col-sm-10">
                              <input type="text" id="correo" class="form-control">
                              </div>
                              <div class="form-group row">
                              <label for="sexo" class="col-sm-2" col-form-label>Sexo</label>
                              <div class="col-sm-10">
                              <input type="text" id="sexo" class="form-control">
                              </div>
                              <div class="form-group row">
                              <label for="adicional" class="col-sm-2 col-form-label">Informacion Adicional</label>
                              <div class="col-sm-10">
                              <textarea class="form-control"  id="adicional" cols="30" rows="10"></textarea>
                              </div>
                          </div>
                          <div class="form-group row">
                            <div class="offset-dm-2 col-sm-10 float-right">
                                <button class="btn btn-block btn-outline-success">GUARDAR</button>
                            </div>
                          </div>
                        </form>
                    </div>
                    <div class="card-footer">
                      <p class="text-muted">Cuidado con ingresar datos erroneos</p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

<?php
    include_once 'layouts/footer.php';
    
    }
    else
    {
        header('Location: ../index.php');
    }

?>