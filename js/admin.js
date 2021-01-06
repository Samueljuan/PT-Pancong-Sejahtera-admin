$(function () {
   $('[data-toggle="tooltip"]').tooltip()
})

function konfirmasik() {
   var hapus = confirm("Apakah Anda Yakin Ingin Menghapusnya?");
   if (hapus == true) {
      alert("Komentar Telah Terhapus!")
   }
}
function konfirmasim() {
   var hapus = confirm("Apakah Anda Yakin Ingin Menghapusnya?");
   if (hapus == true) {
      alert("Masukan Telah Terhapus!")
   }
}