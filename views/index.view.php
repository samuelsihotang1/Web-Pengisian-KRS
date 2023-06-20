<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php require "partials/banner.php"; ?>
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

  <!-- Pilih NIM Mahasiswa -->
    <form method="POST" action="proses.php">
      <div class="form-floating">
        <select class="form-select" id="floatingSelect" name="menu" aria-label="Floating label select example" onchange="this.form.submit()">
          <option selected>...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <label for="floatingSelect">NIM Mahasiswa: </label>
      </div>
    </form>


    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Default checkbox
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
      <label class="form-check-label" for="flexCheckChecked">
        Checked checkbox
      </label>
    </div>
  </div>
</main>

<?php require "partials/footer.php"; ?>