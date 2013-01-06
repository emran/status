<div class="hero-unit"><h2>Some statistics held Here</h2>
</div><h3>Task Lists</h3>

<a id="threshold-mail" class="no-underline" href="javascript:void(0)" data-keyboard="true" data-backdrop="true" data-controls-modal="modal-from-dom-mail">
    <button type="button" class="btn success" style="float: right;">Send Mail</button>
</a>
<br/><br/>
<table class="zebra-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Task</th>
            <th>Time[Min]</th>
            <th>Status</th>
            <th>Created at</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($taskLists)) {
            $taskStatusColorCode = array('DONE' => 'success', 'Partially-DONE' => 'notice', 'UNDONE' => 'warning', 'deleted' => 'important', 'declined' => '');
            $i = 1;
            ?>
            <?php
            foreach ($taskLists as $task):
                $mailFormat = '* ' . $task->title . '[' . $task->time . ']';
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $task->title; ?></td>
                    <td><?php echo $task->time; ?></td>
                    <td><span class="label <?php echo $taskStatusColorCode[$task->status]; ?>"><?php echo $task->status; ?></span></td>
                    <td><?php echo date('F j, g:i a', strtotime($task->created_at)); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php }else { ?>
            <tr>
                <td  colspan="5"> <div class="alert-message info">
                        <p><strong>No Task Have found!</strong> </p>
                    </div></td>
            </tr>
        <?php } ?>

    </tbody>
</table>
<div class="modal hide fade" id="modal-from-dom-mail" style="top: 60%;">
    <div class="modal-header">
        <a class="close" href="#">×</a>
        <h3>Mail Format</h3>
    </div>

    <div class="modal-body">
        <?php echo isset($mailFormat) ? $mailFormat : 'Nothing have to send'; ?>
    </div>
    <div class="modal-footer">
        <a class="btn info" onclick="return false">Send</a>&nbsp;
    </div>
</div>

<h3>ADD Task</h3>
<form name="mapping-filter" action="#" method="post" class="pull-left">
    Task Title:
    <input type="text" name="task" placeholder="Task title goes here" />&nbsp;
    Time Spent/Estimation:
    <input type="text" name="time" placeholder="" />&nbsp;
    Status:
    <select class="input-small" name="status" id="status">
        <option value="">--Select--</option>
        <option value="DONE">Done</option>
        <option value="UNDONE">Undone</option>
        <option value="partially-DONE">Partial Done</option>
    </select>&nbsp; 
    <input type="submit" class="btn primary" name="submit" value="ADD">
</form>