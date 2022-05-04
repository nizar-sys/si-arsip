@php
    $routeActive = Route::currentRouteName();
@endphp

<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
        <i class="ni ni-tv-2 text-primary"></i>
        <span class="nav-link-text">Dashboard</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'profile' ? 'active' : '' }}" href="{{ route('profile') }}">
        <i class="fas fa-user-tie text-warning"></i>
        <span class="nav-link-text">Profile</span>
    </a>
</li>
@if (Auth::user()->role == 'admin')
    
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'users.index' ? 'active' : '' }}" href="{{ route('users.index') }}">
        <i class="fas fa-users text-info"></i>
        <span class="nav-link-text">Users</span>
    </a>
</li>
@endif
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'siswas.index' ? 'active' : '' }}" href="{{ route('siswas.index') }}">
        <i class="fas fa-users text-dark"></i>
        <span class="nav-link-text">Data siswa</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'dosens.index' ? 'active' : '' }}" href="{{ route('dosens.index') }}">
        <i class="fas fa-users text-success"></i>
        <span class="nav-link-text">Data Pengajar</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'data-ortu.index' ? 'active' : '' }}" href="{{ route('data-ortu.index') }}">
        <i class="fas fa-users text-warning"></i>
        <span class="nav-link-text">Data Ortu / Wali</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'jadwal-ajar.index' ? 'active' : '' }}" href="{{ route('jadwal-ajar.index') }}">
        <i class="fas fa-calendar-alt text-info"></i>
        <span class="nav-link-text">Data Jadwal Ajar</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'materi-ajar.index' ? 'active' : '' }}" href="{{ route('materi-ajar.index') }}">
        <i class="fas fa-book text-danger"></i>
        <span class="nav-link-text">Materi Pembelajaran</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'absensi.index' ? 'active' : '' }}" href="{{ route('absensi.index') }}">
        <i class="fas fa-calendar-alt text-info"></i>
        <span class="nav-link-text">Data Absensi</span>
    </a>
</li>
@if (Auth::user()->role == 'siswa')
    
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'absensi.kartu-absensi' ? 'active' : '' }}" href="{{ route('absensi.kartu-absensi') }}">
        <i class="fas fa-cloud text-success"></i>
        <span class="nav-link-text">Download Kartu Absensi</span>
    </a>
</li>
@endif
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'nilai-siswa.index' ? 'active' : '' }}" href="{{ route('nilai-siswa.index') }}">
        <i class="fas fa-book text-primary"></i>
        <span class="nav-link-text">Nilai Materi Pembelajaran</span>
    </a>
</li>