let chatMenu = document.querySelector(".chatMenu");
let chatBody = document.querySelector(".chatBody");

chatMenu.addEventListener("click", () => {
    if (chatBody.classList.contains("hidden")) {
        chatBody.classList.remove("hidden")
    } else {
        chatBody.classList.add("hidden")
    }
})