<?php
function changeName($name)
{
$nameLength = strlen($name);
$nameStart = substr($name,0, -2);
$nameEnd = substr($nameLength -2);
switch ($nameEnd) {
    case 'us':
        $newName = $nameStart.'au';
        break;
    case 'as':
    $newName = $nameStart.'ai';
    break;
    case 'is':
    $newName = $nameStart.'i';
    break;
    case 'ys':
        $newName = $nameStart.'y';
        break;
    default:
    $newName = $nameStart.$nameEnd;
    return $newName;
}
}
 ?>
