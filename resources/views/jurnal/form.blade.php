@extends('layout.template')


@section('css')
{{-- wajib --}}
<link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/css/tab.css') }}" rel="stylesheet" >
{{-- dinamis --}}

<link href="{{ asset('assets/css/list.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/css/form.css') }}" rel="stylesheet" >
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
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
        <form action="{{url('konten')}}" method="POST">
            @csrf
    <label for="name">Nama <span style="color: red;"></span></label>
    <input type="text" id="name" name="nama" class="input-form1" required>

    <label for="asal">Asal <span style="color: red;"></span></label>
    <input type="text" id="asal" name="asal" class="input-form1" required>


    <label for="tanggal">Tanggal <span style="color: red;">*</span></label>
    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
<br>
<br>
<div class="checkbox-grid">
    <div>

        <label><input type="checkbox" name="subuh" value="1"> Subuh on time</label>
        <label><input type="checkbox" name="zuhur" value="1"> Zuhur on time</label>
        <label><input type="checkbox" name="asar" value="1"> Asar on time</label>
        <label><input type="checkbox" name="magrib" value="1"> Magrib on time</label>
        <label><input type="checkbox" name="isya" value="1"> Isya on time</label>
        <label><input type="checkbox" name="tahajud" value="1"> Tahajud</label>
        <label><input type="checkbox" name="qosubuh" value="1"> Qobliyah Subuh</label>
        <label><input type="checkbox" name="dhuha" value="1"> Dhuha</label>
        <label><input type="checkbox" name="qozuhur" value="1"> Qobliyah Zuhur</label>
        <label><input type="checkbox" name="bazuhur" value="1"> Ba'diyah Zuhur</label>
        <label><input type="checkbox" name="bamagrib" value="1"> Ba'diyah Magrib</label>
        <label><input type="checkbox" name="baisya" value="1"> Ba'diyah Isya</label>
    </div>
    <div>
        <label><input type="checkbox" name="sesubuh" value="1"> Sedekah</label>
        <label><input type="checkbox" name="tilpagi" value="1"> Tilawah Qur'an</label>
        <label><input type="checkbox" name="zikpagi" value="1"> Zikir pagi</label>
        <label><input type="checkbox" name="tilmalam" value="1"> Zikir petang</label>
        <label><input type="checkbox" name="waqiah" value="1"> Al Waqi'ah / Al Mulk</label>
        <label><input type="checkbox" name="mulk" value="1"> tambah ilmu / kajian</label>
        <label><input type="checkbox" name="halangan" value="1"> Berhalangan</label>
        <label><input type="checkbox" name="doakan" value="1"> Mendoakan orang lain</label>
    </div>
</div>

    <button type="submit" class="tombol1">Submit</button>
    <button type="button" class="cancel-button">Cancel</button>
</form>

    </div><br><br>

</div><br><br><br><br>


@endsection



