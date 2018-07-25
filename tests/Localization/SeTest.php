<?php

/*
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Localization;

class SeTest extends LocalizationTestCase
{
    const LOCALE = 'se'; // NorthernSami

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ovddit lávvardat ti 00:00',
        // Carbon::now()->subDays(2)->calendar()
        'sotnabeaivi ti 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ihttin ti 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'otne ti 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'otne ti 02:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'ikte ti 01:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'ovddit maŋŋebárga ti 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'maŋŋebárga ti 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'bearjadat ti 00:00',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Do wo')
        ':1. :1.',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        ':2. :1.',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        ':3. :1.',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        ':4. :1.',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        ':5. :1.',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        ':6. :1.',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        ':7. :2.',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        ':11. :2.',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        ':40.',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        ':41.',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 AM, 12:00 am',
        // Carbon::parse('2018-02-10 01:30:00')->isoFormat('h:mm A, h:mm a')
        '1:30 AM, 1:30 am',
        // Carbon::parse('2018-02-10 02:00:00')->isoFormat('h:mm A, h:mm a')
        '2:00 AM, 2:00 am',
        // Carbon::parse('2018-02-10 06:00:00')->isoFormat('h:mm A, h:mm a')
        '6:00 AM, 6:00 am',
        // Carbon::parse('2018-02-10 10:00:00')->isoFormat('h:mm A, h:mm a')
        '10:00 AM, 10:00 am',
        // Carbon::parse('2018-02-10 12:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 PM, 12:00 pm',
        // Carbon::parse('2018-02-10 17:00:00')->isoFormat('h:mm A, h:mm a')
        '5:00 PM, 5:00 pm',
        // Carbon::parse('2018-02-10 23:00:00')->isoFormat('h:mm A, h:mm a')
        '11:00 PM, 11:00 pm',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'maŋit moadde sekunddat',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        'maŋit s',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        'maŋit 2 sekunddat',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        'maŋit s',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'maŋit okta minuhta',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'maŋit min',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        'maŋit 2 minuhtat',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'maŋit min',
        // Carbon::now()->subHours(1)->diffForHumans()
        'maŋit okta diimmu',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'maŋit h',
        // Carbon::now()->subHours(2)->diffForHumans()
        'maŋit 2 diimmut',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'maŋit h',
        // Carbon::now()->subDays(1)->diffForHumans()
        'maŋit okta beaivi',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'maŋit d',
        // Carbon::now()->subDays(2)->diffForHumans()
        'maŋit 2 beaivvit',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'maŋit d',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'maŋit okta vahkku',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'maŋit w',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        'maŋit 2 vahkku',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'maŋit w',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'maŋit okta mánnu',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'maŋit m',
        // Carbon::now()->subMonths(2)->diffForHumans()
        'maŋit 2 mánut',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'maŋit m',
        // Carbon::now()->subYears(1)->diffForHumans()
        'maŋit okta jahki',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'maŋit y',
        // Carbon::now()->subYears(2)->diffForHumans()
        'maŋit 2 jagit',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'maŋit y',
        // Carbon::now()->addSecond()->diffForHumans()
        'moadde sekunddat geažes',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        's geažes',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'after',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        'after',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'before',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        'before',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'moadde sekunddat',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        's',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 sekunddat',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        's',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        's geažes',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'okta minuhta moadde sekunddat',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        'y m d s',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        'okta vahkku 10 diimmut',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'okta vahkku 6 beaivvit',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'okta vahkku 6 beaivvit',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 vahkku okta diimmu',
    ];
}
