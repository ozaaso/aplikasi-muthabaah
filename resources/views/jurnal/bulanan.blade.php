@extends('layout.template')


@section('css')
{{-- wajib --}}
<link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/css/tab.css') }}" rel="stylesheet" >
{{-- dinamis --}}
<link href="{{ asset('assets/css/bulanan.css') }}" rel="stylesheet" >

@endsection

@section('js')
<script src="{{ asset('assets/js/tab.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/bulanan.js') }}"></script>
@endsection





@section('content')
<div class="container01">


    <div class="list-container01">
        <div class="list-item">
            <div class="list-icon"></div>
            <div class="list-details01">
                <p>{{$nama}}</p>
                <span>{{$asal}}</span>
            </div>
        </div>
    </div>
</div>

<div class="container">

        <div class="list-container">



            @foreach ($results as $result)

            <div class="list-item">
                <div class="list-details">
                    <p><a href="/harian/{{ $result->uuid }}" class="list-link">{{ $result->tanggal }}</a>   </p>
                    <span></span>
                </div>
                <div class="options" onclick="toggleMenu(this)">...</div>
                <div class="dropdown-menu">
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                </div>
            </div>
            @endforeach


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

</div><br><br><br><br>

@endsection



