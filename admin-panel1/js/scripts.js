
let popup = document.getElementById('popupWrapper');

function showPopup() {
    document.getElementById("popupWrapper").style.display = "block";
}


// Function to hide the popup
function hidePopup() {
  popup.style.display = 'none';
}

// Attach click event listener to the close button
popup.addEventListener('click', hidePopup);

  