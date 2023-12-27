
// window.addEventListener("beforeunload", function () {
//     const animationContainer = document.querySelector(".animation-container");
//     const refreshAnimation = document.createElement("div");
//     refreshAnimation.classList.add("refresh-animation");
//     animationContainer.appendChild(refreshAnimation);

//     const overlay = document.querySelector(".overlay");
//     overlay.style.display = "block";
// });
// Reload Animation Function
function beforeUnloadHandler(event) {
    const downloadButtonClicked = event.explicitOriginalTarget && event.explicitOriginalTarget.id === "downloadButton";

    if (!downloadButtonClicked) {
        const animationContainer = document.querySelector(".animation-container");
        const refreshAnimation = document.createElement("div");
        refreshAnimation.classList.add("refresh-animation");
        animationContainer.appendChild(refreshAnimation);

        const overlay = document.querySelector(".overlay");
        overlay.style.display = "block";
    }
}

// prevent Reload Animation Function while download
// Add the beforeunload event listener
window.addEventListener("beforeunload", beforeUnloadHandler);

document.getElementById("downloadButton").addEventListener("click", function () {
    // Remove the beforeunload event listener temporarily
    window.removeEventListener("beforeunload", beforeUnloadHandler);

    var animationContainer = document.querySelector(".animation-container");
    var overlay = document.querySelector(".overlay");

    animationContainer.classList.toggle("d-none");
    overlay.classList.toggle("d-none");

    // Add the beforeunload event listener back after a short delay
    setTimeout(() => {
        window.addEventListener("beforeunload", beforeUnloadHandler);
    }, 100);
});


/////////////////////////////////////////////

class FileInputValidator {
    constructor(maxSize, infoElementClass) {
        this.maxSize = maxSize;
        this.infoElements = document.querySelectorAll(`.${infoElementClass}`);

        this.initialize();
    }

    initialize() {
        const fileInputs = document.querySelectorAll('.file-input');
        fileInputs.forEach((fileInput, index) => {
            fileInput.addEventListener('change', (event) => this.validateFile(event, index));
        });
    }

    validateFile(event, index) {
        const fileInput = event.target;
        const fileSize = fileInput.files[0] ? fileInput.files[0].size : 0;
        const infoElement = this.infoElements[index];

        if (fileSize > this.maxSize) {
            fileInput.value = ''; // Clear the file input
            infoElement.textContent = 'File size exceeds 15 MB. Please choose a smaller file.';
        } else {
            infoElement.textContent = '';
        }
    }
}

new FileInputValidator(15 * 1024 * 1024, 'file-size-info');

// numder only
function isNumber(event) {
    var key = event.which || event.keyCode;

    if (key >= 48 && key <= 57 || key == 8 || key == 46) {
        return true;
    } else {
        return false;
    }
}


