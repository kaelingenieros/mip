<?php 
    include("conexion.php");
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<link rel="icon" 
      type="image/ico" 
      href="http://www.kaelingenieros.com/NMIP/admin/template_content_html/favicon.ico">

	<meta charset="utf-8" />
	<title>Información posible cliente</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/animate.min.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
	<link href="assets/plugins/ionRangeSlider/css/ion.rangeSlider.css" rel="stylesheet" />
	<link href="assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
	<link href="assets/plugins/password-indicator/css/password-indicator.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
	<link href="assets/plugins/jquery-tag-it/css/jquery.tagit.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" />
    <link href="assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand"><span><img alt="" src="assets/img/logo1.png"></img></span> MIP Project</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					<li>
						<form class="navbar-form full-width">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Buscar" />
								<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</li>
					<li class="dropdown">
						<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
							<i class="fa fa-bell-o"></i>
							<span class="label">5</span>
						</a>
						<ul class="dropdown-menu media-list pull-right animated fadeInDown">
                            <li class="dropdown-header">Notifications (5)</li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Server Error Reports</h6>
                                        <div class="text-muted f-s-11">3 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="assets/img/user-1.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Smith</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">25 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="assets/img/user-2.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Olivia</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">35 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New User Registered</h6>
                                        <div class="text-muted f-s-11">1 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New Email From John</h6>
                                        <div class="text-muted f-s-11">2 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer text-center">
                                <a href="javascript:;">View more</a>
                            </li>
						</ul>
					</li>
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/img/jarregoces.jpg" alt="" /> 
							<span class="hidden-xs">Jose Arregoces</span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="javascript:;">Editar Perfil</a></li>
							<li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
							<li><a href="javascript:;">Setting</a></li>
							<li class="divider"></li>
							<li><a href="javascript:;">Log Out</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar Usuario Logeado -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="assets/img/jarregoces.jpg" alt="" /></a>
						</div>
						<div class="info">
							Jose Arregoces
							<small>CEO MIP Project</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navegacion</li>
					<li class="has-sub active">
						<a href="javascript:;">
						    
						    <i class="fa fa-envelope-o"></i>
						    <span>Mensajes<span class="badge pull-right">9</span></span>
					    </a>
						<ul class="sub-menu">
							<li><a href="email_inbox.php">Inbox</a></li>
						    <li><a href="email_compose.php">Enviar</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-users"></i>
						    <span>CRM</span>
					    </a>
						<ul class="sub-menu">
							<li><a href="email_inbox2.php">Actividades<span class="badge pull-right">9</span></a></li>
						    <li><a href="posibles_clientes.php">Posibles Clientes</a></li>
						    <li><a href="cuentas.php">Cuentas</a></li>
						    <li><a href="oportunidades.php">Oportunidades</a></li>
						    <li><a href="informes.php">Informes</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret pull-right"></b>
							<i class="fa fa-money"></i> 
							<span>Presupuestos</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="#">Actividades<span class="badge pull-right">3</span></a></li>
						    <li><a href="#">Cuentas</a></li>
						    <li><a href="#">Oportunidades</a></li>
						    <li><a href="#">Informes</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-cogs"></i>
						    <span>Proyectos </span> 
						</a>
						<ul class="sub-menu">
							<li><a href="#">Actividades<span class="badge pull-right">8</span></a></li>
							<li><a href="#">Integracion</a></li>
							<li><a href="#">Alcance</a></li>
							<li><a href="#">Tiempo</a></li>
							<li><a href="#">Calidad</a></li>
							<li><a href="#">RR-HH</a></li>
							<li class="has-sub">
								<a href="javascript:;"><b class="caret pull-right"></b> Adquisiciones</a>
								<ul class="sub-menu">
								   <li><a href="#">Equipos</a></li>
								   <li><a href="#">Herramientas</a></li>
								   <li><a href="#">Insumos</a></li>
								   <li class="has-sub">
										<a href="javascript:;"><b class="caret pull-right"></b>Servicios</a>
										<ul class="sub-menu">
										   <li><a href="#">Alquileres</a></li>
										   <li><a href="#">Contratistas</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="#">Interesados</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-user"></i>
						    <span>RR-HH</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="#">Actividades<span class="badge pull-right">2</span></a></li>
							<li><a href="#">Empleados</a></li>
							<li><a href="#">Capacitaciones</a></li>
							<li><a href="#">Certificaciones</a></li>
							<li><a href="#">Dotacion</a></li>
							<li><a href="#">Informe Nomina</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-wrench"></i>
						    <span>Mantenimiento</span>
						</a>
						<ul class="sub-menu">
							<li><a href="#">Actividades<span class="badge pull-right">2</span></a></li>
							<li><a href="#">Equipos</a></li>
							<li><a href="#">Programas</a></li>
							<li><a href="#">Informes</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
							<i class="fa fa-cubes"></i> 
							<span>Almacen</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="#">Actividades<span class="badge pull-right">2</span></a></li>
						    <li class="has-sub">
								<a href="javascript:;"><b class="caret pull-right"></b> Ingreso</a>
								<ul class="sub-menu">
								   <li><a href="#">Equipos</a></li>
								   <li><a href="#">Herramientas</a></li>
								   <li><a href="#">Insumos</a></li>
								</ul>
							</li>
						    <li class="has-sub">
								<a href="javascript:;"><b class="caret pull-right"></b> Salidas</a>
								<ul class="sub-menu">
								   <li><a href="#">Equipos</a></li>
								   <li><a href="#">Herramientas</a></li>
								   <li><a href="#">Insumos</a></li>
								</ul>
							</li>
						    <li><a href="#">Informes</a></li>
						</ul>
					</li>

					<li class="has-sub">
					    <a href="javascript:;">
						    <b class="caret pull-right"></b>
					        <i class="fa fa-check-square-o"></i>
					        <span>Calidad</span>
					    </a>
						<ul class="sub-menu">
							<li><a href="email_system.html">Planeacion estrategica</a></li>
							<li><a href="email_newsletter.html">Gestion documental</a></li>
							<li><a href="email_newsletter.html">Auditoria</a></li>
							<li><a href="email_newsletter.html">Actas e informes</a></li>
							<li><a href="email_newsletter.html">Seguridad y Salud</a></li>
							<li><a href="email_newsletter.html">Indicadores</a></li>
							<li><a href="email_newsletter.html">Gestion de riesgos</a></li>
						</ul>
					</li>

					<li class="has-sub">
					    <a href="javascript:;">
						    <b class="caret pull-right"></b>
					        <i class="fa fa-bar-chart-o"></i>
					        <span>Administracion</span>
					    </a>
						<ul class="sub-menu">
							<li><a href="email_system.html">Configuracion</a></li>
							<li><a href="email_newsletter.html">Suscripcion</a></li>
							<li><a href="email_newsletter.html">Ayuda</a></li>
						</ul>
					</li>
					
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
<!-- begin breadcrumb -->
			
			
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">CRM</a></li>
				<li class="active">Posible Cliente</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Informacion Posible Cliente <small>eventos asociados...</small></h1>
			
			<!-- end page-header -->
			<div class="col-md-8">
			<div class="panel panel-inverse">
			    <div class="panel-heading">
			        
			        <h4 class="panel-title"><i class="fa fa-user fa-2x"></i> Detalles</h4>
			    </div>
			    <div class="panel-body">
			    	<!--iniciar Tablas-->
			    	        <h4>Informacion Empresa</h4>
                            <table class="table table-hover">
                            <?php
                            $empresa=$_GET['empresa'];
                            ?>

        
                                        <?php
        $sql2="SELECT direccion FROM empresas where nomempresa='$empresa'";
        $consult2 = mysql_query($sql2);   
        $direccion = mysql_fetch_array($consult2); ?>
                                    <tr>
                                        <th>Empresa:</th>
                                        <td><?echo $empresa;?></td>
                                        <th>Direccion:</th>
                                        <td><? echo $direccion[0];?></td>
                                    </tr>
                                
        <?php
        $sql3="SELECT ciudad FROM empresas where nomempresa='$empresa'";
        $consult3 = mysql_query($sql3);   
        $ciudad = mysql_fetch_array($consult3); ?>
        
        <?php
        $sql4="SELECT dpto FROM empresas where nomempresa='$empresa'";
        $consult4 = mysql_query($sql4);   
        $dpto = mysql_fetch_array($consult4); ?>
                                
                                    <tr>
                                        <th>Ciudad:</th>
                                        <td><? echo $ciudad[0];?></td>
                                        <th>Estado:</th>
                                        <td><? echo $dpto[0];?></td>
                                    </tr>
                                    
        <?php
        $sql5="SELECT pais FROM empresas where nomempresa='$empresa'";
        $consult5 = mysql_query($sql5);   
        $pais = mysql_fetch_array($consult5); ?>
                                    
        <?php
        $sql6="SELECT sector FROM empresas where nomempresa='$empresa'";
        $consult6 = mysql_query($sql6);   
        $sector = mysql_fetch_array($consult6); ?>
                                    <tr>
                                        <th>Pais:</th>
                                        <td><? echo $pais[0];?></td>
                                        <th>Sector Economico:</th>
                                        <td><? echo $sector[0];?></td>
                                    </tr>
                                    
        <?php
        $sql7="SELECT fuente FROM empresas where nomempresa='$empresa'";
        $consult7 = mysql_query($sql7);   
        $fuente = mysql_fetch_array($consult7); ?>
        
         <?php
        $sql8="SELECT info FROM empresas where nomempresa='$empresa'";
        $consult8 = mysql_query($sql8);   
        $info = mysql_fetch_array($consult8); ?>
                                    
                                    <tr>
                                        <th>Fuente Posible Cliente:</th>
                                        <td><? echo $fuente[0];?></td>
                                        <th>Comentarios</th>
                                        <td><? echo $info[0];?></td>
                                    
                                    </tr>
                                    
                                	
                            </table>
                            <h4>Informacion Contactos</h4>
                            <table class="table table-hover">
                            <?php echo"
                            <a href='ncontacto.php?empresa=$empresa' class='btn btn-warning m-r-5 m-b-5'><i class='fa fa-plus'></i>  Nuevo contacto</a>";
                            ?>
                            <br><br>
                                    <?php
