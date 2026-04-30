<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('js/index.js') }}"></script>
<script src="{{ asset('js/details.js') }}"></script>

<script>
    /**
     * Tampilkan confirm dialog
     * @param {string} id - ID dialog yang ingin ditampilkan
     */
    function showConfirm(id) {
        const dialog = document.getElementById(id);
        const panel = document.getElementById(id + '-panel');

        if (!dialog || !panel) return;

        dialog.classList.remove('hidden');

        // Trigger animasi slide up
        requestAnimationFrame(() => {
            panel.classList.remove('translate-y-full');
        });
    }

    /**
     * Sembunyikan confirm dialog
     * @param {string} id - ID dialog yang ingin disembunyikan
     */
    function hideConfirm(id) {
        const dialog = document.getElementById(id);
        const panel = document.getElementById(id + '-panel');

        if (!dialog || !panel) return;

        panel.classList.add('translate-y-full');

        // Tunggu animasi selesai baru hide
        setTimeout(() => {
            dialog.classList.add('hidden');
        }, 300);
    }

    /**
     * Eksekusi aksi konfirmasi
     * @param {string} id     - ID dialog
     * @param {string} formId - ID form yang akan di-submit (opsional)
     */
    function handleConfirm(id, formId) {
        hideConfirm(id);

        if (formId) {
            setTimeout(() => {
                const form = document.getElementById(formId);
                if (form) form.submit();
            }, 300);
        }
    }
</script>
