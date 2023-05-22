// const form = document.querySelector(".signup form");
// contin = form.querySelector(".button input");

// form.onsubmit = (e) => {
//     e.preventDefault();
// }

// contin.onclick = () => {
//     // console.log("hell");
//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "assets/php/signup.php");
//     xhr.onload = () => {
//         if(xhr.readyState === XMLHttpRequest.Done){
//             if(xhr.status === 200) {
//                 let data = xhr.response;
//                 console.log(data);
//                 // document.querySelector(".error-txt").textContent = data;
//             }
//         }
//     };
//     xhr.send();
// };

const form = document.querySelector(".signup form");
const contin = form.querySelector(".button input");
const errorTXT = form.querySelector(".error-txt");

form.onsubmit = (e) => {
  e.preventDefault();
};

contin.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "assets/php/signup.php");
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.responseText; // Get the response text
        // console.log(data); // Display the response in the console
        if(data == 'success') {

        } else {
            errorTXT.textContent = data;
            errorTXT.style.display = "block";
        }
      }
    }
  };
  // ajax to php form transformation
  let formD = new FormData(form); //generating news object
  xhr.send(formD); //sending to php
};
