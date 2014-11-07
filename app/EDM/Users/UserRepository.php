<?php  namespace EDM\Users;


class UserRepository {

    /**
     * Persist a user
     *
     * @param User $user
     *
     * @return mixed
     */
    public function save(User $user) {
        return $user->save();
    }

    /**
     * Get a list of all registered users
     *
     * @return mixed
     */
    public function getAll() {
        return User::all();
    }

    /**
     * Get the paginated list of all the users
     *
     * @param array $params
     * @param int   $limit
     *
     * @return mixed
     */
    public function getPaginated(array $params, $limit = 25) {
        if ( $this->isSortable($params) ) {
            return User::orderBy($params['sortBy'], $params['direction'])->paginate($limit);
        }

        return User::orderBy('username', 'asc')->paginate($limit);
    }

    /**
     * Find a user by its username
     *
     * @param $username
     *
     * @return mixed
     */
    public function findByUsername($username) {
        return User::with('profile', 'roles')->where('username', '=', $username)->first();
    }

    /**
     * Find a user by its id
     *
     * @param $id
     *
     * @return mixed
     */
    public function findById($id) {
        return User::with('profile', 'roles')->where('id', '=', $id)->first();
    }

    /**
     * Make the user list sortable by asc or desc
     *
     * @param array $params
     *
     * @return bool
     */
    protected function isSortable(array $params) {
        return $params['sortBy'] && $params['direction'];
    }


} 