$sql="
SELECT id, saludo, nombre, cel, email
FROM contactos
WHERE empresa = '".$empresa."'";
		$cs=mysql_query($sql,$cn);
		echo"<center>
<table class='table table-hover'>
<tr>
<td><strong>Nombre contacto</strong></td>
<td><strong>Celular</strong></td>
<td><strong>Email</strong></td>
<td><strong>Mas info</strong></td>
<td><strong>Borrar contacto</strong></td>
</tr>";
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
		
			
			
			echo "<tr>
<td>$var1 $var2</td>
<td>$var3</td>
<td>$var4</td>
<td><a  class='btn btn-s btn-icon btn-circle btn-success' title='Detalles contacto'><i class='glyphicon glyphicon-zoom-in' data-toggle='modal' data-target='#vemergente1'></i></a></td>
<td><a href='borrarcontacto.php?id=$var&empresa=$var1' class='btn btn-s btn-icon btn-circle btn-danger' title='Borrar Contacto'><i class='fa fa-times'></i></a></td>
</tr>";
			}
			
			echo "</table>
</center>";
?>
                                    
                                </tbody>
                            </table>
                                                      <h4>Actividades</h4>
                            <?php
$sql="
SELECT id, empresa, descripcion, fecha_creacion, fecha_final, estado, fecha_des
FROM actividades_cliente
WHERE empresa = '".$empresa."'";
		$cs=mysql_query($sql,$cn);
		echo"<center>
