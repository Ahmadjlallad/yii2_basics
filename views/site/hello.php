<?php


/* @var $this \yii\web\View */

echo $msg;
?>
<img src="/web/assets/images/Screenshot%20from%202022-03-01%2016-28-01.png" alt="">
<pre>
    entry script represent yii file which act like bootstrap for the files and its create the application instate
    application can have multiple component and its singletons
    application represent mine application and can have sup modules
    controller can have filters for changing the response like reject the user if not auth
    view is just to render and it can use asset for the css and js
    widget are spical classes
    file web.php defined some configurations that controller the over all web app behavior
    <a href="https://www.yiiframework.com/doc/guide/2.0/en/concept-configurations">configurations</a>
    <a href="https://www.yiiframework.com/doc/guide/2.0/en/structure-applications#application-lifecycle">app life cycle</a>


</pre>
<pre>
    'test' => [
        // instant and in the bootstrap phase the instant will not be created if  the component didn't reference in the controllers or app
        // or added to bootstrap array
        'class' => 'app/components/TestComponent'
    ]
    or
    'test'=> function(){
        return app\component\TestComponent;
    }
</pre>
<h2>Controllers Actions</h2>
<pre>
    Inline Actions
    are just the actions with actions prefix with action for example actionIndex

    standalone actions are classes extends
</pre>