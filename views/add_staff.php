<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <div class="container-small">Hospital Management System</div>
        <div class="container">
            <div class="form-container">
                <div class="register">
                    <div class="form-name">Add Staff Members</div>
                    
                    <form action ="#" method = "POST">
                       <div class="form-box">
                            <div class="label">
                                <label for="staff">Staff</label>
                            </div>
                            <div class="input">
                                <select name="staff" required>
                                    <option value="pharmacist">Pharmacist</option>
                                    <option value="lab_technician ">Lab technician</option>
                                    <option value="receptionist">Receptionist</option>
                                </select>
                            </div>
                            <div class="label">
                                <label for="id">Id</label>
                            </div>
                            <div class="input">
                                <input type="text" name="id" required>
                            </div>
                            <div class="label">
                                <label for="f_name">First name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="f_name" required>
                            </div>
                            <div class="label">
                                <label for="l_name">Last name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="l_name" required>
                            </div>
                            <div class="label">
                                <label for="address">Address</label>
                            </div>
                            <div class="input">
                                <input type="text" name="address" required>
                            </div>
                            <div class="label">
                                <label for="contact">Contact No</label>
                            </div>
                            <div class="input">
                                <input type="tel" name="contact" required>
                            </div>
                            <div class="label">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="input">
                                <input type="email" name="email" required>
                            </div>
                            <div class="btn-area"><input type="submit" value="Add" class="inventory-btn"></div>
                        </div >
                    </form>
                </div>
            </div>
        </div> 
    </body>

</html>