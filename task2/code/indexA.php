<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nya</title>
</head>
<body>
<h1> 2) Form. Session Cookie</h1>
    <?php
    $wordCount = 0;
    $symbolCount = 0;
    $text = "";

    if (isset($_POST['count_button']) && isset($_POST['text']))
    {
        $text = $_POST['text'];
        $matches = array();

        $regexp = '/\S+/ui';
        $wordCount = (string)preg_match_all($regexp, $text, $matches);

        $regexp = '/./ui';
        $symbolCount = (string)preg_match_all($regexp, $text, $matches);
    }
    ?>

    <form method="post">
        <label>
            <textarea name="text" rows="5"></textarea>
        </label>
        <input type="submit" name="count_button" value="Click_Me">
        <p><?=$wordCount?> words and <?=$symbolCount?> symbols</p>
    </form>
</body>
</html>
