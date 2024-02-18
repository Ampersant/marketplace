<?php

namespace Tests\Feature\View\Auth;

use Tests\TestCase;

class NewviewTest extends TestCase
{
    /**
     * A basic view test example.
     */
    public function test_it_can_render(): void
    {
        $contents = $this->view('auth.newview', [
            //
        ]);

        $contents->assertSee('');
    }
}
