<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php require "partials/banner.php"; ?>
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <h1>Form Input dengan Dropdown</h1>
    <br>
    <div class="dropdown input-group mb-3">
      <span class="input-group-text" id="basic-addon1">NIM Anda:</span>
      <input type="text" id="inputField" class="form-control" onkeyup="filterOptions()" placeholder="NIM Anda: " aria-label="NIM Anda: " aria-describedby="basic-addon1">
    </div>
    <div id="dropdownMenu" class="dropdown-item dropdown-menu"></div>

    


  </div>
</main>

<?php require "partials/footer.php"; ?>