define([
    'jquery',
    'underscore',
    'backbone',
], function($, _, Backbone){
    var AppRouter = Backbone.Router.extend({
        routes: {
            '': 'index',
            'node/:id': 'listByNode',
            'topic/:id': 'topicRead',
            '*action': 'defaultAction'
        },

        // index
        index: function() {
            console.log('route index');
            require([
                'collections/topics',
                'views/site/index'
            ], function(Topics, SiteIndexView){
                var topics = new Topics;
                topics.fetch({
                    success: function(){
                        var view = new SiteIndexView({
                            collection: topics
                        });
                        view.render();
                    }
                });
            });
        },

        // view node topics
        listByNode: function(id) {
            alert(id);
        },

        // view topic
        topicRead: function(id) {
            require([
                'models/topic',
                'views/topic/read'
            ], function(Topic, TopicReadView){
                console.log('route topic/read');
                var topic = new Topic({id: id});
                topic.fetch({
                    success: function(){
                        var view = new TopicReadView({model: topic});
                        view.render();
                    }
                });
            });
        },

        defaultAction: function(action) {
            alert('not exists action');
            console.log('not exists action', action);
        }
    });

    return {
        initialize: function() {
            var app_router = new AppRouter;
            Backbone.history.start();
            //Backbone.history.start({pushState: true, root: "/forum/web/"})
        }
    };
});
