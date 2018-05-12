<html>
<head></head>
<body>
    <table>
        <tr>
    		<th>Work Name</th>
    		<th>Start Date</th>
    		<th>End Date</th>
    		<th>Status</th>
    		<th colspan="2">Action</th>
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
                </tr>';
            }
        ?>
    </table>
    <a href="index.php?controller=WorkController&action=add">
        Add Work
    </a>
</body>
</html>