<table class='table table-hover'>
<tr>
<td><strong>Actividad</strong></td>
<td><strong>Fecha a Finalizar</strong></td>
<td><strong>Mas info</strong></td>
<td><strong>Descargar Actividad</strong></td>
</tr>";
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
			$var5=$resul[5];
			$var6=$resul[6];
		
			
			
			echo "<tr>
<td>$var2</td>
<td>$var4</td>
<td><a  class='btn btn-s btn-icon btn-circle btn-success' title='Detalles Actividad'><i class='glyphicon glyphicon-zoom-in' data-toggle='modal' data-target='#vemergente1'></i></a></td>
<td><a href='borraractividad.php?id=$var&empresa=$var1' class='btn btn-s btn-icon btn-circle btn-danger' title='Descargar Actividad'><i class='fa fa-times'></i></a></td>
</tr>";
			}
			
			echo "</table>
</center>";
?>
<?php echo"
<a href='nactividad.php?empresa=$empresa' class='btn btn-warning m-r-5 m-b-5'><i class='fa fa-plus'></i>  Nueva Actividad</a>";
?>

                            <!--<h4>Actividades Cerradas</h4>
                            <table class="table table-hover">
                            		<tr>
                                        <th>Actividad 1</th>
                                        <td>ssasasasasasasaaas</td>
                                    </tr>
                                    <tr>
                                        <th>Actividad 2</th>
                                        <td>ssasasasasasasaaas</td>
                                    </tr>
                            </table>-->
			    	<!--fin Tablas-->
			        <!--Panel Content Here-->
			    </div>
			</div>
		</div>
		<div class="col-md-4">
			<!--botones-->
		</div>
	</div>
		<!-- end #content -->
				<!-- Inicio Ventana Emergente-->
                  <div class="modal fade" id="vemergente1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Cerrar</span></button>
                          <h4 class="modal-title" id="myModalLabel">informacion Contacto</h4>
                        </div>
                        <div class="modal-body">
                             <table class="table table-hover">
                                    <tr>
                                        <th>Sr</th>
                                        <td>Alfonso Castro Mendoza</td>
                                        <th>Cumpleaño</th>
                                        <td>20 de Enero</td>
                                    </tr>
                                
                                   <tr>
                                        <th>Celular:</th>
                                        <td>300-32323232</td>
                                        <th>Tel Fijo:</th>
                                        <td>095-34543454</td>
                                    </tr>
                                    <tr>
                                        <th>email:</th>
                                        <td>user@gmail.com</td>
                                        <th>Email secundario:</th>
                                        <td>Username@gmail.com</td>
                                    </tr>
                                    
                                </tbody>
                            </table>     
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>        
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
            <!-- Fin Ventana Emergente -->
