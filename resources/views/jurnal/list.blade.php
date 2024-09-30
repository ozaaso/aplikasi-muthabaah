@extends('layout.template')


@section('css')
{{-- wajib --}}
<link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/css/tab.css') }}" rel="stylesheet" >
{{-- dinamis --}}
<link href="{{ asset('assets/css/list.css') }}" rel="stylesheet" >

@endsection

@section('js')
<script src="{{ asset('assets/js/tab.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
@endsection





@section('content')

<div class="container">
    <div class="list-container">
        <a href="bulanan" class="list-link">
            <div class="list-container01">
                <div class="list-item">
                    <div class="list-details">
                        <p>Mak Ici</p>
                        <span>Jakarta</span>
                    </div>
                </div>
            </div>
        </a><br>
        <a href="bulanan" class="list-link">
            <div class="list-container01">
                <div class="list-item">
                    <div class="list-details">
                        <p>Mak Ubay</p>
                        <span>Cicalengka</span>
                    </div>
                </div>
            </div>
        </a><br>
        <a href="bulanan" class="list-link">
            <div class="list-container01">
                <div class="list-item">
                    <div class="list-details">
                        <p>Mak Ubay</p>
                        <span>Cicalengka</span>
                    </div>
                </div>
            </div>
        </a><br>
        <a href="bulanan" class="list-link">
            <div class="list-container01">
                <div class="list-item">
                    <div class="list-details">
                        <p>Mak Ubay</p>
                        <span>Cicalengka</span>
                    </div>
                </div>
            </div>
        </a><br>
        <a href="bulanan" class="list-link">
            <div class="list-container01">
                <div class="list-item">
                    <div class="list-details">
                        <p>Mak Ubay</p>
                        <span>Cicalengka</span>
                    </div>
                </div>
            </div>
        </a><br>
        <a href="bulanan" class="list-link">
            <div class="list-container01">
                <div class="list-item">
                    <div class="list-details">
                        <p>Mak Ubay</p>
                        <span>Cicalengka</span>
                    </div>
                </div>
            </div>
        </a><br>
        <a href="bulanan" class="list-link">
            <div class="list-container01">
                <div class="list-item">
                    <div class="list-details">
                        <p>Mak Ubay</p>
                        <span>Cicalengka</span>
                    </div>
                </div>
            </div>
        </a><br>
        <a href="bulanan" class="list-link">
            <div class="list-container01">
                <div class="list-item">
                    <div class="list-details">
                        <p>Mak Ubay</p>
                        <span>Cicalengka</span>
                    </div>
                </div>
            </div>
        </a><br>

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
</div><br><br><br><br><br><br>




@endsection



