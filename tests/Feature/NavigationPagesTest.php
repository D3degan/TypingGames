<?php

namespace Tests\Feature;

use Tests\TestCase;

class NavigationPagesTest extends TestCase
{
    public function test_homepage_navigation_links_to_information_pages(): void
    {
        $response = $this->get(route('home'));

        $response->assertOk()
            ->assertSee('<a href="'.route('home').'">Play</a>', false)
            ->assertSee('href="'.route('how-to-play').'"', false)
            ->assertSee('href="'.route('about').'"', false);
    }

    public function test_how_to_play_route_renders_its_own_page(): void
    {
        $response = $this->get(route('how-to-play'));

        $response->assertOk()
            ->assertSee('How to Play')
            ->assertSee('Type each word as accurately and quickly as you can.')
            ->assertSee('class="back-to-game" href="'.route('home').'"', false)
            ->assertSee('href="'.route('about').'"', false);
    }

    public function test_about_route_renders_its_own_page(): void
    {
        $response = $this->get(route('about'));

        $response->assertOk()
            ->assertSee('About Type Mages')
            ->assertSee('build your speed one word at a time.')
            ->assertSee('class="back-to-game" href="'.route('home').'"', false)
            ->assertSee('href="'.route('how-to-play').'"', false);
    }
}
