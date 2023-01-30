// ambil element yang dibutuhkan
let keyword = document.getElementById("keyword");
let tombolCari = document.getElementById("tombol-cari");
let table = document.getElementById("table");

// tambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
  // buat object ajax
  let xhr = new XMLHttpRequest();

  // cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      table.innerHTML = xhr.responseText;
    }
  };
  xhr.open("GET", "ajax/games.php?keyword=" + keyword.value, true);
  xhr.send();
});
