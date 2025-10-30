<?php 
  include "header.php";
  if (isset($_SESSION['username'])) {
  	# database connection file
  	include 'app/db.conn.php';
  	include 'app/helpers/user.php';
?>
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="exe.css">
<body style="padding-top: 80px;">

<?php
        $id = $_SESSION['user_id'];

        
        try {
            $stmt = $conn->prepare("SELECT * FROM users where user_id != $id  ");
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($results as $row) {
                ?>
                 <div class="shadow">
                  <div class="container">
                
                  <a href="details.php?id=<?php echo $row['user_id']; ?>">
                    <img src="uploads/<?php echo $row['p_p']; ?>" style="width:100% "></a>
  
                  </div>
                 </div>


            
            <?php
                // Add more fields as neede
                
            }
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
        ?>



</div>
</body>
</html>
<?php
  }else{
  	header("Location: intro.php");
   	exit;
  }
 ?>
