<?php
// Include necessary files
include "header.php";

if (isset($_SESSION['username'])) {
    include 'app/db.conn.php';
    include 'app/helpers/user.php';
    include 'app/helpers/conversations.php';
    include 'app/helpers/timeAgo.php';
    include 'app/helpers/last_chat.php';

    // Check if 'id' is provided in the URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Fetch user data
        try {
            $stmt = $conn->prepare("SELECT * FROM users WHERE user_id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($results as $row) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
      .p-container{
          display: flex;
          width: 90%;
          justify-content: space-evenly ;
          position: relative;
          background-color:#ffff;
          height:600px;
          padding: 10px;
          margin:100px 0px 0px 100px ;
          border-radius: 10px;
      }
      .img-container{
          width: 50%;
          height:98%;
          overflow: hidden; 
          border: 1px solid;
          box-shadow: 5px 10px pink;
      }
      .data{
          margin-top: 20px;
          width: 18%;
          margin-left:2px;
          height: 90%;
          font-style: oblique;
      }
      .w-100{
          object-fit:contain;
          height:100%;
          border-radius: 10px;
          margin-top: 20PX;
      }

      ul{ 

        list-style: none;
        font-size:20px;
        line-height: 1cm;
      }
    </style>
</head>
<body>
<div class="p-container">
      <div class="img-container">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/<?php echo $row['img1'] ?>" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img/<?php echo $row['img2'] ?>" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img/<?php echo $row['img3'] ?>" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="data">
        <h3>Details</h3>
        <ul>
          <li>
            <strong>Name</strong>:
            <?php echo $row['name']; ?>
          </li>
          <li>
            <strong>Gender</strong>:
            <?php echo $row['gender'] ?>
          </li>
          <li>
            <strong>Age</strong>:
            <?php echo $row['age']?>
          </li>
          <li>
            <strong>Email</strong>: <a href="#"><?php echo $row['username']; ?></a>
          </li>
          <li>
            <strong>Height</strong>: <a href="#"><?php echo $row['height']; ?></a>
          </li>
        </ul>
      </div>
    </div>
</body>
</html>
<?php
            }
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    } else {
        // Redirect if 'id' is not provided in the URL
        header("Location: error_page.php");
        exit();
    }

} else {
    header("Location: intro.php");
    exit();
}
?>
  