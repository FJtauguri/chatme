const form = document.querySelector(".typo");
const field = form.querySelector(".inputfield");
const btnsend = form.querySelector("button");
const chatBOX = document.querySelector(".box-chat");

form.onsubmit = (e) => {
    e.preventDefault(); //preventing form for submitting
}

btnsend.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/insert-message.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          field.value = ""; //if btn.send then blank
          // let data = xhr.responseText; // Get the response text
          // console.log(data);
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
  
    let formD = new FormData(form); // Create a new FormData object
    xhr.send(formD); // Send the form data to signup.php
}

// using ajax for user users message
setInterval(() => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/get-love.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        chatBOX.innerHTML = data;
      //   console.log(data);
        // if(!searchh.classList.contains("active")){
        //   userLIST.innerHTML = data;
        // }
      }
    }
  }

  let formD = new FormData(form); // Create a new FormData object
  xhr.send(formD); // Send the form data to signup.php
}, 500); //will run after 500ms / Refresh / Receiver