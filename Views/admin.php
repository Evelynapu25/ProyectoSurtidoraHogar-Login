<?php
session_start();
if (!isset($_SESSION['user'])) {
  header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('include/cabezera.php'); ?>
</head>
<!------------------------------------- Verificamos el tipo de usuario: Empleado  ---------------------------->
<body class="hold-transition sidebar-mini layout-fixed"  <?php if ($_SESSION['user'] == "Empleado") { ?>>

  <div class="wrapper">

<!-- navegacion -->
<?php include('Include/navegacion.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row" id="contenido_principal">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">PRINCIPAL</h1>
            </div><!-- /.col -->
        </div>
    </section>
    <!-- /.content -->
</div>

<!-- footer -->
<?php include('Include/footer.php'); ?>
</div>
<!-- ./wrapper -->

<?php include('Include/scripts.php'); ?>    
<?php } ?>        
<!-------------------------------- Verificamos el tipo de usuario: Empleado  ---------------------------->
          <?php if ($_SESSION['user'] == "Empleado") { ?>

          <!------- Menú de empleado ------>
             <?php include('Include/footer.php'); ?>

          <?php } ?>
    
</body>

</html>

