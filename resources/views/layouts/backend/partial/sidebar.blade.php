<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
           
        </div>
        <div class="sidebar-brand-text mx-3">Sampah Market <sup></sup></div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link active" href={{route('admin.dashboard')}}>
            <i class="fas fa-user-ninja"></i>
            <span>Kelola Data User</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link active" href={{route('admin.tabungan')}}>
            <i class="fas fa-piggy-bank"></i>
            <span>Kelola Data Tabungan</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- Heading -->
    <div class="sidebar-heading">
        Transaksi dan penjemputan
    </div>
    
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-money-bill-wave-alt"></i>
            <span>Kelola Pencairan Tabungan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Jenis Transaksi:</h6>
                <a class="collapse-item" href={{route('admin.emas')}}>Emas</a>
                <a class="collapse-item" href={{route('admin.wallet')}}>E-Wallet</a>
                <a class="collapse-item" href={{route('admin.listrik')}}>Voucher Listrik</a>
                <a class="collapse-item" href={{route('admin.pdam')}}>Pembayaran PDAM</a>
                <a class="collapse-item" href={{route('admin.cuci')}}>Pencucian Motor/Mobil</a>
                
            </div>
        </div>
    </li>
    
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-shipping-fast"></i>
            <span>Kelola Data Pemesanan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href={{route('admin.pesan')}}>Jadwal Penjemputan</a>
              
            </div>
        </div>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- Heading -->
    <div class="sidebar-heading">
        Data-data
    </div>
    
   
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href={{route('admin.pertanyaan')}}>
            <i class="fas fa-question"></i>
            <span>Kelola Data Bantuan</span></a>
    </li>
    
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href={{route('admin.barang')}}>
            <i class="fas fa-fw fa-table"></i>
            <span>Kelola Data Barang</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
    </ul>