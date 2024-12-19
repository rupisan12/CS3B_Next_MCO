const typechat = document.querySelector(".message-chat");
const input = typechat.querySelector(".user_input");
const btnsend = typechat.querySelector("button");
const chatter = document.querySelector(".chat-box-user");

typechat.onsubmit = (e) => {
  //Prevents from user to send an empty
  e.preventDefault();
};
btnsend.onclick = () => {
  let ajax = new XMLHttpRequest();
  ajax.open("POST", "php_files/chat_msg.php", true); //SEND DATA TO PHP
  ajax.onload = () => {
    if (ajax.readyState == XMLHttpRequest.DONE) {
      if (ajax.status == 200) {
        input.value = ""; //Refresh the input value back to it's blank form, so that you won't erase it everytime.
      }
    }
  };
  let ajaxform = new FormData(typechat);
  ajax.send(ajaxform);
};

setInterval(() => {
  //In order for user update their message in real time, is we use the setinterval method. Every 400ms updates the message.
  let ajax = new XMLHttpRequest();
  ajax.open("POST", "php_files/msg_user.php", true);
  ajax.onload = () => {
    if (ajax.readyState === XMLHttpRequest.DONE) {
      if (ajax.status === 200) {
        let data_ajax = ajax.response;
        chatter.innerHTML = data_ajax;
      }
    }
  };
  let ajaxform = new FormData(typechat);
  ajax.send(ajaxform);
}, 400);

const myFunction = () => {
  var objDiv = document.getElementById("chatter");
  objDiv.scrollTop = objDiv.scrollHeight;
};
// runs after 2 seconds
setTimeout(myFunction, 450);
