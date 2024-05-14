<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <h1 class="form-title">Registration</h1>
      <form action="index1.php" method="post">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullName">Full Name<sup>*</sup></label>
            <input type="text" id="fullName" name="full_name" placeholder="Enter Full Name" required />
          </div>
          <div class="user-input-box">
            <label for="initial">Initial<sup>*</sup></label>
            <input type="text" id="initial" name="initial" placeholder="Enter Initial" required />
          </div>
          <div class="user-input-box">
            <label for="email">Email<sup>*</sup></label>
            <input type="email" id="email" name="email" placeholder="Enter Email" required />
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">WhatsApp Number<sup>*</sup></label>
            <input type="tel" id="phoneNumber" name="phone_number" placeholder="Enter Phone Number" required />
          </div>
          <div class="user-input-box">
            <label for="currently">Currently<sup>*</sup></label>
            <select name="currently" id="currently" required>
              <option value="">Choose Anyone</option>
              <option value="students">Students</option>
              <option value="underGraduate">Under Graduate</option>
              <option value="postGraduate">Post Graduate</option>
              <option value="others">Others</option>
            </select>
          </div>
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Register" class="submit" />
        </div>
      </form>
    </div>
  </body>
</html>
