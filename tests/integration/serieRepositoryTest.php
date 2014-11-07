<?php

use Codeception\TestCase\Test;
use Laracasts\TestDummy\Factory as TestDummy;

class serieRepositoryTest extends Test {

    /**
     * @var \IntegrationTester
     */
    protected $repo;
    protected $tester;

    protected function _before() {
        $this->repo = $this->tester->grabService('EDM\Series\SeriesRepository');
    }

    /** @test */
    public function it_saves_a_serie_to_the_database() {
        $serie = TestDummy::create('EDM\Series\Serie', [
            'name' => 'Foobar'
        ]);

        $this->repo->save($serie);

        $this->tester->seeRecord('series', [
            'name' => 'Foobar'
        ]);
    }

    /** @test */
    public function it_creates_a_slug_of_the_serie_name() {
        $name = 'Foo Bar';

        $result = $this->repo->createSlug($name);

        $this->assertEquals('foo-bar', $result);
    }

    /** @test */
    public function it_fetches_a_paginated_result_of_all_series() {
        $series = TestDummy::times(50)->create('EDM\Series\Serie');

        $result = $this->repo->getPaginated(25);

        $this->assertCount(25, $result);
    }
}