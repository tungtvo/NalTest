<html>
<head></head>
<body>
    <table>
        <tr>
            <th>Work Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
        <?php 
            // print_r($works);
            foreach ($works as $key => $work)
            {
                $sttArr = ['Pending', 'Doing', 'Complete'];
                echo '
                <tr>
                    <td>'.$work->workName.'</td>
                    <td>'.$work->startDate.'</td>
                    <td>'.$work->endDate.'</td>
                    <td>'.$sttArr[$work->status].'</td>
                    <td><a href="index.php?controller=WorkController&action=edit&id='.$work->id.'">Edit</a></td>
                    <td><a href="index.php?controller=WorkController&action=delete&id='.$work->id.'">Delete</a></td>
                    <td><a href="index.php?controller=WorkController&action=view&id='.$work->id.'">Detail</a></td>
                </tr>';
            }
        ?>
        <tr>
            <td colspan="4"></td>
            <td colspan="3">
                <a href="index.php?controller=WorkController&action=add" style="float: right;">
                    Add Work
                </a>
            </td>
        </tr>
    </table>
</body>
</html>