<?php   namespace EDM\Roles;
 
trait RolesTrait {

    /**
     * Check if the current user has a specific role
     *
     * @param $name
     * @return bool
     */
    public function hasRole($name) {
        foreach ($this->roles as $role) {
            if($role->role == $name) return true;
        }
        return false;
    }

    /**
     * Assign a role to a user
     *
     * @param $role
     * @return mixed
     */
    public function assignRole($role) {
        return $this->roles()->attach($role);
    }

    /**
     * Remove a role from a user
     *
     * @param $role
     * @return mixed
     */
    public function removeRole($role) {
        return $this->roles()->detach($role);
    }

    /**
     * Make an artist account for a user
     *
     * @return mixed
     */
    public function assignArtist() {
        return $this->assignRole(2);
    }

    /**
     * Make a user a moderator
     *
     * @return mixed
     */
    public function assignModerator() {
        return $this->assignRole(3);
    }

    /**
     * Make a user an administrator
     *
     * @return mixed
     */
    public function assignAdministrator() {
        return $this->assignRole(4);
    }
} 