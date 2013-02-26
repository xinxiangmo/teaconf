define([
    'backbone'
], function(Backbone){
    return Backbone.Model.extend({
        urlRoot: 'http://project.com/forum/server/api/topic'
    });
});
