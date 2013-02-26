define([
    'jquery',
    'underscore',
    'backbone',
    'handlebars',
    'text!templates/topic/read.html'
], function($, _, Backbone, Handlebars, template){
    return Backbone.View.extend({
        el: $('#container'),
        initialize: function(){
            this.model.bind('change', this.render);
        },
        render: function(){
            console.log('render topic/read');
            var ctemplate = Handlebars.compile(template);
            var data = {
                topic: this.model.toJSON()
            };
            console.log(data);
            this.$el.html(ctemplate(data));
        },
    });
});
