<style>
    .submenu-item {
        padding-left: 30px !important;
        /* Gunakan !important untuk memastikan padding diterapkan */
    }

    /* .sidebar-gray {
        background-color: #808080 !important;
        color: white !important; 
    }

    .sidebar-gray .nav-link:hover {
        background-color: #6c757d !important; 
    }


    .sidebar-gray .brand-link {
        background-color: #6c757d !important;
    } */
    .canvas-container {
        border: 1px solid #000;
        width: 100%;
        height: 100px;
        margin-top: 5px;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<script>
    // Konfirmasi penghapusan menggunakan SweetAlert
    function confirmDelete(event) {
        event.preventDefault(); // Mencegah form untuk submit secara default
        const form = event.target; // Ambil form yang di-submit
        const url = form.action; // Ambil URL form
        const csrfToken = form.querySelector('input[name="_token"]').value; // Ambil token CSRF

        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data ini akan dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna mengonfirmasi, kirim form
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                        '_method': 'DELETE',
                        '_token': csrfToken
                    },
                    success: function(response) {
                        Swal.fire(
                            'Terhapus!',
                            'Data Anda telah dihapus.',
                            'success'
                        ).then(() => {
                            location.reload(); // Reload halaman setelah penghapusan
                        });
                    },
                    error: function(err) {
                        Swal.fire(
                            'Gagal!',
                            'Terjadi kesalahan saat menghapus data.',
                            'error'
                        );
                    }
                });
            }
        });
    }

    function initCanvas(canvasId) {
        const canvas = document.getElementById(canvasId);
        const ctx = canvas.getContext('2d');
        let drawing = false;

        canvas.addEventListener('mousedown', (e) => {
            drawing = true;
            ctx.beginPath();
            ctx.moveTo(e.offsetX, e.offsetY);
        });

        canvas.addEventListener('mousemove', (e) => {
            if (drawing) {
                ctx.lineTo(e.offsetX, e.offsetY);
                ctx.stroke();
            }
        });

        canvas.addEventListener('mouseup', () => {
            drawing = false;
        });

        canvas.addEventListener('mouseleave', () => {
            drawing = false;
        });
    }

    function clearCanvas(canvasId) {
        const canvas = document.getElementById(canvasId);
        const ctx = canvas.getContext('2d');
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    }

    // Inisialisasi canvas untuk asesmen dan asesor
    initCanvas('canvasAsesi');
    initCanvas('canvasAsesor');
</script>