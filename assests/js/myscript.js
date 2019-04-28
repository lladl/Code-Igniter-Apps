const flashData = $('.flash-data').data('flashdata');
if (flashData) {
	Swal.fire({
		title: 'Data Mahasiswa',
		text: 'Berhasil ' + flashData,
		type: 'success'
	})
}

//tombol hapus
$('.tombolHapus').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Are you sure?',
		text: "You won't be able to revert this!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Delete Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});
