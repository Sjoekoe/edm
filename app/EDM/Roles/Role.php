<?php  namespace EDM\Roles;
  
use Eloquent;

class Role extends Eloquent {

    /**
     * The pivot table used for roles
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * The fillable fields
     * 
     * @var array
     */
    protected $fillable = ['user_id', 'role_id'];




} 