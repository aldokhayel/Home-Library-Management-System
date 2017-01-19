{"filter":false,"title":"User.php","tooltip":"/app/User.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":26,"column":0},"action":"remove","lines":["<?php","","namespace App;","","use Illuminate\\Foundation\\Auth\\User as Authenticatable;","","class User extends Authenticatable","{","    /**","     * The attributes that are mass assignable.","     *","     * @var array","     */","    protected $fillable = [","        'name', 'email', 'password',","    ];","","    /**","     * The attributes that should be hidden for arrays.","     *","     * @var array","     */","    protected $hidden = [","        'password', 'remember_token',","    ];","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":26,"column":0},"action":"insert","lines":["<?php","","namespace App;","","use Illuminate\\Foundation\\Auth\\User as Authenticatable;","","class User extends Authenticatable","{","    /**","     * The attributes that are mass assignable.","     *","     * @var array","     */","    protected $fillable = [","        'name','username', 'email', 'password','phone','gender','date','country','city'","    ];","","    /**","     * The attributes excluded from the model's JSON form.","     *","     * @var array","     */","    protected $hidden = [","        'password', 'remember_token',","    ];","}",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":26,"column":0},"end":{"row":26,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1459015334000,"hash":"0241146b000227907525f8d2191e4aae67bec5c5"}