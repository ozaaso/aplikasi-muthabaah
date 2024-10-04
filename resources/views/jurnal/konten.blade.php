@extends('layout.template')


@section('css')
{{-- wajib --}}
<link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/css/tab.css') }}" rel="stylesheet" >
{{-- dinamis --}}
<link href="{{ asset('assets/css/konten.css') }}" rel="stylesheet" >
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

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
                    <a href="/jurnal/{{ $user->uuid }}/edit" class="context-menu-item edit-item">&nbsp;&nbsp;&nbsp;&nbsp;edit</a>

                    <form action="/jurnal/{{ $user->uuid }}" method="POST" style="display: inline;">
                        @method('delete')
                        @csrf
                        <button type="submit" onclick="return confirm('yakin ingin menghapus data ini? Pastikan buat data orang lain yang antum hapus')" class="context-menu-item delete-item">
                            hapus
                        </button>
                    </form>
                </div>

                <style>
                    .context-menu {
                        display: flex;
                        gap: 10px;
                    }

                    .context-menu-item {
                        text-decoration: none;
                        font-family: Arial, sans-serif;
                        padding: 6px 12px;
                        border: none;
                        border-radius: 5px;
                        font-size: 10px; /* Ukuran font diperkecil */
                        font-weight: bold;
                        cursor: pointer;
                        transition: all 0.3s ease;
                    }

                    .edit-item {
                        background-color: #ffffff;
                        color: #333;
                        border: 2px solid #FFA500;
                    }

                    .edit-item:hover {
                        background-color: #000000;
                        color: #ff7d04;
                    }

                    .delete-item {
                        background-color: #ffffff;
                        color: #000000;
                        border: 2px solid #d9534f;
                    }

                    .delete-item:hover {
                        background-color: #d9534f;
                        color: #ffffff;
                    }

                    .context-menu-item {
                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    }

                    .context-menu-item:active {
                        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
                    }
                </style>



            </div>
        @endforeach
    </div>
@endforeach

<br>
{{ $halaman->links() }}


    <br>


            </div>
            {{-- {{ $halaman->links() }} --}}
               <!-- Pagination -->

</div>



@endsection



