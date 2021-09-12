<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../Assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../Assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../Assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.html" class="nav-link">Home</a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.php" class="brand-link">
      <img src="../Assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">FrontEnd</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Home Page</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                About
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              
              <li class="nav-item">
                <a href="../About/addAboutData.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add About Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../About/aboutData.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              
              <li class="nav-item">
                <a href="../Categories/addCategoriesData.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Categories Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Categories/categoriesData.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Education
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              
              <li class="nav-item">
                <a href="../Education/addEducationData.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Education Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Education/educationData.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Education Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Experience
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              
              <li class="nav-item">
                <a href="../Experience/addExperienceData.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Experience Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Experience/experienceData.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Experience Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              
              <li class="nav-item">
                <a href="../Products/addProductsData.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Products Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Products/productsData.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Services
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              
              <li class="nav-item">
                <a href="../Services/addServicesData.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Services Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Services/servicesData.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Services Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Skills
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              
              <li class="nav-item">
                <a href="../skills/addSkillsData.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Skills Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../skills/skillsData.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Skills Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              
              <li class="nav-item">
                <a href="../Users/addUsersData.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Users Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Users/usersData.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users Data</p>
                </a>
              </li>
            </ul>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>