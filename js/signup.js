
// const form = document.querySelector(".signup form");
// const contin = form.querySelector(".button input");
// const errorTXT = form.querySelector(".error-txt");

// form.onsubmit = (e) => {
//   e.preventDefault();
// };

// contin.onclick = () => {
//   let xhr = new XMLHttpRequest();
//   xhr.open("POST", "assets/php/signup.php");
//   xhr.onload = () => {
//     if (xhr.readyState === XMLHttpRequest.DONE) {
//       if (xhr.status === 200) {
//         let data = xhr.responseText; // Get the response text
//         // console.log(data); // Display the response in the console
//         if(data == "success") {
//             location.href = "../users/user.php";
//         } else {
//             errorTXT.textContent = data;
//             errorTXT.style.display = "block";
//         }
//       }
//     }
//   };
//   // ajax to php form transformation
//   let formD = new FormData(form); //generating news object
//   xhr.send(formD); //sending to php
// };


// const form = document.querySelector(".signup form");
// const contin = form.querySelector(".button input");
// const errorTXT = form.querySelector(".error-txt");

// form.onsubmit = (e) => {
//   e.preventDefault();
// };

// contin.onclick = () => {
//   let xhr = new XMLHttpRequest();
//   xhr.open("POST", "assets/php/signup.php");
//   xhr.onload = () => {
//     if (xhr.readyState === XMLHttpRequest.DONE) {
//       if (xhr.status === 200) {
//         let data = xhr.responseText; // Get the response text
//         if (data == 'success') {
//           console.log("Redirecting to user.php");
//           location.href = "test.php"; // Redirect to user.php
//         } else {
//           errorTXT.textContent = data; // Display the error message
//           errorTXT.style.display = "block";
//         }
//       }
//     }
//   };

//   let formD = new FormData(form); // Create a new FormData object
//   xhr.send(formD); // Send the form data to signup.php
// };



const form = document.querySelector(".signup form");
const contin = form.querySelector(".button input");
const errorTXT = form.querySelector(".signup .error-txt");

form.onsubmit = (e) => {
  e.preventDefault();
};

contin.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "./php/signup.php", true);
  xhr.onload = () => {
    // if (xhr.readyState === XMLHttpRequest.DONE) {
    //   if (xhr.status === 200) {
    //     // let data = xhr.responseText; // Get the response text
    //     let data = xhr.response;
    //     console.log(data);
    //     if (data == "success") {
    //       // Redirect to user.php
    //       // window.location.href = "../users/user.php";
    //       location.href = "./users/user.php";
    //     } else {
    //       // Display error message
    //       errorTXT.textContent = data;
    //       errorTXT.style.display = "block";
    //     }
    //   }
    // }
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
