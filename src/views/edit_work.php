<html>
<head></head>
<body>
    <form name="frmUser" method="post" action="">
        <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
            <tr class="tableheader">
                <td colspan="2">Edit Work</td>
                <td>
                    <a href="index.php">Homes</a>
                </td>
            </tr>
            <tr>
                <td><label>Work Name</label></td>
                <td><input type="text" name="workName" placeholder="Work Name" value="<?php echo $work['work_name']; ?>"></td>
            </tr>
            <tr>
                <td><label>Start Date</label></td>
                <td><input type="text" name="startDate" placeholder="YYYY-MM-DD" value="<?php echo $work['start_date']; ?>"></td>
            </tr>
                <td><label>End Date</label></td>
                <td><input type="text" name="endDate" placeholder="YYYY-MM-DD" value="<?php echo $work['end_date']; ?>"></td>
            </tr>
                <td><label>Status</label></td>
                <td>
                    <!-- <input type="text" name="status" value="<?php echo $work['status']; ?>"> -->
                    <select name="status">
                        <option value="0" <?php echo $work['status'] == 0 ? 'selected': null ?>>Pending</option>
                        <option value="1" <?php echo $work['status'] == 1 ? 'selected': null ?>>Doing</option>
                        <option value="2" <?php echo $work['status'] == 2 ? 'selected': null ?>>Complete</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Save" class="btnSubmit"></td>
                <td><?php if(isset($msg)) { echo $msg; } ?></td>
            </tr>
        </table>
    </form>
</body>
</html>