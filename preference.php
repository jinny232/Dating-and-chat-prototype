

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Profile settings - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
<link href="assets/css/style.css" rel="stylesheet">
<style type="text/css">
    	body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}

.nav-link {
    color: black;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
    color: #fff;
    background-color: #ff69b4; /* Change this to the pink color you desire */
}
.btn-pink {
    color: #fff;
    background-color: #ff69b4; /* Replace with your desired pink color */
    border-color: #ff69b4; /* Use the same pink color for the border */
}
 .custom-control-input:checked + .custom-control-label::before {
        border-color: #ff69b4; /* Replace with your desired color */
        background-color: #ff69b4; /* Replace with your desired background color */
    }
    </style>
</head>
<body>

 <!-- ======= Header ======= -->
 <header id="header" class="header-top">
    <div class="container">

      <h1><a href="index.html"><img src="assets/img/Project_Logo.png" style="width: 200px; height: 90px;"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2> Where Hearts Unite! 💖 <span> Connect. Explore. Love.👫</span></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link " href="index.php#header">Home</a></li>
          <li><a class="nav-link" href="index.php#about">About</a></li>
          <li><a class="nav-link" href="index.php#resume">Resume</a></li>
          <li><a class="nav-link" href="index.php#services">Services</a></li>
          <li><a class="nav-link" href="index.php#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="index.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->
<br><br><br><br>


<div class="container">
    <h2>About Me</h2>

    <form>
    <!-- Name Section -->
    <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" class="form-control" id="Name" value="<?php  echo isset($data['fname'])?$data['fname']:''?>">
        <div class="success-message" id="nameSuccess"></div>
        <button type="button" class="btn  btn-pink" onclick="showSuccessMessage('name')">Save</button>
        <button type="button" class="btn btn-secondary">Cancel</button>
    </div>

    <!-- Genter Section -->
<div class="form-group">
    <label for="genter">Genter</label>
    <select class="form-control" id="genter">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
        <!-- Add more options as needed -->
    </select>
    <div class="success-message" id="locationSuccess"></div>
    <button type="button" class="btn btn-pink" onclick="showSuccessMessage('location')">Save</button>
    <button type="button" class="btn btn-secondary">Cancel</button>
</div>

    <!-- Age Section -->
    <div class="form-group">
        <label for="Age">Age</label>
        <input type="text" class="form-control" id="Age">
        <div class="success-message" id="nameSuccess"></div>
        <button type="button" class="btn  btn-pink" onclick="showSuccessMessage('name')">Save</button>
        <button type="button" class="btn btn-secondary">Cancel</button>
    </div>



    <!-- Height Section -->
<div class="form-group">
    <label for="height">Height</label>
    <select class="form-control" id="height">
        <option value="150">150-155cm</option>
        <option value="155">155-160cm</option>
        <option value="160">160-165cm</option>
        <option value="165">165-170cm</option>
        <option value="170">170-185cm</option>
     <!-- Add more options as needed -->
    </select>
    <div class="success-message" id="locationSuccess"></div>
    <button type="button" class="btn btn-pink" onclick="showSuccessMessage('location')">Save</button>
    <button type="button" class="btn btn-secondary">Cancel</button>
</div>

    <!-- weight Section -->
    <div class="form-group">
        <label for="Weight">Weight</label>
        <input type="text" class="form-control" id="Weight">
        <div class="success-message" id="nameSuccess"></div>
        <button type="button" class="btn  btn-pink" onclick="showSuccessMessage('name')">Save</button>
        <button type="button" class="btn btn-secondary">Cancel</button>
    </div>

    <!-- Body Section -->
<div class="form-group">
    <label for="body">Body</label>
    <select class="form-control" id="body">
        <option value="Average">Average</option>
        <option value="Fit">Fit</option>
        <option value="A Little extra">A Little extra</option>
        <option value="Curvy">Curvy</option>
        <option value="Full figured">Full figured</option>

        <!-- Add more options as needed -->
    </select>
    <div class="success-message" id="locationSuccess"></div>
    <button type="button" class="btn btn-pink" onclick="showSuccessMessage('location')">Save</button>
    <button type="button" class="btn btn-secondary">Cancel</button>
