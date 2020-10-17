$app->bind('path.public',function(){
    return __DIR__;
});
'options'=>[PDO::ATTR_EMULATE_PREPARES=>true]
