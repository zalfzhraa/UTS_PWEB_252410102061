@props(['namaUser'])

<nav class="navbar navbar-expand-md navbar-dark menu-atas">
    <div class="container">
        <a class="navbar-brand" href="{{ route('beranda', ['username' => $namaUser]) }}">Kos Zahirah</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menuNavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda', ['username' => $namaUser]) }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kamar', ['username' => $namaUser]) }}">Data Kamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profil', ['username' => $namaUser]) }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Keluar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>