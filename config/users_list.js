const users_list = document.querySelector(".home .home-list");

setInterval(() => {
  let ajax = new XMLHttpRequest();
  ajax.open("GET", "php_files/user_list.php", true); //To receive data from php
  ajax.onload = () => {
    if (ajax.readyState === XMLHttpRequest.DONE) {
      if (ajax.status === 200) {
        let datastatus = ajax.response;
        users_list.innerHTML = datastatus;
      }
    }
  };
  ajax.send();
}, 400);
