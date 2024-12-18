<div class="container">
    <h1 class="text-center">Lista użytkowników</h1>
    <?php

    $html = '<table class="table">';
    $html .= '<thead><tr><th>#</th><th>imię i nazwisko</th><th>email</th><th class="text-center">aktywność</th><th class="text-center">akcje</th></tr></thead>';
    $html .= '<tbody>';

    if ($res->num_rows > 0)
    {
        while ($row = $res->fetch_assoc())
        {
            $name = $row['user_name'] . ' ' . $row['user_surname'];
            $html .= '<tr>';
            $html .= '<td>' . $row['id'] . '</td>';
            $html .= '<td>' . $name . '</td>';
            $html .= '<td>' . $row['user_email'] . '</td>';
            $html .= '<td class="text-center">' . showStatusIcon($row['active']) . '</td>';
            $html .= '<td class="text-center"><a class="action" href="?page=' . $_GET['page'] . '&action=edit&id=' . $row ['id'] . '" title="edytuj" "><i class="fa fa-pencil text-warning"></i>edytuj</a>&nbsp;<a class="action" href="?page=' . $_GET['page'] . '&action=delete&id=' . $row ['id'] . '" title="usuń" onclick="return confirm(\'Czy na pewno chcesz usunąć ten wpis?\');"><i class="fa fa-times text-danger"></i>usuń</a></td>';
            $html .= '</tr>';
        }
        $html .= "</tbody>";
        $html .= "</table>";

        echo $html;
    }
    else
    {
        echo '<p class="text-danger">Nie znaleziono wpisów</p>';
    }
    ?>
    <div class="col12 col-md-12">
        <a class="btn btn-warning" href="<?php echo BASE_URL; ?>">Powrót</a>
    </div>    
</div>