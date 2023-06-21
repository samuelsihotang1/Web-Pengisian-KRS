<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php require "partials/banner.php"; ?>

<?php
$nim = $_GET['nim'];

$config = require "config.php";
$db = new Database($config['database']);

$courses = $db->connect("SELECT * FROM courses INNER JOIN krs ON courses.code_crs = krs.code_crs WHERE krs.nim = '$nim'")->fetchAll(PDO::FETCH_ASSOC);
?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <h2>NIM: <?= $nim ?></h2>
    <table>
      <tr>
        <th>Course's Code</th>
        <th>Name</th>
      </tr>

      <?php
      foreach ($courses as $course) :
        $code_crs = $course['code_crs'];
        $name = $course['name_crs'];
      ?>
        <tr>
          <td><?= $code_crs ?></td>
          <td><?= $name ?></td>
        </tr>
      <?php endforeach; ?>

    </table>

    <a href='/'>&larr; Back to Students</a>

  </div>
</main>

<?php require "partials/footer.php"; ?>