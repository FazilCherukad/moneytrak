/*
 * create.js
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

/** global: Modernizr, currencies */

var calendar;

$(document).ready(function () {
    "use strict";
    $(".content-wrapper form input:enabled:visible:first").first().focus().select();
    if (!Modernizr.inputtypes.date) {
        $('input[type="date"]').datepicker(
            {
                dateFormat: 'yy-mm-dd'
            }
        );
    }
    initializeButtons();
    initializeAutoComplete();
    respondToFirstDateChange();
    respondToRepetitionEnd();
    $('.switch-button').on('click', switchTransactionType);
    $('#ffInput_repetition_end').on('change', respondToRepetitionEnd);
    $('#ffInput_first_date').on('change', respondToFirstDateChange);

    // new date
    var firstDate = $('#ffInput_first_date').val();

    // create calendar on load:
    calendar = $('#recurring_calendar').fullCalendar(
        {
            defaultDate: firstDate,
            editable: false,
            height: 400,
            width: 200,
            contentHeight: 400,
            aspectRatio: 1.25,
            eventLimit: true,
            eventSources: [],
        });

    $('#calendar-link').on('click', showRepCalendar);
});

/**
 *
 */
function showRepCalendar() {

    // pre-append URL with repetition info:
    var newEventsUrl = eventsUrl + '?type=' + $('#ffInput_repetition_type').val();
    newEventsUrl += '&skip=' + $('#ffInput_skip').val();
    newEventsUrl += '&ends=' + $('#ffInput_repetition_end').val();
    newEventsUrl += '&end_date=' + $('#ffInput_repeat_until').val();
    newEventsUrl += '&reps=' + $('#ffInput_repetitions').val();
    newEventsUrl += '&first_date=' + $('#ffInput_first_date').val();
    newEventsUrl += '&weekend=' + $('#ffInput_weekend').val();

    // remove all event sources from calendar:
    calendar.fullCalendar('removeEventSources');

    // add a new one:
    calendar.fullCalendar('addEventSource', newEventsUrl);
    $('#calendarModal').modal('show');

    return false;
}

function respondToRepetitionEnd() {
    var obj = $('#ffInput_repetition_end');
    var value = obj.val();
    switch (value) {
        case 'forever':
            $('#repeat_until_holder').hide();
            $('#repetitions_holder').hide();
            break;
        case 'until_date':
            $('#repeat_until_holder').show();
            $('#repetitions_holder').hide();
            break;
        case 'times':
            $('#repeat_until_holder').hide();
            $('#repetitions_holder').show();
            break;
    }


}

function respondToFirstDateChange() {
    var obj = $('#ffInput_first_date');
    var select = $('#ffInput_repetition_type');
    var date = obj.val();
    select.prop('disabled', true);

    // preselected value:
    var preSelected = oldRepetitionType;
    if(preSelected === '') {
        preSelected = select.val();
    }

    $.getJSON(suggestUrl, {date: date,pre_select: preSelected}).fail(function () {
        console.error('Could not load repetition suggestions');
        alert('Could not load repetition suggestions');
    }).done(parseRepetitionSuggestions);
}

function parseRepetitionSuggestions(data) {

    var select = $('#ffInput_repetition_type');
    select.empty();
    var opt;
    for (var k in data) {
        if (data.hasOwnProperty(k)) {
            console.log('label: ' + data[k].label + ', selected: ' + data[k].selected);
            opt = $('<option>').val(k).attr('label', data[k].label).text(data[k].label);
            if(data[k].selected) {
                opt.attr('selected','selected');
            }
            select.append(opt);
        }
    }
    select.removeAttr('disabled');
}

function initializeAutoComplete() {
    initTagsAC();
    initExpenseAC();
    initRevenueAC();
    initCategoryAC();
}

/**
 *
 * @param e
 */
function switchTransactionType(e) {
    var target = $(e.target);
    transactionType = target.data('value');
    initializeButtons();
    return false;
}

/**
 * Loop the three buttons and do some magic.
 */
function initializeButtons() {
    console.log('Now in initializeButtons()');
    $.each($('.switch-button'), function (i, v) {
        var btn = $(v);
        console.log('Value is ' + btn.data('value'));
        if (btn.data('value') === transactionType) {
            btn.addClass('btn-info disabled').removeClass('btn-default');
            $('input[name="transaction_type"]').val(transactionType);
        } else {
            btn.removeClass('btn-info disabled').addClass('btn-default');
        }
    });
    updateFormFields();
}

/**
 * Hide and/or show stuff when switching:
 */
function updateFormFields() {

    if (transactionType === 'withdrawal') {
        // hide source account name:
        // $('#source_name_holder').hide(); // source_name no longer exists
        $('#deposit_source_id_holder').hide(); // new one!

        // show source account ID:
        $('#source_id_holder').show();

        // show destination name:
        // $('#destination_name_holder').show(); // old one
        $('#withdrawal_destination_id_holder').show();

        // hide destination ID:
        $('#destination_id_holder').hide();

        // show budget
        $('#budget_id_holder').show();
        $('#bill_id_holder').show();

        // hide piggy bank:
        $('#piggy_bank_id_holder').hide();
    }

    if (transactionType === 'deposit') {
        // $('#source_name_holder').show(); // source name no longer exists.
        $('#deposit_source_id_holder').show(); // new one!

        $('#source_id_holder').hide();

        // $('#destination_name_holder').hide(); // old one
        $('#withdrawal_destination_id_holder').hide();

        $('#destination_id_holder').show();
        $('#budget_id_holder').hide();
        $('#bill_id_holder').hide();
        $('#piggy_bank_id_holder').hide();
    }

    if (transactionType === 'transfer') {
        // $('#source_name_holder').hide(); // source name no longer exists.
        $('#deposit_source_id_holder').hide(); // new one!

        $('#source_id_holder').show();

        // $('#destination_name_holder').hide(); // old one
        $('#withdrawal_destination_id_holder').hide();

        $('#destination_id_holder').show();
        $('#budget_id_holder').hide();
        $('#bill_id_holder').hide();
        $('#piggy_bank_id_holder').show();
    }
}
