<div>
    <table width="100%" border="1px" class="scroll-table">
        <thead bgcolor="#ffc375">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>password</th>
            <th>email</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <tbody align="center" bgcolor="#a1fcd5">
        <?php foreach ($result as $k => $v):?>
            <tr>
                <td><?php echo $v['id'] ?></td>
                <td><?=htmlentities($v['name']); ?></td>
                <td><?php echo $v['email'] ?></td>
                <td><?php echo $v['password'] ?></td>
                <td><form name=edit" method="post">
                        <input type="submit" name="edit-<?php echo $v['id'] ?>" value="Редактировать">
                    </form></td>
                <td><form name=del" method="post">
                        <input type="submit" name="del-<?php echo $v['id'] ?>" value="Удалить">
                    </form></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        <tfoot align="center">
        <td colspan="4">Всего записей</td>
        <td colspan="2"><?php echo count($result) ?></td>
        </tfoot>
    </table>
</div>