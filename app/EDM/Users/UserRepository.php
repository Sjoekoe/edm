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

    public function getAll() {
        return User::all();
    }

    public function getPaginated(array $params, $limit = 25) {
        if ( $this->isSortable($params) ) {
            return User::orderBy($params['sortBy'], $params['direction'])->paginate($limit);
        }

        return User::orderBy('username', 'asc')->paginate($limit);
    }

    public function findByUsername($username) {
        return User::with('profile', 'roles')->where('username', '=', $username)->first();
    }

    public function findById($id) {
        return User::with('profile', 'roles')->where('id', '=', $id)->first();
    }

    /**
     * @param array $params
     *
     * @return bool
     */
    protected function isSortable(array $params) {
        return $params['sortBy'] && $params['direction'];
    }


} 