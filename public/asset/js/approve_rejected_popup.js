// Get the elements
const approveButton = document.getElementById('approveButton');
const rejectButton = document.getElementById('rejectButton');

const popupContainer = document.getElementById('popupContainer');
const popupContainer_r = document.getElementById('popupContainer_r');

const closePopup = document.getElementById('closePopup');
const closePopup2 = document.getElementById('closePopup2');

const submitButton = document.getElementById('submitButton');
const cancelButton = document.getElementById('cancelButton');
const cancelButton2 = document.getElementById('cancelButton2');

function handleApproval() {
    console.log('Original Approve action');
}

approveButton.addEventListener('click', () => {
    popupContainer.style.display = 'block';
});

rejectButton.addEventListener('click', () => {
    popupContainer_r.style.display = 'block';
});

closePopup.addEventListener('click', () => {
    popupContainer.style.display = 'none';
});

closePopup2.addEventListener('click', () => {
    popupContainer.style.display = 'none';
});

// Handle the submit button click
submitButton.addEventListener('click', () => {
    const remarkInput = document.getElementById('remarkInput').value;

    // Check if remarkInput is not empty
    if (remarkInput.trim() !== '') {
        // Handle the remark input (you can send it to the server or process it as needed)
        console.log('Remark:', remarkInput);

        // Continue with the original "Approve" action
        handleApproval();

        // Close the popup
        popupContainer.style.display = 'none';
        popupContainer_r.style.display = 'none';
    } else {
        alert('Please enter a remark before submitting.');
    }
});

// Handle the cancel button click
cancelButton.addEventListener('click', () => {
    // Close the popup
    popupContainer.style.display = 'none';
    document.getElementById('remarkInput').value = "";
});

cancelButton2.addEventListener('click', () => {
    // Close the popup
    popupContainer_r.style.display = 'none';
    document.getElementById('remarkInput2').value = "";
});
