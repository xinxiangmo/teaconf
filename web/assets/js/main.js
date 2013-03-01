var API_URL = 'http://teaconf.com/server/api';

require.config({
    shim: {
        underscore: {
            exports: '_'
        },
        backbone: {
            deps: ['underscore', 'jquery'],
            exports: 'Backbone'
        }
    },
    paths: {
        jquery: 'libs/jquery/jquery-1.9.1.min',
        underscore: 'libs/underscore/underscore-min',
        backbone: 'libs/backbone/backbone-min',
        handlebars: 'libs/handlebars/handlebars',
        bootstrap: 'libs/bootstrap/js/bootstrap.min'
    }
});

require([
    'app'
], function(App){
    App.run();
});

require([
    'jquery',
    'libs/bootstrap/js/bootstrap.select',
    'libs/marked/marked'
], function($, Select, Marked){

    /*
    $.get('?node', function(data) {
        $(data).modal();
    }).success(function() {
        $('input:text:visible:first').focus();
    });

    $.get('?create', function(data) {
        $(data).modal();
    }).success(function() {
        $('input:text:visible:first').focus();
        $('.node-selector').selectpicker();
        // https://github.com/harvesthq/chosen
        $('.node').nexts('.dropdown-menu').append('123');


        var $editor = $('.editor textarea');
        $('#preview').click(function(){
            var options = {gfm: true, tables: true, breaks: false, pedantic: false, sanitize: true, smartLists: true, langPrefix: 'language-' }
            var markup = Marked($editor.val());
            $('.editor').append(markup);
        });
    });
    */

    $('[data-toggle="modal"]').click(function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        if (url.indexOf('#') == 0) {
            $(url).modal('open');
        } else {
            $.get(url, function(data) {
                $(data).modal();
            }).success(function() {
                $('input:text:visible:first').focus();
            });
        }
        return false;
    });
});
