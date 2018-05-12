<html>
<head></head>
<body>
    <form name="frmUser" method="post" action="">
        <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
            <tr class="tableheader">
                <td colspan="2">Add New Work</td>
                <td>
                    <a href="index.php">Homes</a>
                </td>
            </tr>
            <tr>
                <td><label>Work Name</label></td>
                <td><input type="text" name="workName" class="txtField"></td>
            </tr>
            <tr>
                <td><label>Start Date</label></td>
                <td><input type="text" name="startDate" class="txtField"></td>
            </tr>
                <td><label>End Date</label></td>
                <td><input type="text" name="endDate" class="txtField"></td>
            </tr>
                <td><label>Status</label></td>
                <td>
                    <!-- <input type="text" name="status" class="txtField"> -->
                    <select name="status">
                        <option value="0">Pending</option>
                        <option value="1">Doing</option>
                        <option value="2">Complete</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Add" class="btnSubmit"></td>
            </tr>
        </table>
    </form>
</body>
</html>