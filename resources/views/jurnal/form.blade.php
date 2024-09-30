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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


@endsection





@section('content')

<div class="container">
    <div class="list-container">
    <form>
    <label for="name">Nama <span style="color: red;"></span></label>
    <input type="text" id="name" name="name" class="input-form1" required>

    <label for="asal">Asal <span style="color: red;"></span></label>
    <input type="text" id="asal" name="asal" class="input-form1" required>


    <label for="tanggal">Tanggal <span style="color: red;">*</span></label>
    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
<br>

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

    <button type="submit" class="tombol1">Submit</button>
    <button type="button" class="cancel-button">Cancel</button>
</form>

    </div><br><br>

</div><br><br><br><br>


@endsection



