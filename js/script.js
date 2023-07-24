
// login//

    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");

    signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
    });

    loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
    });

    signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
    });


    // fees//

function payMoney() {
  var studentNameInput = document.getElementById('studentName');
  var paymentAmountInput = document.getElementById('paymentAmount');

  var studentName = studentNameInput.value;
  var paymentAmount = paymentAmountInput.value;

  if (studentName && paymentAmount) {
    var duesTable = document.getElementById('duesTable');
    var newRow = duesTable.insertRow();

    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);

    cell1.textContent = studentName;
    cell2.textContent = "-";
    cell3.textContent = "-";



    // syllbus //



function addSubject(syllabusContainer, year, subject) {
  const syllabus = syllabusContainer.querySelector(`.syllabus:nth-child(${year}) ul`);
  const newSubject = document.createElement('li');
  newSubject.textContent = subject;
  syllabus.appendChild(newSubject);
}


const diplomaSyllabusContainer = document.querySelector('.syllabus-container:nth-child(1)');
addSubject(diplomaSyllabusContainer, 1, 'Subject 4');


const btechSyllabusContainer = document.querySelector('.syllabus-container:nth-child(2)');
const btech2ndYearSyllabus = btechSyllabusContainer.querySelector('.syllabus:nth-child(2) ul');
const btechSubjectB = btech2ndYearSyllabus.querySelector('li:nth-child(2)');
btech2ndYearSyllabus.removeChild(btechSubjectB);


const universitySyllabusContainer = document.querySelector('.syllabus-container:nth-child(3)');
addSubject(universitySyllabusContainer, 1, 'Subject M');

   

// book_lyi //

const books = document.querySelectorAll('.book');
    const bookNowBtn = document.getElementById('bookNowBtn');

    books.forEach(book => {
      const selectBtn = book.querySelector('.book-select');
      selectBtn.addEventListener('click', () => {
        books.forEach(book => book.classList.remove('selected'));
        book.classList.add('selected');
      });
    });

    bookNowBtn.addEventListener('click', () => {
      const selectedBook = document.querySelector('.book.selected');
      if (selectedBook) {
        const bookImage = selectedBook.querySelector('.book-image');
        const bookTitle = bookImage.alt;

     

        alert(`Book "${bookTitle}" has been booked!`);
      } else {
        alert('Please select a book first!');
      }
    });



    // game //



const registrationForm = document.querySelector('.registration-form');


registrationForm.addEventListener('submit', function(event) {
  event.preventDefault();


  const name = document.getElementById('name').value;
  const mobile = document.getElementById('mobile').value;
  const sport = document.getElementById('sport').value;
  const experience = document.getElementById('experience').value;




  registrationForm.reset();
});

// hostel //


// Handle form submission
document.getElementById("booking-form").addEventListener("submit", function(event) {
  event.preventDefault();
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var checkInDate = document.getElementById("check-in").value;
  var checkOutDate = document.getElementById("check-out").value;

  console.log("Booking Details:");
  console.log("Name: " + name);
  console.log("Email: " + email);
  console.log("Check-in Date: " + checkInDate);
  console.log("Check-out Date: " + checkOutDate);
});



// map//


 function initMap() {
  var mapOptions = {
    center: {lat: 37.7749, lng: -122.4194},
    zoom: 13 
  };
  var map = new google.maps.Map(document.getElementById('contact-map'), mapOptions);
  var marker = new google.maps.Marker({
    map: map,
    position: {lat: 37.7749, lng: -122.4194},
    title: 'San Francisco'
  });
}


