<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style.css'?>>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src='/project-cs02/files/js/autofill.js' type="text/javascript"></script>

    </head>
    <body>
        <div class="container-small">Hospital Management System</div>
        <div class="container">
            <div class="form-container">
                <div class="appointment">
                    <div class="form-name">Search Doctor</div>
                    <form>
                        <div class="form-box">
                            <div class="label">
                                <label for="doctor">Doctor name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="doctor" required>
                            </div>
                            <div class="label">
                                <label for="specialization">Specialization</label>
                            </div>
                            <div class="input">
                                <select name="specialization" id="search_spec" required>
                                    <option value="Any">Any Specialization</option>
                                </select>
                            </div>
                            <div class="label">
                                <label for="birthday">Appointment Date</label>
                            </div>
                            <div class="input">
                                <input type="date" name="birthday" required>
                            </div>
                        </div>
                            <div class="btn-area"><input type="submit" value="Search" class="submit-btn"></div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>