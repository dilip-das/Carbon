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

class CvTest extends LocalizationTestCase
{
    const LOCALE = 'cv'; // Chuvash

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Иртнӗ шӑматкун 00:00 сехетре',
        // Carbon::now()->subDays(2)->calendar()
        'Ҫитес вырсарникун 20:49 сехетре',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Ыран 22:00 сехетре',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'Паян 10:00 сехетре',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Паян 02:00 сехетре',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'Ӗнер 01:00 сехетре',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Иртнӗ ытларикун 00:00 сехетре',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Ҫитес ытларикун 00:00 сехетре',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Ҫитес эрнекун 00:00 сехетре',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Do wo')
        ':1-мӗш :1-мӗш',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        ':2-мӗш :1-мӗш',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        ':3-мӗш :1-мӗш',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        ':4-мӗш :1-мӗш',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        ':5-мӗш :1-мӗш',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        ':6-мӗш :1-мӗш',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        ':7-мӗш :2-мӗш',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        ':11-мӗш :2-мӗш',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        ':40-мӗш',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        ':41-мӗш',
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
        'пӗр-ик ҫеккунт каялла',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        's каялла',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        '2 ҫеккунт каялла',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        's каялла',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'пӗр минут каялла',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'min каялла',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        '2 минут каялла',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'min каялла',
        // Carbon::now()->subHours(1)->diffForHumans()
        'пӗр сехет каялла',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'h каялла',
        // Carbon::now()->subHours(2)->diffForHumans()
        '2 сехет каялла',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'h каялла',
        // Carbon::now()->subDays(1)->diffForHumans()
        'пӗр кун каялла',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'd каялла',
        // Carbon::now()->subDays(2)->diffForHumans()
        '2 кун каялла',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'd каялла',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'пӗр эрне каялла',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'w каялла',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        '2 эрне каялла',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'w каялла',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'пӗр уйӑх каялла',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'm каялла',
        // Carbon::now()->subMonths(2)->diffForHumans()
        '2 уйӑх каялла',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'm каялла',
        // Carbon::now()->subYears(1)->diffForHumans()
        'пӗр ҫул каялла',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'y каялла',
        // Carbon::now()->subYears(2)->diffForHumans()
        '2 ҫул каялла',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'y каялла',
        // Carbon::now()->addSecond()->diffForHumans()
        'пӗр-ик ҫеккунтран',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'sран',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'after',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        'after',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'before',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        'before',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'пӗр-ик ҫеккунт',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        's',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 ҫеккунт',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        's',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'sран',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'пӗр минут пӗр-ик ҫеккунт',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        'y m d s',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        'пӗр эрне 10 сехет',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'пӗр эрне 6 кун',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'пӗр эрне 6 кун',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 эрне пӗр сехет',
    ];
}
