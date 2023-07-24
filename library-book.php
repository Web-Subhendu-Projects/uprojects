<?php
    include 'include/header.php';
    include 'include/sidebar.php';
    include 'include/top_header.php';
?>


<div class="container-fluid whole">
            <div class="row">
                <div class="col-12">
                <div class="dashboard">
                    <h1><span class="fas fa-school" style="color: #FF1E1E;"></span> <span>Welcome To University Saraswati Vidya</span></h1><hr>


                    <div class="title">
                        <span><a href="index.php">Home</a> / <span>Total Student Book</span></span>
                    </div>
                </div>
            </div>
        </div>



         <div class="row header-title">
           <div class="col-12">
               <h4 class="text-center">Total Student Course</h4><hr>
             </div>
          </div>

          <div class="title-text">
             <h5 class="text-center">Student's Our Courses</h5>
         </div>





            <div class="Library">
                  <h1> Student Library Book All Strem Engrin..</h1>
           </div>

         <div class="book-image">
             <img src="img/book/book.jpg" style="width: 100%; height: 400px;" alt="Book Cover">
        </div>

        <div class="container">
             <div id="bookContainer">
               <div class="book">
               <img class="book-image" src="img/book/book1.jpg" alt="Book 1">
               <button class="book-select">Select</button>
    </div>

    <div class="book">
      <img class="book-image" src="img/book/book2.jpg" alt="Book 2">
      <button class="book-select">Select</button>
    </div>

    <div class="book">
      <img class="book-image" src="img/book/book3.jpg" alt="Book 3">
      <button class="book-select">Select</button>
    </div>
  </div>

  <button id="bookNowBtn" style="background-color: red; color: white; font-family: initial; font-weight: bold; border: 1px solid #00FFCA;">Booking Now</button>
</div>
















<?php
    include 'include/footer.php';
?>