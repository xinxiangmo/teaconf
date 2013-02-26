define([
    'backbone',
    'models/topic'
], function(Backbone, Topic){
    return Backbone.Collection.extend({
        url: 'http://project.com/forum/server/api/topics',
        model: Topic
    });
});
