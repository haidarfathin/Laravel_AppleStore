$(document).ready(function() {
    // Tambahkan event click pada setiap tautan navbar
    $('.navbar-link').on('click', function(event) {
      event.preventDefault(); // Menghentikan default behavior dari tautan
  
      var target = $(this).attr('href'); // Ambil nilai href tautan
      var offset = $(target).offset().top; // Ambil posisi offset target
  
      // Animasikan scroll menuju target dengan durasi 800ms
      $('html, body').animate({
        scrollTop: offset
      }, 800);
    });
  });
  