function dtAnchorToForm($parent) {
    $('td:last', $parent).addClass('btn-td');
    $('[data-method]', $parent).append(function() {
            if (!$(this).find('form').length > 0) {
                var method = this.getAttribute('data-method'),
                    formName = this.getAttribute('data-form-name') || '';

                if (method == 'delete') {
                    return "\n<form action='" + $(this).attr('href') +
                        "' method='POST' name='delete_item' style='display:none'>\n" +
                        "<input type='hidden' name='_method' value='" + $(this).attr(
                            'data-method') + "'>\n" +
                        "<input type='hidden' name='_token' value='" + $('meta[name="csrf-token"]')
                        .attr('content') + "'>\n" +
                        '</form>\n';
                } else {
                    return "\n<form action='" + $(this).attr('href') + "' method='" + method +
                        "' " + (formName ? "name='" + formName + "'" : '') +
                        " style='display:none'>\n" +
                        "<input type='hidden' name='_token' value='" + $('meta[name="csrf-token"]')
                        .attr('content') + "'>\n" +
                        '</form>\n';
                }
            } else {
                return ''
            }
        })
        .attr('href', '#')
        .attr('style', 'cursor:pointer;');
}