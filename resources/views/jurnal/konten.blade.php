@extends('layout.template')


@section('css')
{{-- wajib --}}
<link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/css/tab.css') }}" rel="stylesheet" >
{{-- dinamis --}}
<link href="{{ asset('assets/css/konten.css') }}" rel="stylesheet" >
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

@endsection

@section('js')
<script src="{{ asset('assets/js/tab.js') }}"></script>
<script src="{{ asset('assets/js/konten.js') }}"></script>
@endsection





@section('content')

<div class="container">
    <!-- <h1>Muthoba'ah Harian</h1> -->

    @foreach ($users as $tanggal => $usersByDate)
    <div class="date">{{ \Carbon\Carbon::parse($tanggal)->format('l, F j, Y') }}</div>
    <div class="cards">
        @foreach ($usersByDate as $user)
            <div class="card">
                <div class="card-header">
                    <span class="card-options" onclick="toggleContextMenu(this)">&#x22EE;</span>
                </div>

                <a href="{{ url('harian/'.$user->uuid) }}" style="text-decoration: none;">
                    <div class="card-content">
                        <p class="name">{{ $user->nama }}</p>
                        <p class="location">{{ $user->asal }}</p>
                    </div>
                </a>
                <div class="context-menu">
                    <a href="/jurnal/{{ $user->uuid }}/edit" class="context-menu-item">ubah</a>

                    <form action="/jurnal/{{ $user->uuid }}" method="POST" style="display: inline;">
                        @method('delete')
                        @csrf
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this?')" class="context-menu-item">
                            hapus
                        </button>
                    </form>
                </div>



            </div>
        @endforeach
    </div>
@endforeach



    <br>


            </div>
               <!-- Pagination -->

</div>

{{ $halaman->links() }}

@endsection



