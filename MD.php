<!DOCTYPE html>
<html>
<head>
    <title>Pet Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Registration Form</h2>
        <form name="Medical" method="post">
            <!-- Personal Information -->
            <fieldset>
                <legend>1. Personal Information</legend>
                <label for="ownerName">Owner's Name:</label>
                <input type="text" id="ownerName" name="ownerName" required>

                <label for="phoneNumber">Phone Number:</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" required>

                <label for="ownerID">Owner's ID Number:</label>
                <input type="text" id="ownerID" name="ownerID" required>
            </fieldset>

            <!-- Pet Information -->
            <fieldset>
                <legend>2. Pet Information</legend>
                <label for="petType">Pet's Type:</label>
                <select id="pet type" name="pet type" required>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="Others">Others</option>
                </select>

                <label for="breed">Breed:</label>
                <input type="text" id="breed" name="breed">

                <label>Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </fieldset>

            <!--  Pet Health Information -->
            <fieldset>
                <legend>3.  Pet Health Information</legend>
                <label>Vaccinated:</label>
                <select id="vaccinated" name="vaccinated" required>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                <label for="pet passport">Pet Passport (Attach if available):</label>
                <input type="file" id="pet passport" name="pet passport">
            </fieldset> <br> <br>

            <!-- Submit Buttons -->
            <div class="form-buttons">
                <button type="submit">Submit Form</button>
                <button type="reset">Clear</button>
            </div>
        </form>
    </div>
</body>
</html>