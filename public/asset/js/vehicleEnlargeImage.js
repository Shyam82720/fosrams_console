function showEnlargedImage(image) {
    var enlargedImageContainer = document.querySelector(".enlarged-image-container");
    var enlargedImage = enlargedImageContainer.querySelector(".enlarged-image");

    enlargedImage.src = image.src;

    enlargedImageContainer.style.display = "block";
}

function hideEnlargedImage() {
    var enlargedImageContainer = document.querySelector(".enlarged-image-container");
    enlargedImageContainer.style.display = "none";
}
function showEnlargedImage2(image2) {
    var enlargedImageContainer = document.querySelector(".enlarged-image-container.two");
    var enlargedImage = enlargedImageContainer.querySelector(".enlarged-image.two");

    enlargedImage.src = image2.src;

    enlargedImageContainer.style.display = "block";
}

function hideEnlargedImage2() {
    var enlargedImageContainer = document.querySelector(".enlarged-image-container.two");
    enlargedImageContainer.style.display = "none";
}
function showEnlargedImage3(image3) {
    var enlargedImageContainer = document.querySelector(".enlarged-image-container.three");
    var enlargedImage = enlargedImageContainer.querySelector(".enlarged-image.three");

    enlargedImage.src = image3.src;

    enlargedImageContainer.style.display = "block";
}

function hideEnlargedImage3() {
    var enlargedImageContainer = document.querySelector(".enlarged-image-container.three");
    enlargedImageContainer.style.display = "none";
}
function showEnlargedImage4(image4) {
    var enlargedImageContainer = document.querySelector(".enlarged-image-container.four");
    var enlargedImage = enlargedImageContainer.querySelector(".enlarged-image.four");

    enlargedImage.src = image4.src;

    enlargedImageContainer.style.display = "block";
}

function hideEnlargedImage4() {
    var enlargedImageContainer = document.querySelector(".enlarged-image-container.four");
    enlargedImageContainer.style.display = "none";
}

// clear Image
const fileInput = document.getElementById('reg_img');
const clearButton = document.getElementById('reg_img_clear');

// Initial check and hide the clear button if input is empty
if (!fileInput.value) {
    clearButton.style.display = 'none';
}

// Add an event listener for changes in the input value
fileInput.addEventListener('input', () => {
    if (fileInput.value) {
        clearButton.style.display = 'block';
    } else {
        clearButton.style.display = 'none';
    }
});

// Add a click event listener to clear the input value
clearButton.addEventListener('click', () => {
    fileInput.value = null;
    clearButton.style.display = 'none'; // Hide the clear button after clearing the input
});


const ins_img = document.getElementById('ins_img');
const ins_img_clear = document.getElementById('ins_img_clear');

if (!ins_img.value) {
    ins_img_clear.style.display = 'none';
}

// Add an event listener for changes in the input value
ins_img.addEventListener('input', () => {
    if (ins_img.value) {
        ins_img_clear.style.display = 'block'; // Show the clear button
    } else {
        ins_img_clear.style.display = 'none'; // Hide the clear button
    }
});

// Add a click event listener to clear the input value
ins_img_clear.addEventListener('click', () => {
    ins_img.value = null;
    ins_img_clear.style.display = 'none'; // Hide the clear button after clearing the input
});

const pollu_img = document.getElementById('pollu_img');
const pollu_img_clear = document.getElementById('pollu_img_clear');

if (!pollu_img.value) {
    pollu_img_clear.style.display = 'none';
}

// Add an event listener for changes in the input value
pollu_img.addEventListener('input', () => {
    if (pollu_img.value) {
        pollu_img_clear.style.display = 'block'; // Show the clear button
    } else {
        pollu_img_clear.style.display = 'none'; // Hide the clear button
    }
});

// Add a click event listener to clear the input value
pollu_img_clear.addEventListener('click', () => {
    pollu_img.value = null;
    pollu_img_clear.style.display = 'none'; // Hide the clear button after clearing the input
});

const per_img = document.getElementById('per_img');
const per_img_clear = document.getElementById('per_img_clear');

if (!per_img.value) {
    per_img_clear.style.display = 'none';
}

// Add an event listener for changes in the input value
per_img.addEventListener('input', () => {
    if (per_img.value) {
        per_img_clear.style.display = 'block'; // Show the clear button
    } else {
        per_img_clear.style.display = 'none'; // Hide the clear button
    }
});

// Add a click event listener to clear the input value
per_img_clear.addEventListener('click', () => {
    per_img.value = null;
    per_img_clear.style.display = 'none'; // Hide the clear button after clearing the input
});

const vehicle_img = document.getElementById('vehicle_img');
const vehicle_img_clear = document.getElementById('vehicle_img_clear');

if (!vehicle_img.value) {
    vehicle_img_clear.style.display = 'none';
}

// Add an event listener for changes in the input value
vehicle_img.addEventListener('input', () => {
    if (vehicle_img.value) {
        vehicle_img_clear.style.display = 'block'; // Show the clear button
    } else {
        vehicle_img_clear.style.display = 'none'; // Hide the clear button
    }
});

// Add a click event listener to clear the input value
vehicle_img_clear.addEventListener('click', () => {
    vehicle_img.value = null;
    vehicle_img_clear.style.display = 'none'; // Hide the clear button after clearing the input
});
