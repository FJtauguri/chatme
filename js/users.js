const searchh = document.querySelector(".users .search input");
const searchButton = document.querySelector(".users .search button");
const userLIST = document.querySelector(".users .users-list");

searchButton.onclick = () => {
    searchh.classList.toggle("active");
    searchh.focus();
    searchButton.classList.toggle("active");
    searchh.value = "";
};

searchh.onkeyup = () => {
  let searchhterm = searchh.value;
  if(searchhterm != ""){
    searchh.classList.add("active");
  } else {
    searchh.classList.remove("active");
  }
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/search.php", true); //will read the code from php/search.php
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        // console.log(data);
        userLIST.innerHTML = data;

      }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchhterm=" + searchhterm); //will send user search term to php file with ajx
}

// using ajax for user users message
setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "../php/user.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;
        //   console.log(data);
          if(!searchh.classList.contains("active")){
            userLIST.innerHTML = data;
          }
        }
      }
    }
    xhr.send();
}, 500); //will run after 500ms / Refresh / Receiver