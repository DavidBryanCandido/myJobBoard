<?php

// helpers.php or your custom helper file
function setActiveLink($url)
{
    return request()->is($url) ? 'active-link' : '';
}
