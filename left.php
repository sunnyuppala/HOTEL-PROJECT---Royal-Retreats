<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="contact-container">
        <div class="contact-left">
            <h2 class="contact-left-title">Contact Info</h2>
            <hr>
            <form action='booking_val.php'  method='post'>
                <div class="contact-inputs">
                    <input type="text" id="fname" name="firstname" placeholder="First Name">
                    <input type="text" id="lname" name="lastname" placeholder="Last Name">
                    <input type="tel" id="phone" name="phone" placeholder="Phone">
                    <input type="email" id="email" name="email" placeholder="Email Address">
                </div>
                <div class="contact-inputs">
                    <textarea id="address" name="address" placeholder="Address"></textarea>
                    <input type="text" id="country" name="country" placeholder="Country">
                    <input type="text" id="city" name="city" placeholder="City">
                    <input type="text" id="postal" name="postal" placeholder="Zip/Postal Code">
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="account" name="account">
                    <label for="account">I would like to create an account</label>
                </div>
                <textarea id="details" name="details" placeholder="Additional Details and Preferences"></textarea><br>
                <button type="submit">Book Faster (Optional)</button>
                <div  >
                    <h1>Payment Information</h1>
                    
                        <label for="card-number">Card Number:</label>
                        <input type="text" id="card-number" name = "card-number" placeholder="Enter card number" required>
            
                        <label for="expiration-date">Expiration Date:</label>
                        <input type="text" id="expiration-date" name = "expiration-date" placeholder="MM/YY" required>
            
                        <label for="cvv">CVV:</label>
                        <input type="text" id="cvv" name ="cvv" placeholder="CVV" required>
            
                        <button type="submit">Pay Now</button>
                  
                </div>
                <div class="payment-form">
                    <h1>Rooms on Card</h1>
                    
                        <label for="check-in">Check-in:</label>
                        <input type="text" id="check-in" name="check-in" placeholder="mm/dd/yyyy" required>
            
                        <label for="check-out">Check-out:</label>
                        <input type="text" id="check-out" name = "check-out" placeholder="mm/dd/yyyy" required>
            
                       
                        
                        </select>
            
                        <input type="checkbox" id="booking-conditions" required >
                        <label>By completing this booking, I agree with the Booking Conditions/Terms.<label>
            
                        <input type="checkbox" id="privacy-terms" required>
                        <label for="privacy-terms">I agree to the Privacy Terms.</label>
            
                        <button type="submit">COMPLETE BOOKING</button>
                    
                </div>
               
            </form>

        </div>
        
       
</body>

</html>
