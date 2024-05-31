<?php  
       session_start();
       if(!isset($_SESSION["usuario"])){
          header("location: ../");

          // se debe redireccionar al nuevo archivo de login 
       }
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Panel Administrativo HELISE</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="assets/images/favicon.svg" />

    <!-- *************
			************ CSS Files *************
		************* -->
    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />
    <link rel="stylesheet" href="assets/css/main.min.css" />

    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />
  </head>

  <body>

    <!-- Page wrapper starts -->
    <div class="page-wrapper">

      <!-- Main container starts -->
      <div class="main-container">

        <!-- Sidebar wrapper starts -->
        <nav id="sidebar" class="sidebar-wrapper">

          <!-- App brand starts -->
          <div class="app-brand p-3 mb-3">
            <a href="index.php">
              <img src="assets/images/logo.svg" class="logo" alt="Seven Bootstrap Template" />
            </a>
          </div>
          <!-- App brand ends -->

          <!-- Sidebar menu starts -->
          <div class="sidebarMenuScroll">
            <ul class="sidebar-menu">
              <li class="active current-page">
                <a href="index.php ">
                  <i class="bi bi-laptop"></i>
                  <span class="menu-text">Analytics</span>
                </a>
              </li>
              <li>
                <a href="crm.html">
                  <i class="bi bi-bar-chart-line"></i>
                  <span class="menu-text">CRM</span>
                </a>
              </li>
              <li>
                <a href="customers.html">
                  <i class="bi bi-globe"></i>
                  <span class="menu-text">Customers</span>
                </a>
              </li>
              <li>
                <a href="orders.html">
                  <i class="bi bi-shop-window"></i>
                  <span class="menu-text">Orders</span>
                </a>
              </li>
              <li>
                <a href="projects.html">
                  <i class="bi bi-terminal-split"></i>
                  <span class="menu-text">Projects</span>
                </a>
              </li>
              <li>
                <a href="expenses.html">
                  <i class="bi bi-send"></i>
                  <span class="menu-text">Expenses</span>
                </a>
              </li>
              <li>
                <a href="subscriptions.html">
                  <i class="bi bi-mouse3"></i>
                  <span class="menu-text">Subscriptions</span>
                </a>
              </li>
              <li>
                <a href="tasks.html">
                  <i class="bi bi-clipboard-check"></i>
                  <span class="menu-text">Tasks</span>
                </a>
              </li>
              <li>
                <a href="support.html">
                  <i class="bi bi-headphones"></i>
                  <span class="menu-text">Support</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">UI Elements</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="accordions.html">Accordions</a>
                  </li>
                  <li>
                    <a href="alerts.html">Alerts</a>
                  </li>
                  <li>
                    <a href="avatars.html">Avatars</a>
                  </li>
                  <li>
                    <a href="buttons.html">Buttons</a>
                  </li>
                  <li>
                    <a href="badges.html">Badges</a>
                  </li>
                  <li>
                    <a href="cards.html">Cards</a>
                  </li>
                  <li>
                    <a href="advanced-cards.html">Advanced Cards</a>
                  </li>
                  <li>
                    <a href="carousel.html">Carousel</a>
                  </li>
                  <li>
                    <a href="dropdowns.html">Dropdowns</a>
                  </li>
                  <li>
                    <a href="icons.html">Icons</a>
                  </li>
                  <li>
                    <a href="list-items.html">List Items</a>
                  </li>
                  <li>
                    <a href="modals.html">Modals</a>
                  </li>
                  <li>
                    <a href="offcanvas.html">Offcanvas</a>
                  </li>
                  <li>
                    <a href="progress.html">Progress Bars</a>
                  </li>
                  <li>
                    <a href="popovers.html">Popovers</a>
                  </li>
                  <li>
                    <a href="tabs.html">Tabs</a>
                  </li>
                  <li>
                    <a href="toasts.html">Toasts</a>
                  </li>
                  <li>
                    <a href="tooltips.html">Tooltips</a>
                  </li>
                  <li>
                    <a href="typography.html">Typography</a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-ui-checks-grid"></i>
                  <span class="menu-text">Forms</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="form-inputs.html">Form Inputs</a>
                  </li>
                  <li>
                    <a href="form-checkbox-radio.html">Checkbox &amp; Radio</a>
                  </li>
                  <li>
                    <a href="form-file-input.html">File Input</a>
                  </li>
                  <li>
                    <a href="form-validations.html">Validations</a>
                  </li>
                  <li>
                    <a href="date-time-pickers.html">Date Time Pickers</a>
                  </li>
                  <li>
                    <a href="input-tags.html">Input Tags</a>
                  </li>
                  <li>
                    <a href="input-masks.html">Input Masks</a>
                  </li>
                  <li>
                    <a href="editor.html">Editor</a>
                  </li>
                  <li>
                    <a href="form-layouts.html">Form Layouts</a>
                  </li>
                  <li>
                    <a href="form-tabs.html">Form Tabs</a>
                  </li>
                  <li>
                    <a href="form-accordion.html">Form Accordion</a>
                  </li>
                  <li>
                    <a href="form-wizard.html">Form Wizard</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="tables.html">
                  <i class="bi bi-border-all"></i>
                  <span class="menu-text">Tables</span>
                </a>
              </li>
              <li>
                <a href="calendar.html">
                  <i class="bi bi-calendar2"></i>
                  <span class="menu-text">Calendar</span>
                </a>
              </li>
              <li>
                <a href="contacts.html">
                  <i class="bi bi-wallet2"></i>
                  <span class="menu-text">Contacts</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-laptop"></i>
                  <span class="menu-text">Graphs</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="apex.html">Apex</a>
                  </li>
                  <li>
                    <a href="morris.html">Morris</a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-window-sidebar"></i>
                  <span class="menu-text">Invoices</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="create-invoice.html">Create Invoice</a>
                  </li>
                  <li>
                    <a href="view-invoice.html">View Invoice</a>
                  </li>
                  <li>
                    <a href="invoice-list.html">Invoice List</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="maps.html">
                  <i class="bi bi-pin-map"></i>
                  <span class="menu-text">Maps</span>
                </a>
              </li>
              <li>
                <a href="profile.html">
                  <i class="bi bi-filter-circle"></i>
                  <span class="menu-text">User Profile</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-upc-scan"></i>
                  <span class="menu-text">Login/Signup</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="login.html">Login</a>
                  </li>
                  <li>
                    <a href="signup.html">Signup</a>
                  </li>
                  <li>
                    <a href="forgot-password.html">Forgot Password</a>
                  </li>
                  <li>
                    <a href="reset-password.html">Reset Password</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="page-not-found.html">
                  <i class="bi bi-exclamation-diamond"></i>
                  <span class="menu-text">404</span>
                </a>
              </li>
              <li>
                <a href="comingsoon.html">
                  <i class="bi bi-exclamation-octagon"></i>
                  <span class="menu-text">Coming Soon</span>
                </a>
              </li>
              <li>
                <a href="widgets.html">
                  <i class="bi bi-box"></i>
                  <span class="menu-text">Widgets</span>
                </a>
              </li>
              <li>
                <a href="settings.html">
                  <i class="bi bi-gear"></i>
                  <span class="menu-text">Settings</span>
                </a>
              </li>
              <li>
                <a href="faq.html">
                  <i class="bi bi-chat"></i>
                  <span class="menu-text">Faq's</span>
                </a>
              </li>
              <li>
                <a href="contact-us.html">
                  <i class="bi bi-phone-vibrate"></i>
                  <span class="menu-text">Contact Us</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-code-square"></i>
                  <span class="menu-text">Menu Level</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="#!">Level One Link</a>
                  </li>
                  <li>
                    <a href="#!">
                      Level One Menu
                      <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="treeview-menu">
                      <li>
                        <a href="#!">Level Two Link</a>
                      </li>
                      <li>
                        <a href="#!">Level Two Menu
                          <i class="bi bi-chevron-right"></i>
                        </a>
                        <ul class="treeview-menu">
                          <li>
                            <a href="#!">Level Three</a>
                          </li>
                          <li>
                            <a href="#!">Level Three</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#!">Level One Link</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- Sidebar menu ends -->

          <!-- Sidebar settings starts -->
          <div class="sidebar-settings gap-1 d-lg-flex d-none">
            <a href="profile.html" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-custom-class="custom-tooltip-danger" title="Profile">
              <i class="bi bi-person"></i>
            </a>
            <a href="tasks.html" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-custom-class="custom-tooltip-warning" title=" Tasks">
              <i class="bi bi-clipboard-check"></i>
            </a>
            <a href="widgets.html" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-custom-class="custom-tooltip-success" title=" Widgets">
              <i class="bi bi-box"></i>
            </a>
            <a href="settings.html" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-custom-class="custom-tooltip-info" title=" Settings">
              <i class="bi bi-gear"></i>
            </a>
            <a href="cierra_sesion.php" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-custom-class="custom-tooltip-secondary" title="Salir">
              <i class="bi bi-power"></i>
            </a>
          </div>
          <!-- Sidebar settings ends -->

        </nav>
        <!-- Sidebar wrapper ends -->

        <!-- App container starts -->
        <div class="app-container">

          <!-- App header starts -->
          <div class="app-header d-flex align-items-center">

            <!-- Toggle buttons starts -->
            <div class="d-flex">
              <button class="pin-sidebar">
                <i class="bi bi-list lh-1"></i>
              </button>
            </div>
            <!-- Toggle buttons ends -->

            <!-- App brand sm starts -->
            <div class="app-brand-sm d-lg-none d-flex">
              <a href="index.html">
                <img src="assets/images/logo-sm.svg" class="logo" alt="Seven Bootstrap Template" />
              </a>
            </div>
            <!-- App brand sm ends -->

            <!-- Breadcrumb starts -->
            <div class="d-flex align-items-center ms-3">
              <h5 class="m-0">Panel de Control</h5>
            </div>
            <!-- Breadcrumb ends -->

            <!-- App header actions starts -->
            <div class="header-actions">

              <!-- Search container starts -->
              <div class="search-container d-xl-block d-none mx-3">
                <input type="text" class="form-control" id="searchData" placeholder="Buscarr" />
                <i class="bi bi-search"></i>
              </div>
              <!-- Search container ends -->

              <!-- Header list starts -->
              <div class="d-sm-flex d-none gap-3">
                <!--
                <div class="dropdown">
                  <a class="dropdown-toggle action-icon" href="#!" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-cart2 lh-1"></i>
                  </a>
                  
                  <div class="dropdown-menu dropdown-menu-end dropdown-300">
                    <h5 class="fw-semibold px-3 py-2">Orders</h5>
                    <div class="scroll250">
                      <div class="dropdown-item py-2 px-3">
                        <div class="position-relative">
                          <span class="badge bg-primary">Purchase</span>
                          <p class="my-1">
                            Item placed for purchase.
                          </p>
                          <p class="small m-0">Today, 06:30pm</p>
                        </div>
                      </div>
                      <div class="dropdown-item py-2 px-3">
                        <div class="position-relative">
                          <span class="badge bg-primary">Account</span>
                          <p class="my-1">
                            $180 deducted from your account.
                          </p>
                          <p class="small m-0">Today, 03:00pm</p>
                        </div>
                      </div>
                      <div class="dropdown-item py-2 px-3">
                        <div class="position-relative">
                          <span class="badge bg-primary">Team</span>
                          <p class="my-1">
                            Daniel joined today.
                          </p>
                          <p class="small m-0">Today, 03:15pm</p>
                        </div>
                      </div>
                      <div class="dropdown-item py-2 px-3">
                        <div class="position-relative">
                          <span class="badge bg-primary">Orders</span>
                          <p class="my-1">
                            Item placed for purchase.
                          </p>
                          <p class="small m-0">Today, 03:30pm</p>
                        </div>
                      </div>
                      <div class="dropdown-item py-2 px-3">
                        <div class="position-relative">
                          <span class="badge bg-primary">Placed</span>
                          <p class="my-1">
                            New item sold.
                          </p>
                          <p class="small m-0">Today, 03:45pm</p>
                        </div>
                      </div>
                    </div>
                    <div class="d-grid m-3">
                      <a href="javascript:void(0)" class="btn btn-primary">View all</a>
                    </div>
                  </div>
                </div>
                
                <div class="dropdown">
                  <a class="dropdown-toggle action-icon" href="#!" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-exclamation-triangle lh-1"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-300">
                    <h5 class="fw-semibold px-3 py-2">Errors</h5>
                    <div class="scroll250">

                      <div class="d-grid gap-2 mt-0 m-3">
                        <div class="border border-primary p-2 rounded-2">
                          <p class="mb-1">Solve critical error</p>
                          <p class="small m-0 opacity-50">Today, 07:30pm</p>
                        </div>
                        <div class="border border-primary p-2 rounded-2">
                          <p class="mb-1">Bug fix</p>
                          <p class="small m-0 opacity-50">Today, 07:45pm</p>
                        </div>
                        <div class="border border-primary p-2 rounded-2">
                          <p class="mb-1">Production issue</p>
                          <p class="small m-0 opacity-50">Today, 8:00pm</p>
                        </div>
                        <div class="border border-primary p-2 rounded-2">
                          <p class="mb-1">New ticket</p>
                          <p class="small m-0 opacity-50">Today, 09:15pm</p>
                        </div>
                        <div class="border border-primary p-2 rounded-2">
                          <p class="mb-1">UI fix</p>
                          <p class="small m-0 opacity-50">Today, 09:45pm</p>
                        </div>
                        <div class="border border-primary p-2 rounded-2">
                          <p class="mb-1">Signup issue</p>
                          <p class="small m-0 opacity-50">Today, 10:45pm</p>
                        </div>
                      </div>
                    </div>
                    <div class="d-grid m-3">
                      <a href="javascript:void(0)" class="btn btn-primary">View all</a>
                    </div>
                  </div>
                </div>
                
                <div class="dropdown">
                  <a class="dropdown-toggle action-icon" href="#!" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-receipt lh-1"></i>
                    <span class="count-label">6</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-300">
                    <h5 class="fw-semibold px-3 py-2">Invoices</h5>
                    <div class="scroll250">
                      <div class="dropdown-item">
                        <div class="d-flex align-items-center py-2">
                          <img src="assets/images/user1.png" class="img-3x me-3 rounded-5" alt="Web Dashboards" />
                          <div class="m-0">
                            <h4 class="mb-2">$450.00</h4>
                            <h6 class="mb-1">MSD Solutions</h6>
                            <p class="m-0 small">
                              Invoice #99885<span class="badge bg-primary ms-2">Paid</span>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="dropdown-item">
                        <div class="d-flex align-items-center py-2">
                          <img src="assets/images/user2.png" class="img-3x me-3 rounded-5" alt="Web Dashboards" />
                          <div class="m-0">
                            <h4 class="mb-2">$290.00</h4>
                            <h6 class="mb-1">VK Inc</h6>
                            <p class="m-0 small">
                              Invoice #99887<span class="badge bg-primary ms-2">Paid</span>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="dropdown-item">
                        <div class="d-flex align-items-center py-2">
                          <img src="assets/images/user3.png" class="img-3x me-3 rounded-5" alt="Web Dashboards" />
                          <div class="m-0">
                            <h4 class="mb-2">$330.00</h4>
                            <h6 class="mb-1">Sky Labs</h6>
                            <p class="m-0 small">
                              Invoice #99888<span class="badge bg-primary ms-2">Paid</span>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="dropdown-item">
                        <div class="d-flex align-items-center py-2">
                          <img src="assets/images/user4.png" class="img-3x me-3 rounded-5" alt="Web Dashboards" />
                          <div class="m-0">
                            <h4 class="mb-2">$380.00</h4>
                            <h6 class="mb-1">Good Works Inc</h6>
                            <p class="m-0 small">
                              Invoice #99889<span class="badge bg-primary ms-2">Paid</span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-grid m-3">
                      <a href="javascript:void(0)" class="btn btn-primary">View all</a>
                    </div>
                  </div>
                </div>
                -->
              </div>
              <!-- Header list ends -->

              <!-- User setting starts -->
              <div class="dropdown ms-4">
                <a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center" href="#!" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="assets/images/user3.png" class="rounded-4 img-3x" alt="Bootstrap Gallery" />
                  <div class="ms-2 text-truncate d-lg-flex flex-column d-none">
                    <p class="text-truncate m-0">Usuario</p>
                    <span class="small opacity-50 lh-1">Admin</span>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end shadow-lg">
                  <a class="dropdown-item d-flex align-items-center" href="profile.html"><i
                      class="bi bi-person fs-5 me-2"></i>Mi perfil</a>
                  <a class="dropdown-item d-flex align-items-center" href="settings.html"><i
                      class="bi bi-gear fs-5 me-2"></i>Ajustes</a>
                  <!--
                      <a class="dropdown-item d-flex align-items-center" href="reset-password.html"><i
                      class="bi bi-slash-circle fs-5 me-2"></i>Reset Password</a>
                  -->
                  <div class="mx-3 mt-2 d-grid">
                    <a href="cierra_sesion.php" class="btn btn-primary">Salir</a>
                  </div>
                </div>
              </div>
              <!-- User setting ends -->

              <!-- Toggle sidebar starts -->
              <div class="d-flex">
                <button class="toggle-sidebar">
                  <i class="bi bi-list lh-1"></i>
                </button>
              </div>
              <!-- Toggle sidebar ends -->

            </div>
            <!-- App header actions ends -->

          </div>
          <!-- App header ends -->

          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="p-2 border border-primary rounded-circle me-3">
                        <div class="icon-box md bg-primary rounded-5">
                          <i class="bi bi-box fs-4 text-white"></i>
                        </div>
                      </div>
                      <div class="d-flex flex-column">
                        <h2 class="m-0 lh-1 text-primary">3300</h2>
                        <p class="m-0 opacity-50">Items</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-1">
                      <a class="text-primary" href="javascript:void(0);">
                        <span>View All</span>
                        <i class="bi bi-arrow-right ms-2"></i>
                      </a>
                      <div class="text-end">
                        <p class="mb-0 text-danger">+40%</p>
                        <span class="text-muted small">this month</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="p-2 border border-primary rounded-circle me-3">
                        <div class="icon-box md bg-primary rounded-5">
                          <i class="bi bi-box fs-4 text-white"></i>
                        </div>
                      </div>
                      <div class="d-flex flex-column">
                        <h2 class="m-0 lh-1 text-primary">6600</h2>
                        <p class="m-0 opacity-50">Orders</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-1">
                      <a class="text-primary" href="javascript:void(0);">
                        <span>View All</span>
                        <i class="bi bi-arrow-right ms-2"></i>
                      </a>
                      <div class="text-end">
                        <p class="mb-0 text-danger">+30%</p>
                        <span class="text-muted small">this month</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="p-2 border border-primary rounded-circle me-3">
                        <div class="icon-box md bg-primary rounded-5">
                          <i class="bi bi-box fs-4 text-white"></i>
                        </div>
                      </div>
                      <div class="d-flex flex-column">
                        <h2 class="m-0 lh-1 text-primary">9900</h2>
                        <p class="m-0 opacity-50">Themes</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-1">
                      <a class="text-primary" href="javascript:void(0);">
                        <span>View All</span>
                        <i class="bi bi-arrow-right ms-2"></i>
                      </a>
                      <div class="text-end">
                        <p class="mb-0 text-danger">+60%</p>
                        <span class="text-muted small">this month</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4 card-bg">
                  <div class="card-body text-white">
                    <div class="d-flex align-items-center">
                      <div class="p-2 border border-white rounded-circle me-3">
                        <div class="icon-box md bg-white rounded-5">
                          <i class="bi bi-box fs-4 text-danger"></i>
                        </div>
                      </div>
                      <div class="d-flex flex-column">
                        <h2 class="m-0 lh-1">8800</h2>
                        <p class="m-0 opacity-50">Payments</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-1">
                      <a class="text-white" href="javascript:void(0);">
                        <span>View All</span>
                        <i class="bi bi-arrow-right ms-2"></i>
                      </a>
                      <div class="text-end">
                        <p class="mb-0 text-warning">+20%</p>
                        <span class="text-white small">this month</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-xl-8">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Site Analysis</h5>
                    <h6 class="small mt-2 opacity-50">Visits & Conversions Report</h6>
                  </div>
                  <div class="card-body">
                    <div class="graph-body-xl">

                      <!-- Row starts -->
                      <div class="row gx-3">
                        <div class="col-sm-4">
                          <div class="row mb-2 align-items-end">
                            <div class="col">
                              <p class="m-0">Users</p>
                              <h2 class="tex-dark mb-0">8.9K</h2>
                            </div>
                            <div class="col ml-auto">
                              <span><i class="bi bi-arrow-down"></i> 12%</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="row mb-2 align-items-end">
                            <div class="col">
                              <p class="m-0">Bounce rate</p>
                              <h2 class="tex-dark mb-0">300K</h2>
                            </div>
                            <div class="col ml-auto">
                              <span><i class="bi bi-arrow-up"></i> 18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="row mb-2 align-items-end">
                            <div class="col">
                              <p class="m-0">Sessions</p>
                              <h2 class="tex-dark mb-0">5.9K</h2>
                            </div>
                            <div class="col ml-auto">
                              <span><i class="bi bi-arrow-down"></i> 13%</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Row ends -->

                      <div id="visits-conversions"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="card bg-primary mb-4">
                  <div class="card-header bg-primary text-white">
                    <h5 class="card-title">Sales Reports</h5>
                    <h6 class="small mt-2 opacity-50">Sales & Conversions Report</h6>
                  </div>
                  <div class="card-body">
                    <div class="graph-body-xl">
                      <div class="text-center text-white">
                        <img class="img-fluid mb-3" src="assets/images/reports.svg" style="width: 180px;"
                          alt="Admin Templates">
                        <h2>9.6k</h2>
                        <span class="d-block mb-1">Affiliate Revenue</span>
                        <span class="d-block mb-2"><b>+20%</b> vs last 1 Week</span>
                        <p class="m-0 opacity-75">You can choose from over 1600 admin dashboard templates on Bootstrap
                          Gallery.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-xl-6 col-sm-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Sales</h5>
                  </div>
                  <div class="card-body">
                    <div class="graph-body">
                      <div id="sales"></div>
                    </div>
                    <div class="my-3 text-center">
                      <h1>$95,82,500</h1>
                      <h5 class="mb-2">
                        Monthly Sales Growth
                      </h5>
                      <p class="m-0">
                        Measure how fast you’re growing monthly recurring sales.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-sm-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Income</h5>
                  </div>
                  <div class="card-body">
                    <div class="graph-body">
                      <div id="income"></div>
                    </div>
                    <div class="my-3 text-center">
                      <h1>$65,700</h1>
                      <h5 class="mb-2">
                        Monthly Income Growth
                      </h5>
                      <p class="m-0">
                        Measure how fast you’re growing monthly recurring income.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Earnings</h5>
                  </div>
                  <div class="card-body">
                    <div id="income2" class="auto-align-graph"></div>
                    <div class="text-center">
                      <h2>
                        $75K
                        <i class="bi bi-arrow-up-right-circle-fill text-danger ms-2"></i>
                      </h2>
                      <p class="text-truncate">30% higher than last month.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Recent Activities</h5>
                  </div>
                  <div class="card-body">
                    <div class="scroll350">
                      <div class="activity-feed">
                        <div class="feed-item">
                          <span class="feed-date pb-1" data-bs-toggle="tooltip" data-bs-title="Today 05:32:35">An
                            Hour Ago</span>
                          <div class="mb-1">
                            <a href="#" class="text-primary">Janie Mcdonald</a> - Task marked as complete.
                          </div>
                          <div class="mb-1">Project Name - <a href="#" class="text-danger">Bootstrap Gallery</a></div>
                          <div class="text-dark">Admin Dashboards <i class="bi bi-arrow-up-right"></i> </div>
                        </div>
                        <div class="feed-item">
                          <span class="feed-date pb-1" data-bs-toggle="tooltip" data-bs-title="Today 05:32:35">An
                            Hour Ago</span>
                          <div class="mb-1">
                            <a href="#" class="text-primary">Janie Mcdonald</a> - Task marked as complete.
                          </div>
                          <div class="mb-1">Project Name - <a href="#" class="text-danger">Bootstrap Gallery</a></div>
                          <div class="text-dark">Admin Dashboards <i class="bi bi-arrow-up-right"></i> </div>
                        </div>
                        <div class="feed-item">
                          <span class="feed-date pb-1" data-bs-toggle="tooltip" data-bs-title="Today 05:32:35">An
                            Hour Ago</span>
                          <div class="mb-1">
                            <a href="#" class="text-primary">Janie Mcdonald</a> - Task marked as complete.
                          </div>
                          <div class="mb-1">Project Name - <a href="#" class="text-danger">Bootstrap Gallery</a></div>
                          <div class="text-dark">Admin Dashboards <i class="bi bi-arrow-up-right"></i> </div>
                        </div>
                        <div class="feed-item">
                          <span class="feed-date pb-1" data-bs-toggle="tooltip" data-bs-title="Today 05:32:35">An
                            Hour Ago</span>
                          <div class="mb-1">
                            <a href="#" class="text-primary">Janie Mcdonald</a> - Task marked as complete.
                          </div>
                          <div class="mb-1">Project Name - <a href="#" class="text-danger">Bootstrap Gallery</a></div>
                          <div class="text-dark">Admin Dashboards <i class="bi bi-arrow-up-right"></i> </div>
                        </div>
                        <div class="feed-item">
                          <span class="feed-date pb-1" data-bs-toggle="tooltip" data-bs-title="Today 05:32:35">An
                            Hour Ago</span>
                          <div class="mb-1">
                            <a href="#" class="text-primary">Janie Mcdonald</a> - Task marked as complete.
                          </div>
                          <div class="mb-1">Project Name - <a href="#" class="text-danger">Bootstrap Gallery</a></div>
                          <div class="text-dark">Admin Dashboards <i class="bi bi-arrow-up-right"></i> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Notifications</h5>
                  </div>
                  <div class="card-body">
                    <div class="scroll350">
                      <div class="d-flex align-items-center mb-4">
                        <i class="bi bi-record-fill text-primary me-2"></i>
                        <div class="d-flex p-2 bg-dark rounded-circle me-3">
                          <i class="bi bi-bag fs-4 text-white lh-1"></i>
                        </div>
                        <p class="m-0 me-2">
                          You have spent about <b>65%</b> of your annual budget.
                        </p>
                        <div class="ms-auto badge bg-primary bg-opacity-10 text-primary small">
                          Today
                        </div>
                      </div>
                      <div class="d-flex align-items-center mb-4">
                        <i class="bi bi-record-fill text-primary me-2"></i>
                        <div class="d-flex p-2 bg-dark rounded-circle me-3">
                          <i class="bi bi-check-circle fs-4 text-white lh-1"></i>
                        </div>
                        <p class="m-0 me-2">
                          New admin dashboard purchased, and payment paid through online.
                        </p>
                        <div class="ms-auto badge bg-primary bg-opacity-10 text-primary small">
                          Today
                        </div>
                      </div>
                      <div class="d-flex align-items-center mb-4">
                        <i class="bi bi-record-fill text-primary me-2"></i>
                        <div class="d-flex p-2 bg-danger rounded-circle me-3">
                          <i class="bi bi-clipboard-check fs-4 text-white lh-1"></i>
                        </div>
                        <p class="m-0 me-2">
                          A new ticket opened and assigned to <b>Zion</b>.
                        </p>
                        <div class="ms-auto badge bg-primary bg-opacity-10 text-primary small">
                          Today
                        </div>
                      </div>
                      <div class="d-flex align-items-center mb-4">
                        <i class="bi bi-record-fill text-secondary me-2"></i>
                        <div class="d-flex p-2 bg-danger rounded-circle me-3">
                          <i class="bi bi-slash-circle fs-4 text-white lh-1"></i>
                        </div>
                        <p class="m-0 me-2">
                          Thanks <b>Sarah</b>, I want you to share Jim's
                          profile.
                        </p>
                        <div class="ms-auto badge bg-primary bg-opacity-10 text-primary small">
                          Today
                        </div>
                      </div>
                      <div class="d-flex align-items-center mb-4">
                        <i class="bi bi-record-fill text-secondary me-2"></i>
                        <div class="d-flex p-2 bg-primary rounded-circle me-3">
                          <i class="bi bi-envelope-open fs-4 text-white lh-1"></i>
                        </div>
                        <p class="m-0 me-2">
                          <b>Ora Mahoney,</b> has completed the design of the
                          CRM admin application.
                        </p>
                        <div class="ms-auto badge bg-secondary bg-opacity-10 text-dark small">
                          Today
                        </div>
                      </div>
                      <div class="d-flex align-items-center mb-4">
                        <i class="bi bi-record-fill text-secondary me-2"></i>
                        <div class="d-flex p-2 bg-primary rounded-circle me-3">
                          <i class="bi bi-envelope-open fs-4 text-white lh-1"></i>
                        </div>
                        <p class="m-0 me-2">
                          <b>Daren Boyd,</b> received the order.
                        </p>
                        <div class="ms-auto badge bg-secondary bg-opacity-10 text-dark small">
                          Today
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Hot Selling Products</h5>
                  </div>
                  <div class="card-body">
                    <div class="table-outer">
                      <div class="table-responsive">
                        <table class="table m-0 align-middle">
                          <thead>
                            <tr>
                              <th>Product</th>
                              <th>Link</th>
                              <th>Customer</th>
                              <th>Category</th>
                              <th>Orders</th>
                              <th>Ratings</th>
                              <th>Views</th>
                              <th>Engagement</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="d-flex flex-row align-items-center">
                                  <img src="assets/images/products/product8.jpg" class="img-7x rounded-2"
                                    alt="Google Admin" />
                                  <div class="d-flex flex-column ms-3">
                                    <p class="fw-bold m-0 text-truncate">iPhone 14 Pro Max Leather Case</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="#" class="text-primary">#L10010021</a>
                              </td>
                              <td>
                                <div class="text-truncate">Rickey Singleton</div>
                              </td>
                              <td>
                                <span class="badge bg-danger">Electronics</span>
                              </td>
                              <td>
                                <span class="badge bg-primary-subtle text-primary me-2">390</span>
                              </td>
                              <td>
                                <div class="readonly3 rating-stars"></div>
                              </td>
                              <td>
                                <div class="graph-mini" id="option1"></div>
                              </td>
                              <td>
                                <p class="m-0 text-truncate">30% Higher than last week</p>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex flex-row align-items-center">
                                  <img src="assets/images/products/product3.jpg" class="img-7x rounded-2"
                                    alt="Bootstrap Gallery" />
                                  <div class="d-flex flex-column ms-3">
                                    <p class="fw-bold m-0 text-truncate">iPhone 15 Pro Max Leather Case</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="#" class="text-primary">#L10010065</a>
                              </td>
                              <td>
                                <div class="text-truncate">Warren Alvarez</div>
                              </td>
                              <td>
                                <span class="badge bg-danger">Mobiles</span>
                              </td>
                              <td>
                                <span class="badge bg-primary-subtle text-primary me-2">560</span>
                              </td>
                              <td>
                                <div class="readonly4 rating-stars"></div>
                              </td>
                              <td>
                                <div class="graph-mini" id="option2"></div>
                              </td>
                              <td>
                                <p class="m-0 text-truncate">70% Higher than last week</p>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex flex-row align-items-center">
                                  <img src="assets/images/products/product1.jpg" class="img-7x rounded-2"
                                    alt="Bootstrap Gallery" />
                                  <div class="d-flex flex-column ms-3">
                                    <p class="fw-bold m-0 text-truncate">iPhone 16 Pro Max Leather Case</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="#" class="text-primary">#L10010098</a>
                              </td>
                              <td>
                                <div class="text-truncate">Christian Franklin</div>
                              </td>
                              <td>
                                <span class="badge bg-danger">Apps</span>
                              </td>
                              <td>
                                <span class="badge bg-primary-subtle text-primary me-2">620</span>
                              </td>
                              <td>
                                <div class="readonly5 rating-stars"></div>
                              </td>
                              <td>
                                <div class="graph-mini" id="option3"></div>
                              </td>
                              <td>
                                <p class="m-0 text-truncate">40% Higher than last week</p>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

          </div>
          <!-- App body ends -->

          <!-- App footer starts -->
          <div class="app-footer">
            <span class="small">© Bootstrap Gallery 2024</span>
          </div>
          <!-- App footer ends -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container ends -->

    </div>
    <!-- Page wrapper ends -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/moment.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="assets/vendor/apex/apexcharts.min.js"></script>
    <script src="assets/vendor/apex/custom/home/sparkline.js"></script>
    <script src="assets/vendor/apex/custom/home/sales.js"></script>
    <script src="assets/vendor/apex/custom/home/income.js"></script>
    <script src="assets/vendor/apex/custom/home/visits-conversions.js"></script>
    <script src="assets/vendor/apex/custom/home/income2.js"></script>

    <!-- Rating -->
    <script src="assets/vendor/rating/raty.js"></script>
    <script src="assets/vendor/rating/raty-custom.js"></script>

    <!-- Custom JS files -->
    <script src="assets/js/custom.js"></script>
  </body>

</html>