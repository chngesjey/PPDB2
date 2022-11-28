@if($user->role == 'admin')
        <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{route('dashboard')}}" class="text-white">Pendaftaran</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="{{route('dashboard')}}" class="text-white">PPDB</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="{{ request()->is('dashboard*') ? 'active' : ''}}">
                            <a href="{{ route('dashboard')}}" class="text-white">
                                <i class="fas fa-fire"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        @endif
                        
                        <li class="menu-header">Master</li>

                        @if($user->role == 'siswa')
                        <li class="{{ request()->is('siswa*') ? 'active' : ''}}">
                            <a href="{{route('siswa.index')}}" class="text-white">
                                <i class="fas fa-boxes"></i>
                                <span>Siswa</span>
                            </a>
                        </li>
                        @endif

                        @if($user->role == 'admin')
                        <li class="{{ request()->is('kelas*') ? 'active' : ''}}">
                            <a href="{{ route('kelas.index') }}" class="text-white">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Kelas</span>
                            </a>
                        </li>
                        @endif

                        @if($user->role == 'admin')
                        <li class="{{ request()->is('jurusan*') ? 'active' : ''}}">
                            <a href="{{ route('jurusan.index') }}" class="text-white">
                                <i class="fas fa-list"></i>
                                <span>Jurusan</span>
                            </a>
                        </li>
                        @endif

                        <li class="menu-header">Setting</li>

                        <li class="{{ request()->is('user*') ? 'active' : ''}}">
                            <a href="#" class="text-white">
                                <i class="fas fa-boxes"></i>
                                <span>User</span>
                            </a>
                        </li>

                        <li class="{{ request()->is('setting*') ? 'active' : ''}}">
                            <a href="#" class="text-white">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Setting</span>
                            </a>
                        </li>
                        
                </aside>
            </div>