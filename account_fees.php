<?php
    include 'include/header.php';
    include 'include/sidebar.php';
    include 'include/top_header.php';
?>



 <div class="container-fluid whole">
            <div class="row">
                <div class="col-12">
                <div class="dashboard">
                    <h1><span class="fas fa-school" style="color: #FF1E1E;"></span>  <span>Welcome To University Saraswati Vidya</span></h1><hr>


                    <div class="title">
                        <span><a href="index.php">Home</a> / <span>Account's Module Details</span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row student-form-area">
        <div class="col-12">
         <h4 class="text-center p-2">Account's Module Details</h4><hr>
         
         <div class="title-text">
             <h5 class="text-center">Admission/Semaster/Hostel/Library Fees Managmant's</h5>
         </div>

         <div class="container">
             <h2>Admission Fees Paymnt</h2>
             <form id="paymentForm" action="payment.php" method="POST">
                 <div class="form-group">
                     <label for="name">Full Name:</label>
                     <input type="text" id="name" name="name" required>
                 </div>
                  <div class="form-group">
                     <label for="aadherId">Student ID:</label>
                     <input type="text" id="studentID" name="studentID" required>
                 </div>
                 <div class="form-group">
                     <label for="aadherId">Aadhar ID Card Number:</label>
                     <input type="text" id="aadherId" name="aadherId" required>
                 </div>
                 <div class="form-group">
                     <label for="aadherId">Email ID:</label>
                     <input type="text" id="mail" name="name" required>
                 </div>
                 <div class="form-group">
                     <label for="aadherId">Bank Account Number:</label>
                     <input type="text" id="number" name="number" required>
                 </div>
                 <div class="form-group">
                     <label for="aadherId">Total Amount:</label>
                     <input type="text" id="number" name="number" required>
                 </div>
                  <div class="form-group">
                     <label for="feeType">Fee Type:</label>
                     <select id="feeType" name="feeType">
                        <option value="admission">Admission Fees</option>
                        <option value="semester">Semester Fees</option>
                        <option value="hostel">Hostel Fees</option>
                        <option value="library">Library Fees</option>
                 </select>
               </div>
                 <div class="form-group">
                     <label for="paymentMethod">Payment Method:</label>
                     <div class="payment-method">
                       <a href="https://pay.google.com/gp/v/pubtransaction?txn_id=YOUR_TRANSACTION_ID">Google Pay/</a>
                       <a href="https://mapi.phonepe.com/posPayment?txnId=YOUR_TRANSACTION_ID">PhonePe</a>
                       <a href="https://securegw.paytm.in/theia/processTransaction?ORDER_ID=YOUR_ORDER_ID">/Paytm</a>
                       <a href="upi://pay?pa=UPINAME@upi&pn=RECIPIENT_NAME&mc=MERCHANT_CODE&tid=TRANSACTION_ID&tr=TRANSACTION_REF_ID&tn=TRANSACTION_NOTE&am=AMOUNT&cu=CURRENCY">/BHIM UPI</a>
                       <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=YOUR_EMAIL&item_name=PRODUCT_NAME&amount=AMOUNT&currency_code=CURRENCY"> /PayPal</a>
                       <a href="https://payments.amazon.com/checkout/SELLER_ID?returnUrl=RETURN_URL&checkoutReviewReturnUrl=REVIEW_RETURN_URL&amount=AMOUNT&currencyCode=CURRENCY">/Amazon Pay</a>
                       <div>
                           <input type="radio" id="online" name="paymentMethod" value="online" checked>
                           <img class="payment-icon" style="width: 50%; height: 5%;" src="img/pay/pay2.jpg"  alt="Online Payment">
                       </div>
                       <div class="pay-group">
                          <button type="submit" style="margin: 0px 0px 0px 640px;">Pay Now</button>
                  </div>        
             </form>
         </div>


       








































<?php
    include 'include/footer.php';
?>