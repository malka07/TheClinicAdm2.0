<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Panel de Control</title>

  

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">

</head>

<body background="../img/background.jpg" style="background-size:cover";>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-black border-right" id="sidebar-wrapper">
      <div class="sidebar-heading bg-black text-white">Menú de Opciones</div>
      <div class="list-group list-group-flush">
      <a href="../turnos/" class="list-group-item list-group-item-action bg-dark text-white">Turnos</a>
        <a href="../analisis2/" class="list-group-item list-group-item-action bg-dark text-white">Análisis Clínicos</a>
        <a href="../pacientes/" class="list-group-item list-group-item-action bg-dark text-white">Pacientes</a>
        <a href="../" class="list-group-item list-group-item-action bg-dark text-white">Salir</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-black border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Ver / Ocultar</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>

      <div class="col-sm-2 text-white">
        <h2 class="mt-4">TheClinicAdm</h2>
	    </div>

      <div class="container-fluid text-white">
        <h1 class="mt-4"><img class="d-block mx-auto mb-4" src="../img/jdlsa.png" alt="" width="75" height="75"></h1>
        <p>Panel de Control.</p>
        <p>Configuración de datos para control e incorporación de información en la app móvil.</p>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
