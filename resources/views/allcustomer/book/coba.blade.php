<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nonaktifkan Tanggal Tertentu</title>
</head>
<body>

<label for="tanggal">Pilih Tanggal:</label>
<input type="date" id="tanggal" name="tanggal">

<script>
  // Daftar tanggal yang tidak diizinkan
  const tanggalTidakTersedia = ["2025-01-15", "2025-01-20", "2025-02-10"];

  const inputTanggal = document.getElementById('tanggal');

  // Fungsi untuk menonaktifkan tanggal-tanggal tertentu
  inputTanggal.addEventListener('input', function () {
    const tanggalDipilih = inputTanggal.value;

    // Jika tanggal yang dipilih ada dalam daftar yang tidak diperbolehkan
    if (tanggalTidakTersedia.includes(tanggalDipilih)) {
      alert("Tanggal ini tidak tersedia. Silakan pilih tanggal lain.");
      inputTanggal.value = ''; // Reset nilai input
    }
  });

  // Fungsi opsional: Membatasi tanggal hanya dalam rentang tertentu (contoh min dan max)
  const minDate = "2025-01-01"; // Tanggal minimum yang bisa dipilih
  const maxDate = "2025-12-31"; // Tanggal maksimum yang bisa dipilih
  inputTanggal.setAttribute("min", minDate);
  inputTanggal.setAttribute("max", maxDate);
</script>

</body>
</html>
