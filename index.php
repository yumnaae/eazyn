<?php 
// 1.koneksi ke mysql
require_once("config/connect.php");

// 2.membuat query sesuai kebutuhan
$query = "select izin.*, guru.nama as nama_guru, bk.nama as nama_bk
          from izin 
          inner join guru on guru.id = izin.guru_id
          inner join bk on bk.id = izin.bk_id
          where siswa_id = 2";

// 3.menjalankan query
$run_sql = mysqli_query($is_connect, $query);
//var_dump($sql);  //tips debugging menggunakan var_dump

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>. ° • eazyn ° . ☆</title>
    <link
      rel="shortcut icon"
      type="image/png"
      href="assets/images/logos/emantap.png"
    />
    <link rel="stylesheet" href="assets/css/styles.min.css" />
  </head>

  <body>
    <!--  Body Wrapper -->
    <div
      class="page-wrapper"
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin6"
      data-sidebartype="full"
      data-sidebar-position="fixed"
      data-header-position="fixed"
    >
      <!-- Sidebar Start -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
          <div
            class="brand-logo d-flex align-items-center justify-content-between"
          >
            <a href="./index.html" class="text-nowrap logo-img">
              <img src="assets/images/logos/logo1.png" width="110" alt="" />
            </a>
            <div
              class="close-btn d-xl-none d-block sidebartoggler cursor-pointer"
              id="sidebarCollapse"
            >
              <i class="ti ti-x fs-8"></i>
            </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link"
                  href="./index.html"
                  aria-expanded="false"
                >
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </li>
              <!-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">UI COMPONENTS</span>
            </li> -->
              <li class="sidebar-item">
                <a
                  class="sidebar-link"
                  href="./buat_izin.php"
                  aria-expanded="false"
                >
                  <span>
                    <i class="ti ti-article"></i>
                  </span>
                  <span class="hide-menu">Buat Izin</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link"
                  href="./riwayat.html"
                  aria-expanded="false"
                >
                  <span>
                    <i class="ti ti-alert-circle"></i>
                  </span>
                  <span class="hide-menu">Riwayat</span>
                </a>
              </li>
              <!-- <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Card</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Forms</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                <span>
                  <i class="ti ti-typography"></i>
                </span>
                <span class="hide-menu">Typography</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Login</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">EXTRA</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Icons</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Sample Page</span>
              </a>
            </li> -->
            </ul>
            <!-- <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex">
              <div class="unlimited-access-title me-3">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
                <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
              </div>
              <div class="unlimited-access-img">
                <img src="assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
              </div>
            </div>
          </div> -->
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!--  Sidebar End -->
      <!--  Main wrapper -->
      <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
          <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
              <li class="nav-item d-block d-xl-none">
                <a
                  class="nav-link sidebartoggler nav-icon-hover"
                  id="headerCollapse"
                  href="javascript:void(0)"
                >
                  <i class="ti ti-menu-2"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                  <i class="ti ti-bell-ringing"></i>
                  <div class="notification bg-primary rounded-circle"></div>
                </a>
              </li>
            </ul>
            <div
              class="navbar-collapse justify-content-end px-0"
              id="navbarNav"
            >
              <ul
                class="navbar-nav flex-row ms-auto align-items-center justify-content-end"
              >
                <!-- <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a> -->
                <li class="nav-item dropdown">
                  <a
                    class="nav-link nav-icon-hover"
                    href="javascript:void(0)"
                    id="drop2"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <img
                      src="assets/images/profile/jake2.jpeg"
                      alt=""
                      width="35"
                      height="35"
                      class="rounded-circle"
                    />
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                    aria-labelledby="drop2"
                  >
                    <div class="message-body">
                      <!-- <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a> -->
                      <a
                        href="javascript:void(0)"
                        class="d-flex align-items-center gap-2 dropdown-item"
                      >
                        <i class="ti ti-mail fs-6"></i>
                        <p class="mb-0 fs-3">My Account</p>
                      </a>
                      <!-- <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a> -->
                      <a
                        href="./authentication-login.html"
                        class="btn btn-outline-primary mx-3 mt-2 d-block"
                        >Logout</a
                      >
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </header>
        <!--  Header End -->
        <div class="container-fluid">
          <!--  Row 1 -->
          <div class="row">
            <div class="col-lg-8 d-flex align-items-strech">
              <div class="card w-100">
                <div class="card-body p-4">
                  <h5 class="card-title fw-semibold mb-4">
                    Riwayat izin
                  </h5>
                  <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                      <thead class="text-dark fs-4">
                        <tr>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Id</h6>
                          </th>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Validasi oleh</h6>
                          </th>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Alasan</h6>
                          </th>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Status</h6>
                          </th>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Tanggal</h6>
                          </th>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0"><i class="ti ti-dots-vertical"></i>
                            </h6>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        // 4. menampilkan hasil query
                        $fetch_data = mysqli_fetch_all($run_sql, MYSQLI_BOTH);
                          foreach($fetch_data as $data){
                          // while($data = mysqli_fetch_assoc($sql)){
                            ?>
                          <tr>
                            <td class="border-bottom-0">
                              <h6 class="fw-semibold mb-0"><?php echo $data[0]?></h6>
                            </td>
                            <td class="border-bottom-0">
                              <h6 class="fw-semibold mb-1"><?php echo $data[10]?></h6>
                              <?php echo $data["nama_bk"];?>
                              <!-- <span class="fw-normal">Bangun Parikesit</span> -->
                            </td>
                            <td class="border-bottom-0">
                              <p class="mb-0 fw-normal"><?php echo $data["alasan"]?></p>
                            </td>
                            <td class="border-bottom-0">
                              <div class="d-flex align-items-center gap-2">
                                <?php
                                  if($data["is_approved"] == 0){
                                    ?>
                                    <span class="badge bg-info rounded-3 fw-semibold">ajukan</span>
                                    <?php
                                  }else if($data["is_approved"] == 1){
                                    ?>
                                    <span class="badge bg-warning rounded-3 fw-semibold">validasi guru</span>
                                    <?php
                                  }else if($data["is_approved"] == 2){
                                    ?>
                                    <span class="badge bg-success rounded-3 fw-semibold">disetujui</span>
                                    <?php
                                  }else {
                                    ?>
                                    <span class="badge bg-danger rounded-3 fw-semibold">ditolak</span>
                                    <?php
                                  }
                                ?>
                              </div>
                            </td>
                            <td class="border-bottom-0">
                              <h6 class="fw-semibold"><?php echo $data["tanggal"];?></h6>
                            </td>
                          </tr>
                          <tr>
                            <?php
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <!-- Yearly Breakup -->
                  <div class="card overflow-hidden">
                    <div class="card-body p-4">
                      <h5 class="card-title mb-9 fw-semibold">
                        Izin Tersedia
                      </h5>
                      <div class="row align-items-center">
                        <div class="col-8">
                          <?php
                          $query1 = "select value from setting where nama_setting = 'pembatasan'";
                          $query2 = "select count(id) as jumlah_izin from izin where siswa_id = 2 and is_approved = 2";
                          // menjalankan query
                          $sql1 = mysqli_query($is_connect, $query1);
                          $sql2 = mysqli_query($is_connect, $query2);
                          // mengambil data
                          
                          $fetch_data1 = mysqli_fetch_all($sql1, MYSQLI_ASSOC);
                          $fetch_data2 = mysqli_fetch_all($sql2, MYSQLI_ASSOC);
                          // pre itu buat baca indent lebih mudah
                          // echo "<pre>";var_dump($fetch_data1[0]['value']);
                          // echo $fetch_data1[0]['value']-$fetch_data2[0]['jumlah_izin'];
                          ?>
                          <h4 class="fw-semibold mb-3"><?php echo $fetch_data1[0]['value']-$fetch_data2[0]['jumlah_izin'] ?></h4>
                          <!-- <div class="d-flex align-items-center mb-3">
                            <span
                              class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center"
                            >
                              <i class="ti ti-arrow-up-left text-success"></i>
                            </span>
                            <p class="text-dark me-1 fs-3 mb-0">+ 1</p>
                            <p class="fs-3 mb-0">sakit</p>
                          </div> -->
                        </div>
                        <div class="col-4">
                          <div class="d-flex justify-content-center">
                            <div id="breakup"></div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="d-flex align-items-center">
                            <div class="me-4">
                              <span
                                class="round-8 bg-primary rounded-circle me-2 d-inline-block"
                              ></span>
                              <span class="fs-2">Tersedia</span>
                            </div>
                            <div>
                              <span
                                class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"
                              ></span>
                              <span class="fs-2">Sudah digunakan</span>
                            </div>
                          </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-lg-12">
                  Monthly Earnings
                  <div class="card">
                    <div class="card-body">
                      <div class="row alig n-items-start">
                        <div class="col-8">
                          <h5 class="card-title mb-9 fw-semibold">
                            Sisa izin
                          </h5>
                          <h4 class="fw-semibold mb-3">tersisa 7x </h4>
                          <div class="d-flex align-items-center pb-1">
                            <span
                              class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center"
                            >
                              <i class="ti ti-arrow-down-right text-danger"></i>
                            </span>
                            <p class="text-dark me-1 fs-3 mb-0">3x</p>
                            <p class="fs-3 mb-0">1 tahun terakhir</p>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="d-flex justify-content-end">
                            <div
                              class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center"
                            >
                              <i class="ti ti-currency-dollar fs-6"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="earning"></div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body p-4">
                  <div class="mb-4">
                    <h5 class="card-title fw-semibold">Cara Izin di Eazyn?</h5>
                  </div>
                  <ul class="timeline-widget mb-0 position-relative mb-n5">
                    <li
                      class="timeline-item d-flex position-relative overflow-hidden"
                    >
                      <div
                        class="timeline-time text-dark flex-shrink-0 text-end"
                      >
                        1
                      </div>
                      <div
                        class="timeline-badge-wrap d-flex flex-column align-items-center"
                      >
                        <span
                          class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"
                        ></span>
                        <span
                          class="timeline-badge-border d-block flex-shrink-0"
                        ></span>
                      </div>
                      <div class="timeline-desc fs-3 text-dark mt-n1">
                        login menggunakan akun anda
                      </div>
                    </li>
                    <li
                      class="timeline-item d-flex position-relative overflow-hidden"
                    >
                      <div
                        class="timeline-time text-dark flex-shrink-0 text-end"
                      >
                        2
                      </div>
                      <div
                        class="timeline-badge-wrap d-flex flex-column align-items-center"
                      >
                        <span
                          class="timeline-badge border-2 border border-info flex-shrink-0 my-8"
                        ></span>
                        <span
                          class="timeline-badge-border d-block flex-shrink-0"
                        ></span>
                      </div>
                      <div
                        class="timeline-desc fs-3 text-dark mt-n1"
                      >
                        ajukan izin menggunakan format yang tersedia
                        <a
                          href="javascript:void(0)"
                          class="text-primary d-block fw-normal"
                          >#ML-3467</a
                        > 
                      </div>
                    </li>
                    <li
                      class="timeline-item d-flex position-relative overflow-hidden"
                    >
                      <div
                        class="timeline-time text-dark flex-shrink-0 text-end"
                      >
                        3
                      </div>
                      <div
                        class="timeline-badge-wrap d-flex flex-column align-items-center"
                      >
                        <span
                          class="timeline-badge border-2 border border-success flex-shrink-0 my-8"
                        ></span>
                        <span
                          class="timeline-badge-border d-block flex-shrink-0"
                        ></span>
                      </div>
                      <div class="timeline-desc fs-3 text-dark mt-n1">
                        tunggu verifikasi dari guru pengampu
                      </div>
                    </li>
                    <li
                      class="timeline-item d-flex position-relative overflow-hidden"
                    >
                      <div
                        class="timeline-time text-dark flex-shrink-0 text-end"
                      >
                        4
                      </div>
                      <div
                        class="timeline-badge-wrap d-flex flex-column align-items-center"
                      >
                        <span
                          class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"
                        ></span>
                        <span
                          class="timeline-badge-border d-block flex-shrink-0"
                        ></span>
                      </div>
                      <div
                        class="timeline-desc fs-3 text-dark mt-n1" 
                      >
                        tunggu verifikasi dari guru BK
                        <a
                          href="javascript:void(0)"
                          class="text-primary d-block fw-normal"
                          >#ML-3467</a
                        > 
                      </div>
                    </li>
                    <li
                      class="timeline-item d-flex position-relative overflow-hidden"
                    >
                      <div
                        class="timeline-time text-dark flex-shrink-0 text-end"
                      >
                        5
                      </div>
                      <div
                        class="timeline-badge-wrap d-flex flex-column align-items-center"
                      >
                        <span
                          class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"
                        ></span>
                        <span
                          class="timeline-badge-border d-block flex-shrink-0"
                        ></span>
                      </div>
                      <div
                        class="timeline-desc fs-3 text-dark mt-n1"
                      >
                        anda mendapat kode verifikasi izin yang telah dibuat
                      </div>
                    </li>
                    <li
                      class="timeline-item d-flex position-relative overflow-hidden"
                    >
                      <div
                        class="timeline-time text-dark flex-shrink-0 text-end"
                      >
                        6
                      </div>
                      <div
                        class="timeline-badge-wrap d-flex flex-column align-items-center"
                      >
                        <span
                          class="timeline-badge border-2 border border-success flex-shrink-0 my-8"
                        ></span>
                      </div>
                      <div class="timeline-desc fs-3 text-dark mt-n1">
                        tunjukkan kode verifikasi ke pos satpam
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch">
              
            </div>
          </div> -->
          <!-- <div class="row">
            <div class="col-sm-6 col-xl-3">
              <div class="card overflow-hidden rounded-2">
                <div class="position-relative">
                  <a href="javascript:void(0)"
                    ><img
                      src="assets/images/products/s4.jpg"
                      class="card-img-top rounded-0"
                      alt="..."
                  /></a>
                  <a
                    href="javascript:void(0)"
                    class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    data-bs-title="Add To Cart"
                    ><i class="ti ti-basket fs-4"></i
                  ></a>
                </div>
                <div class="card-body pt-3 p-4">
                  <h6 class="fw-semibold fs-4">Boat Headphone</h6>
                  <div
                    class="d-flex align-items-center justify-content-between"
                  >
                    <h6 class="fw-semibold fs-4 mb-0">
                      $50
                      <span class="ms-2 fw-normal text-muted fs-3"
                        ><del>$65</del></span
                      >
                    </h6>
                    <ul class="list-unstyled d-flex align-items-center mb-0">
                      <li>
                        <a class="me-1" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                      <li>
                        <a class="me-1" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                      <li>
                        <a class="me-1" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                      <li>
                        <a class="me-1" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                      <li>
                        <a class="" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="card overflow-hidden rounded-2">
                <div class="position-relative">
                  <a href="javascript:void(0)"
                    ><img
                      src="assets/images/products/s5.jpg"
                      class="card-img-top rounded-0"
                      alt="..."
                  /></a>
                  <a
                    href="javascript:void(0)"
                    class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    data-bs-title="Add To Cart"
                    ><i class="ti ti-basket fs-4"></i
                  ></a>
                </div>
                <div class="card-body pt-3 p-4">
                  <h6 class="fw-semibold fs-4">MacBook Air Pro</h6>
                  <div
                    class="d-flex align-items-center justify-content-between"
                  >
                    <h6 class="fw-semibold fs-4 mb-0">
                      $650
                      <span class="ms-2 fw-normal text-muted fs-3"
                        ><del>$900</del></span
                      >
                    </h6>
                    <ul class="list-unstyled d-flex align-items-center mb-0">
                      <li>
                        <a class="me-1" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                      <li>
                        <a class="me-1" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                      <li>
                        <a class="me-1" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                      <li>
                        <a class="me-1" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                      <li>
                        <a class="" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="card overflow-hidden rounded-2">
                <div class="position-relative">
                  <a href="javascript:void(0)"
                    ><img
                      src="assets/images/products/s7.jpg"
                      class="card-img-top rounded-0"
                      alt="..."
                  /></a>
                  <a
                    href="javascript:void(0)"
                    class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    data-bs-title="Add To Cart"
                    ><i class="ti ti-basket fs-4"></i
                  ></a>
                </div>
                <div class="card-body pt-3 p-4">
                  <h6 class="fw-semibold fs-4">Red Valvet Dress</h6>
                  <div
                    class="d-flex align-items-center justify-content-between"
                  >
                    <h6 class="fw-semibold fs-4 mb-0">
                      $150
                      <span class="ms-2 fw-normal text-muted fs-3"
                        ><del>$200</del></span
                      >
                    </h6>
                    <ul class="list-unstyled d-flex align-items-center mb-0">
                      <li>
                        <a class="me-1" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                      <li>
                        <a class="me-1" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                      <li>
                        <a class="me-1" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                      <li>
                        <a class="me-1" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                      <li>
                        <a class="" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-sm-6 col-xl-3">
              <div class="card overflow-hidden rounded-2">
                <div class="position-relative">
                  <a href="javascript:void(0)"
                    ><img
                      src="assets/images/products/s11.jpg"
                      class="card-img-top rounded-0"
                      alt="..."
                  /></a>
                  <a
                    href="javascript:void(0)"
                    class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    data-bs-title="Add To Cart"
                    ><i class="ti ti-basket fs-4"></i
                  ></a>
                </div>
                <div class="card-body pt-3 p-4">
                  <h6 class="fw-semibold fs-4">Cute Soft Teddybear</h6>
                  <div
                    class="d-flex align-items-center justify-content-between"
                  >
                    <h6 class="fw-semibold fs-4 mb-0">
                      $285
                      <span class="ms-2 fw-normal text-muted fs-3"
                        ><del>$345</del></span
                      >
                    </h6>
                    <ul class="list-unstyled d-flex align-items-center mb-0">
                      <li>
                        <a class="me-1" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                      <li>
                        <a class="me-1" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                      <li>
                        <a class="me-1" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                      <li>
                        <a class="me-1" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                      <li>
                        <a class="" href="javascript:void(0)"
                          ><i class="ti ti-star text-warning"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">
              created by . ° • yumnz ° . ☆ 
              <!-- <a
                href="ymzna.sija-brigde.tech"
                target="_blank"
                class="pe-1 text-primary text-decoration-underline"
                >ymzna@gmail.com</a
              > -->
              | all rights reserved
            </p>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sidebarmenu.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="assets/js/dashboard.js"></script>
  </body>
</html>
