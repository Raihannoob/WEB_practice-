<!DOCTYPE html>
<html>

<head>
    <title>Update Information</title>
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
                        <label>Logged in as </label>|
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
                    <li><a href=''>Monitoring Sell</a></li>
                    <li><a href=''>Medicine Stock</a></li>
                    <li><a href=''>Expired Items</a></li>
                    <li><a href=''>contact with admin</a></li>
                    <li><a href=''>Database system</a></li>
                    <li><a href=''>call for a Meeting</a></li>
                    <li><a href=''>Invtentory</a></li>
                    <li><a href=''>system Details</a></li>
                    <li><a href=''>Connect website with social media</a></li>
                </ul>
            </td>
            <td>
                <fieldset>
                    <legend><b>Update Product Information</b></legend>
                    <form action='' method=''>
                        <table width='100%'>
                            <form action='' method=''>
                                <table>
                                    <tr>
                                        <td>
                                            Product Name:
                                        </td>
                                        <td>
                                            <input type="text" name='ProductName' value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Quantity:
                                        </td>
                                        <td>
                                            <input type="text" name='Quantity' value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Buying Price:
                                        </td>
                                        <td>
                                            <input type="text" name='Buyprice' value="">
                                        </td>
                                    </tr>
                                    <tr>
                                    </tr>
                                    <tr>
                                        <td>
                                            Selling Price:
                                        </td>
                                        <td>
                                            <input type="text" name='Sellprice' value="">
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
                        </table>
                    </form>
                </fieldset>
            </td>
        </tr>
    </table>
    <fieldset>
        <center>
            <label>
                Copyright © 2017
            </label>
        </center>
    </fieldset>
</body>

</html>