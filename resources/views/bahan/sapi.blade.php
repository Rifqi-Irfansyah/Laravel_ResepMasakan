@extends('bahan.template')
@section('navbarbahan')
<!-- Navbar Bahan -->
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('telur')}}" class="nav-link">
                <i class="fas fa-egg nav-icon"></i>
                <p>Telur</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('ayam')}}" class="nav-link">
                <i class="fas fa-drumstick-bite nav-icon"></i>
                <p>Daging Ayam</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('sapi')}}" class="nav-link bg-dark">
                <i class="fas fa-bacon nav-icon"></i>
                <p>Daging Sapi</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('buah')}}" class="nav-link">
                <i class="fas fa-apple-alt nav-icon"></i>
                <p>Buah-buahan</p>
            </a>
        </li>
    </ul>
</li>
@endsection