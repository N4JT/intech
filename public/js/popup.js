const callPopup = (orders) => {
    let body = document.getElementsByTagName("body")[0]; 
    let popup = document.createElement("div"); 
    popup.classList.add("popup");


    const orderItems = orders.map(order => `
        <div class="data-content">
            <div class="data-form">
                <div class="data-content">
                    <div class="full">${order.order_id}</div> 
                    <div>${order.title}</div>
                    <div class="data-icons">
                        <span class="material-symbols--edit"></span> 
                        <span class="pajamas--remove"></span>
                    </div>
                </div>
            </div>
        </div>
    `).join(''); 

    
    popup.innerHTML = `
        <div class="data-container">
            ${orderItems} <!-- Insert all order items here -->
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
