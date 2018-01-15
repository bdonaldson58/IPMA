<?php
 require 'inc/membership-request-form.php';
 include 'inc/header.php';
?>
  <!-- IN-PAGE NAVIGATION -->

<header id="showcase1">
    <div class="dark-overlay">
        <div class="membership-inner">
            <div class="container">
                <div class="row">
                <h1 class="mx-auto">Membership Request</h1>
                </div>
                <div class="row">
                <h5 class="mx-auto">Please fill out the form below, we would love for you to join</h5>
                </div>
            </div>
        </div>
        </div>
</header>

<!-- ###### SECTION 1 #######-->
<section id="about-section-1" class="pt-4">
  <div class="container">
  <div class="row">
  
     <!-- If $msg is not blank, ouput $msg and $msgClass variables   -->
     <?php if($msg != ''): ?> 
            <div class="alert <?php echo $msgClass; ?>" role="alert">
            <?php echo $msg; ?></div>

        <?php endif; ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; # Submitting to this file ?>">
  </div>
    <div class="row pt-2">
      <div class="col-md-12">
        <form action="membership-request-form.php" method="post">
            <div class="row mt-1">
                <div class="col">
                    <label><i>All required fields marked with a &#42;</i></label>
                </div>
            </div>
            <div class="row mb-2 mt-3">
                <div class="col">
                    <label><strong>Basic Information</strong></label>
                </div>
            </div>
            <div class="row my-2">
                <div class="col">
                    <input type="text" name="firstName"class="form-control" placeholder="&#42;First name" value="<?php echo isset($_POST['firstName']) ? $firstName : ''; ?>">
                </div>
                <div class="col">
                    <input type="text" name="lastName" class="form-control" placeholder="&#42;Last name" value="<?php echo isset($_POST['lastName']) ? $lastName : ''; ?>">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                <input type="text" name="company" class="form-control" placeholder="&#42;Company" value="<?php echo isset($_POST['company']) ? $company : ''; ?>">
                </div>
                <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="&#42;Email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="address"><strong>Address</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Line 1" name="addressLine1" value="<?php echo isset($_POST['addressLine1']) ? $addressLine1 : ''; ?>">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Line 2" name="addressLine2" value="<?php echo isset($_POST['addressLine2']) ? $addressLine2 : ''; ?>">
                </div>
            </div>
            <div class="row my-2">
                <div class="col">
                    <input type="text" class="form-control" placeholder="&#42;City" name="city" value="<?php echo isset($_POST['city']) ? $city : ''; ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="&#42;State" name="state" value="<?php echo isset($_POST['state']) ? $state : ''; ?>">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <input type="text" class="form-control" placeholder="&#42;Zip Code" name="zipcode" value="<?php echo isset($_POST['zipcode']) ? $zipcode : ''; ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="&#42;Country" name="country" value="<?php echo isset($_POST['country']) ? $country : ''; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="phone"><strong>Phone Number</strong></label>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                <input type="text" class="form-control" placeholder="&#42;Phone Number" name="phone" value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>">
                </div>
            </div>

            <label><strong>&#42;Are you an IPMA-HR Member?</strong></label>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="memberRadios" value="Yes">
                    Yes
                </label>
            </div>
              <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="memberRadios" value="No">
                    No
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="memberRadios" value="I don't know">
                    I don't know
                </label>
              </div>   
            <div class="row mt-3">
                <div class="col-md-12 col-sm-6">
                <label><strong>National IPMA-HR Member Number (If current member)</strong></label> 
                <input type="text" class="form-control" placeholder="Member Number" name="memberNumber" value="<?php echo isset($_POST['memberNumber']) ? $memberNumber : ''; ?>">
                </div>
            </div>
            <div class="form-group">

            <label for="typeOfMembership" class="my-3"><strong>&#42;Which type of membership are you requesting?</strong></label>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="membershipType" id="exampleRadios1" value="Individual">
                    Individual
                </label>
            </div>
              <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="membershipType" id="exampleRadios2" value="1-2 Staff">
                    Organizational (1-2 Staff)
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="membershipType" id="exampleRadios3" value="3-5 Staff">
                    Organizational (3-5 Staff)
                </label>
              </div>  
              <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="membershipType" id="exampleRadios3" value="6-10 Staff">
                    Organizational (6-10 Staff)
                </label>
              </div>  
              <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="membershipType" id="exampleRadios3" value="11+ Staff">
                    Organizational (11+ Staff)
                </label>
              </div>  
            <div class="form-group mt-3">
              <label for="membershipRequest"><strong>Anything else you would like for us to know?</strong></label>
              <textarea class="form-control" id="membershipRequest" rows="4" name="message"></textarea>
            </div>
            <div class="row mb-5">
                <div class="col">
                    <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</section>


<?php
 include 'inc/footer.php';
 ?>