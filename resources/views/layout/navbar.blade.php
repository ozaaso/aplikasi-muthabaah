

<div class="navbar1">
    <div class="navbar-left">
        <!-- Elemen kiri, seperti logo atau menu -->
    </div>

    <div style="flex-grow: 1; display: flex; justify-content: center;">
        <a href="/">
            <img src="https://fontmeme.com/permalink/240930/098658dbb6b3db7de617e1d2eaf9dfe2.png" alt="new-stencil-tfb-font" border="0">
        </a>
    </div>

    <div class="navbar-right">
        <div class="navbar-right">
            <div class="search-box1">
                <input type="text" id="searchInput" placeholder="Search">
            </div>
            <button class="cari-btn1" id="searchButton">Cari</button>
        </div>
    </div>
</div>


<script>
    document.getElementById('searchButton').addEventListener('click', function() {
        var searchValue = document.getElementById('searchInput').value.trim();

        // Cek jika input tidak kosong
        if (searchValue !== "") {
            // Redirect ke URL /jurnal/search/<keyword>
            window.location.href = '/jurnal/search/' + encodeURIComponent(searchValue);
        }
    });
</script>
