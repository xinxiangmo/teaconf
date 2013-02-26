define([
    'jquery',
    'underscore',
    'backbone',
    'handlebars',
    'text!templates/site/topic.html'
], function($, _, Backbone, Handlebars, topicTemplate){
    console.log('loaded topic view');
    return Backbone.View.extend({
        el: $('#container'),
        render: function(){
            var data = {};
            var template = Handlebars.compile(topicTemplate);
            this.$el.html(template(data));

            $('.post').hover(function(){
                $(this).find('.post-action').show();
            }, function(){
                $(this).find('.post-action').hide();
            });
        }
    });
});
