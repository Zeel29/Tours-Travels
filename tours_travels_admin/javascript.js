function deleteRecord(userId) {
    if (confirm("Are you sure you want to delete this record?")) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    // Handle the response
                    var response = xhr.responseText;
                    alert(response); // Show the response in an alert
                    if (response === "Record deleted successfully") {
                        location.reload(); // Refresh the page after successful deletion
                    }
                } else {
                    alert("Error: " + xhr.statusText); // Show an error message
                }
            }
        };
        xhr.open("GET", "delete_code.php?id=" + userId, true);
        xhr.send();
    }
}
