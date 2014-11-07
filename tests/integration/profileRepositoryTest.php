<?php

use Codeception\TestCase\Test;
use Laracasts\TestDummy\Factory as TestDummy;

class profileRepositoryTest extends Test {

    /**
     * @var \IntegrationTester
     */
    protected $repo;
    protected $tester;

    protected function _before() {
        $this->repo = $this->tester->grabService('EDM\Profiles\ProfileRepository');
    }

    /** @test */
    public function it_saves_a_profile_to_the_database() {
        $profile = TestDummy::create('EDM\Profiles\Profile', [
            'user_id' => 10,
            'twitter' => 'foobar'
        ]);

        $this->repo->save($profile);

        $this->tester->seeRecord('profiles', [
            'user_id' => 10,
            'twitter' => 'foobar'
        ]);
    }

    /** @test */
    public function it_gets_a_profile_from_the_user_id() {
        $user = TestDummy::create('EDM\Users\User', [
            'id' => 10,
            'username' => 'FooBar'
        ]);
        $profile = TestDummy::create('EDM\Profiles\Profile', [
            'user_id' => $user->id
        ]);

        $result = $this->repo->getByUserId($profile->user_id);

        $this->assertEquals($user->username, $result->user->username);
    }
}