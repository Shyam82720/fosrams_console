
    // pdf view
    function viewPDF() {
        const fileInput = document.getElementById("license");

      if (fileInput.files.length > 0) {
          const file = fileInput.files[0];
          const objectURL = URL.createObjectURL(file);

          // Open the PDF in a new window
          window.open(objectURL, "_blank");
      }

    }
    function adhaar() {
      const fileInput = document.getElementById("adhaarCard");

      if (fileInput.files.length > 0) {
          const file = fileInput.files[0];
          const objectURL = URL.createObjectURL(file);

          // Open the PDF in a new window
          window.open(objectURL, "_blank");
      }
    }