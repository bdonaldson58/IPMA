<?php
// Variables to set up the showcase section properly
 $showcaseType = 'form-showcase';
 $showcaseTitle = 'Contact Us';
 $showcaseMessage = 'To contact us, either fill out the form below or send an email to ophra_ok@aol.com';

 // Included files for the navbar and the showcase
 include 'inc/header.php';
 include 'inc/showcase.php';

// Required for the contact form to send email
 require 'inc/contact-form.php';
?>

<!-- ###### CONTACT FORM #######-->
<section id="light-section" class="pt-4">
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
        <form action="contact-form.php" method="post">
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
                <input type="text" name="company" class="form-control" placeholder="Company" value="<?php echo isset($_POST['company']) ? $company : ''; ?>">
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
                    <input type="text" class="form-control" placeholder="City" name="city" value="<?php echo isset($_POST['city']) ? $city : ''; ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="State" name="state" value="<?php echo isset($_POST['state']) ? $state : ''; ?>">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Zip Code" name="zipcode" value="<?php echo isset($_POST['zipcode']) ? $zipcode : ''; ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Country" name="country" value="<?php echo isset($_POST['country']) ? $country : ''; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="phone"><strong>&#42;Phone</strong></label>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Phone Number" name="phone" value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>">
                </div>
            </div>
            <label><strong>&#42;Would you like to join our mailing list?</strong></label>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="mailingList" value="Yes">
                    Yes
                </label>
            </div>
              <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="mailingList" value="No">
                    No
                </label>
              </div>

            <div class="form-group mt-3">
              <label><strong>&#42;Message</strong></label>
              <textarea class="form-control" id="membershipRequest" rows="4" placeholder="Your message here..." name="message"></textarea>
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