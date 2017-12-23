<?php
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
    <div class="row pt-2">
      <div class="col-md-12">
        <form>
            <div class="row mb-2 mt-3">
                <div class="col">
                    <label for="address"><strong>Basic Information</strong></label>
                </div>
            </div>
            <div class="row my-2">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Company">
                </div>
                <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="address"><strong>Address</strong></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Line 1">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Line 2">
                </div>
            </div>
            <div class="row my-2">
                <div class="col">
                    <input type="text" class="form-control" placeholder="City">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="State">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Zip Code">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Country">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="phone"><strong>Phone Number</strong></label>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Phone Number">
                </div>
            </div>

            <label for="member"><strong>Are you an IPMA-HR Member?</strong></label>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    Yes
                </label>
            </div>
              <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    No
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                    I don't know
                </label>
              </div>   
            <div class="row my-2">
                <div class="col-md-6">
                <label for="member-number"><strong>National IPMA-HR Member Number</strong></label>
                <input type="text" class="form-control" placeholder="Member Number">
                </div>
            </div>
            <div class="form-group">
              <label for="typeOfMembership"><strong>Choose One</strong></label>
              <select class="form-control" id="typeOfMembership">
                <option>Individual</option>
                <option>Organizational (1-2 Staff)</option>
                <option>Organizational (3-5 Staff)</option>
                <option>Organizational (6-10 Staff)</option>
                <option>Organizational (11+ Staff)</option>
              </select>
            </div>
            <div class="form-group">
              <label for="membershipRequest"><strong>Membership Request</strong></label>
              <textarea class="form-control" id="membershipRequest" rows="4"></textarea>
            </div>
            <div class="row mb-5">
                <div class="col">
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
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