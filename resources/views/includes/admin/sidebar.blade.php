<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            {{-- <li class="{{ (request()->segment(2) == 'cities') ? 'active' : '' }}">   --}}
            {{-- <li class="{{ (request()->is('admin/cities*')) ? 'active' : '' }}">   --}}
            <li class="nav-item">
                <div class="nav-link">
                    <h6>Welcome</h6>
                    {{auth()->user()->name}} <br>
                    {{auth()->user()->email}}
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.index')}}">
                    <i class="bi bi-house align-text-bottom"></i>
                    Home Publc
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->segment(2) == 'dashboard') ? 'active' : '' }}" href="{{route('admin.dashboard')}}">
                    <i class="bi bi-house-fill align-text-bottom"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->segment(2) == 'user') ? 'active' : '' }}" href="{{route('admin.user.index')}}">
                    <i class="bi bi-people-fill align-text-bottom"></i>
                    Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->segment(2) == 'category') ? 'active' : '' }}" href="{{route('admin.category.index')}}">
                    <i class="bi bi-grid-fill align-text-bottom"></i>
                    Categorys
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->segment(2) == 'product') ? 'active' : '' }}" href="{{route('admin.product.index')}}">
                    <i class="bi bi-cart-fill align-text-bottom"></i>
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->segment(2) == 'order') ? 'active' : '' }}" href="{{route('admin.order.index')}}">
                    <i class="bi bi-receipt-cutoff align-text-bottom"></i>
                    Orders
                </a>
            </li>
        </ul>

        <h6
            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
            <span>Etc</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-plus-circle align-text-bottom" aria-hidden="true">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="8" x2="12" y2="16"></line>
                    <line x1="8" y1="12" x2="16" y2="12"></line>
                </svg>
            </a>
        </h6>
    </div>
</nav>
