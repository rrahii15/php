<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pizza Order Form</title>
  <link rel="stylesheet" href="./css./style.css">
  <style>
    /* Add your CSS styles here */
  </style>
</head>
<body>
  <header>
    <h1>Pizza Order Form</h1>
  </header>
  <div class="container">
    <div class="apply_box">
      <?php
      if(isset($_POST['submit'])){
        // Retrieve form data
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $pizza_size = $_POST['pizza_size'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $pincode = $_POST['pincode'];
        $date = $_POST['date'];
        $toppings = isset($_POST['toppings']) ? $_POST['toppings'] : array();
        $crust = $_POST['crust'];

        // Display the submitted data
        echo "<h2>Order Details:</h2>";
        echo "<p><strong>First Name:</strong> $first_name</p>";
        echo "<p><strong>Last Name:</strong> $last_name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Pizza Size:</strong> $pizza_size</p>";
        echo "<p><strong>Address:</strong> $address</p>";
        echo "<p><strong>City:</strong> $city</p>";
        echo "<p><strong>Pincode:</strong> $pincode</p>";
        echo "<p><strong>Date:</strong> $date</p>";
        echo "<p><strong>Toppings:</strong> " . implode(", ", $toppings) . "</p>";
        echo "<p><strong>Crust:</strong> $crust</p>";
      } else {
      ?>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form_container">
          <div class="form_control">
            <label for="first_name">First Name</label>
            <input
              type="text"
              id="first_name"
              name="first_name"
              placeholder="Enter First Name..."
            >
          </div>
          <div class="form_control">
            <label for="last_name">Last Name</label>
            <input
              type="text"
              id="last_name"
              name="last_name"
              placeholder="Enter Last Name..."
            >
          </div>
          <div class="form_control">
            <label for="email">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Enter Email..."
            >
          </div>
          <div class="form_control">
            <label for="pizza_size">Pizza Size</label>
            <select id="pizza_size" name="pizza_size">
              <option value="">Select size</option>
              <option value="extra_large">Extra Large</option>
              <option value="large">Large</option>
              <option value="medium">Medium</option>
              <option value="small">Small</option>
            </select>
          </div>
          <div class="form_control">
            <label for="address">Address</label>
            <textarea
              id="address"
              name="address"
              rows="4"
              cols="50"
              placeholder="Enter Address"
            ></textarea>
          </div>
          <div class="form_control">
            <label for="city">City</label>
            <input
              type="text"
              id="city"
              name="city"
              placeholder="Enter City Name..."
            >
          </div>
          <div class="form_control">
            <label for="pincode">Pincode</label>
            <input
              type="number"
              id="pincode"
              name="pincode"
              placeholder="Enter Pincode Name..."
            >
          </div>
          <div class="form_control">
            <label for="date">Date</label>
            <input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>">
          </div>
          <div class="form_control">
            <label>Toppings:</label>
            <div class="toppings">
              <label><input type="checkbox" name="toppings[]" value="pepperoni">Pepperoni</label>
              <label><input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms</label>
              <label><input type="checkbox" name="toppings[]" value="onions">Onions</label>
              <label><input type="checkbox" name="toppings[]" value="bacon">Bacon</label>
              <label><input type="checkbox" name="toppings[]" value="extra_cheese">Extra Cheese</label>
              <label><input type="checkbox" name="toppings[]" value="black_olives">Black Olives</label>
              <label><input type="checkbox" name="toppings[]" value="green_peppers">Green Peppers</label>
            </div>
          </div>
          <div class="form_control">
            <label for="crust">Crust:</label>
            <div class="crust">
              <label><input type="radio" name="crust" value="thin">Thin</label>
              <label><input type="radio" name="crust" value="thick">Thick</label>
              <label><input type="radio" name="crust" value="stuffed">Stuffed</label>
            </div>
          </div>
          <div class="button_container">
            <button type="submit" name="submit">Place Order</button>
          </div>
        </div>
      </form>
      <?php
      }
      ?>
    </div>
  </div>
</body>
</html>
