$(document).ready(function () {
  // Event ketika keyword diketik
  $("#keyword").on("keyup", function () {
    $("#table").load("ajax/games.php?keyword=" + $("#keyword").val());
  });
});
