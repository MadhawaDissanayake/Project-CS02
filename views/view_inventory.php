<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav>
            <ul>
            <li class = "col-1"><a class="active" href="main_page.php"> <img src="icons/home.png"></a></li>
            <li class = "col-3"><a  href="<?php echo site_url('Manage_inven/inventoryView');?>" >View Inventory</a></li>
            <li class = "col-3"><a  href="<?php echo site_url('Manage_inven/inventoryUpdate');?>" >Update Inventory</a></li>
            </ul>
        </nav>

        <div>
            <button type="submit" formaction="#">Home</button>
            <div>Hospital Management System</div>
        </div>
        <div>Inventory</div>
        <div>
            <form>
                <table>
                <tr>
                <th><label for="id">Id</label></th>
                <th><input type="text" id="id" name="id"></form></th>
                </tr>
                <tr>
                <th><label for="name">Name</label></th>
                <th><input type="text" id="name" name="name"></form></th>
                </tr>
                <tr>
                <th><input type="submit" value="Search"></th>
                </tr>
                </table>
            </form>
        </div>
            <table>
                <tr>
                    <th>No.</th>
                    <th>Medicine Id</th>
                    <th>Medicine Name</th>
                    <th>Vendor</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><input type="submit" value="Update"></th>
                    <th><input type="submit" value="Delete"></th>
                </tr>
            </table>
        </div>
    </body>
</html>
