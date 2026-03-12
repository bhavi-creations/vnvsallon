<?php
include './db.connection/db_connection.php';

// Retrieve service filter
$service = isset($_GET['service']) ? $_GET['service'] : '';

$sql = "SELECT id, title, main_content, main_image, created_at FROM blogs";
if (!empty($service)) {
  $sql .= " WHERE service = ?";
}
$sql .= " ORDER BY created_at DESC";

$stmt = $conn->prepare($sql);

if (!empty($service)) {
  $stmt->bind_param("s", $service);
}

$stmt->execute();
$result = $stmt->get_result();
?>

<?php include 'header.php'; ?>

<style>
  body {
    background: #000;
    color: #fff;
  }

  .blog-section {
    padding: 40px 0;
  }

  .blog-card {
    background: #111;
    border: 1px solid #c8a74e;
    border-radius: 10px;
    overflow: hidden;
    transition: 0.4s;
    height: 100%;
  }

  .blog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 5px 20px rgba(200, 167, 78, 0.4);
  }

  .blog-img {
    width: 100%;
    height: 230px;
    object-fit: cover;
  }

  .blog-content {
    padding: 20px;
  }

  .blog-title {
    color: #c8a74e;
    font-size: 20px;
    font-weight: 600;
    text-decoration: none;
  }

  .blog-title:hover {
    color: #fff;
  }

  .blog-desc {
    color: #ccc;
    font-size: 14px;
    margin-top: 10px;
  }

  .read-btn {
    margin-top: 15px;
    background: #c8a74e;
    border: none;
    padding: 8px 18px;
    color: #000;
    font-weight: 600;
    border-radius: 5px;
    transition: 0.3s;
  }

  .read-btn:hover {
    background: #fff;
    color: #000;
  }
</style>


<main>

  <div class="container blog-section">

    <div class="row">

      <?php
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

          $image_path = !empty($row['main_image']) ? "admin/uploads/photos/{$row['main_image']}" : "default_image.png";

          echo "

<div class='col-lg-4 col-md-6 mb-4'>

<div class='blog-card'>

<a href='fullblog_newpage.php?id={$row['id']}'>
<img src='{$image_path}' class='blog-img'>
</a>

<div class='blog-content'>

<h5>
<a class='blog-title' href='fullblog_newpage.php?id={$row['id']}'>
" . htmlspecialchars($row['title']) . "
</a>
</h5>

<p class='blog-desc'>
" . substr(strip_tags($row['main_content']), 0, 100) . "...
</p>

<a href='fullblog_newpage.php?id={$row['id']}'>
<button class='read-btn'>Read More</button>
</a>

</div>
</div>
</div>

";
        }
      } else {
        echo "<p style='color:#fff;'>No blog posts found.</p>";
      }
      ?>

    </div>
  </div>

</main>


<?php include('./footer.php'); ?>


<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<script src="assets/js/main.js"></script>

</body>

</html>

<?php
$stmt->close();
$conn->close();
?>