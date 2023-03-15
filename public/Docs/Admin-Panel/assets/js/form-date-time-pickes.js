$(function() {
	"use strict";

    $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: true
    }),
    $('.timepicker').pickatime()



        $('#date-time').bootstrapMaterialDatePicker({
            format: 'DD/MM/YYYY hh:mm A'
        });
        $('#date').bootstrapMaterialDatePicker({
            time: false
        });

        $('.datepicker-custom').bootstrapMaterialDatePicker({
            time: false
        });
        $('#time').bootstrapMaterialDatePicker({
            date: false,
            format: 'HH:mm'
        });



});
