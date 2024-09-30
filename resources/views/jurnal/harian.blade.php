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
@endsection






@section('content')

<div class="container">

    <div class="list-container">
    <div class="list-item01">
        <div class="list-icon"></div>
        <div class="list-details01">
            <p>Mak Ici</p>
            <span>Purworejo</span>
            <span>10 November 2024</span>
        </div>
    </div>
    <h2>Formulir Jurnal</h2>
<form>

    <div class="checkbox-grid">
        <div >

        <label><input type="checkbox" name="ibadah[]" value="Subuh on time"> Subuh on time</label>

        <label><input type="checkbox" name="ibadah[]" value="Zuhur on time"> Zuhur on time</label>
        <label><input type="checkbox" name="ibadah[]" value="Asar on time"> Asar on time</label>
        <label><input type="checkbox" name="ibadah[]" value="Magrib on time"> Magrib on time</label>
        <label><input type="checkbox" name="ibadah[]" value="Isya on time"> Isya on time</label>

            <label><input type="checkbox" name="ibadah[]" value="Tahajud"> Tahajud</label>

            <label><input type="checkbox" name="ibadah[]" value="Sholat Fajr"> Qobliyah Subuh</label>
            <label><input type="checkbox" name="ibadah[]" value="Dhuha"> Dhuha</label>

            <label><input type="checkbox" name="ibadah[]" value="Qobliyah"> Qobliyah zuhur</label>
            <label><input type="checkbox" name="ibadah[]" value="Ba'diyah zuhur"> Ba'diyah zuhur</label>


        </div>
        <div>
        <label><input type="checkbox" name="ibadah[]" value="Sedekah Subuh"> Sedekah Subuh</label>

        <label><input type="checkbox" name="ibadah[]" value="Tilawah pagi"> Tilawah pagi</label>
            <label><input type="checkbox" name="ibadah[]" value="Zikir pagi"> Zikir pagi</label>
            <label><input type="checkbox" name="ibadah[]" value="Tilawah malam"> Tilawah malam</label>
            <label><input type="checkbox" name="ibadah[]" value="Baca Al Waqi'ah"> Baca Al Waqi'ah</label>
            <label><input type="checkbox" name="ibadah[]" value="Baca Al Mulk"> Baca Al Mulk</label>
            <label><input type="checkbox" name="ibadah[]" value="Berhalangan"> Berhalangan</label>
            <label><input type="checkbox" name="ibadah[]" value="Mendoakan orang lain"> Mendoakan orang lain</label>

        </div>
    </div>





</form>

    </div>

</div><br><br><br><br>


@endsection



