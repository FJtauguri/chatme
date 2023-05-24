const form = document.querySelector(".login form");
const contin = form.querySelector(".button input");
const errorTXT = form.querySelector(".login .error-txt");

form.onsubmit = (e) => {
  e.preventDefault();
};

contin.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "./php/login.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // let data = xhr.responseText; // Get the response text
        let data = xhr.response;
        console.log(data);
        if (data == "success") {
          // Redirect to user.php
          // console.log("hel");
          location.href = "./users/user.php";
        } else {
          // Display error message
          errorTXT.textContent = data;
          errorTXT.style.display = "block";
        }
      }
    }
  }

  let formD = new FormData(form); // Create a new FormData object
  xhr.send(formD); // Send the form data to signup.php
};
