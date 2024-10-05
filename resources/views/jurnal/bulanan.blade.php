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
            <div class="list-icon"><img src="{{ asset('assets/img/person.png') }}" width="50" height="50"></div>
            <div class="list-details01">
                <p>{{$nama}}</p>
                <span>{{$asal}}</span>
            </div>
        </div>
    </div>
</div>

<div class="container">

        <div class="list-container">



            @php
            use Carbon\Carbon;
            Carbon::setLocale('id');
        @endphp

        @foreach ($results as $result)
            <div class="list-item">
                <div class="list-details">
                    <p>
                        <a href="/harian/{{ $result->uuid }}" class="list-link">
                            {{ Carbon::parse($result->tanggal)->translatedFormat('l, j F Y') }}
                        </a>
                    </p>
                    <span></span>
                </div>
                <div class="options" onclick="toggleMenu(this)">...</div>
                <div class="dropdown-menu">
                    <a href="/jurnal/{{ $result->uuid }}/edit" style="background: none; border: none; color: rgb(179, 86, 0); cursor: pointer; padding: 0;">Edit</a>
                    <br><br>
                    <form action="/jurnal/{{ $result->uuid }}" method="POST" style="display: inline;">
                        @method('delete')
                        @csrf
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this?')" style="background: none; border: none; color: rgb(179, 86, 0); cursor: pointer; padding: 0;">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach


            {{ $results->links() }}

        </div>

</div><br><br><br><br>

@endsection



