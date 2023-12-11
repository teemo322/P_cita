<?php
     session_start();
    
    if(!isset($_SESSION['cargo']) == 1){
    header('location: ../login.php');
  }
?>
<?php if(isset($_SESSION['id'])) { ?>
<!DOCTYPE html>
<html lang="es">
<head>
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <title>Usuarios</title>
     <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
     <link rel="icon" href="../../backend/img/icon.ico" type="image/x-icon"/>

     <!-- Fonts and icons -->
     <script src="../../backend/js/plugin/webfont/webfont.min.js"></script>
     <script>
          WebFont.load({
               google: {"families":["Lato:300,400,700,900"]},
               custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../backend/css/fonts.min.css']},
               active: function() {
                    sessionStorage.fonts = true;
               }
          });
     </script>

     <!-- CSS Files -->
     <link rel="stylesheet" href="../../backend/css/bootstrap.min.css">
     <link rel="stylesheet" href="../../backend/css/atlantis.min.css">

     <!-- CSS Just for demo purpose, don't include it in your project -->
     <link rel="stylesheet" href="../../backend/css/demo.css">
</head>
<body data-background-color="dark">
     <div class="wrapper">
          <div class="main-header">
               <!-- Logo Header -->
               <div class="logo-header" data-background-color="dark2">
                    
                    <a href="../administrador/escritorio.php" class="logo">
                         <img src="../../backend/img/logo.svg" alt="navbar brand" class="navbar-brand">
                    </a>
                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon">
                              <i class="icon-menu"></i>
                         </span>
                    </button>
                    <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                    <div class="nav-toggle">
                         <button class="btn btn-toggle toggle-sidebar">
                              <i class="icon-menu"></i>
                         </button>
                    </div>
               </div>
               <!-- End Logo Header -->

               <!-- Navbar Header -->
               <nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
                    
                    <div class="container-fluid">
                         <div class="collapse" id="search-nav">
                              <form class="navbar-left navbar-form nav-search mr-md-3">
                                   <div class="input-group">
                                        <div class="input-group-prepend">
                                             <button type="submit" class="btn btn-search pr-1">
                                                  <i class="fa fa-search search-icon"></i>
                                             </button>
                                        </div>
                                        <input type="text" placeholder="Search ..." class="form-control">
                                   </div>
                              </form>
                         </div>
                         <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                              <li class="nav-item toggle-nav-search hidden-caret">
                                   <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                        <i class="fa fa-search"></i>
                                   </a>
                              </li>
                             
                              <li class="nav-item dropdown hidden-caret">
                                   <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                        <div class="avatar-sm">
                                             <img src="../../backend/img/mujer.png" alt="..." class="avatar-img rounded-circle">
                                        </div>
                                   </a>
                                   <ul class="dropdown-menu dropdown-user animated fadeIn">
                                        <div class="dropdown-user-scroll scrollbar-outer">
                                             <li>
                                                  <div class="user-box">
                                                       <div class="avatar-lg"><img src="../../backend/img/mujer.png" alt="image profile" class="avatar-img rounded"></div>
                                                       <div class="u-text">
                                                            <h4><?php echo ucfirst($_SESSION['nombre']); ?></h4>
                                                            <p class="text-muted"><?php echo ucfirst($_SESSION['email']); ?></p><a href="../profile/mostrar.php" class="btn btn-xs btn-secondary btn-sm">ver perfil</a>
                                                       </div>
                                                  </div>
                                             </li>
                                             <li>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="../profile/mostrar.php">Mi Perfil</a>
                                                 
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="../salir.php">Cerrar sesion</a>
                                             </li>
                                        </div>
                                   </ul>
                              </li>
                         </ul>
                    </div>
               </nav>
               <!-- End Navbar -->
          </div>

          <!-- Sidebar -->
          <div class="sidebar sidebar-style-2" data-background-color="dark2">
               <div class="sidebar-wrapper scrollbar scrollbar-inner">
                    <div class="sidebar-content">
                         <div class="user">
                              <div class="avatar-sm float-left mr-2">
                                   <img src="../../backend/img/mujer.png" alt="..." class="avatar-img rounded-circle">
                              </div>
                              <div class="info">
                                   <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                        <span>
                                             <?php echo ucfirst($_SESSION['nombre']); ?>
                                             <span class="user-level">Administrator</span>
                                             <span class="caret"></span>
                                        </span>
                                   </a>
                                   <div class="clearfix"></div>

                                   <div class="collapse in" id="collapseExample">
                                        <ul class="nav">
                                             <li>
                                                  <a href="../profile/mostrar.php">
                                                       <span class="link-collapse">Mi Perfil</span>
                                                  </a>
                                             </li>
                                             
                                        </ul>
                                   </div>
                              </div>
                         </div>
                         <ul class="nav nav-primary">
                              <li class="nav-item">
                                   <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                                        <i class="fas fa-home"></i>
                                        <p>PANEL DE CONTROL</p>
                                        <span class="caret"></span>
                                   </a>
                                   
                              </li>
                              <li class="nav-section">
                                   <span class="sidebar-mini-icon">
                                        <i class="fa fa-ellipsis-h"></i>
                                   </span>
                                   <h4 class="text-section">Components</h4>
                              </li>
                              <li class="nav-item">
                                   <a data-toggle="collapse" href="#base">
                                        <i class="fas fa-layer-group"></i>
                                        <p>Citas</p>
                                        <span class="caret"></span>
                                   </a>
                                   <div class="collapse" id="base">
                                        <ul class="nav nav-collapse">
                                             <li>
                                                  <a href="../citas/mostrar.php">
                                                       <span class="sub-item">Mostrar</span>
                                                  </a>
                                             </li>
                                            
                                        </ul>
                                   </div>
                              </li>
                              <li class="nav-item">
                                   <a data-toggle="collapse" href="#sidebarLayouts">
                                        <i class="fas fa-male"></i>
                                        <p>Pacientes</p>
                                        <span class="caret"></span>
                                   </a>
                                   <div class="collapse" id="sidebarLayouts">
                                        <ul class="nav nav-collapse">
                                             <li>
                                                  <a href="../pacientes/mostrar.php">
                                                       <span class="sub-item">Mostrar</span>
                                                  </a>
                                             </li>
                                             
                                        </ul>
                                   </div>
                              </li>
                              <li class="nav-item">
                                   <a data-toggle="collapse" href="#forms">
                                        <i class="fas fa-user-md"></i>
                                        <p>Médicos</p>
                                        <span class="caret"></span>
                                   </a>
                                   <div class="collapse" id="forms">
                                        <ul class="nav nav-collapse">
                                             <li>
                                                  <a href="../medicos/mostrar.php">
                                                       <span class="sub-item">Mostrar</span>
                                                  </a>
                                             </li>
                                        </ul>
                                   </div>
                              </li>

                              <li class="nav-item">
                                   <a data-toggle="collapse" href="#bn">
                                        <i class="fas fa-table"></i>
                                        <p>Áreas médicas</p>
                                        <span class="caret"></span>
                                   </a>
                                   <div class="collapse" id="bn">
                                        <ul class="nav nav-collapse">
                                             <li>
                                                  <a href="../especialidad/mostrar.php">
                                                       <span class="sub-item">Mostrar</span>
                                                  </a>
                                             </li>
                                             
                                        </ul>
                                   </div>
                              </li>
                              <li class="nav-item">
                                   <a data-toggle="collapse" href="#calendar">
                                        <i class="fas fa-calendar-alt"></i>
                                        <p>Horarios</p>
                                        <span class="caret"></span>
                                   </a>
                                   <div class="collapse" id="calendar">
                                        <ul class="nav nav-collapse">
                                             <li>
                                                  <a href="../horarios/mostrar.php">
                                                       <span class="sub-item">Mostrar</span>
                                                  </a>
                                             </li>
                                             
                                        </ul>
                                   </div>
                              </li>
                              <li class="nav-item active submenu">
                                   <a data-toggle="collapse" href="#tables">
                                        <i class="fas fa-user"></i>
                                        <p>Usuarios</p>
                                        <span class="caret"></span>
                                   </a>
                                   <div class="collapse show" id="tables">
                                        <ul class="nav nav-collapse">
                                            
                                             <li class="active">
                                                  <a href="../usuarios/mostrar.php">
                                                       <span class="sub-item">Mostrar</span>
                                                  </a>
                                             </li>
                                        </ul>
                                   </div>
                              </li>
                              
                             
                             
                         </ul>
                    </div>
               </div>
          </div>
          <!-- End Sidebar -->
<div class="main-panel">
     <div class="content">
     <div class="page-inner">
     <div class="page-header">
          <h4 class="page-title">Usuarios</h4>
          <ul class="breadcrumbs">
               <li class="nav-home">
                    <a href="../administrador/escritorio.php">
                         <i class="flaticon-home"></i>
                    </a>
               </li>
               <li class="separator">
                    <i class="flaticon-right-arrow"></i>
               </li>
               
               <li class="nav-item">
                    <a href="../usuarios/mostrar.php">mostrar</a>
               </li>

                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
               </li>
               
               <li class="nav-item">
                    <a href="#">editar</a>
               </li>
          </ul>
          </div>
          
            <div class="row">
               <div class="col-md-12">
                 <div class="card">
               <div class="card-header">
                    <div class="card-title">Actualizar</div>
               </div>  
               <div class="card-body">
               <?php 
require '../../backend/db/config.php';
 $id = $_GET['id'];
 $sentencia = $connect->prepare("SELECT * FROM usuarios  WHERE id= '$id';");
 $sentencia->execute();

$data =  array();
if($sentencia){
  while($r = $sentencia->fetchObject()){
    $data[] = $r;
  }
}
   ?>
   <?php if(count($data)>0):?>
        <?php foreach($data as $d):?>
               <form action="" enctype="multipart/form-data" method="POST"  autocomplete="off">
                 
                 <div class="row">
                  <div class="col-md-6 col-lg-6">
                     <div class="form-group">
                    <label for="email2">Nombre</label>
                    <input type="text" required class="form-control" name="namees" value="<?php echo $d->nombre  ?>" placeholder="Enter Email">
                    <input type="hidden" name="userid" value="<?php echo $d->id  ?>">
               <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>  
                  </div>

                  <div class="col-md-6 col-lg-6">
                     <div class="form-group">
                    <label for="email2">Usuario</label>
                    <input type="text" required class="form-control" name="nameusua" value="<?php echo $d->usuario  ?>" placeholder="Enter Email">
                  
               <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>  
                  </div> 
                 </div> 

                 <div class="row">
                    <div class="col-md-6 col-lg-6">
                     <div class="form-group">
                    <label for="email2">Cargo</label>
                    <select class="form-control" name="usucarg">
                    <option value="<?php echo $d->cargo  ?>">Administrador</option>
                    
                    
               </select>
               <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>  
                  </div>

                  <div class="col-md-6 col-lg-6">
                     <div class="form-group">
                    <label for="email2">Correo</label>
                    <input type="email" required class="form-control" name="emaiusu" value="<?php echo $d->email  ?>" placeholder="Enter Email">
                  
               <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>  
                  </div> 

                 </div>
                 <div class="card-action">
                         <button type="submit" name="upd_user" class="btn btn-success">Agregar</button>
                         <button class="btn btn-danger">Cancelar</button>
                    </div>
               </form>
                <?php endforeach; ?>
  
    <?php else:?>
         <div class="alert alert-dark" role="alert">
   No hay datos.
</div>
    <?php endif; ?>
               </div>  
                 </div>   
               </div>
          </div>

        </div>

    </div>
               <footer class="footer">
                    <div class="container-fluid">
                        
                         <div class="copyright ml-auto">
                              2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
                         </div>                   
                    </div>
               </footer>
          </div>
          
          <!-- End Custom template -->
     </div>
     <!--   Core JS Files   -->
     <script src="../../backend/js/core/jquery.3.2.1.min.js"></script>
     <script src="../../backend/js/core/popper.min.js"></script>
     <script src="../../backend/js/core/bootstrap.min.js"></script>

     <!-- jQuery UI -->
     <script src="../../backend/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
     <script src="../../backend/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

     <!-- jQuery Scrollbar -->
     <script src="../../backend/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
     <!-- jQuery Sparkline -->
     <script src="../../backend/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

     <!-- Datatables -->
     <script src="../../backend/js/plugin/datatables/datatables.min.js"></script>

     <!-- Sweet Alert -->
     <script src="../../backend/js/plugin/sweetalert/sweetalert.min.js"></script>

     <!-- Atlantis JS -->
     <script src="../../backend/js/atlantis.min.js"></script>

     <?php
    include_once '../../backend/php/upd_user.php'
?>
<script type="text/javascript" src="../../backend/js/reenvio.js"></script>
<script type="text/javascript" src="../../backend/js/letra.js"></script>
<script type="text/javascript" src="../../backend/js/doct.js"></script>
</body>
</html>
<?php }else{ 
    header('Location: ../login.php');
 } ?>