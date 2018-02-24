<?php
/**
 * @var string $name
 * @var array $messages
 */
?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
      integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<main role="main" class="container">
    <h1>Messages list</h1>
    <form action="<?= toUrl('messages/create') ?>" method="post">
        <input type="text" name="author" placeholder="Enter your name" class="form-control">
        <textarea name="message" placeholder="Enter your message" class="form-control mt-2"></textarea>

        <button type="submit" class="btn btn-success mt-2">Save</button>
    </form>

    <table>
        <!--    --><?php //foreach ($messages as $message) : ?>
        <!--        <tr>-->
        <!--            <td>--><? //= $message['author'] ?><!--</td>-->
        <!--            <td>--><? //= $message['message'] ?><!--</td>-->
        <!--        </tr>-->
        <!--    --><?php //endforeach; ?>
    </table>

</main>