<h3>-Current Blog posts-</h3>
<!-- <?php debug($this->viewVars); ?> -->
<div class="row">
    <h4 style="display: inline-block;"><?php echo $this->Html->link("Login", array('controller' => 'users', 'action' => 'login')); ?></h4>
    <h4 style="display: inline-block;">|</h4>
    <h4 style="display: inline-block;"><?php echo $this->Html->link("Logout", array('controller' => 'users', 'action' => 'logout')); ?></h4>
    <h4 style="display: inline-block;">|</h4>
    <h4 style="display: inline-block;"><?php echo $this->Html->link("Register", array('controller' => 'users', 'action' => 'add')); ?></h4>
</div>

<button class="black-text" style="display: inline-block;"><?php echo $this->Html->link("Add Post", array('action' => 'add')); ?></button>
<table class="highlight">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Action</th>
        <th>Author</th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

<?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $post['Post']['title'],
                    array('action' => 'view', $post['Post']['id'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $post['Post']['id'])
                );
            ?>
            <?php 
                echo $this->Form->postLink(
                    "Delete",
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
        </td>
        <td>
            <?php
                echo $post['User']['username'];
            ?>
        </td>
        <td>
            <?php echo $post['Post']['created']; ?>
        </td>
    </tr>
<?php endforeach; ?>

</table>