
//Reload function animation
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

//prvent reload when download
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


// table pagination and searching
$(document).ready(function () {
    var dataTable = $('#data-table').DataTable({
        "iDisplayLength": 7,
        "lengthChange": false,
        "columnDefs": [
            { "targets": [1], "visible": false }
        ],
        "scrollX": true,
        "scrollCollapse": true,
    });

    // Find the search input and set its name attribute
    $('#data-table_filter input').attr('name', 'search_value_report');

    $('#data-table_filter input').on('keyup', function () {
        var globalSearchValue = $(this).val();
        // Set the value of the hidden input
        $('#globalSearchValue').val(globalSearchValue);
        console.log(globalSearchValue);
    });

    // To filter the table with two dates
    $("#startDate, #endDate").on("change", function () {
        startDate = $("#startDate").val();
        endDate = $("#endDate").val();
        if (endDate === "") {
            var currentDate = new Date();
            endDate = currentDate.toISOString().split('T')[0];
        }
        if (startDate === "") {
            startDate = '2023-10-01'; // Set end date to start date if it's empty
        }
        dataTable.draw();
    });

    $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
        var startDate = $("#startDate").val();
        var endDate = $("#endDate").val();
        if (endDate === "") {
            // endDate = startDate; // Set end date to start date if it's empty
            var currentDate = new Date();
            endDate = currentDate.toISOString().split('T')[0];
        }
        var entryDate = data[1];

        if ((startDate === "" && endDate === "") || (entryDate >= startDate && entryDate <= endDate)) {
            return true;
        }
        return false;
    });

    dataTable.draw();


});




