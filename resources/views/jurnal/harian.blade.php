@extends('layout.template')


@section('css')
{{-- wajib --}}
<link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/css/tab.css') }}" rel="stylesheet" >
{{-- dinamis --}}
<link href="{{ asset('assets/css/list.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/css/harian.css') }}" rel="stylesheet" >

@endsection

@section('js')
<script src="{{ asset('assets/js/tab.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Dapatkan semua checkbox dengan class "readonly-checkbox"
        const checkboxes = document.querySelectorAll('.checkbox-grid');

        checkboxes.forEach(function(checkbox) {
            // Tambahkan event listener untuk mencegah perubahan pada checkbox
            checkbox.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah default action (perubahan status)
            });
        });
    });



    
</script>
@endsection






@section('content')

<div class="container">

    <div class="list-container">
    <div class="list-item01">
        <div class="list-icon"></div>
        <div class="list-details01">
            <p>{{ $user->nama }}</p>
            <span>{{$user->asal}}</span>
            <span>{{$user->tanggal}}</span>
        </div>
    </div>
    <h2>Formulir Jurnal</h2>
<form>

    <div class="checkbox-grid">
        <div>
            <label><input type="checkbox" name="subuh" value="{{ $aktivitas->subuh }}" {{ $aktivitas->subuh == 1 ? 'checked' : '' }}> Subuh on time</label>
            <label><input type="checkbox" name="zuhur" value="{{ $aktivitas->zuhur }}" {{ $aktivitas->zuhur == 1 ? 'checked' : '' }}> Zuhur on time</label>
            <label><input type="checkbox" name="asar" value="{{ $aktivitas->asar }}" {{ $aktivitas->asar == 1 ? 'checked' : '' }}> Asar on time</label>
            <label><input type="checkbox" name="magrib" value="{{ $aktivitas->magrib }}" {{ $aktivitas->magrib == 1 ? 'checked' : '' }}> Magrib on time</label>
            <label><input type="checkbox" name="isya" value="{{ $aktivitas->isya }}" {{ $aktivitas->isya == 1 ? 'checked' : '' }}> Isya on time</label>
            <label><input type="checkbox" name="tahajud" value="{{ $aktivitas->tahajud }}" {{ $aktivitas->tahajud == 1 ? 'checked' : '' }}> Tahajud</label>
            <label><input type="checkbox" name="qosubuh" value="{{ $aktivitas->qosubuh }}" {{ $aktivitas->qosubuh == 1 ? 'checked' : '' }}> Qobliyah Subuh</label>
            <label><input type="checkbox" name="dhuha" value="{{ $aktivitas->dhuha }}" {{ $aktivitas->dhuha == 1 ? 'checked' : '' }}> Dhuha</label>
            <label><input type="checkbox" name="qozuhur" value="{{ $aktivitas->qozuhur }}" {{ $aktivitas->qozuhur == 1 ? 'checked' : '' }}> Qobliyah Zuhur</label>
            <label><input type="checkbox" name="bazuhur" value="{{ $aktivitas->bazuhur }}" {{ $aktivitas->bazuhur == 1 ? 'checked' : '' }}> Ba'diyah Zuhur</label>
        </div>
        <div>
            <label><input type="checkbox" name="sesubuh" value="{{ $aktivitas->sesubuh }}" {{ $aktivitas->sesubuh == 1 ? 'checked' : '' }}> Sedekah Subuh</label>
            <label><input type="checkbox" name="tilpagi" value="{{ $aktivitas->tilpagi }}" {{ $aktivitas->tilpagi == 1 ? 'checked' : '' }}> Tilawah pagi</label>
            <label><input type="checkbox" name="zikpagi" value="{{ $aktivitas->zikpagi }}" {{ $aktivitas->zikpagi == 1 ? 'checked' : '' }}> Zikir pagi</label>
            <label><input type="checkbox" name="tilmalam" value="{{ $aktivitas->tilmalam }}" {{ $aktivitas->tilmalam == 1 ? 'checked' : '' }}> Tilawah malam</label>
            <label><input type="checkbox" name="waqiah" value="{{ $aktivitas->waqiah }}" {{ $aktivitas->waqiah == 1 ? 'checked' : '' }}> Baca Al Waqi'ah</label>
            <label><input type="checkbox" name="mulk" value="{{ $aktivitas->mulk }}" {{ $aktivitas->mulk == 1 ? 'checked' : '' }}> Baca Al Mulk</label>
            <label><input type="checkbox" name="halangan" value="{{ $aktivitas->halangan }}" {{ $aktivitas->halangan == 1 ? 'checked' : '' }}> Berhalangan</label>
            <label><input type="checkbox" name="doakan" value="{{ $aktivitas->doakan }}" {{ $aktivitas->doakan == 1 ? 'checked' : '' }}> Mendoakan orang lain</label>
        </div>
    </div>





</form>

    </div>

</div><br><br><br><br>


@endsection



