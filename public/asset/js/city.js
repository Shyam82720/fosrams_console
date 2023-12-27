

// numder only
function isNumber(event) {
    var key = event.which || event.keyCode;

    if (key >= 48 && key <= 57 || key == 8 || key == 46) {
        return true;
    } else {
        return false;
    }
}


function showFields(option) {
    if (option === 'yes') {
        document.getElementById('yesFields').style.display = 'block';
        document.getElementById('noFields').style.display = 'none';
    } else {
        document.getElementById('yesFields').style.display = 'none';
        document.getElementById('noFields').style.display = 'block';
    }
}
function calculateTotalKms() {
    const kmsStart = parseFloat(document.getElementById('kmsStart').value) || 0;
    const kmsEnd = parseFloat(document.getElementById('kmsEnd').value) || 0;
    const totalKmsNo = kmsEnd - kmsStart;
    document.getElementById('totalKmsNo').value = totalKmsNo;
}

$(document).ready(function () {
    $(".openPopup").click(function () {
        var target = $(this).data("target");
        $("#" + target).show();
    });

    $(".closePopup").click(function () {
        $(this).closest(".popup").hide();
    });
});

function closePopup() {
    $(".popup").modal("hide");
}

// Get references to the button and modal elements
const filterButton = document.getElementById("filter-button");
const modal = document.getElementById("myModal");
const closeBtn = document.querySelector(".close");

// Function to open the modal
function openModal() {
    modal.style.display = "block";
}

// Function to close the modal
function closeModal() {
    modal.style.display = "none";
}

// Event listeners
filterButton.addEventListener("click", openModal);
closeBtn.addEventListener("click", closeModal);

// Close the modal if the overlay is clicked
window.addEventListener("click", (event) => {
    if (event.target === modal) {
        closeModal();
    }
});

