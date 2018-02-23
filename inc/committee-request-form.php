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
        $committeeType = htmlspecialchars($_POST['membershipType']);

    
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
            !empty($committeeType) &&
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
                  $body = 
                          '<h2>Membership Request</h2>
                          <p>This is a membership request for the IPMA-HROK.  Sent from the Membership Request Form on the IPMA-HROK Wesbite.</p>
                          <table style="border: 1px solid black;">
                            <tr style="font-weight:bold; border: 1px solid black;">
                              <th style="text-align:left; border: 1px solid black;">Form Question</th>
                              <th style="text-align:left; border: 1px solid black;">Contact Infomation</th>
                            </tr>
                            <tr style="border: 1px solid black;">
                              <td style="font-weight:bold; border: 1px solid black;">First Name</td>
                              <td style="border: 1px solid black;">'.$firstName.'</td>
                            </tr>
                            <tr style="border: 1px solid black;">
                              <td style="font-weight:bold; border: 1px solid black;">Last Name</td>
                              <td style="border: 1px solid black;">'.$lastName.'</td>
                            </tr>
                            <tr style="border: 1px solid black;">
                              <td style="font-weight:bold; border: 1px solid black;">Company</td>
                              <td style="border: 1px solid black;">'.$company.'</td>
                            </tr>
                            <tr style="border: 1px solid black;">
                              <td style="font-weight:bold; border: 1px solid black;">Address Line 1</td>
                              <td style="border: 1px solid black;">'.$addressLine1.'</td>
                            </tr>
                            <tr style="border: 1px solid black;">
                              <td style="font-weight:bold; border: 1px solid black;">Address Line 2</td>
                              <td style="border: 1px solid black;">'.$addressLine2.'</td>
                            </tr>
                            <tr style="border: 1px solid black;">
                              <td style="font-weight:bold; border: 1px solid black;">City</td>
                              <td style="border: 1px solid black;">'.$city.'</td>
                            </tr>
                            <tr style="border: 1px solid black;">
                              <td style="font-weight:bold; border: 1px solid black;">State</td>
                              <td style="border: 1px solid black;">'.$state.'</td>
                            </tr>
                            <tr style="border: 1px solid black;">
                              <td style="font-weight:bold; border: 1px solid black;">Zip code</td>
                              <td style="border: 1px solid black;">'.$zipcode.'</td>
                            </tr>
                            <tr style="border: 1px solid black;">
                              <td style="font-weight:bold; border: 1px solid black;">Country</td>
                              <td style="border: 1px solid black;">'.$country.'</td>
                            </tr>
                            <tr style="border: 1px solid black;">
                              <td style="font-weight:bold; border: 1px solid black;">Phone Number</td>
                              <td style="border: 1px solid black;">'.$phone.'</td>
                            </tr>
                            <tr style="border: 1px solid black;">
                              <td style="font-weight:bold; border: 1px solid black;">Current IPMA-HR Member</td>
                              <td style="border: 1px solid black;">'.$memberRadios.'</td>
                            </tr>
                            <tr style="border: 1px solid black;">
                              <td style="font-weight:bold; border: 1px solid black;">Committee Selected</td>
                              <td style="border: 1px solid black;">'.$committeeType.'</td>
                            </tr>
                            <tr style="border: 1px solid black;">
                              <td style="font-weight:bold; border: 1px solid black;">Message</td>
                              <td style="border: 1px solid black;">'.$message.'</td>
                            </tr>
                          </table>';
                  #Setting Email Headers
                  $headers .= "MIME-Version: 1.0" . "\r\n";
                  $headers .= "Content-Type:text/html;charset=UTF-8" . "
                      \r\n";
                  # Additional Headers
                  $headers .= "Reply-To: " . $firstName . "<".$email.">\r\n"; 
                  $headers .= "Return-Path: " . $firstName ."<brendan@bdonaldson.com>\r\n"; 
                  $headers .= "From: " .$firstName. "<brendan@bdonaldson.com>". "\r\n";
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
                      $committeeType = '';


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