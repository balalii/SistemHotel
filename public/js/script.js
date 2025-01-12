// HOME
const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true, // Mengaktifkan loop

  pagination: {
    el: '.swiper-pagination',
    clickable: true, // Membuat pagination dapat diklik
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

function selectMethod(element) {
  // Hapus kelas 'selected' dari semua metode pembayaran
  const methods = document.querySelectorAll('.payment-method');
  methods.forEach(method => method.classList.remove('selected'));

  // Tambahkan kelas 'selected' ke elemen yang diklik
  element.classList.add('selected');
}




