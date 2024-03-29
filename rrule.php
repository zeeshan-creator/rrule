<!DOCTYPE html>
<!-- saved from url=(0038) -->
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>rrule.js demo</title>
  <link rel="stylesheet" href="./rrule.js demo_files/demo.css">
  <script type="text/javascript" src="./rrule.js demo_files/demo.js"></script>
</head>

<body>
  <div id="page">

    <h1>
      <code>rrule.js</code> demo</h1>

    <section id="intro">
      <p>
        This is a demo and test app for
        <code>rrule.js</code>, a JavaScript library for working with recurrence rules for calendar dates.
      </p>

    </section>

    <section id="output">
      <h2>Output</h2>
      <table>
        <tbody>
          <tr>
            <th>
              <code>rule =</code>
            </th>
            <td>
              <pre id="init" style="position: relative;">new RRule({
                  freq: RRule.WEEKLY,
                  count: 30,
                  interval: 1
                })</pre>
            </td>
          </tr>
          <tr style="display: none;">
            <th>
              <code>rule.origOptions</code>
            </th>
            <td>
              <pre id="options-output" style="position: relative;">{
                freq: RRule.WEEKLY,
                count: 30,
                interval: 1
              }</pre>
            </td>
          </tr>
          <tr>
            <th>
              <code>rule.toString()</code>
            </th>
            <td>
              <pre id="rfc-output"
                style="position: relative;"><a href="#/rfc/RRULE:FREQ=WEEKLY;COUNT=30;INTERVAL=1;WKST=MO">RRULE:FREQ=WEEKLY;COUNT=30;INTERVAL=1;WKST=MO</a><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>
            </td>
          </tr>
          <tr>
            <th>
              <code>rule.toText()</code>
            </th>
            <td>
              <em id="text-output">
                <a href="#/text/every%20week%20for%2030%20times">every week for 30
                  times</a>
              </em>
            </td>
          </tr>
          <tr>
            <th>
              <code>rule.all()</code>
            </th>
            <td>
              <table id="dates">

              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </section>


    <div id="input">
      <h2>Input</h2>
      <div id="tabs">
        <!-- <a href="#options-input" class="active">Options</a>
        <a href="#rfc-input">RRULE string</a>
        <a href="#text-input">Text input</a> -->
      </div>
      <div id="input-types">
        <section id="options-input">
          <h3 style="display: none;">Options</h3>

          <form>
            <table>

              <tbody>
                <tr>
                  <th>
                    <div class="option-name">
                      <code>freq</code>

                      <div class="help">Frequency</div>
                    </div>
                  </th>
                  <td>
                    <label>
                      <input name="freq" type="radio" value="0">RRule.YEARLY</label>
                    <label>
                      <input name="freq" type="radio" value="1">RRule.MONTHLY</label>
                    <label>
                      <input name="freq" type="radio" value="2" checked="">RRule.WEEKLY</label>
                    <label>
                      <input name="freq" type="radio" value="3">RRule.DAILY</label>
                    <label>
                      <input name="freq" type="radio" value="4">RRule.HOURLY</label>
                    <label>
                      <input name="freq" type="radio" value="5">RRule.MINUTELY</label>
                    <label>
                      <input name="freq" type="radio" value="6">RRule.SECONDLY</label>
                  </td>
                </tr>
                <tr>
                  <th>
                    <div class="option-name">
                      <code>dtstart</code>

                      <div class="help">The recurrence start. Besides being the base for the recurrence, missing
                        parameters in the final recurrence
                        instances will also be extracted from this date. If not given,
                        <code>new Date</code> will be used instead.
                      </div>
                    </div>
                  </th>
                  <td>
                    <input name="dtstart" type="datetime-local">
                  </td>
                </tr>
                <tr>
                  <th>
                    <div class="option-name">
                      <code>tzid</code>

                      <div class="help">The timezone for the rule. If present, all recurrences will be interpreted as
                        being in the local time
                        of the given timezone. If not present, <code>UTC</code> will be used instead.
                      </div>
                    </div>
                  </th>
                  <td>
                    <select name="tzid">
                      <option value="">none (UTC)</option>
                      <option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
                      <option value="America/Adak">(GMT-10:00) Hawaii-Aleutian</option>
                      <option value="Etc/GMT+10">(GMT-10:00) Hawaii</option>
                      <option value="Pacific/Marquesas">(GMT-09:30) Marquesas Islands</option>
                      <option value="Pacific/Gambier">(GMT-09:00) Gambier Islands</option>
                      <option value="America/Anchorage">(GMT-09:00) Alaska</option>
                      <option value="America/Ensenada">(GMT-08:00) Tijuana, Baja California</option>
                      <option value="Etc/GMT+8">(GMT-08:00) Pitcairn Islands</option>
                      <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                      <option value="America/Denver">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                      <option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                      <option value="America/Dawson_Creek">(GMT-07:00) Arizona</option>
                      <option value="America/Belize">(GMT-06:00) Saskatchewan, Central America</option>
                      <option value="America/Cancun">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                      <option value="Chile/EasterIsland">(GMT-06:00) Easter Island</option>
                      <option value="America/Chicago">(GMT-06:00) Central Time (US &amp; Canada)</option>
                      <option value="America/New_York">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                      <option value="America/Havana">(GMT-05:00) Cuba</option>
                      <option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                      <option value="America/Caracas">(GMT-04:30) Caracas</option>
                      <option value="America/Santiago">(GMT-04:00) Santiago</option>
                      <option value="America/La_Paz">(GMT-04:00) La Paz</option>
                      <option value="Atlantic/Stanley">(GMT-04:00) Faukland Islands</option>
                      <option value="America/Campo_Grande">(GMT-04:00) Brazil</option>
                      <option value="America/Goose_Bay">(GMT-04:00) Atlantic Time (Goose Bay)</option>
                      <option value="America/Glace_Bay">(GMT-04:00) Atlantic Time (Canada)</option>
                      <option value="America/St_Johns">(GMT-03:30) Newfoundland</option>
                      <option value="America/Araguaina">(GMT-03:00) UTC-3</option>
                      <option value="America/Montevideo">(GMT-03:00) Montevideo</option>
                      <option value="America/Miquelon">(GMT-03:00) Miquelon, St. Pierre</option>
                      <option value="America/Godthab">(GMT-03:00) Greenland</option>
                      <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires</option>
                      <option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
                      <option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
                      <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
                      <option value="Atlantic/Azores">(GMT-01:00) Azores</option>
                      <option value="Europe/Belfast">(GMT) Greenwich Mean Time : Belfast</option>
                      <option value="Europe/Dublin">(GMT) Greenwich Mean Time : Dublin</option>
                      <option value="Europe/Lisbon">(GMT) Greenwich Mean Time : Lisbon</option>
                      <option value="Europe/London">(GMT) Greenwich Mean Time : London</option>
                      <option value="Africa/Abidjan">(GMT) Monrovia, Reykjavik</option>
                      <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna
                      </option>
                      <option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague
                      </option>
                      <option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                      <option value="Africa/Algiers">(GMT+01:00) West Central Africa</option>
                      <option value="Africa/Windhoek">(GMT+01:00) Windhoek</option>
                      <option value="Asia/Beirut">(GMT+02:00) Beirut</option>
                      <option value="Africa/Cairo">(GMT+02:00) Cairo</option>
                      <option value="Asia/Gaza">(GMT+02:00) Gaza</option>
                      <option value="Africa/Blantyre">(GMT+02:00) Harare, Pretoria</option>
                      <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
                      <option value="Europe/Minsk">(GMT+02:00) Minsk</option>
                      <option value="Asia/Damascus">(GMT+02:00) Syria</option>
                      <option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                      <option value="Africa/Addis_Ababa">(GMT+03:00) Nairobi</option>
                      <option value="Asia/Tehran">(GMT+03:30) Tehran</option>
                      <option value="Asia/Dubai">(GMT+04:00) Abu Dhabi, Muscat</option>
                      <option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
                      <option value="Asia/Kabul">(GMT+04:30) Kabul</option>
                      <option value="Asia/Yekaterinburg">(GMT+05:00) Ekaterinburg</option>
                      <option value="Asia/Tashkent" selected>(GMT+05:00) Tashkent</option>
                      <option value="Asia/Kolkata">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                      <option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
                      <option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
                      <option value="Asia/Novosibirsk">(GMT+06:00) Novosibirsk</option>
                      <option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
                      <option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                      <option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                      <option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                      <option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                      <option value="Australia/Perth">(GMT+08:00) Perth</option>
                      <option value="Australia/Eucla">(GMT+08:45) Eucla</option>
                      <option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                      <option value="Asia/Seoul">(GMT+09:00) Seoul</option>
                      <option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
                      <option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
                      <option value="Australia/Darwin">(GMT+09:30) Darwin</option>
                      <option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
                      <option value="Australia/Hobart">(GMT+10:00) Hobart</option>
                      <option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
                      <option value="Australia/Lord_Howe">(GMT+10:30) Lord Howe Island</option>
                      <option value="Etc/GMT-11">(GMT+11:00) Solomon Is., New Caledonia</option>
                      <option value="Asia/Magadan">(GMT+11:00) Magadan</option>
                      <option value="Pacific/Norfolk">(GMT+11:30) Norfolk Island</option>
                      <option value="Asia/Anadyr">(GMT+12:00) Anadyr, Kamchatka</option>
                      <option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
                      <option value="Etc/GMT-12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                      <option value="Pacific/Chatham">(GMT+12:45) Chatham Islands</option>
                      <option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
                      <option value="Pacific/Kiritimati">(GMT+14:00) Kiritimati</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <th>
                    <div class="option-name">
                      <code>until</code>

                      <div class="help">If given, this must be a
                        <code>Date</code>
                        instance, that will specify the limit of the recurrence. If a recurrence instance happens to be
                        the same as the
                        <code>Date</code> instance given in the
                        <code>until</code>
                        argument, this will be the last occurrence.
                      </div>
                    </div>
                  </th>
                  <td>
                    <input type="datetime-local" name="until">
                  </td>
                </tr>
                <tr>
                  <th>
                    <div class="option-name">
                      <code>count</code>

                      <div class="help">How many occurrences will be generated.
                      </div>
                    </div>
                  </th>
                  <td>
                    <input type="number" max="1000" min="1" value="10" name="count">
                  </td>
                </tr>
                <tr>
                  <th>
                    <div class="option-name">
                      <code>interval</code>

                      <div class="help">The interval between each freq iteration. For example, when using
                        <code>RRule.YEARLY</code>, an interval of
                        <code>2</code> means once every two years, but with
                        <code>RRule.HOURLY</code>, it means once every two hours. The default interval is
                        <code>1</code>.
                      </div>
                    </div>
                  </th>
                  <td>
                    <input type="number" value="1" min="1" name="interval">
                  </td>
                </tr>
                <tr>
                  <th>
                    <div class="option-name">
                      <code>wkst</code>

                      <div class="help"> The week start day. Must be one of the
                        <code>RRule.MO</code>,
                        <code>RRule.TU</code>,
                        <code>RRule.WE</code>
                        constants, or an integer, specifying the first day of the week. This will affect recurrences
                        based on weekly periods. The
                        default week start is
                        <code>RRule.MO</code>.
                      </div>
                    </div>
                  </th>
                  <td>
                    <label>
                      <input type="radio" name="wkst" value="0" checked="">RRule.MO</label>
                    <label>
                      <input type="radio" name="wkst" value="1">RRule.TU</label>
                    <label>
                      <input type="radio" name="wkst" value="2">RRule.WE</label>
                    <label>
                      <input type="radio" name="wkst" value="3">RRule.TH</label>
                    <label>
                      <input type="radio" name="wkst" value="4">RRule.FR</label>
                    <label>
                      <input type="radio" name="wkst" value="5">RRule.SA</label>
                    <label>
                      <input type="radio" name="wkst" value="6">RRule.SU</label>
                  </td>
                </tr>
                <tr>
                  <th>
                    <div class="option-name">
                      <code>byweekday</code>

                      <div class="help">If given, it must be either an integer (
                        <code>0 == RRule.MO</code>), a sequence of integers, one of the weekday constants (
                        <code>RRule.MO</code>,
                        <code>RRule.TU</code>, etc), or a sequence of these constants. When given, these variables will
                        define
                        the weekdays where the recurrence will be applied. It's also possible to use an argument n for
                        the
                        weekday instances, which will mean the nth occurrence of this weekday in the period. For
                        example,
                        with
                        <code>RRule.MONTHLY</code>, or with
                        <code>RRule.YEARLY</code> and
                        <code>BYMONTH</code>, using
                        <code>RRule.FR.clone(+1)</code> in
                        <code>byweekday</code> will specify the first friday of the month where the recurrence happens.
                        Notice
                        that the RFC documentation, this is specified as
                        <code>BYDAY</code>, but was renamed to avoid the ambiguity of that argument.
                      </div>
                    </div>
                  </th>
                  <td>
                    <label>
                      <input type="checkbox" name="byweekday" value="0">RRule.MO</label>
                    <label>
                      <input type="checkbox" name="byweekday" value="1">RRule.TU</label>
                    <label>
                      <input type="checkbox" name="byweekday" value="2">RRule.WE</label>
                    <label>
                      <input type="checkbox" name="byweekday" value="3">RRule.TH</label>
                    <label>
                      <input type="checkbox" name="byweekday" value="4">RRule.FR</label>
                    <label>
                      <input type="checkbox" name="byweekday" value="5">RRule.SA</label>
                    <label>
                      <input type="checkbox" name="byweekday" value="6">RRule.SU</label>
                  </td>
                </tr>
                <tr>
                  <th>
                    <div class="option-name">
                      <code>bymonth</code>

                      <div class="help">If given, it must be either an integer, or a sequence of integers, meaning the
                        months to apply the
                        recurrence to.
                      </div>
                    </div>
                  </th>
                  <td>
                    <label>
                      <input name="bymonth" type="checkbox" value="1"> Jan</label>
                    <label>
                      <input name="bymonth" type="checkbox" value="2"> Feb</label>
                    <label>
                      <input name="bymonth" type="checkbox" value="3"> Mar</label>
                    <label>
                      <input name="bymonth" type="checkbox" value="4"> Apr</label>
                    <label>
                      <input name="bymonth" type="checkbox" value="5"> May</label>
                    <label>
                      <input name="bymonth" type="checkbox" value="6"> Jun</label>
                    <label>
                      <input name="bymonth" type="checkbox" value="7"> Jul</label>
                    <label>
                      <input name="bymonth" type="checkbox" value="8"> Aug</label>
                    <label>
                      <input name="bymonth" type="checkbox" value="9"> Sep</label>
                    <label>
                      <input name="bymonth" type="checkbox" value="10"> Oct</label>
                    <label>
                      <input name="bymonth" type="checkbox" value="11"> Nov</label>
                    <label>
                      <input name="bymonth" type="checkbox" value="12"> Dec</label>
                  </td>
                </tr>
                <tr>
                  <th>
                    <div class="option-name">
                      <code>bysetpos</code>

                      <div class="help">If given, it must be either an integer, or a sequence of integers, positive or
                        negative. Each given
                        integer will specify an occurrence number, corresponding to the nth occurrence of the rule
                        inside
                        the frequency period. For example, a
                        <code>bysetpos</code> of
                        <code>-1</code> if combined with a
                        <code>RRule.MONTHLY</code>
                        frequency, and a byweekday of (
                        <code>RRule.MO</code>,
                        <code>RRule.TU</code>,
                        <code>RRule.WE</code>,
                        <code>RRule.TH</code>,
                        <code>RRule.FR</code>), will result in the last work day of every month.
                      </div>
                    </div>
                  </th>
                  <td>
                    <input name="bysetpos">
                  </td>
                </tr>
                <tr>
                  <th>
                    <div class="option-name">
                      <code>bymonthday</code>

                      <div class="help">If given, it must be either an integer, or a sequence of integers, meaning the
                        month days to apply
                        the recurrence to.
                      </div>
                    </div>
                  </th>
                  <td>
                    <input name="bymonthday">
                  </td>
                </tr>
                <tr>
                  <th>
                    <div class="option-name">
                      <code>byyearday</code>

                      <div class="help">If given, it must be either an integer, or a sequence of integers, meaning the
                        year days to apply the
                        recurrence to.
                      </div>
                    </div>
                  </th>
                  <td>
                    <input name="byyearday">
                  </td>
                </tr>
                <tr>
                  <th>
                    <div class="option-name">
                      <code>byweekno</code>

                      <div class="help">If given, it must be either an integer, or a sequence of integers, meaning the
                        week numbers to apply
                        the recurrence to. Week numbers have the meaning described in ISO8601, that is, the first week
                        of
                        the year is that containing at least four days of the new year.
                      </div>
                    </div>
                  </th>
                  <td>
                    <input name="byweekno">
                  </td>
                </tr>
                <tr>
                  <th>
                    <div class="option-name">
                      <code>byhour</code>

                      <div class="help">If given, it must be either an integer, or a sequence of integers, meaning the
                        hours to apply the recurrence
                        to.
                      </div>
                    </div>
                  </th>
                  <td>
                    <input name="byhour">
                  </td>
                </tr>

                <tr>
                  <th>
                    <div class="option-name">
                      <code>byminute</code>

                      <div class="help">If given, it must be either an integer, or a sequence of integers, meaning the
                        minutes to apply the
                        recurrence to.
                      </div>
                    </div>
                  </th>
                  <td>
                    <input name="byminute">
                  </td>
                </tr>
                <tr>
                  <th>
                    <div class="option-name">
                      <code>bysecond</code>

                      <div class="help">If given, it must be either an integer, or a sequence of integers, meaning the
                        seconds to apply the
                        recurrence to.
                      </div>
                    </div>
                  </th>
                  <td>
                    <input name="bysecond">
                  </td>
                </tr>
                <tr>
                  <th>
                    <div class="option-name">
                      <code>byeaster</code>

                      <div class="help">
                        This is an extension to the RFC specification which the Python implementation provides.
                        <strong>Not implemented in the JavaScript version.
                        </strong>
                      </div>
                    </div>
                  </th>
                  <td>
                    <input disabled="">
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
        </section>


        <section id="rfc-input" style="display: none;">
          <h3 style="display: none;">
            <code>RRULE</code> string</h3>
          <p>
            <input value="FREQ=DAILY;INTERVAL=2;COUNT=4">
          </p>
          <p>
            Enter an
            <code>RRULE</code> as per
            <a href="http://www.kanzaki.com/docs/ical/rrule.html">iCalendar RFC</a>.
          </p>
          <p>Examples:</p>
          <ul class="examples">
            <li>
              <code>FREQ=WEEKLY;BYDAY=MO,WE</code>
            </li>
            <li>
              <code>FREQ=MONTHLY;BYMONTHDAY=10,15;COUNT=20</code>
            </li>
            <li>
              <code>FREQ=DAILY;INTERVAL=3;COUNT=10</code>
            </li>
            <li>
              <code>FREQ=MONTHLY;BYDAY=-2FR;COUNT=7</code>
            </li>
          </ul>
        </section>



        <section id="text-input" style="display: none;">
          <h3 style="display: none;">Text input</h3>
          <p>
            <input value="Every 2 weeks on Friday for 6 times">
          </p>
          <p>Examples:</p>
          <ul class="examples">
            <li>
              <code>Every weekday</code>
            </li>
            <li>
              <code>Every 2 weeks on Tuesday</code>
            </li>
            <li>
              <code>Every week on Monday, Wednesday</code>
            </li>
            <li>
              <code>Every month on the 2nd last Friday for 7 times</code>
            </li>
            <li>
              <code>Every 6 months</code>
            </li>
          </ul>
        </section>


      </div>
    </div>
  </div>




</body>

</html>