`  <?php
  include './db.connection/db_connection.php';

  // Retrieve service filter
  $service = isset($_GET['service']) ? $_GET['service'] : '';

  // SEO kosam 'slug' field ni kuda add chesam
  $sql = "SELECT id, slug, title, main_content, main_image, created_at FROM blogs";
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
      display: flex;
      flex-direction: column;
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
      flex-grow: 1;
      display: flex;
      flex-direction: column;
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
      flex-grow: 1;
      text-align: justify;
    }

    .blog-date {
      font-size: 12px;
      color: #c8a74e;
      margin-bottom: 10px;
      display: block;
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
      width: fit-content;
    }

    .read-btn:hover {
      background: #fff;
      color: #000;
    }

    .blog_button {
      display: flex;
      justify-content: center;
      padding: 15px 0px;
    }

    .blog_section_blog {
      background: gold;
      color: #000;
      border: none;
      padding: 12px 36px;
      border-radius: 6px;
      font-size: 24px;
      font-weight: 700;
      text-transform: uppercase;
    }
  </style>

  <main>
    <div class="container blog-section">
      <div class="blog_button">
        <h1 class="blog_section_blog">BLOGS</h1>
      </div>

      <div class="row">
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {

            // 1. Image Path Logic
            $image_path = !empty($row['main_image']) ? "admin/uploads/photos/" . htmlspecialchars($row['main_image']) : "default_image.png";

            // 2. SEO Friendly URL (Slug) Logic
            $blog_link_val = !empty($row['slug']) ? urlencode($row['slug']) : $row['id'];
            $final_url = "fullblog.php?id=" . $blog_link_val;

            // 3. Date Formatting
            $formatted_date = date("d M Y", strtotime($row['created_at']));

            // 4. Content Preview (Strip HTML and limit characters)
            $preview = substr(strip_tags(html_entity_decode($row['main_content'])), 0, 100);

            echo "
            <div class='col-lg-4 col-md-6 mb-4'>
              <div class='blog-card'>
                <a href='{$final_url}'>
                  <img src='{$image_path}' class='blog-img' alt='" . htmlspecialchars($row['title']) . "'>
                </a>

                <div class='blog-content'>
                  <span class='blog-date'>🕒 {$formatted_date}</span>
                  <h5>
                    <a class='blog-title' href='{$final_url}'>
                      " . htmlspecialchars($row['title']) . "
                    </a>
                  </h5>

                  <p class='blog-desc'>
                    {$preview}...
                  </p>

                  <a href='{$final_url}'>
                    <button class='read-btn'>Read More</button>
                  </a>
                </div>
              </div>
            </div>";
          }
        } else {
          echo "<div class='col-12'><p style='color:#fff; text-align:center;'>No blog posts found.</p></div>";
        }
        ?>
      </div>
    </div>
  </main>

  <?php include('./footer.php'); ?>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>

  </body>

  </html>

  <?php
  $stmt->close();
  $conn->close();
  ?>`