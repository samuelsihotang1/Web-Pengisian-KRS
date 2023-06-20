<!DOCTYPE html>
<html>

<head>
  <title>Form Input dengan Dropdown</title>
  <style>
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-menu {
      position: absolute;
      z-index: 1;
      width: 100%;
      max-height: 200px;
      overflow-y: auto;
      background-color: #f9f9f9;
      border: 1px solid #ccc;
    }

    .dropdown-item {
      padding: 10px;
      cursor: pointer;
    }

    .dropdown-item:hover {
      background-color: #e2e2e2;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  
  <h2>Form Input dengan Dropdown</h2>
  <div class="dropdown input-group mb-3">
    <span class="input-group-text" id="basic-addon1">NIM Anda:</span>
    <input type="text" id="inputField" class="form-control" onkeyup="filterOptions()" placeholder="NIM Anda: " aria-label="NIM Anda: " aria-describedby="basic-addon1">
  </div>
  <div id="dropdownMenu" class="dropdown-item dropdown-menu"></div>

  <script>
    // Daftar opsi yang tersedia
    <?php
    $options = array("Apple", "Banana", "Cherry", "Durian", "Grape", "Lemon", "Orange", "Pineapple", "Strawberry", "Watermelon");
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