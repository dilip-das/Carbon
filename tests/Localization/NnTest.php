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

class NnTest extends LocalizationTestCase
{
    const LOCALE = 'nn'; // NorwegianNynorsk

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Føregåande laurdag klokka 00:00',
        // Carbon::now()->subDays(2)->calendar()
        'sundag klokka 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'I morgon klokka 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'I dag klokka 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'I dag klokka 02:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'I går klokka 01:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Føregåande tysdag klokka 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'tysdag klokka 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'fredag klokka 00:00',
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
        'nokre sekund sidan',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        's sidan',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        '2 sekund sidan',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        's sidan',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'eit minutt sidan',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'min sidan',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        '2 minutt sidan',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'min sidan',
        // Carbon::now()->subHours(1)->diffForHumans()
        'ein time sidan',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'h sidan',
        // Carbon::now()->subHours(2)->diffForHumans()
        '2 timar sidan',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'h sidan',
        // Carbon::now()->subDays(1)->diffForHumans()
        'ein dag sidan',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'd sidan',
        // Carbon::now()->subDays(2)->diffForHumans()
        '2 dagar sidan',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'd sidan',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        '1 uke sidan',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'w sidan',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        '2 uker sidan',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'w sidan',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'ein månad sidan',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'm sidan',
        // Carbon::now()->subMonths(2)->diffForHumans()
        '2 månader sidan',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'm sidan',
        // Carbon::now()->subYears(1)->diffForHumans()
        'eit år sidan',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'y sidan',
        // Carbon::now()->subYears(2)->diffForHumans()
        '2 år sidan',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'y sidan',
        // Carbon::now()->addSecond()->diffForHumans()
        'om nokre sekund',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'om s',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'after',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        'after',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'before',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        'before',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'nokre sekund',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        's',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 sekund',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        's',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'om s',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'eit minutt nokre sekund',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        'y m d s',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 uke 10 timar',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 uke 6 dagar',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 uke 6 dagar',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 uker ein time',
    ];
}
