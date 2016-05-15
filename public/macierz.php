<meta charset="utf-8" />
Wpisz macierz, np.<br />
<pre>
    1,2,3
    4,5,6
    7,8,9
</pre>
<form method="get" action="./macierz.php">
    <textarea name="matrix" cols="50" rows="10"><?php echo $_GET['matrix'] ?></textarea>
    <input type="submit" />
</form>

<?php

if (count($_GET) == 0)
    return;

$lines = explode("\n", $_GET['matrix']);
foreach ($lines as $w => $line) {
    if (trim($line) == '')
        continue;

    foreach (explode(',', $line) as $k => $value) {
        $matrix[$w][$k] = trim($value);
    }
}
?>

<h3>Wpisana macierz</h3>
<table border="1">
    <?php foreach($matrix as $line): ?>
        <tr>
            <?php foreach($line as $item): ?>
                <td><?php echo $item; ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>


<h3>Wartości minmalne</h3>
<?php
    $min = null;
    $max = null;
    foreach($matrix as $line) {
        foreach($line as $item) {
            if ($min == null)
                $min = $item;

            if ($max == null)
                $max = $item;

            if ($item < $min)
                $min = $item;

            if ($item > $max)
                $max = $item;
        }
    }
?>
Wartość(i) min. wynosi <b><?php echo $min; ?></b> i znajduje się w:
<ul>
<?php
    foreach($matrix as $w => $line)
        foreach($line as $k => $item)
            if ($item == $min)
                echo '<li>Wierszu ' . ($w + 1) . ', kolumnie ' . ($k + 1) . '</li>';
?>
</ul>

<table border="1">
    <?php foreach($matrix as $line): ?>
        <tr>
            <?php foreach($line as $item): ?>
                <td <?php if ($item == $min): ?>style="background-color:lightgreen"<?php endif; ?>><?php echo $item; ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>

<h3>Wartości maksymalne</h3>
Wartość(i) max. wynosi <b><?php echo $max; ?></b> i znajduje się w:
<ul>
    <?php
    foreach($matrix as $w => $line)
        foreach($line as $k => $item)
            if ($item == $max)
                echo '<li>Wierszu ' . ($w + 1) . ', kolumnie ' . ($k + 1) . '</li>';
    ?>
</ul>

<table border="1">
    <?php foreach($matrix as $line): ?>
        <tr>
            <?php foreach($line as $item): ?>
                <td <?php if ($item == $max): ?>style="background-color:lightcoral"<?php endif; ?>><?php echo $item; ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>

<h3>Suma wszystkich elementów</h3>
<?php
    $sum = 0;
    foreach($matrix as $w => $line)
        foreach($line as $k => $item)
            $sum += $item;

    echo $sum;
?>

<h3>Suma elementów na głównej przekątnej (ślad maceirzy)</h3>
<?php
    $sum = 0;
    for ($w = 0; $w < count($matrix); $w++)
        $sum += $matrix[$w][$w];
    echo $sum;
?>
<table border="1">
    <?php foreach($matrix as $w => $line): ?>
        <tr>
            <?php foreach($line as $k => $item): ?>
                <td <?php if ($k == $w): ?>style="background-color:lightskyblue"<?php endif; ?>><?php echo $item; ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>