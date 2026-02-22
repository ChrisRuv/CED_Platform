<?php
defined('MOODLE_INTERNAL') || die();

$bodyclasses = $OUTPUT->body_attributes();
echo $OUTPUT->doctype();
?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>

<head>
    <title><?php echo $PAGE->title; ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body <?php echo $bodyclasses; ?>>

    <?php
    $templatecontext = [
        'output' => $OUTPUT
    ];
    echo $OUTPUT->render_from_template('theme_ced/login_view', $templatecontext);
    ?>

    <?php echo $OUTPUT->standard_end_of_body_html(); ?>
</body>

</html>