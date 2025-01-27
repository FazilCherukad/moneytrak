/*
 * help.js
 * Copyright (c) 2019 fazilc.dev@gmail.com
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */
/** global: token, helpPageTitle */
$(function () {
    "use strict";
    $('#help').click(showHelp);

});

function showHelp(e) {
    "use strict";
    var target = $(e.target);
    var route = target.data('route');
    var specialPage = target.data('extra');

    if (typeof specialPage === 'undefined') {
        specialPage = '';
    }
    $('#helpBody').html('<span class="fa fa-refresh fa-spin"></span>');
    $('#helpModal').modal('show');
    $('#helpTitle').html(helpPageTitle);
    $('#helpBody').html(helpPageBody);
    $('#reenableGuidance').unbind('click').click(function () {
        enableGuidance(route, specialPage);
        return false;
    });
    return false;
}

function enableGuidance(route, specialPage) {
    $.post('json/intro/enable/' + route + '/' + specialPage, {_token: token}).done(function (data) {
        alert(data.message);
    }).fail(function () {
        console.error('Could not re-enable introduction.');
    });
}

