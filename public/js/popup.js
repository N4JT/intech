const callPopup = (id) => {
    let body = document.getElementsByTagName("body")[0]; 
    let popup = document.createElement("div"); 

    popup.classList.add("popup");

    popup.innerHTML = `
        <div class="popup-content">
            <p>Popup s ID: ${id}</p>
            <button onclick="closePopup()">Close</button>
        </div>
    `;

    body.appendChild(popup); 
};

const closePopup = () => {
    let popup = document.querySelector(".popup");
    if (popup) {
        popup.remove(); 
    }
};
