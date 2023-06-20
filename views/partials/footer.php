</div>
<script>
  // Daftar opsi yang tersedia
  <?php
  $config = require "config.php";
  $db = new Database($config['database']);
  $result = $db->connect("SELECT NIM FROM mahasiswa");
  $options = array();
  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $options[] = $row['NIM'];
  }
  ?>

  var options = <?php echo json_encode($options); ?>;

  // Fungsi untuk memfilter opsi berdasarkan input pengguna
  function filterOptions() {
    var input = document.getElementById("inputField").value.toLowerCase();
    var dropdownMenu = document.getElementById("dropdownMenu");
    dropdownMenu.innerHTML = "";

    // Memeriksa setiap opsi
    options.forEach(function(option) {
      if (option.toLowerCase().startsWith(input)) {
        var optionElement = document.createElement("div");
        optionElement.innerHTML = option;
        optionElement.className = "dropdown-item";
        optionElement.onclick = function() {
          document.getElementById("inputField").value = option;
          dropdownMenu.innerHTML = "";
        };
        dropdownMenu.appendChild(optionElement);
      }
    });
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>