const forma = document.querySelector(".typo");
const field = document.querySelector(".inputfield");
const btnsend = forma.querySelector(".button");

forma.onsubmit = (e) => {
    e.preventDefault(); //preventing form for submitting
}

btnsend.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/insert-message.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // let data = xhr.responseText; // Get the response text
        //   let data = xhr.response;
        //   console.log(data);
        //   if (data == "success") {
        //     // Redirect to user.php
        //     // console.log("hel");
        //     location.href = "./users/user.php";
        //   } else {
        //     // Display error message
        //     errorTXT.textContent = data;
        //     errorTXT.style.display = "block";
        //   }
        }
      }
    }
  
    let formD = new FormData(forma); // Create a new FormData object
    xhr.send(formD); // Send the form data to signup.php
}