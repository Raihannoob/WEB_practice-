<!DOCTYPE html>
<html lang="en">

<head>
    <title>Change Password</title>
</head>

<body>
    <fieldset>
        <table width='100%'>
            <tr>
                <td>
                    <img src='logo.jpg' height='100px' />
                </td>
                <td align='right'>
                    <nav>
                        <label>Logged in as <a href='home.php'></a> </label>|
                        <a href='logout.php'>Log Out</a>
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
    <table border="1px solid black" width='100%'>
        <tr>
            <td width='30%'>
                <label>Account</label>
                <br>
                <hr>
                <ul>
                    <li><a href='dashboard.php'>Dashboard</a></li>
                    <li><a href='viewprofile.php'>View Profile</a></li>
                    <li><a href='changepic.php'>Change Profile Picture</a></li>
                    <li><a href='changepass.php'>Change Password</a></li>
                    <li><a href='UpdateInformation.php'>Update Information</a></li>
                    <li><a href='MonitoringSell.php'>Monitoring Sell</a></li>
                    <li><a href='MedicineStock.php'>Medicine Stock</a></li>
                    <li><a href='ExpiredItems.php'>Expired Items</a></li>
                    <li><a href='contactwithadmin.php'>contact with admin</a></li>
                    <li><a href='Databasesystem.php'>Database system</a></li>
                    <li><a href='callforaMeeting.php'>call for a Meeting</a></li>
                    <li><a href='Invtentory.php'>Invtentory</a></li>
                    <li><a href='systemDetails.php'>system Details</a></li>
                    <li><a href='Connectwebsitewithsocialmedia.php'>Connect website with social media</a></li>
                </ul>
            </td>
            <td>
                <fieldset>
                    <legend>
                        Change Password
                    </legend>
                    <form action='' method=''>
                        <table>
                            <tr>
                                <td>
                                    Old Password:
                                </td>
                                <td>
                                    <input type="text" name='oldpassword'>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    New Password:
                                </td>
                                <td>
                                    <input type="password" name='newpassword'>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Retype New Password:
                                </td>
                                <td>
                                    <input type="password" name='retypenewpassword'>
                                </td>
                            </tr>
                            <tr>
                            </tr>
                            <tr>

                                <td colspan="2">
                                    <hr>
                                    <input type='checkbox'>Remember Me
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type='submit' value='Submit'>
                                    <input type='Reset' value='Reset'>
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
</body>

</html>