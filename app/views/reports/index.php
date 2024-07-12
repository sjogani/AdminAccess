<?php require_once 'app/views/templates/header.php' ?>
<style>
    .header-cell {
        padding: 15px;
        padding-bottom:10px;
    }

    .value-cell{
        padding: 5px;
        padding-left: 15px;
    }
</style>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>Reminders</h3>
                <?php
                    echo '<table>';
                    echo '<tr><th class="header-cell">ID</th><th class="header-cell">Subject</th></tr>';
                    foreach ($data['reminders'] as $reminder) {
                        echo '<tr>';
                        echo '<td class="value-cell">' . $reminder['id'] . '</td>';
                        echo '<td class="value-cell"    >' . $reminder['subject'] . '</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                  ?>
                <br>
                <h3>Most Reminders</h3>
                <?php foreach ($most_reminders as $reminder): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($reminder['username']); ?></td>
                        <td><?php echo htmlspecialchars($reminder['frequency']); ?></td>
                    </tr>
                      <?php endforeach; ?>
                <br>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <p> <a href="/logout">Click here to logout</a></p>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>
