<?php
include('plantilla.php');
?>
   <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>--->
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-bottom-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Envios Totales</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-edit fa-2x text-gray-300"></i>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-bottom-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Entragados</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">7</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-people-carry fa-2x text-gray-300"></i>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-bottom-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Cancelados</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">5</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-bottom-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">SOLICITUDES PENDIENTES</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-store-alt fa-2x text-gray-300"></i>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Seguimiento de Pedidos</h6>
                  <div class="dropdown no-arrow">
                    
                    
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                
                <h4 class="small font-weight-bold">Telefono <span class="float-right">Procesado</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                  <h4 class="small font-weight-bold">Reloj <span class="float-right">Pendiente</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                

                  <h4 class="small font-weight-bold">Telefono Celular <span class="float-right">Transito</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>



                  <h4 class="small font-weight-bold">Camera <span class="float-right">Entregado</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>


                  <h4 class="small font-weight-bold">Camera <span class="float-right">Entregado</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                  

                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Pedidos Totales</h6>
                  <div class="dropdown no-arrow">
                    <!---<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>---->
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Direct
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referral
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Status Colores</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
              <!-- Color System -->
              <div class="row">
               
                <div class="col-lg-6 mb-4">
                  <div class="card bg-success text-white shadow">
                    <div class="card-body">
                      Entregado
                      <div class="text-white-50 small"></div>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-6 mb-4">
                  <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                      Pendiente
                      <div class="text-white-50 small"></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-danger text-white shadow">
                    <div class="card-body">
                      Cancelado
                      <div class="text-white-50 small"></div>
                    </div>
                  </div>
                </div>
               
              </div>

            </div>

           