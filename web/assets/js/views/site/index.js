define([
    'jquery',
    'underscore',
    'backbone',
    'handlebars',
    'views/topic/item',
    'text!templates/site/index.html'
], function($, _, Backbone, Handlebars, TopicItemView, template){
    return Backbone.View.extend({
        el: $('#container'),
        initialize: function(){
            this.collection.bind('change', this.render);
        },
        render: function(){
            console.log('render site/index');
            var ctemplate = Handlebars.compile(template);
            this.$el.html(ctemplate());

            this.collection.each(this.renderItem);
        },
        renderItem: function(model){
            var view = new TopicItemView({model: model});
            this.$('.main .topics').append(view.el);
        }
    });
});
