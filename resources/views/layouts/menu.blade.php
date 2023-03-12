@if (Auth::check())
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <ul class="nav nav-treeview" style="display: block;">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="fas fa-home nav-icon"></i>
                    <p>HOME</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('customer.index') }}" class="nav-link">
                    <i class="fas fa-user nav-icon"></i>
                    <p>CUSTOMER</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('item.index') }}" class="nav-link">
                    <i class="fas fa-user nav-icon"></i>
                    <p>ITEM</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link">
                    <i class="fas fa-user nav-icon"></i>
                    <p>CATEGORY</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('salesman.index') }}" class="nav-link">
                    <i class="fas fa-user nav-icon"></i>
                    <p>SALESMAN</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('bill.index') }}" class="nav-link">
                    <i class="fas fa-user nav-icon"></i>
                    <p>BILL</p>
                </a>
            </li>
        </ul>
    </ul>
@else
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <ul class="nav nav-treeview" style="display: block;">
            <li class="nav-item">
                <a href="{{ route('logout') }}" data-method="POST" class="nav-link">
                    <i class="fas fa-power-off nav-icon"></i>
                    <p>LOGIN</p>
                </a>
            </li>
        </ul>
    </ul>
@endif
