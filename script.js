function bookSession() {
  const date = document.getElementById('booking-date').value;
  const confirmation = document.getElementById('confirmation');

  if (date) {
    confirmation.textContent = `You have successfully booked a session on ${date}.`;
    confirmation.style.color = '#c94e4e';
  } else {
    confirmation.textContent = 'Please select a date before booking.';
    confirmation.style.color = 'red';
  }
}


document.addEventListener("DOMContentLoaded", function () {
  const toggleBtn = document.getElementById("toggle-about");
  const details = document.getElementById("about-details");

  if (toggleBtn && details) {
    toggleBtn.addEventListener("click", function (e) {
      e.preventDefault();
      if (details.style.display === "none" || details.style.display === "") {
        details.style.display = "block";
        toggleBtn.textContent = "Read Less ↑";
      } else {
        details.style.display = "none";
        toggleBtn.textContent = "Read More →";
      }
    });
  }
});
