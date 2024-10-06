@extends('layout.template')


@section('css')
{{-- wajib --}}
<link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/css/tab.css') }}" rel="stylesheet" >
{{-- dinamis --}}

<link href="{{ asset('assets/css/list.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/css/form.css') }}" rel="stylesheet" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">


@endsection

@section('js')
<script src="{{ asset('assets/js/tab.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/form.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


@endsection





@section('content')

<div class="container">
    <div class="list-container">
        <form action="{{url('jurnal/'.$user->uuid)}}" method="POST">
            @method('PUT')
            @csrf
    <label for="name">Nama <span style="color: red;"></span></label>
    <input type="text" id="name" name="nama" class="input-form1" required value="{{$user->nama}}">

    <label for="asal">Asal <span style="color: red;"></span></label>
    <input type="text" id="asal" name="asal" class="input-form1" required value="{{$user->asal}}">


    <label for="tanggal">Tanggal <span style="color: red;">*</span></label>
    <input type="date" class="form-control" id="tanggal" name="tanggal" required value="{{$user->tanggal}}">
<br>

<div class="checkbox-grid">
    <div>
        <label><input type="checkbox" name="subuh" value="1" {{ $aktivitas->subuh == 1 ? 'checked' : '' }}> Subuh on time</label>
        <label><input type="checkbox" name="zuhur" value="1" {{ $aktivitas->zuhur == 1 ? 'checked' : '' }}> Zuhur on time</label>
        <label><input type="checkbox" name="asar" value="1" {{ $aktivitas->asar == 1 ? 'checked' : '' }}> Asar on time</label>
        <label><input type="checkbox" name="magrib" value="1" {{ $aktivitas->magrib == 1 ? 'checked' : '' }}> Magrib on time</label>
        <label><input type="checkbox" name="isya" value="1" {{ $aktivitas->isya == 1 ? 'checked' : '' }}> Isya on time</label>
        <label><input type="checkbox" name="tahajud" value="1 }}" {{ $aktivitas->tahajud == 1 ? 'checked' : '' }}> Tahajud</label>
        <label><input type="checkbox" name="qosubuh" value="1 }}" {{ $aktivitas->qosubuh == 1 ? 'checked' : '' }}> Qobliyah Subuh</label>
        <label><input type="checkbox" name="dhuha" value="1" {{ $aktivitas->dhuha == 1 ? 'checked' : '' }}> Dhuha</label>
        <label><input type="checkbox" name="qozuhur" value="1" {{ $aktivitas->qozuhur == 1 ? 'checked' : '' }}> Qobliyah Zuhur</label>
        <label><input type="checkbox" name="bazuhur" value="1" {{ $aktivitas->bazuhur == 1 ? 'checked' : '' }}> Ba'diyah Zuhur</label>
        <label><input type="checkbox" name="bamagrib" value="1" {{ $aktivitas->bamagrib == 1 ? 'checked' : '' }}> Ba'diyah Magrib</label>
        <label><input type="checkbox" name="baisya" value="1" {{ $aktivitas->baisya == 1 ? 'checked' : '' }}> Ba'diyah Isya</label>

    </div>
    <div>
        <label><input type="checkbox" name="sesubuh" value="1" {{ $aktivitas->sesubuh == 1 ? 'checked' : '' }}> Sedekah</label>
        <label><input type="checkbox" name="tilpagi" value="1" {{ $aktivitas->tilpagi == 1 ? 'checked' : '' }}> Tilawah Qur'an</label>
        <label><input type="checkbox" name="zikpagi" value="1" {{ $aktivitas->zikpagi == 1 ? 'checked' : '' }}> Zikir pagi</label>
        <label><input type="checkbox" name="tilmalam" value="1" {{ $aktivitas->tilmalam == 1 ? 'checked' : '' }}> Zikir petang</label>
        <label><input type="checkbox" name="waqiah" value="1" {{ $aktivitas->waqiah == 1 ? 'checked' : '' }}> Al Waqi'ah/Al Mulk</label>
        <label><input type="checkbox" name="mulk" value="1" {{ $aktivitas->mulk == 1 ? 'checked' : '' }}> tambah ilmu/Kajian</label>
        <label><input type="checkbox" name="halangan" value="1" {{ $aktivitas->halangan == 1 ? 'checked' : '' }}> Berhalangan</label>
        <label><input type="checkbox" name="doakan" value="1" {{ $aktivitas->doakan == 1 ? 'checked' : '' }}> Mendoakan orang lain</label>
    </div>
</div>

    <button type="submit" class="tombol1">Submit</button>
    <button type="button" class="cancel-button">Cancel</button>
</form>

    </div><br><br>

</div><br><br><br><br>


@endsection



