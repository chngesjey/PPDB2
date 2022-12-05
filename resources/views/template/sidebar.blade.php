<div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{route('dashboard')}}" class="text-white">Pendaftaran</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="{{route('dashboard')}}" class="text-white">PPDB</a>
                    </div>

                    @if(auth()->user()->role_id == '1')
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="{{ request()->is('dashboard*') ? 'active' : ''}}">
                            <a href="{{ route('dashboard')}}" class="">
                                <i class="fas fa-fire"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

            <li class="menu-header">Master</li>
            
            <li class="{{ request()->is('siswa') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('siswa.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Siswa</span>
                </a>
            </li>
            <li class="{{ request()->is('jurusan') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('jurusan.index') }}">
                    <i class="fas fa-book"></i>
                    <span>Jurusan</span>
                </a>
            </li>


            <li class="menu-header">Setting</li>

            <li class="{{ request()->is('user') ? 'active' : '' }}">
                <a class="nav-link" href="/user">
                    <i class="fas fa-user"></i>
                    <span>User</span>
                </a>
            </li>
        </ul>
        @endif

        @if(auth()->user()->role_id == '2')
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>

            <li class="{{ request()->is('profile') ? 'active' : '' }}">
                <a class="nav-link" href="/profile">
                    <i class="fas fa-user"></i>
                    <span>Profile</span>
                </a>
            </li>

            <li class="menu-header">Setting</li>

            <li class="{{ request()->is('user') ? 'active' : '' }}">
                <a class="nav-link" href="/user">
                    <i class="fas fa-user"></i>
                    <span>User</span>
                </a>
            </li>
        </ul>

        
      @endif
    </aside>
</div>



</div>