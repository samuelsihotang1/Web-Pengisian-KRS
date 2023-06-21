<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php require "partials/banner.php"; ?>

<?php
$nim = $_GET['nim'];
$config = require "config.php";
$db = new Database($config['database']);
?>
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <form method='post' action='edit?nim=<?= $nim ?>'>
      <table>
        <tr>
          <th>Course's Code</th>
          <th>Name</th>
          <th>Select</th>
        </tr>
        <?php

        $courses = $db->connect("SELECT * FROM courses");

        $selectedCourses = $db->connect("SELECT code_crs FROM krs WHERE nim = $nim")->fetchAll(PDO::FETCH_COLUMN);
        foreach ($courses as $course) :
          $code_crs = $course['code_crs'];
          $name = $course['name_crs'];

          $isChecked = in_array($code_crs, $selectedCourses) ? 'checked' : '';
        ?>
          <tr>
            <td><?= $code_crs ?></td>
            <td><?= $name ?></td>
            <td><input type='checkbox' name='selectedCourses[]' value='<?= $code_crs ?>' <?= $isChecked ?>></td>
          </tr>
        <?php endforeach; ?>

      </table>
      <button type="submit">Submit</button>
    </form>
    <br>
    <br>
    <a href='index'>&larr; Back to Students</a>
    </table>
    </form>
  </div>
</main>
<?php

$nim = $_GET['nim'];
$config = require "config.php";
$db = new Database($config['database']);

if (isset($_POST['selectedCourses'])) {
  $selectedCourses = $_POST['selectedCourses'];

  $existingCourses = $db->connect("SELECT code_crs FROM krs WHERE nim = '$nim'")->fetchAll(PDO::FETCH_COLUMN);

  // Remove duplicate courses from the selected courses
  $selectedCourses = array_unique($selectedCourses);

  // Check which courses need to be inserted or deleted
  $coursesToInsert = array_diff($selectedCourses, $existingCourses);
  $coursesToDelete = array_diff($existingCourses, $selectedCourses);

  // Insert new courses
  if (!empty($coursesToInsert)) {
    $insertQuery = "INSERT INTO krs (nim, code_crs) VALUES ";
    $insertValues = [];

    foreach ($coursesToInsert as $courseId) {
      $insertValues[] = "('$nim', '$courseId')";
    }

    $insertQuery .= implode(',', $insertValues);

    $db->connect($insertQuery);
  }

  // Delete courses
  if (!empty($coursesToDelete)) {
    $deleteQuery = "DELETE FROM krs WHERE nim = '$nim' AND code_crs IN ('";
    $deleteQuery .= implode("', '", $coursesToDelete);
    $deleteQuery .= "')";

    $db->connect($deleteQuery);
  }
  echo '<script>window.location.replace("view?nim=' . $nim . '");</script>';
}
?>

<?php require "partials/footer.php"; ?>