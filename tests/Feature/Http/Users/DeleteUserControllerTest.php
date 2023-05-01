<?php
/**
 * Description of DeleteUserControllerTest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Tests\Feature\Http\Users;


use Tests\Generators\UserGenerator;
use Tests\TestCase;

class DeleteUserControllerTest extends TestCase
{
    public function testExpectsOk(): void
    {
        $user = UserGenerator::generate();
        $response = $this->delete(route('users.delete', [
            'user' => $user->id,
        ]));

        $response->assertNoContent();
        $this->assertNull($user->fresh());
    }

    public function testExpectsOkIfDoesNotExist(): void
    {
        $this->delete(route('users.delete', [
            'user' => 13123,
        ]))->assertNoContent();
    }

    public function testExpectsNotFoundIfIdIsNotInt(): void
    {
        $this->delete(route('users.delete', [
            'user' => 'sdfsdf',
        ]))->assertNotFound();
    }

}
