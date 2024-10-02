    // Saat form disubmit, tambahkan checkbox yang tidak dicentang dengan nilai false
    document.querySelector('form').addEventListener('submit', function() {
        document.querySelectorAll('input[type="checkbox"]').forEach(function(checkbox) {
            if (!checkbox.checked) {
                // Buat input hidden untuk mengirimkan nilai false jika checkbox tidak dicentang
                var hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = checkbox.name;
                hiddenInput.value = '0';
                checkbox.parentNode.appendChild(hiddenInput);
            }
        });
    });
