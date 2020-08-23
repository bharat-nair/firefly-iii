<?php
/**
 * RemoveAllTagsTest.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */
declare(strict_types=1);

namespace Tests\Unit\TransactionRules\Actions;

use FireflyIII\Models\RuleAction;
use FireflyIII\TransactionRules\Actions\RemoveAllTags;
use Tests\TestCase;

/**
 * Class RemoveAllTagsTest
 */
class RemoveAllTagsTest extends TestCase
{
    /**
     * @covers \FireflyIII\TransactionRules\Actions\RemoveAllTags
     */
    public function testAct(): void
    {
        // find journal
        $withdrawal = $this->getRandomWithdrawal();
        $tag        = $this->getRandomTag();

        $withdrawal->tags()->sync([$tag->id]);

        $array = [
            'transaction_journal_id' => $withdrawal->id,
        ];

        // fire the action:
        $ruleAction               = new RuleAction;
        $ruleAction->action_value = null;
        $action                   = new RemoveAllTags($ruleAction);
        $result                   = $action->actOnArray($array);
        $this->assertTrue($result);

        $this->assertEquals(0, $withdrawal->tags()->count());
    }
}
