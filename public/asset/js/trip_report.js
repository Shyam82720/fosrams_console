
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

window.addEventListener("beforeunload", beforeUnloadHandler);

document.getElementById("downloadButton").addEventListener("click", function () {
    window.removeEventListener("beforeunload", beforeUnloadHandler);

    var animationContainer = document.querySelector(".animation-container");
    var overlay = document.querySelector(".overlay");

    animationContainer.classList.toggle("d-none");
    overlay.classList.toggle("d-none");

    setTimeout(() => {
        window.addEventListener("beforeunload", beforeUnloadHandler);
    }, 100);
});


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

    var startDate = "";
    var endDate = "";
    var minKm = "";
    var maxKm = "";

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
        filterTable();
    });

    // Range Slider
    $("#range-min, #range-max").on("input", function () {
        minKm = $("#range-min").val();
        maxKm = $("#range-max").val();
        if (minKm === "") {
            minKm = 0; // Set end date to start date if it's empty
        }
        filterTable();
    });

    function filterTable() {
        dataTable.draw();
    }

    $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
        var entryDate = data[1];
        var totalKms = parseFloat(data[18]); // Assuming "Total Kms" is in the 16th column
        if (
            (startDate === "" && endDate === "" || (entryDate >= startDate && entryDate <= endDate)) &&
            (minKm === "" && maxKm === "" || (totalKms >= parseFloat(minKm) && (maxKm === "" || totalKms <= parseFloat(maxKm)))
            )) {
            return true;
        }
        return false;
    });

    dataTable.draw();
});