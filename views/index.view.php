<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php require "partials/banner.php"; ?>
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <?php
    $config = require "config.php";
    $db = new Database($config['database']);
    $students = $db->connect("SELECT * FROM students")->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <table>
      <tr>
        <th>NIM</th>
        <th>Name</th>
        <th>KRS</th>
      </tr>
      <?php
      foreach ($students as $student) :
        $nim = $student['nim'];
        $name = $student['name_std'];
        $editkrs = "/edit.php?student_id=$nim";
        $viewkrs = "/view.php?nim=$nim";
      ?>
        <tr>
          <td><?= $nim ?></td>
          <td><?= $name ?></td>
          <td><a href='<?= $editkrs ?>'>Edit</a> - <a href='<?= $viewkrs ?>'>View</a></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</main>

<?php require "partials/footer.php"; ?>