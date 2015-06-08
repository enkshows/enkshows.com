<?php
require("db_load.php");
require("form-utils.php");

$current_uri = $_SERVER['REQUEST_URI'];

if (!isset($_GET["form"])) {
    $form = 'applyForm';
    $current_uri .= '?form=' . $form;
} else {
    $form = $_GET["form"];
}

$db_table = '';
$field_names = '';

switch($form)
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete'])) {
        $id_array = $_POST['delete'];

        $id_array = array_map('intval', $id_array);

        $delete_query = "
            DELETE 
            FROM $db_table 
            WHERE `ID` IN (" . implode(', ', $id_array) . ")
        ";
        db_query($delete_query);
    } else {
        echo "No ID's selected.";
    }
}

$show_all_results = false;

if (isset($_GET['page']) && $_GET['page'] == 'all') {
    $show_all_results = true;
} elseif (isset($_GET['page'])) {
    $current_uri = preg_replace('/&?page=[^&]*/', '', $current_uri);
    $page = intval($_GET['page']);
} else {
    $page = 1;
}

if (isset($_GET['downloadcsv'])) {
    // we need to include all entries in the CSV file, so ignore 
    // the paging arguments. Ordering must be preserved, though. 
    $show_all_results = true;
}

$order_clause = "ORDER BY id DESC";
$limit_clause = '';

if ($show_all_results == false) {
    $page_query = "SELECT COUNT(*) as num FROM `$db_table`";
    $num_entries = mysql_fetch_assoc(db_query($page_query));
    $num_entries = $num_entries['num'];

    $entries_per_page = 10; // Number of entries to show per page

    $num_pages = ceil($num_entries / $entries_per_page);

    $offset = ($page - 1) * $entries_per_page;

    $limit_clause = "LIMIT " . $offset . ", " . $entries_per_page;

}

if (isset($_GET['sortby'])) {
    $order_column = $_GET['sortby'];

    $order_clause = "ORDER BY `" . $order_column . "` " . $_GET['order'];
}

$data_query = "
    SELECT *
    FROM $db_table
    " . $order_clause . "
    " . $limit_clause . "
";


$result = db_query($data_query);
$result = fetch_db_resource($result);

