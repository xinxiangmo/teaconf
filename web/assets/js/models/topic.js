define([
    'backbone'
], function(Backbone){
    return Backbone.Model.extend({
        urlRoot: API_URL + '/topic'
    });
});