<!-- Inicio Ventana Emergente-->
                  <div class="modal fade" id="vemergente2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Cerrar</span></button>
                          <h4 class="modal-title" id="myModalLabel">informacion Contacto</h4>
                        </div>
                        <div class="modal-body">
                             <table class="table table-hover">
                                    <tr>
                                        <th>Sr</th>
                                        <td>Carlos Franco</td>
                                        <th>Cumpleaño</th>
                                        <td>20 de Enero</td>
                                    </tr>
                                
                                   <tr>
                                        <th>Celular:</th>
                                        <td>300-32323232</td>
                                        <th>Tel Fijo:</th>
                                        <td>095-34543454</td>
                                    </tr>
                                    <tr>
                                        <th>email:</th>
                                        <td>user@gmail.com</td>
                                        <th>Email secundario:</th>
                                        <td>Username@gmail.com</td>
                                    </tr>
                                    
                                </tbody>
                            </table>     
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>        
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
            <!-- Fin Ventana Emergente -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
	<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<script src="assets/plugins/masked-input/masked-input.min.js"></script>
	<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	<script src="assets/plugins/password-indicator/js/password-indicator.js"></script>
	<script src="assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
	<script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
	<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
	<script src="assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
    <script src="assets/plugins/bootstrap-daterangepicker/moment.js"></script>
    <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="assets/plugins/select2/dist/js/select2.min.js"></script>
	<script src="assets/js/form-plugins.demo.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			FormPlugins.init();
		});
	</script>
</body>
</html>