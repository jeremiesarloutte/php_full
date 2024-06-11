<?php
if(!function_exists('nav_item')) {
    
    function nav_item(string $lien, string $titre ): string
    {
        $classe = 'nav-link';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe .= ' active';
    }
    return '<li class="nav-item">
    <a class="' . $classe . '" href="' . $lien . '">' . $titre . '</a>
    </li>';
    }
}


function checkbox(string $name, string $value, array $data): string
{
    $attributes = '';
    if (isset($data[$name]) && in_array($value, $data[$name])) {
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attributes>
HTML;
}


function radio(string $name, string $value, array $data): string
{
    $attributes = '';
    if (isset($data[$name]) && $value === $data[$name]) {
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="radio" name="{$name}" value="$value" $attributes>
HTML;
}
?>