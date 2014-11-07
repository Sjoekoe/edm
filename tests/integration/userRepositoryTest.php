<?php


use Codeception\TestCase\Test;
use Laracasts\TestDummy\Factory as TestDummy;

class userRepositoryTest extends Test {

    /**
     * @var \IntegrationTester
     */
    protected $repo;
    protected $tester;

    protected function _before() {
        $this->repo = $this->tester->grabService('EDM\Users\UserRepository');
    }

    /** @test */
    public function it_saves_a_user_to_the_database() {
        $user = TestDummy::create('EDM\Users\User', [
            'username' => 'johnDoe',
            'email' => 'john@example.com'
        ]);

        $this->repo->save($user);

        $this->tester->seeRecord('users', [
            'username' => 'johnDoe',
            'email' => 'john@example.com'
        ]);
    }

    /** @test */
    public function it_finds_a_user_by_its_username() {
        $users = TestDummy::times(2)->create('EDM\Users\User');

        $result = $this->repo->findByUsername($users[0]->username);

        $this->assertEquals($users[0]->username, $result->username);
    }

    /** @test */
    public function it_finds_a_user_by_its_id() {
        $user = TestDummy::create('EDM\Users\User', [
            'id' => 100
        ]);

        $result = $this->repo->findById(100);

        $this->assertEquals($user->id, $result->id);
    }



}