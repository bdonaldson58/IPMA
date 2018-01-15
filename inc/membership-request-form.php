<?php

#   Message variables
    $msg = '';
    $msgClass = '';
/*  
    If the form has been submitted...
        filter_has_var - checking to see if variable of specified type exists
        INPUT_POST -  indicates that we are submitting a post form
*/      if(filter_has_var(INPUT_POST, 'submit')){ 
/*      Getting the data from the form using POST 
        Each variable in apostrophes, i.e. 'email', refers to the name in the html form
        htmlspecialchars converts special characters into html entities so people cannot
        run scripts or harmful code in your form.
*/
        $firstName = htmlspecialchars($_POST['firstName']);
        $lastName = htmlspecialchars($_POST['lastName']);
        $email = htmlspecialchars($_POST['email']);
        $company = htmlspecialchars($_POST['company']);
        $addressLine1 = htmlspecialchars($_POST['addressLine1']);
        $addressLine2 = htmlspecialchars($_POST['addressLine2']);
        $city = htmlspecialchars($_POST['city']);
        $state = htmlspecialchars($_POST['state']);
        $zipcode = htmlspecialchars($_POST['zipcode']);
        $country = htmlspecialchars($_POST['country']);
        $phone = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);
        $memberRadios = htmlspecialchars($_POST['memberRadios']);
        $memberNumber = htmlspecialchars($_POST['memberNumber']);
        $membershipType = htmlspecialchars($_POST['membershipType']);

    
/*      Checking required fields
            If the email, name and message fields are all NOT empty, then the form passed.
            Else, the user input failed, and messages will display according to which
            field failed the test
*/      if(
            !empty($firstName) && 
            !empty($lastName) && 
            !empty($company) && 
            !empty($email) && 
            !empty($city) && 
            !empty($state) && 
            !empty($zipcode) && 
            !empty($country) &&
            !empty($memberRadios) &&
            !empty($membershipType) &&
            !empty($phone)
            ){
/*        The form has been submitted and the fields are not empty
          Now validating email. Using FILTER_VALIDATE_EMAIL inside of
          filter_var in order to validate that a correct email address has
          been entered.
  */        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
              $msg = 'Please enter a valid email address';
              $msgClass = 'alert-danger';   
            } else {
                #Sending the email
                  $toEmail = 'bdonaldson58@gmail.com';
                  $subject = 'Membership Request From '.$firstName." ".$lastName;
                  $body = '<h2>Membership Request</h2>
                          <h4 style="display:inline-block">First Name</h4><p> '.$firstName.'</p>
                          <h4>Last Name</h4><p> '.$lastName.'</p>
                          <h4>Company</h4><p> '.$company.'</p>
                          <h4>Email</h4><p> '.$email.'</p>
                          <h4>Address Line 1</h4><p> '.$addressLine1.'</p>
                          <h4>Address Line 2</h4><p> '.$addressLine2.'</p>
                          <h4>City</h4><p> '.$city.'</p>
                          <h4>State</h4><p> '.$state.'</p>
                          <h4>Zipcode</h4><p> '.$zipcode.'</p>
                          <h4>Country</h4><p> '.$country.'</p>
                          <h4>Phone Number</h4><p> '.$phone.'</p>
                          <h4>Current IPMA-HR Member</h4><p> '.$memberRadios.'</p>
                          <h4>IPMA-HR Member Number</h4><p> '.$memberNumber.'</p>
                          <h4>Type of Membership</h4><p> '.$membershipType.'</p>
                          <h4>Message</h4><p> '.$message.'</p>';
                  #Setting Email Headers
                  $headers = "MIME-Version: 1.0" . "\r\n";
                  $headers .= "Content-Type:text/html;charset=UTF-8" . "
                      \r\n";
                  # Additional Headers
                  $headers .= "From: " .$firstName. "<".$email.">". "\r\n";
                  if(mail($toEmail, $subject, $body, $headers)){
                  # Email sent
                      $msg = 'Your email has been sent';
                      $msgClass = 'alert-success';

                  # Clearing the form after email has been sent
                      $firstName = '';
                      $lastName = '';
                      $company = '';
                      $email = '';
                      $addressLine1 = '';
                      $addressLine2 = '';
                      $city = '';
                      $state = '';
                      $zipcode = '';
                      $country = '';
                      $phone = '';
                      $message = '';
                      $memberRadios = '';
                      $membershipType = '';
                      $memberNumber = '';


                  } else {
                      # Email not sent
                      $msg = 'Your email was not sent';
                      $msgClass = 'alert-danger';
                  }    
              }
          } else {
              //Failed
              $msg = 'Please fill in all required fields';
              $msgClass = 'alert-danger';
          }      
    }
?>