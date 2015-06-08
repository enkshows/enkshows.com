<?php 
require("db_load.php");
require("form-utils.php");

if (!isset($_GET["form"])) {
    exit;
}

$form = $_GET["form"];
$entry_id = $_GET['id'];
$db_table = '';
$field_names = '';

switch($_GET['form'])
{
    case "applyForm";
		$db_table = "apply_form_entries";
        $field_names = get_apply_form_fields();
    break;
    case "visitorForm";
        $db_table = "visitor_form_entries";
        $field_names = get_visitor_form_fields();
    break;
    case 'pressForm';
        $db_table = "press_form_entries";
        $field_names = get_press_form_fields();
    break;
    case 'contactForm';
        $db_table = "contact_form_entries";
        $field_names = get_contact_form_fields();
    break;
}

$query = "
    SELECT *
    FROM $db_table 
    where id='" . $entry_id . "'
";
$result = db_query($query);
$result = fetch_db_resource($result);
?>
<table class="admin-table other-info-table" border="0" cellpadding="0" cellspacing="0">
    <?php foreach ($result as $row_index => $fields): ?>
        <?php foreach ($fields as $field_name => $field_label) : ?>
            <?php if(isset($field_names[$field_name])): ?>
                <tr>
                    <th><?php echo $field_names[$field_name]['label'] ?></th>
                    <td>
                        <?php echo $fields[$field_name] ?>
                    </td>
                </tr>
            <?php endif; ?>
        <?php endforeach ?>
    <?php endforeach ?>
</table>