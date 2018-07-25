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

class AzTest extends LocalizationTestCase
{
    const LOCALE = 'az'; // Azerbaijani

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'keçən həftə Şənbə saat 00:00',
        // Carbon::now()->subDays(2)->calendar()
        'gələn həftə Bazar saat 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'sabah saat 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'bugün saat 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'bugün saat 02:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'dünən 01:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'keçən həftə Çərşənbə axşamı saat 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'gələn həftə Çərşənbə axşamı saat 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'gələn həftə Cümə saat 00:00',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Do wo')
        '1-inci 1-inci',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        '2-nci 1-inci',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        '3-üncü 1-inci',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        '4-üncü 1-inci',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        '5-inci 1-inci',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        '6-ncı 1-inci',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        '7-nci 2-nci',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        '11-inci 2-nci',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        '40',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        '41-inci',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 gecə, 12:00 gecə',
        // Carbon::parse('2018-02-10 01:30:00')->isoFormat('h:mm A, h:mm a')
        '1:30 gecə, 1:30 gecə',
        // Carbon::parse('2018-02-10 02:00:00')->isoFormat('h:mm A, h:mm a')
        '2:00 gecə, 2:00 gecə',
        // Carbon::parse('2018-02-10 06:00:00')->isoFormat('h:mm A, h:mm a')
        '6:00 səhər, 6:00 səhər',
        // Carbon::parse('2018-02-10 10:00:00')->isoFormat('h:mm A, h:mm a')
        '10:00 səhər, 10:00 səhər',
        // Carbon::parse('2018-02-10 12:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 gündüz, 12:00 gündüz',
        // Carbon::parse('2018-02-10 17:00:00')->isoFormat('h:mm A, h:mm a')
        '5:00 axşam, 5:00 axşam',
        // Carbon::parse('2018-02-10 23:00:00')->isoFormat('h:mm A, h:mm a')
        '11:00 axşam, 11:00 axşam',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'birneçə saniyə əvvəl',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        '1 saniyə əvvəl',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        '2 saniyə əvvəl',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        '2 saniyə əvvəl',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'bir dəqiqə əvvəl',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        '1 dəqiqə əvvəl',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        '2 dəqiqə əvvəl',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        '2 dəqiqə əvvəl',
        // Carbon::now()->subHours(1)->diffForHumans()
        'bir saat əvvəl',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        '1 saat əvvəl',
        // Carbon::now()->subHours(2)->diffForHumans()
        '2 saat əvvəl',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        '2 saat əvvəl',
        // Carbon::now()->subDays(1)->diffForHumans()
        'bir gün əvvəl',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        '1 gün əvvəl',
        // Carbon::now()->subDays(2)->diffForHumans()
        '2 gün əvvəl',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        '2 gün əvvəl',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        '1 həftə əvvəl',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        '1 həftə əvvəl',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        '2 həftə əvvəl',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        '2 həftə əvvəl',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'bir ay əvvəl',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        '1 ay əvvəl',
        // Carbon::now()->subMonths(2)->diffForHumans()
        '2 ay əvvəl',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        '2 ay əvvəl',
        // Carbon::now()->subYears(1)->diffForHumans()
        'bir il əvvəl',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        '1 il əvvəl',
        // Carbon::now()->subYears(2)->diffForHumans()
        '2 il əvvəl',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        '2 il əvvəl',
        // Carbon::now()->addSecond()->diffForHumans()
        'birneçə saniyə sonra',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        '1 saniyə sonra',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'birneçə saniyə sonra',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        '1 saniyə sonra',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'birneçə saniyə əvvəl',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        '1 saniyə əvvəl',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'birneçə saniyə',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        '1 saniyə',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 saniyə',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2 saniyə',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        '1 saniyə sonra',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'bir dəqiqə birneçə saniyə',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2 il 3 ay 1 gün 1 saniyə',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 həftə 10 saat',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 həftə 6 gün',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 həftə 6 gün',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 həftə bir saat',
    ];
}
