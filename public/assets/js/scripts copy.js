document.addEventListener('DOMContentLoaded', function() {
    // Periksa apakah kita berada di halaman form.php
    if (document.body.classList.contains('form-page')) {
        const inputTanggal = document.getElementById('tanggal');
        const outputTanggal = document.getElementById('tanggal-terformat');

        // Fungsi untuk mengubah format tanggal
        function formatTanggal(date) {
            const options = { day: 'numeric', month: 'long', year: 'numeric' };
            return new Date(date).toLocaleDateString('id-ID', options);
        }

        // Event listener untuk perubahan tanggal
        inputTanggal.addEventListener('change', function() {
            const selectedDate = this.value;
            if (selectedDate) {
                outputTanggal.textContent = formatTanggal(selectedDate);
            } else {
                outputTanggal.textContent = '';
            }
        });

        // Set nilai default tanggal hari ini saat halaman dimuat
        const today = new Date().toISOString().split('T')[0];
        inputTanggal.value = today;
        outputTanggal.textContent = formatTanggal(today);
    }
});
