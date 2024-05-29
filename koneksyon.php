<script>
        function validateForm() {
            var Email = document.getElementById("Email").value;
            var password = document.getElementById("password").value;
            var errorMsg = document.getElementById("error-msg");

            // Check if email and password are empty
            if (Email === "" || password === "") {
                errorMsg.textContent = "Please fill in both Email and password.";
                return false;
            } else {
                // Check if email and password are correct
                if ((Email !== "admin@gmail.com" || password !== "admin123") &&
                   (Email !== "user@gmail.com" || password !== "user123")) {
                    errorMsg.textContent = "Email and password are not registered.";
                    return false;
                } else {
                    // Clear error message if everything is fine
                    errorMsg.textContent = "";
                    return true;
                }
            }
        }
    </script>

<script>   // revisation code jj

function validateForm() {
    var userEmail = document.getElementById("Email").value;
    var userPassword = document.getElementById("password").value;
    var errorMessage = document.getElementById("error-msg");

    // Check if email and password are provided
    if (userEmail === "" || userPassword === "") {
        errorMessage.textContent = "Please enter both Email and password.";
        return false;
    } else {
        // Check if email and password are correct
        if ((userEmail !== "admin@gmail.com" || userPassword !== "admin123") &&
            (userEmail !== "user@gmail.com" || userPassword !== "user123")) {
            errorMessage.textContent = "Email and password combination is invalid.";
            return false;
        } else {
            // Clear error message if everything is fine
            errorMessage.textContent = "";
            return true;
        }
    }
}
</script>