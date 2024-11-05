const callPopup = (data) => {
    let body = document.getElementsByTagName("body")[0]; 
    let popup = document.createElement("div"); 
    console.log(data);
    popup.classList.add("popup");

    popup.innerHTML = `
    <div class="data-container">
    <div class="data-content">
        <div class="data-form">
            <div class=data-content><div class=full></div> 
                <div>${data.title} </div><div class=data-icons>
                    <span class=material-symbols--edit></span> 
                    <span class=pajamas--remove></span></div>
                </div>
            <button onclick="closePopup()">Close</button>
        </div>    
        </div>
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
