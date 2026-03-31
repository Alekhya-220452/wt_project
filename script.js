
// 1. VARIABLES

let userName = "Guest";
const websiteName = "My E-Commerce Store";
let cartCount = 0;

console.log("User:", userName);
console.log("Website:", websiteName);

// Display on page
document.body.insertAdjacentHTML("afterbegin", 
    `<h2 id="welcome">Welcome ${userName} to ${websiteName}</h2>`
);

// Function to update username
function updateUser(name) {
    userName = name;
    document.getElementById("welcome").innerText = 
        `Welcome ${userName} to ${websiteName}`;
}

// ==========================
// 2. FUNCTIONS
// ==========================

// Function Declaration
function addToCart() {
    cartCount++;
    document.getElementById("cartCount").innerText = cartCount;
}

// Function Expression
const showMessage = function(msg) {
    alert(msg);
}

// Arrow Function
const calculateTotal = (price, quantity) => {
    return price * quantity;
}

console.log("Total Price:", calculateTotal(100, 2));

// ==========================
// 3. OBJECTS
// ==========================
let product = {
    name: "Mobile",
    price: 10000,
    availability: true
};

// Access object
console.log(product.name);
console.log(product["price"]);

// Display object
document.body.insertAdjacentHTML("beforeend", 
    `<p id="productInfo">Product: ${product.name} - ₹${product.price}</p>`
);

// Update object
function updatePrice(newPrice) {
    product.price = newPrice;
    document.getElementById("productInfo").innerText = 
        `Product: ${product.name} - ₹${product.price}`;
}

// ==========================
// 4. METHODS
// ==========================
let userProfile = {
    name: "Alekhya",
    role: "Customer",

    updateRole: function(newRole) {
        this.role = newRole;
        document.body.insertAdjacentHTML("beforeend", 
            `<p>Updated Role: ${this.role}</p>`
        );
    }
};

userProfile.updateRole("Premium Customer");

// ==========================
// 5. POP-UP BOXES
// ==========================

// Prompt
let enteredName = prompt("Enter your name:");
if (enteredName) {
    updateUser(enteredName);
}

// Confirm
function placeOrder() {
    let confirmOrder = confirm("Do you want to place order?");
    
    if (confirmOrder) {
        alert("Order placed successfully!");
    } else {
        alert("Order cancelled!");
    }
}

// ==========================
// 6. EVENTS
// ==========================

// Add cart UI
document.body.insertAdjacentHTML("afterbegin", 
    `<h3>Cart Items: <span id="cartCount">0</span></h3>
     <button id="addCartBtn">Add to Cart</button>`
);

// Click event
document.getElementById("addCartBtn").addEventListener("click", addToCart);

// Mouseover event
document.getElementById("addCartBtn").addEventListener("mouseover", function() {
    this.style.backgroundColor = "green";
    this.style.color = "white";
});

// Input event (search)
let searchInput = document.querySelector(".search-box input");

if (searchInput) {
    searchInput.addEventListener("input", function() {
        console.log("Searching:", this.value);
    });
}

// Double click event
document.addEventListener("dblclick", function() {
    updatePrice(8000);
});

document.body.insertAdjacentHTML("afterbegin",
    `<button id="orderBtn">Place Order</button>`
);

document.getElementById("orderBtn").addEventListener("click", placeOrder);