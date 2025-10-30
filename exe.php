<!DOCTYPE html>
<html>
  <title>W3.CSS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  

  <head>

  </head>
  <body>
    <div class="p-container">
      <div class="img-container">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="uploads/<?php echo $row['img1'] ?>" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="uploads/<?php echo $row['img2'] ?>" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="uploads/<?php echo $row['img3'] ?>" class="d-block w-100" alt="..." />
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
        <h3>User Information</h3>
        <ul>
          <li>
            <strong>Name:</strong>:
            <?php echo $row['name']; ?>
          </li>
          <li>
            <strong>Gender:</strong>:
            <?php echo $row['gender'] ?>
          </li>
          <li>
            <strong>Age:</strong>:
            <?php echo $row['age']?>
          </li>
          <li>
            <strong>Email:</strong>: <a href="#"><?php echo $row['username']; ?></a>
          </li>
          <li>
            <strong>Height:</strong>: <a href="#"><?php echo $row['height']; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>
