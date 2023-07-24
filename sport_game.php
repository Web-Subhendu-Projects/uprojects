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
                        <span><a href="index.php">Home</a> / <span>Sport Games Details</span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row teacher-form-area">
        <div class="col-12">
            <h4 class="text-center p-2"style="border-radius: 21px; font-family: initial; font-weight: bold;"> Sport Games Details</h4><hr>
        </div>

<div class="container-fluid">
    <div class="title9">
   <h1>Sports Game Registration Form</h1>
   <div class="col-12">
  <form class="registration-form">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>

    <div class="form-group">
      <label for="mobile">Number:</label>
      <input type="text" id="mobile" name="mobile" required>
    </div>

    <div class="form-group">
      <label for="sport">Sport:</label>
      <select id="sport" name="sport" required>
        <option value="">Select a sport</option>
        <option value="football">Football</option>
        <option value="basketball">Basketball</option>
        <option value="tennis">Tennis</option>
      </select>
    </div>

    <div class="form-group">
      <label for="experience">Experience:</label>
      <textarea id="experience" name="experience" required></textarea>
    </div>

    <button type="submit">Submit</button>
  </form>
</div>






    <div class="container">
    <div class="title9">
   <h1>Sports Game Details </h1>
</div>


  <section>
    <div class="sport-details">
      <h2>Cricket</h2>
      <p>
        Cricket became popular in India and the West Indies because of its colonial background. British imperial officials used it as a symbol of racial and social superiority..
      </p>
      <h3 style="color: #05BFDB;">Story Writing Details Sport</h3>
      <p style="color: red;">
        Write an exciting cricket story here...
      </p>
    </div>

    <div class="image-container">
      <h2>Cricket Image</h2>
      <img src="img/game/c1.jpg" style="height: 300px; width: 750px;" alt="Cricket">
    </div>
  </section>

  <section>
    <div class="sport-details">
      <h2>Tennis</h2>
      <p>
        What tennis coverage will be available at each event.Prime Video shows live televised court made available to the service, with full replays available up to 15 minutes after the match has ended.
      </p>
      <h3 style="color: #05BFDB;">Story Writing Details Sport</h3>
      <p style="color: red;">
        Write an exciting tennis story here...
      </p>
    </div>
    <div class="image-container">
<h2>Tennis Image</h2>
<img src="img/game/c4.jpg" style="height: 300px; width: 750px;" alt="Tennis">
</div>
</section>

  <section>
    <div class="sport-details">
      <h2>Hockey</h2>
      <p>
        Hockey India plans, directs and conducts all the activities for both men and women hockey in India. It is recognized by the Ministry of Youth Affairs and Sports
      </p>
      <h3 style="color: #05BFDB;">Story Writing Details Sport</h3>
      <p style="color: red;">
        Write an exciting hockey story here...
      </p>
    </div>
    <div class="image-container">
  <h2>Hockey Image</h2>
  <img src="img/game/c5.jpg"  style="height: 300px; width: 750px;" alt="Hockey">
</div>
  </section>

   <section>
    <div class="sport-details">
      <h2>Football</h2>
      <p>
        For Indians living outside India and eligible to play for the national team, the scouting team invites videos and documents on scouting@the-aiff.com.
      </p>
      <h3 style="color: #05BFDB;">Story Writing Details Sport</h3>
      <p style="color: red;">
        Write an exciting hockey story here...
      </p>
    </div>
    <div class="image-container">
  <h2>Football Image</h2>
  <img src="img/game/c2.webp"  style="height: 300px; width: 750px;" alt="Hockey">
</div>
</section>

 





































<?php
    include 'include/footer.php';
?>