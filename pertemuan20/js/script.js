$(document).ready(function () {
  // Hide tombol cari
  $("#tombol-cari").hide();
  // Event ketika keyword diketik
  $("#keyword").on("keyup", function () {
    // memunculkan icon loading
    $(".loader").show();
    // ajax menggunakan load
    // $("#table").load("ajax/games.php?keyword=" + $("#keyword").val());
    $.get("ajax/games.php?keyword=" + $("#keyword").val(), function (data) {
      $("#table").html(data);
      $(".loader").hide();
    });
  });
});
