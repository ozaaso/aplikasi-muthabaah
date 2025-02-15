<!-- Tab Bar -->
<style>
    .tab-bar-container {
        /* width: 100%;
        background-color: #f4f4f4;
        padding: 10px 0; */
    }

    .tab-bar {
        display: flex;
        justify-content: space-around;
    }

    .tab {
        text-align: center;
        padding: 10px;
    }

    .tab a {
        text-decoration: none; /* Menghilangkan underline */
        color: inherit; /* Menggunakan warna teks yang sama dengan parent */
    }

    .tab a:hover {
        color: inherit; /* Memastikan warna teks tetap sama saat dihover */
    }

    .tab span {
        font-size: 14px;
        color: #333; /* Warna teks default */
    }


</style>
<div class="tab-bar-container">
    <div class="tab-bar">
        <div class="tab" id="tab-harian">
            <a href="/"><span>◾<br> Jurnal</span></a>
        </div>
        <div class="tab" id="tab-form">
           <a href="/form"> <span>✎<br> Form</span></a>
        </div>
        <div class="tab" id="tab-list">
           <a href="/list"> <span>☰<br> List</span></a>
        </div>
    </div>
</div>