</div>

<!-- Location Section -->
<div class="form-group">
    <label for="location">Location</label>
    <select class="form-control" id="location">
        <option value="Burma">Burma</option>
        <option value="United States">United States</option>
        <option value="United Kingdom">United Kingdom</option>
        <!-- Add more options as needed -->
    </select>
    <div class="success-message" id="locationSuccess"></div>
    <button type="button" class="btn btn-pink" onclick="showSuccessMessage('location')">Save</button>
    <button type="button" class="btn btn-secondary">Cancel</button>
</div>

     

    <!-- Interest Section -->
 <div class="form-group">
        <label for="interest">Interest</label>
        <input type="text" class="form-control" id="Interest" value="Programming">
        <div class="success-message" id="nameSuccess"></div>
        <button type="button" class="btn  btn-pink" onclick="showSuccessMessage('name')">Save</button>
        <button type="button" class="btn btn-secondary">Cancel</button>
    </div>

    <!-- Religion Section -->
<div class="form-group">
    <label for="religion">Religion</label>
    <select class="form-control" id="religion">
        <option value="christianity">Christianity</option>
        <option value="islam">Islam</option>
        <option value="hinduism">Hinduism</option>
        <option value="buddhism">Buddhism</option>
        <option value="sikhism">Sikhism</option>
        <option value="judaism">Judaism</option>
        <option value="other">Other</option>
        
        <!-- Add more options as needed -->
    </select>
    <div class="success-message" id="locationSuccess"></div>
    <button type="button" class="btn btn-pink" onclick="showSuccessMessage('location')">Save</button>
    <button type="button" class="btn btn-secondary">Cancel</button>
</div>

    <!-- Astsign Section -->
<div class="form-group">
    <label for="astsign">Astsign</label>
    <select class="form-control" id="astsign">
    <option value="christianity">Christianity</option>
        <option value="aries">Aries</option>
        <option value="taurus">Taurus</option>
        <option value="gemini">Gemini</option>
        <option value="cancer">Cancer</option>
        <option value="leo">Leo</option>
        <option value="virgo">Virgo</option>
        <option value="libra">Libra</option>
        <option value="scorpio">Scorpio</option>
        <option value="sagittarius">Sagittarius</option>
        <option value="capricorn">Capricorn</option>
        <option value="aquarius">Aquarius</option>
        <option value="pisces">Pisces</option>
        <!-- Add more options as needed -->
    </select>
 



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var signOutBtn = document.getElementById("signOutBtn");
        var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));

        signOutBtn.addEventListener("click", function (event) {
            event.preventDefault();

            // Open the confirmation modal
            confirmationModal.show();
        });

        var confirmSignOutBtn = document.getElementById("confirmSignOutBtn");
        var cancelSignOutBtn = document.getElementById("cancelSignOutBtn");
        var modalCloseBtn = document.getElementById("modalCloseBtn");

        confirmSignOutBtn.addEventListener("click", function () {
            // Call your sign-out function (clear authentication tokens, etc.)
            // For example, redirect to login.php after sign-out
            window.location.href = 'login.php';
        });

        cancelSignOutBtn.addEventListener("click", function () {
            // Close the confirmation modal
            confirmationModal.hide();
        });

        // Handle modal close event (clicking the close button)
        modalCloseBtn.addEventListener('click', function () {
            // You can add additional logic here if needed
            confirmationModal.hide();
        });
    });

    //script for change password 
    function changePassword() {
    // Simulate a successful response for testing
    var response = { success: true };

    // Check the actual response from your server
    // if (response.success) {
    $('#successModal').modal('show');
    // }
}

function redirectToSettings() {
    // Redirect to the settings.php page
    window.location.href = 'setting.php';
}

</script>



</body>
</html>