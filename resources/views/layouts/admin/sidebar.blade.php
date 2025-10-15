<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item"> <a class="nav-link @if (request()->segment(1) == 'home') @else collapsed @endif" href="/home">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span> </a>
        </li>

        {{-- @can('menu-reservations') --}}
        <li class="nav-heading">Sistem Marketing</li>
        @can('page-reservation-index')
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'reservations') @else collapsed @endif" href="/reservations"><i class="bi bi-bookmark-check-fill"></i><span>Reservasi </span></a></li>
        @endcan
        @can('page-reservation-audits')
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'audits') @else collapsed @endif" href="/audits"><i class="bi bi-stopwatch-fill"></i><span>Log Perubahan </span></a></li>
        @endcan
        @can('page-reservation-deleted')
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'deleted-reservations') @else collapsed @endif" href="/deleted-reservations"><i class="bi bi-trash-fill"></i><span>Data Dihapus </span></a></li>
        @endcan
        {{-- @endcan --}}


        <li class="nav-heading">Kelola Web</li>

        @can('menu-information')
        <li class="nav-item">
            <a class="nav-link @if (request()->segment(1) == 'information') @else collapsed @endif" data-bs-target="#information-nav" data-bs-toggle="collapse" href="#" aria-expanded="@if (request()->segment(1) == 'information') true @else false @endif">
                <i class="bi bi-journal-text"></i><span>Informasi</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="information-nav" class="nav-content collapse @if (request()->segment(1) == 'information') show @endif" data-bs-parent="#sidebar-nav" style="">
                @can('page-information-services')
                <li>
                    <a href="/information/services" class="@if (request()->segment(2) == 'services') active @endif">
                        <i class=" bi bi-circle"></i><span>Services</span>
                    </a>
                </li>
                @endcan
                @can('page-information-products')
                <li>
                    <a href="/information/products" class="@if (request()->segment(2) == 'products') active @endif">
                        <i class=" bi bi-circle"></i><span>Products</span>
                    </a>
                </li>
                @endcan
                @can('page-information-galleries')
                <li>
                    <a href="/information/galleries" class="@if (request()->segment(2) == 'galleries') active @endif">
                        <i class=" bi bi-circle"></i><span>Galleries</span>
                    </a>
                </li>
                @endcan
                @can('page-information-carousels')
                <li>
                    <a href="/information/carousels" class="@if (request()->segment(2) == 'carousels') active @endif">
                        <i class=" bi bi-circle"></i><span>Carousels</span>
                    </a>
                </li>
                @endcan
            </ul>
        </li>
        @endcan

        @can('menu-data')
        <li class="nav-item">
            <a class="nav-link @if (request()->segment(1) == 'data') @else collapsed @endif" data-bs-target="#data-nav" data-bs-toggle="collapse" href="#" aria-expanded="@if (request()->segment(1) == 'data') true @else false @endif">
                <i class="bi bi-chat-left-text"></i><span>Data Input</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="data-nav" class="nav-content collapse @if (request()->segment(1) == 'data') show @endif" data-bs-parent="#sidebar-nav" style="">
                @can('page-data-messages')
                <li>
                    <a href="/data/messages" class="@if (request()->segment(2) == 'messages') active @endif">
                        <i class=" bi bi-circle"></i><span>Messages</span>
                    </a>
                </li>
                @endcan
                @can('page-data-users')
                <li>
                    <a href="/data/users" class="@if (request()->segment(2) == 'users') active @endif">
                        <i class=" bi bi-circle"></i><span>Users</span>
                    </a>
                </li>
                @endcan
                @can('page-data-roles')
                <li>
                    <a href="/data/roles" class="@if (request()->segment(2) == 'roles') active @endif">
                        <i class=" bi bi-circle"></i><span>Roles</span>
                    </a>
                </li>
                @endcan
            </ul>
        </li>
        @endcan

        @can('menu-blog')
        <li class="nav-item">
            <a class="nav-link @if (request()->segment(1) == 'blog') @else collapsed @endif" data-bs-target="#blog-nav" data-bs-toggle="collapse" href="#" aria-expanded="@if (request()->segment(1) == 'blog') true @else false @endif">
                <i class="bi bi-file-earmark-post"></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="blog-nav" class="nav-content collapse @if (request()->segment(1) == 'blog') show @endif" data-bs-parent="#sidebar-nav" style="">
                @can('page-blog-categories')
                <li>
                    <a href="/blog/categories" class="@if (request()->segment(2) == 'categories') active @endif">
                        <i class=" bi bi-circle"></i><span>Categories</span>
                    </a>
                </li>
                @endcan
                @can('page-blog-tags')
                <li>
                    <a href="/blog/tags" class="@if (request()->segment(2) == 'tags') active @endif">
                        <i class=" bi bi-circle"></i><span>Tags</span>
                    </a>
                </li>
                @endcan
                @can('page-blog-posts')
                <li>
                    <a href="/blog/posts" class="@if (request()->segment(2) == 'posts') active @endif">
                        <i class=" bi bi-circle"></i><span>Posts</span>
                    </a>
                </li>
                @endcan
            </ul>
        </li>
        @endcan














        {{-- @can('menu-information')
        <li class="nav-heading">Kelola Informasi</li>
        @can('page-information-services')
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'services') @else collapsed @endif" href="/services"><i class="bi bi-shop"></i><span>Services</span></a></li>
        @endcan
        @can('page-information-products')
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'products') @else collapsed @endif" href="/products"><i class="bi bi-basket"></i><span>Products</span></a></li>
        @endcan
        @can('page-information-galleries')
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'galleries') @else collapsed @endif" href="/galleries"><i class="bi bi-border-all"></i><span>Galleries</span></a></li>
        @endcan
        @can('page-information-carousels')
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'carousels') @else collapsed @endif" href="/carousels"><i class="'bi bi-display"></i><span>Carousels</span></a></li>
        @endcan
        @endcan --}}

        {{-- @can('menu-data')
        <li class="nav-heading">Kelola Data</li>
        @can('page-data-messages')
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'messages') @else collapsed @endif" href="/messages"><i class="bi bi-chat-left-text"></i><span>Message </span></a></li>
        @endcan
        @can('page-data-users')
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'users') @else collapsed @endif" href="/users"><i class="bi bi-person-lines-fill"></i><span>User Data </span></a></li>
        @endcan
        @can('page-data-roles')
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'roles') @else collapsed @endif" href="/roles"><i class="bi bi-person-workspace"></i><span>User Role </span></a></li>
        @endcan
        @endcan --}}

        {{-- @can('menu-blog')
        <li class="nav-heading">Kelola Blog</li>
        @can('page-blog-categories')
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'categories') @else collapsed @endif" href="/categories"><i class="bi bi-chat-left"></i><span>Categories </span></a></li>
        @endcan
        @can('page-blog-tags')
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'tags') @else collapsed @endif" href="/tags"><i class="bi bi-tag"></i><span>Tags </span></a></li>
        @endcan
        @can('page-blog-posts')
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'posts') @else collapsed @endif" href="/posts"><i class="bi bi-file-earmark-post"></i><span>Posts </span></a></li>
        @endcan
        @endcan --}}

    </ul>
</aside>
