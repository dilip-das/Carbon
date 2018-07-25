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

class HeTest extends LocalizationTestCase
{
    const LOCALE = 'he'; // Hebrew

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ביום שבת האחרון בשעה 00:00',
        // Carbon::now()->subDays(2)->calendar()
        'ראשון בשעה 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'מחר ב־22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'היום ב־10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'היום ב־02:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'אתמול ב־01:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'ביום שלישי האחרון בשעה 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'שלישי בשעה 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'שישי בשעה 00:00',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Do wo')
        'ordinal ordinal',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        'ordinal ordinal',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        'ordinal ordinal',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        'ordinal ordinal',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        'ordinal ordinal',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        'ordinal ordinal',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        'ordinal ordinal',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        'ordinal ordinal',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        'ordinal',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        'ordinal',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 לפנות בוקר, 12:00 לפנות בוקר',
        // Carbon::parse('2018-02-10 01:30:00')->isoFormat('h:mm A, h:mm a')
        '1:30 לפנות בוקר, 1:30 לפנות בוקר',
        // Carbon::parse('2018-02-10 02:00:00')->isoFormat('h:mm A, h:mm a')
        '2:00 לפנות בוקר, 2:00 לפנות בוקר',
        // Carbon::parse('2018-02-10 06:00:00')->isoFormat('h:mm A, h:mm a')
        '6:00 בבוקר, 6:00 בבוקר',
        // Carbon::parse('2018-02-10 10:00:00')->isoFormat('h:mm A, h:mm a')
        '10:00 לפני הצהריים, 10:00 לפנה"צ',
        // Carbon::parse('2018-02-10 12:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 אחרי הצהריים, 12:00 אחה"צ',
        // Carbon::parse('2018-02-10 17:00:00')->isoFormat('h:mm A, h:mm a')
        '5:00 אחרי הצהריים, 5:00 אחה"צ',
        // Carbon::parse('2018-02-10 23:00:00')->isoFormat('h:mm A, h:mm a')
        '11:00 בערב, 11:00 בערב',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'לפני שניה',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        'לפני שניה',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        'לפני 2 שניות',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        'לפני 2 שניות',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'לפני דקה',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'לפני דקה',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        'לפני דקותיים',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'לפני דקותיים',
        // Carbon::now()->subHours(1)->diffForHumans()
        'לפני שעה',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'לפני שעה',
        // Carbon::now()->subHours(2)->diffForHumans()
        'לפני שעתיים',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'לפני שעתיים',
        // Carbon::now()->subDays(1)->diffForHumans()
        'לפני יום',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'לפני יום',
        // Carbon::now()->subDays(2)->diffForHumans()
        'לפני יומיים',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'לפני יומיים',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'לפני שבוע',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'לפני שבוע',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        'לפני שבועיים',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'לפני שבועיים',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'לפני חודש',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'לפני חודש',
        // Carbon::now()->subMonths(2)->diffForHumans()
        'לפני חודשיים',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'לפני חודשיים',
        // Carbon::now()->subYears(1)->diffForHumans()
        'לפני שנה',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'לפני שנה',
        // Carbon::now()->subYears(2)->diffForHumans()
        'לפני שנתיים',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'לפני שנתיים',
        // Carbon::now()->addSecond()->diffForHumans()
        'בעוד שניה',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'בעוד שניה',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'אחרי שניה',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        'אחרי שניה',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'לפני שניה',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        'לפני שניה',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'שניה',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        'שניה',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 שניות',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2 שניות',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'בעוד שניה',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'דקה שניה',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        'שנתיים 3 חודשים יום שניה',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        'שבוע 10 שעות',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'שבוע 6 ימים',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'שבוע 6 ימים',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        'שבועיים שעה',
    ];
}
