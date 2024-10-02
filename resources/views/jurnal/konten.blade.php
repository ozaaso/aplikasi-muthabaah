@extends('layout.template')


@section('css')
{{-- wajib --}}
<link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/css/tab.css') }}" rel="stylesheet" >
{{-- dinamis --}}
<link href="{{ asset('assets/css/konten.css') }}" rel="stylesheet" >
@endsection

@section('js')
<script src="{{ asset('assets/js/tab.js') }}"></script>
<script src="{{ asset('assets/js/konten.js') }}"></script>
@endsection





@section('content')

<div class="container">
    <!-- <h1>Muthoba'ah Harian</h1> -->

    <div class="date">Monday, November 27, 2023  </div>
    <div class="cards">
        @foreach ($jurnals  as $jurnal)
        <div class="card">
            <div class="card-header">
                <span class="card-options" onclick="toggleContextMenu(this)">&#x22EE;</span>
            </div>
           <a href="harian" style="text-decoration: none;"> <div class="card-content">
                 <p class="name">{{ $jurnal->nama }}</p>
                <p class="location">{{ $jurnal->asal }}</p>
            </div></a>
            <div class="context-menu">
                <a href="edit">Edit</a>
                <a href="delete">Delete</a>
            </div>
        </div>
        @endforeach
    </div>

    <div class="date">Sunday, November 26, 2023</div>
    <div class="cards">
        <div class="card">
            <div class="card-header">
                <span class="card-options" onclick="toggleContextMenu(this)">&#x22EE;</span>
            </div>
           <a href="harian" style="text-decoration: none;"> <div class="card-content">
                <p class="name">Bunaiyyah</p>
                <p class="location">Pinrang Sulsel</p>
            </div></a>
            <div class="context-menu">
                <a href="edit">Edit</a>
                <a href="delete">Delete</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <span class="card-options" onclick="toggleContextMenu(this)">&#x22EE;</span>
            </div>
           <a href="harian" style="text-decoration: none;"> <div class="card-content">
                <p class="name">Bunaiyyah</p>
                <p class="location">Pinrang Sulsel</p>
            </div></a>
            <div class="context-menu">
                <a href="edit">Edit</a>
                <a href="delete">Delete</a>
            </div>
        </div>

    </div>
    <br>
                <!-- Pagination -->
                <div class="pagination">
                <a href="#">&laquo;</a> <!-- Previous -->
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <!-- <a href="#">4</a>
                <a href="#">5</a> -->
                <a href="#">&raquo;</a> <!-- Next -->
            </div>
</div>

@endsection



