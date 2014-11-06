<?php

function sort_by($column, $body) {
    $direction = (Request::get('direction') == 'asc') ? 'desc' : 'asc';

    return link_to_route('users.index', $body, ['sortBy'    => $column,
                                                'direction' => $direction
    ]);
}
 