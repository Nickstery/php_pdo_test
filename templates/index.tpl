<html>

<head>
    <title>My Test Case</title>
</head>
<body>
<table border="1">
    <thead>
    <th>ID</th>
    <th>CONTENT</th>
    </thead>
    <tbody>
    {foreach $data as $row}
                <tr>
                    <td>
                        {$row['id']}
                    </td>
                    <td>
                        {$row['data']}
                    </td>
                </tr>
    {/foreach}
    </tbody>
</table>
</body>
</html>