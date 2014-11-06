<?php  namespace EDM\Roles;
  
use Eloquent;

class Role extends Eloquent {
    protected $table = 'roles';

    protected $fillable = ['user_id', 'role_id'];




} 