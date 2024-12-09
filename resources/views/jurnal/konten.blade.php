@extends('layout.template')


@section('css')
{{-- wajib --}}
<link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/css/tab.css') }}" rel="stylesheet" >
{{-- dinamis --}}
<link href="{{ asset('assets/css/konten.css') }}" rel="stylesheet" >
<style>

</style>

@endsection

@section('js')
<script src="{{ asset('assets/js/tab.js') }}"></script>
<script src="{{ asset('assets/js/konten.js') }}"></script>
@endsection





@section('content')

<div class="container">
    <!-- <h1>Muthoba'ah Harian</h1> -->


    <div class="date"></div>
    <div class="cards">

            <div class="card">
                <div class="card-header">
                    <span class="card-options" onclick="toggleContextMenu(this)">&#x22EE;</span>
                </div>

                <a href="" style="text-decoration: none;">
                    <div class="card-content">
                        <p class="name">fijar</p>
                        <p class="location">padang</p>
                    </div>
                </a>
            </div>

            <div class="card">
                <div class="card-header">
                    <span class="card-options" onclick="toggleContextMenu(this)">&#x22EE;</span>
                </div>

                <a href="" style="text-decoration: none;">
                    <div class="card-content">
                        <p class="name">fijar</p>
                        <p class="location">padang</p>
                    </div>
                </a>
            </div>

            <div class="card">
                <div class="card-header">
                    <span class="card-options" onclick="toggleContextMenu(this)">&#x22EE;</span>
                </div>

                <a href="" style="text-decoration: none;">
                    <div class="card-content">
                        <p class="name">fijar</p>
                        <p class="location">padang</p>
                    </div>
                </a>
            </div>

            <div class="card">
                <div class="card-header">
                    <img src="assets/img/1.jpeg" alt="">
                </div>

                <a href="" style="text-decoration: none;">
                    <div class="card-content">
                        <p class="name">fijar</p>
                        <p class="location">padang</p>
                    </div>
                </a>
            </div>

    </div>


<br>
{{ $halaman->links() }}


    <br>


            </div>
            {{-- {{ $halaman->links() }} --}}
               <!-- Pagination -->

</div>



@endsection