if (isset($_GET['downloadcsv'])) {
    send_dataset_as_csv($result);
    exit;
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
            ENK INTERNATIONAL | Form Data Viewer
        </title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
        <script src="js/libs/modernizr-2.5.2.min.js" type="text/javascript"></script><!-- FORM LINKS -->
        <link rel="stylesheet" href="css/form.css" type="text/css">
        <link rel="stylesheet" href="bin/css/admin.css" type="text/css">
        <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.js" type="text/javascript"></script>
        <script src="js/form-admin.js" type="text/javascript"></script>
        <script src="js/runonload.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="wrapper">
            <!-- Admin Form Module -->
            <div id="adminForm" class="module">
                <h1>
                    Form Admin
                </h1>
                <h2>
                    Choose a form
                </h2>
                <div class="desc-lg">
                    To view current submitted data, select one of the forms bellow.
                </div>
                <div class="module-content">
                    <div class="admin-navigation">
                        <ul>
                            <li><a href="?form=applyForm" class="info-btn">Apply Form</a></li>
                            <li><a href="?form=visitorForm" class="info-btn">Visitor Form</a></li>
                            <li><a href="?form=pressForm" class="info-btn">Press Form</a></li>
                            <li><a href="?form=contactForm" class="info-btn">Contact Form</a></li>
                        </ul>
                        <div class="cl">&nbsp;</div>
                    </div><!-- END admin-navigation -->
                    <div class="cl">&nbsp;</div>
                    <div class="admin-form">
                        <br>
                        <?php if (empty($result)): ?>
                            <p>No results.</p>
                        <?php else : ?>
                            <form action="" method="post">

                                <table class="admin-table" border="0" cellpadding="0" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Form</th>
                                            <?php foreach ($field_names as $column_name => $column_data) : 
                                                if ($column_data['show_on_view_all_screen']) : ?>
                                                    <th>
                                                        <?php 
                                                        if (isset($_GET['sortby']) && $_GET['sortby'] == $column_name && $_GET['order'] == 'desc') {
                                                            $order = 'asc';
                                                        } else {
                                                            $order = 'desc';
                                                        }
                                                        if (isset($_GET['page']) && $_GET['page'] == 'all') {
                                                            $order .= '&amp;page=all';
                                                        }
                                                        ?>
                                                        <a href="?form=<?php echo $form ?>&amp;sortby=<?php echo $column_name; ?>&amp;order=<?php echo $order; ?>"><?php echo $column_data['label'] ?></a>
                                                    </th>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($result as $row_index => $fields): ?>
                                            <tr>
                                                <td><input type="checkbox" class="field" name="delete[]" value="<?php echo $fields['id'] ?>" /></td>
                                                <td><?php echo ucwords(str_replace('_', ' ', $fields['form'])); ?></td>
                                                <?php foreach ($fields as $field_name => $field_label) : ?>
                                                    <?php if(isset($field_names[$field_name]) && $field_names[$field_name]['show_on_view_all_screen']): ?>
                                                        <td>
                                                            <?php if ($field_name == 'id'): ?>
                                                                <a href="bin/admin-show-id.php?form=<?php echo $form; ?>&amp;id=<?php echo $fields[$field_name] ?>" class="field_id"><?php echo $fields[$field_name] ?></a>
                                                            <?php else: ?>
                                                            <?php echo $fields[$field_name] ?>
                                                            <?php endif ?>
                                                        </td>
                                                    <?php endif; ?>
                                                <?php endforeach ?>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>

                                <input type="submit" class="info-btn field" value="Delete selected" />
                                <a href="<?php echo $current_uri; ?>&amp;downloadcsv" class="info-btn">Download to csv</a>
                                <?php if (!$show_all_results && $num_pages > 1): ?>
                                    <a href="<?php echo $current_uri; ?>&amp;page=all" class="info-btn">Show all results</a>
                                    <div class="cl">&nbsp;</div>
                                    <div class="pagination">
                                        <?php if ($page > 1) : ?>
                                            <a href="<?php echo $current_uri; ?>&amp;page=<?php echo $page - 1; ?>">&#60;&#60; Previous</a>
                                        <?php else: ?>
                                            <span class="disabled">&#60;&#60; Previous</span>
                                        <?php endif; ?>

                                        <?php for ($i=0; $i <= $num_pages; $i++): ?> 
                                           <?php if ($page == $i): ?>
                                               <strong><?php echo $i; ?></strong> of <?php echo $num_pages; ?>
                                           <?php endif ?>
                                        <?php endfor; ?>

                                        <?php if ($page < $num_pages) : ?>
                                            <a href="<?php echo $current_uri; ?>&amp;page=<?php echo $page + 1; ?>">Next &#62;&#62;</a>
                                        <?php else: ?>
                                            <span class="disabled">Next &#62;&#62;</span>
                                        <?php endif; ?>
                                    <div>
                                <?php endif ?>
                            </form>
                            <div class="cl">&nbsp;</div>
                        <?php endif ?>
                        
                    </div><!-- END adminForm -->
                </div><!-- END module-content -->
            <!--
            <div class="module">
            <form>
            <select name="users" onchange="showUser(this.value)">
            <option value="">Select a person:</option>
            <option value="1">Peter Griffin</option>
            <option value="2">Lois Griffin</option>
            <option value="3">Glenn Quagmire</option>
            <option value="4">Joseph Swanson</option>
            </select>
            </form>
            <br />
            <div id="txtHint2"><b>Person info will be listed here.</b>
            </div>
            -->
            </div><!-- END Admin Form Module -->
        </div><!-- end wrapper-->
        <script type="text/javascript" src="js/tablesort.js"></script>
    </body>
</html>
<!-- echo "<script type=\"text/javascript\" src=\"js/tablesort.js\"></script>"; -->