<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
	protected $table = 'task1_result3';
	protected $hidden = array('id','tp','av','bi','bc','co','ed','il','ei','iu','cp','la','mp','nc','pd','pa','np','ri','re','di','pu','rc','rs','sr','se','st','pt','tr','pn','de','ea','rf','rd','si','we','sg','pi','gc');
	protected $fillable = [
        'id_a','ti', 'au'
    ];
}
