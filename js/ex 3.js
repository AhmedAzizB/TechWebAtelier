var x = document.getElementById("button");
x.addEventListener("click", () => {
    var x1 = document.getElementById("name").value;
    var x2 = document.getElementById("content").value;
    var text = x1 + ": " + x2;
    var newNode = document.createElement("div");
    newNode.innerText = text;
    newNode.style.border = "solid black 1px";
    newNode.style.overflow = "auto";
    document.getElementById("to do").appendChild(newNode);

    var button = document.createElement("button");
    button.className = "btn"
    newNode.appendChild(button);


    var icon = document.createElement("i")
    icon.className = "bi bi-trash-fill";
    button.appendChild(icon);
    button.addEventListener("click", () => {
        button.parentNode.remove();
    })
})