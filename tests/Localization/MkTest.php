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

class MkTest extends LocalizationTestCase
{
    const LOCALE = 'mk'; // Macedonian

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Изминатата сабота во 0:00',
        // Carbon::now()->subDays(2)->calendar()
        'Во недела во 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Утре во 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'Денес во 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Денес во 2:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'Вчера во 1:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Изминатиот вторник во 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Во вторник во 0:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Во петок во 0:00',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Do wo')
        '1-ви 1-ви',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        '2-ри 1-ви',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        '3-ти 1-ви',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        '4-ти 1-ви',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        '5-ти 1-ви',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        '6-ти 1-ви',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        '7-ми 2-ри',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        '11-ти 2-ри',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        '40-ти',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        '41-ви',
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
        'пред неколку секунди',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        'пред s',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        'пред 2 секунди',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        'пред s',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'пред минута',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'пред min',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        'пред 2 минути',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'пред min',
        // Carbon::now()->subHours(1)->diffForHumans()
        'пред час',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'пред h',
        // Carbon::now()->subHours(2)->diffForHumans()
        'пред 2 часа',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'пред h',
        // Carbon::now()->subDays(1)->diffForHumans()
        'пред ден',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'пред d',
        // Carbon::now()->subDays(2)->diffForHumans()
        'пред 2 дена',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'пред d',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'пред 1 седмица',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'пред w',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        'пред 2 седмици',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'пред w',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'пред месец',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'пред m',
        // Carbon::now()->subMonths(2)->diffForHumans()
        'пред 2 месеци',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'пред m',
        // Carbon::now()->subYears(1)->diffForHumans()
        'пред година',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'пред y',
        // Carbon::now()->subYears(2)->diffForHumans()
        'пред 2 години',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'пред y',
        // Carbon::now()->addSecond()->diffForHumans()
        'после неколку секунди',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'после s',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'по неколку секунди',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        'по s',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'пред неколку секунди',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        'пред s',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'неколку секунди',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        's',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 секунди',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        's',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'после s',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'минута неколку секунди',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        'y m d s',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 седмица 10 часа',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 седмица 6 дена',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 седмица 6 дена',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 седмици час',
    ];
}
