
    // Function to make the table editable
    function makeTableEditable() {
        var table = document.getElementById("tableContainer").querySelector("table");

        if (table) {
            var cells = table.getElementsByTagName("td");

            // Toggle the contentEditable property for each cell
            for (var i = 0; i < cells.length; i++) {
                cells[i].setAttribute("contenteditable", "true");
            }

            // Optionally, add a visual cue that the table is now editable
            table.style.border = "2px solid blue"; // Add a border to indicate edit mode
        }
    }

    // Function to copy the table to the clipboard
    function copyTableToClipboard() {
        var table = document.getElementById("tableContainer");  // Target the table container with id "tableContainer"

        // Create a temporary text area to copy the table HTML
        var tempTextArea = document.createElement("textarea");
        tempTextArea.value = table.innerHTML; // Set the value to the table's innerHTML (structure)
        document.body.appendChild(tempTextArea);

        // Select and copy the content
        tempTextArea.select();
        document.execCommand("copy");

        // Remove the temporary text area from the DOM
        document.body.removeChild(tempTextArea);

        // Optionally, alert the user that the table has been copied
        alert("Table content copied to clipboard!");
    }

    // Function to save the table structure as an HTML file
    function saveTable() {
        var table = document.getElementById("tableContainer");  // Target the table container with id "tableContainer"
        var htmlContent = table.innerHTML;

        // Create a Blob with the HTML content
        var blob = new Blob([htmlContent], { type: "text/html" });
        var link = document.createElement("a");

        // Create a download link and trigger the download
        link.href = URL.createObjectURL(blob);
        link.download = "generated_table.html"; // The name of the file to save
        link.click();
    }
    function updateGeneratedCode() {
        let tableHTML = document.getElementById('tableContainer').innerHTML;
        document.getElementById('generatedCode').textContent = tableHTML;
    }

    document.addEventListener('input', updateGeneratedCode);

    function copyTableToClipboard() {
        let tableHTML = document.getElementById('tableContainer').innerHTML;
        let tempTextArea = document.createElement('textarea');
        tempTextArea.value = tableHTML;
        document.body.appendChild(tempTextArea);
        tempTextArea.select();
        document.execCommand('copy');
        document.body.removeChild(tempTextArea);
        alert('Table content copied to clipboard!');
    }

    function saveTable() {
        let tableHTML = document.getElementById('tableContainer').innerHTML;
        let blob = new Blob([tableHTML], { type: 'text/html' });
        let link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = 'generated_table.html';
        link.click();
    }

    function makeTableEditable() {
        var table = document.getElementById("tableContainer").querySelector("table");
        if (table) {
            var cells = table.getElementsByTagName("td");
            for (var i = 0; i < cells.length; i++) {
                cells[i].setAttribute("contenteditable", "true");
            }
            table.style.border = "2px solid blue";
        }
    }
    function copyToClipboard(codeId) {
        const codeElement = document.getElementById(codeId);
        const text = codeElement.innerText;

        // Copy text to clipboard
        navigator.clipboard.writeText(text).then(() => {
            alert("Code copied to clipboard!");
        }).catch(err => {
            alert("Failed to copy code: " + err);
        });
    }

    function editCode(codeId) {
        const codeElement = document.getElementById(codeId);
        const codeText = codeElement.innerText;

        // Replace the code with a textarea for editing
        codeElement.innerHTML = `<textarea style="width: 100%; height: 150px;">${codeText}</textarea>`;
        const editButton = document.getElementById('editButton');
        editButton.innerHTML = 'Save'; // Change button text to 'Save'
        editButton.setAttribute('onclick', 'saveCode()'); // Change the onclick function to saveCode
    }

    function saveCode() {
        const codeElement = document.getElementById('codeDisplay');
        const newCode = codeElement.querySelector('textarea').value;

        // Update the displayed code with the new text
        codeElement.innerHTML = `<pre>${newCode}</pre>`;
        const editButton = document.getElementById('editButton');
        editButton.innerHTML = 'Edit'; // Change button text back to 'Edit'
        editButton.setAttribute('onclick', 'editCode("codeDisplay")'); // Change the onclick function back to editCode
    }function makeTableEditable() {
        let tableContainer = document.getElementById("tableContainer");
        tableContainer.contentEditable = true; // Table editable bana raha hai
    
        // Change detect karne ke liye event listener add karein
        tableContainer.addEventListener("input", updateCodeDisplay);
    }
    
    function updateCodeDisplay() {
        let tableContainer = document.getElementById("tableContainer");
        let codeDisplay = document.getElementById("codeDisplay"); // Yeh wo element hai jisme code show ho raha hai
    
        if (codeDisplay) {
            codeDisplay.textContent = tableContainer.innerHTML; // Live update
        }
    }
    
    function copyTableToClipboard() {
        let tableContainer = document.getElementById("tableContainer");
        navigator.clipboard.writeText(tableContainer.innerHTML)
            .then(() => alert("Table copied!"))
            .catch(err => console.error("Error copying table: ", err));
    }
    
    function saveTable() {
        let tableContainer = document.getElementById("tableContainer");
        let editedHTML = tableContainer.innerHTML;
    
        // AJAX request to save data correctly
        fetch("save_table.php", { // Use the correct PHP file
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: "tableData=" + encodeURIComponent(editedHTML)
        })
        .then(response => response.text())  
        .then(data => {
            alert(data); // Show success message from PHP response
        })
        .catch(error => {
            console.error("Error saving table:", error);
            alert("Failed to save the table.");
        });
    }
    