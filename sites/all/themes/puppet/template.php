<?php

function puppet_preprocess_page(&$variables) {
    $variables['my_message'] = 'Oh! I see my variable now.';
}

function puppet_breakcrumb($variables) {

    $breakcrumb = $variables['breadcrumb'];

    if (!empty($breakcrumb)) {
        return implode(' / ', $breadcrumb);
    }
}