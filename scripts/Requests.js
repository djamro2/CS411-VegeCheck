/**
 * Created by djamr on 4/22/2016.
 */

app.factory('QuizService', function($resource){
    return $resource('/score.php', {}, {
        update: {method: 'PUT'}
    });
});
