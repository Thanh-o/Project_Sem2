<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Product Management</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
  rel="icon"
  href="{{ asset('images/Tan-ty.png') }}"
  type="image/x-icon"
  style="border-radius: 50%"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


<!-- CSS Files -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
{{-- <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}" /> --}}
<link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}" />

<!-- CSS Just for demo purpose, don't include it in your project -->
{{-- <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" /> --}}
<style>
  .logo-header .logo img {
    border-radius: 50%;
  }
</style>
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="#" class="logo">
              <img
                src="{{ asset('images/Tan-ty.png') }}"
                alt="navbar brand"
                class="navbar-brand"
                height="60"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            {{-- <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button> --}}
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item active">

                <a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i><p>Dashboard</p></a>  
              </li>
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Components</h4>
              </li>
              <li class="nav-item">
                <a href="{{ route('employees.index') }}">
                    <i class="fa-regular fa-user"></i>
                  <p>Employee Management</p>
                </a>
                
              </li>
              <li class="nav-item">
                <a href="{{ route('customers.index') }}">
                  <i class="fas fa-user"></i>
                  <p>Customer Management</p>
                </a>
                
              </li>
              <li class="nav-item">
                <a href="{{ route('orders.index') }}">
                  <i class="fas fa-list-alt"></i>
                  <p>Order Management</p>
                  
                </a>
                
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.product.index') }}">
                  <i class="fas fa-table"></i>
                  <p>Product Management</p>
                </a>
                
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.product.category') }}">
                    <i class="fa-solid fa-list"></i>
                <p>Category Management</p>
                </a>
                
              </li>
              <li class="nav-item">
                <a href="{{ route('cart.index') }}">
                  <i class="fa-solid fa-cart-shopping"></i>
                <p>Cart Management</p>
                </a>
                
              </li>
              
              <li class="nav-item">
                <a href="{{ route('orderdetails.index') }}">
                  <i class="fa-solid fa-circle-info"></i>
                <p>Order Details Management</p>
                </a>
                
              </li>

            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            <div class="container-fluid">
              <nav
                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
              >
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button type="submit" class="btn btn-search pe-1">
                      <i class="fa fa-search search-icon"></i>
                    </button>
                  </div>
                  <input
                    type="text"
                    placeholder="Search ..."
                    class="form-control"
                  />
                </div>
              </nav>

              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li
                  class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
                >
                  <a
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    aria-haspopup="true"
                  >
                    <i class="fa fa-search"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-search animated fadeIn">
                    <form class="navbar-left navbar-form nav-search">
                      <div class="input-group">
                        <input
                          type="text"
                          placeholder="Search ..."
                          class="form-control"
                        />
                      </div>
                    </form>
                  </ul>
                </li>
                <li class="nav-item topbar-icon dropdown hidden-caret">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="messageDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="fa fa-envelope"></i>
                  </a>
                  <ul
                    class="dropdown-menu messages-notif-box animated fadeIn"
                    aria-labelledby="messageDropdown"
                  >
                    <li>
                      <div
                        class="dropdown-title d-flex justify-content-between align-items-center"
                      >
                        Messages
                        <a href="#" class="small">Mark all as read</a>
                      </div>
                    </li>

                    <li>
                      <a class="see-all" href="javascript:void(0);"
                        >See all messages<i class="fa fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item topbar-icon dropdown hidden-caret">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="notifDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="fa fa-bell"></i>
                    <span class="notification">4</span>
                  </a>
                  <ul
                    class="dropdown-menu notif-box animated fadeIn"
                    aria-labelledby="notifDropdown"
                  >
                    <li>
                      <div class="dropdown-title">
                        You have 4 new notification
                      </div>
                    </li>

                    <li>
                      <a class="see-all" href="javascript:void(0);"
                        >See all notifications<i class="fa fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item topbar-icon dropdown hidden-caret">
                  <a
                    class="nav-link"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <i class="fas fa-layer-group"></i>
                  </a>
                  <div class="dropdown-menu quick-actions animated fadeIn">
                    <div class="quick-actions-header">
                      <span class="title mb-1">Quick Actions</span>
                      <span class="subtitle op-7">Shortcuts</span>
                    </div>
                    <div class="quick-actions-scroll scrollbar-outer">
                      <div class="quick-actions-items">
                        <div class="row m-0">
                          <a class="col-6 col-md-4 p-0" href="#">
                            <div class="quick-actions-item">
                              <div class="avatar-item bg-danger rounded-circle">
                                <i class="far fa-calendar-alt"></i>
                              </div>
                              <span class="text">Calendar</span>
                            </div>
                          </a>
                          <a class="col-6 col-md-4 p-0" href="#">
                            <div class="quick-actions-item">
                              <div
                                class="avatar-item bg-warning rounded-circle"
                              >
                                <i class="fas fa-map"></i>
                              </div>
                              <span class="text">Maps</span>
                            </div>
                          </a>
                          <a class="col-6 col-md-4 p-0" href="#">
                            <div class="quick-actions-item">
                              <div class="avatar-item bg-info rounded-circle">
                                <i class="fas fa-file-excel"></i>
                              </div>
                              <span class="text">Reports</span>
                            </div>
                          </a>
                          <a class="col-6 col-md-4 p-0" href="#">
                            <div class="quick-actions-item">
                              <div
                                class="avatar-item bg-success rounded-circle"
                              >
                                <i class="fas fa-envelope"></i>
                              </div>
                              <span class="text">Emails</span>
                            </div>
                          </a>
                          <a class="col-6 col-md-4 p-0" href="#">
                            <div class="quick-actions-item">
                              <div
                                class="avatar-item bg-primary rounded-circle"
                              >
                                <i class="fas fa-file-invoice-dollar"></i>
                              </div>
                              <span class="text">Invoice</span>
                            </div>
                          </a>
                          <a class="col-6 col-md-4 p-0" href="#">
                            <div class="quick-actions-item">
                              <div
                                class="avatar-item bg-secondary rounded-circle"
                              >
                                <i class="fas fa-credit-card"></i>
                              </div>
                              <span class="text">Payments</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nav-item topbar-user dropdown hidden-caret">
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <div class="avatar-sm">
                      <img
                        src="{{ asset('images/5729521e7786aeff31bbc85e33ce470b.jpg') }}"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold">Admin</span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                          <div class="avatar-lg">
                            <img
                              src="#"
                              alt="image profile"
                              class="avatar-img rounded"
                            />
                          </div>
                          <div class="u-text">
                            <h4>Leu Leu</h4>
                            <p class="text-muted">admin@gmail.com</p>
                            <a
                              href="profile.html"
                              class="btn btn-xs btn-secondary btn-sm"
                              >View Profile</a
                            >
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">My Profile</a>
                        <a class="dropdown-item" href="#">My Balance</a>
                        <a class="dropdown-item" href="#">Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Account Setting</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Dashboard</h3>
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                <a href="{{ route('admin.product.create') }}" class="btn btn-primary btn-round">Add Product</a>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small"
                        >
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Customers</p>
                          <h4 class="card-title">{{ $totalCus }}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-info bubble-shadow-small"
                        >
                          <i class="fas fa-user-check"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Employees</p>
                          <h4 class="card-title">{{ $totalEm }}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-success bubble-shadow-small"
                        >
                          <i class="fas fa-luggage-cart"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Product</p>
                          <h4 class="card-title">{{ $totalPro }}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-secondary bubble-shadow-small"
                        >
                          <i class="far fa-check-circle"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Order</p>
                          <h4 class="card-title">{{ $totalOrders }}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
 
            <div class="row">
            </div>
            <div class="row2" style="--bs-gutter-x:1.5rem;--bs-gutter-y:0;flex-wrap:wrap;margin-top:calc(-1 * var(--bs-gutter-y));margin-right:calc(-.5 * var(--bs-gutter-x));margin-left:calc(-.5 * var(--bs-gutter-x))">
              <div class="col-md-5" style="flex:0 0 auto;width:100%;display: flex; gap: 40px;">
                  <div class="card card-round" style="width: 40%;height: 400px;">
                      <div class="card-body">
                          <div class="card-head-row card-tools-still-right">
                              <div class="card-title">New Products</div>
                              <div class="card-tools">
                                  <div class="dropdown">
                                      <button class="btn btn-icon btn-clean me-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fas fa-ellipsis-h"></i>
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="card-list py-4">
                              @if (isset($newproducts))
                                  @foreach ($newproducts as $index => $product)
                                      <div class="item-list d-flex align-items-center">
                                          <div class="item-id">{{ $product->product_id }}</div>
                                          <div class="avatar" style="margin-left: 50px">
                                              @php
                                                  $firstImage = $product->images->firstWhere('file_type', 'image');
                                              @endphp
                                              @if ($firstImage)
                                                  <img id="main-media-{{ $index }}" src="{{ asset('storage/' . $firstImage->file_path) }}" width="50px" height="50px" alt="Product Image" style="border-radius: 50%;">
                                              @else
                                                  <b>N/A</b>
                                              @endif
                                          </div>
                                          <div class="info-user ms-5">
                                              <div class="username"><a href="{{ route('admin.product.edit', $product->product_id) }}" style="color: #000">{{ $product->product_name }}</a></div>
                                              <div class="status">{{ $product->category->cate_name ?? 'N/A' }}</div>
                                          </div>
                                          <div class="created-at">{{ $product->created_at }}</div>
                                      </div>
                                  @endforeach
                              @endif
                          </div>
                      </div>
                  </div>
                  <div class="card card-round" style="width: 60%;">
                    <div class="card-body">
                      <div style="align-items: center">
                        <div class="card-title">Category</div>
                        <div class="card-body p-0">
                          <div class="table-responsive">
                              <table class="table align-items-center mb-0">
                                  <thead class="thead-light">
                                      <tr>
                                          <th scope="col" style="width: 20%;">ID</th>
                                          <th scope="col">Category</th>
                                          <th scope="col" class="text-end">Action</th>

                                      </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <form action="{{ route('categories.add') }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('POST')
                                      <td scope="row"><input type="number" class="form-control" name="cate_id" style="width: 80%;" min="1" value="{{ $maxCateId }}"></td>
                                      <td scope="row"><input type="text" class="form-control" name="cate_name"></td>
                                      <td class="text-end">
                                        <button type="submit" 
                                        class="btn btn-outline-danger" 
                                        style="padding: 0; font-size: 16px; width: 30px; height: 30px;">
                                        <i class="fa-solid fa-plus"></i>
                                        </button></td>
                                      </form>
                                    </tr>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->cate_id }}</td>
                                            <td><form action="{{ route('categories.edit', $category->cate_id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <input type="text" class="form-control" name="cate_name" value="{{ $category->cate_name }}">
                                            </td>
                                            <td class="text-end">
                                                <button type="submit" 
                                                class="btn btn-outline-info" 
                                                onclick="return confirm('Are you sure you want to edit this category?')" 
                                                style="padding: 0; font-size: 16px; width: 30px; height: 30px;">
                                                <i class="fa-solid fa-check"></i>
                                              </button>
                                            </form>
                                            
                                            
                                
                                            <form action="{{ route('categories.delete', $category->cate_id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                            class="btn btn-outline-danger" 
                                            onclick="return confirm('Are you sure you want to delete this category?')" 
                                            style="padding: 0; font-size: 16px; width: 30px; height: 30px; color: red;">
                                            <i class="fa-solid fa-xmark"></i>
                                            </button>
                                            </form>
                                
                                          </td>
                                          </tr>
                                    @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div style="flex:0 0 auto;width:100%">
                  <div class="card card-round">
                      <div class="card-header">
                          <div class="card-head-row card-tools-still-right">
                              <div class="card-title">Product List</div>
                              <div class="card-tools">
                                  <div class="dropdown">
                                      <button class="btn btn-icon btn-clean me-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fas fa-ellipsis-h"></i>
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          @foreach ($categories as $product)
                                              <a class="dropdown-item" href="#">{{ $product->cate_name ?? 'N/A' }}</a>
                                          @endforeach
                                          {{-- <a class="dropdown-item" href="#">Another action</a>
                                          <a class="dropdown-item" href="#">Something else here</a> --}}
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="card-body p-0">
                          <div class="table-responsive">
                              <table class="table align-items-center mb-0">
                                  <thead class="thead-light">
                                      <tr>
                                          <th scope="col">ID</th>
                                          <th scope="col">Product</th>
                                          <th scope="col" class="text-end">Date & Time</th>
                                          <th scope="col" class="text-end">Price</th>
                                          <th scope="col" class="text-end">Quantity</th>
                                          <th scope="col" class="text-end">Delete</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @php
                                          use Carbon\Carbon;
                                      @endphp
                                      @if (isset($products))
                                          @foreach ($products as $index => $product)
                                              <tr>
                                                  <th scope="row">{{ $product->product_id }}</th>
                                                  <td>
                                                      @php
                                                          $firstImage = $product->images->firstWhere('file_type', 'image');
                                                      @endphp
                                                      @if ($firstImage)
                                                          <img src="{{ asset('storage/' . $firstImage->file_path) }}" width="50px" height="50px" alt="Product Image" style="border-radius: 50%;">
                                                      @else
                                                          <span>N/A</span>
                                                      @endif
                                                      <a href="{{ route('admin.product.edit', $product->product_id) }}" style="color: #000; margin-left: 10px">{{ $product->product_name }}</a>
                                                  </td>
                                                  <td class="text-end">
                                                      {{ \Carbon\Carbon::parse($product->updated_at)->format('M d, Y, g.i A') }}
                                                  </td>
                                                  <td class="text-end">${{ $product->price }}</td>
                                                  <td class="text-end">{{ $product->quantity }}</td>
                                                  <td class="text-end">
                                                      <form action="{{ route('admin.product.delete', $product->product_id)}}" method="POST" style="display:inline;">
                                                          @csrf
                                                          @method('DELETE')
                                                          <button type="submit" class="btn btn-sm delete-button" onclick="return confirm('Are you sure you want to delete this product?')" style="padding: 0; font-size: 16px; width: 30px; height: 30px; background: none; border: none; color: red;"><i class="fa-solid fa-xmark"></i></button>
                                                      </form>
                                                  </td>
                                              </tr>
                                          @endforeach
                                      @endif
                     
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          
          </div>
        </div>


    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    
    <!-- jQuery Scrollbar -->
    <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    
    <!-- Chart JS -->
    <script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>
    
    <!-- jQuery Sparkline -->
    <script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
    
    <!-- Chart Circle -->
    <script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>
    
    <!-- Datatables -->
    {{-- <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script> --}}
    
    <!-- Bootstrap Notify -->
    <script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    
    <!-- jQuery Vector Maps -->
    <script src="{{ asset('assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jsvectormap/world.js') }}"></script>
    
    <!-- Sweet Alert -->
    <script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    
    <!-- Kaiadmin JS -->
    <script src="{{ asset('assets/js/kaiadmin.min.js') }}"></script>
    


  </body>
</html>
