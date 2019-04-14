<h3>-Users-</h3>
<!-- <?php debug($this->viewVars); ?> -->
<table>
    <tr>
        <th>User Id</th>
        <th>User Name</th>
        <th>Num of Posts</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

<?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td><?php echo $user['User']['username']; ?>
        </td>
        <td><?php echo count($user['Post']); ?></td>
    </tr>
<?php endforeach; ?>

</table>