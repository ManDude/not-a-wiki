<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/Challenges/"><img src="http://musicfamily.org/realm/Factions/picks/ChallengesTopPage.png"></h6></a>
<p><b>Druid Challenge 1</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/SilentAssistanceChallenges.png" alt="Silent Assistance" align="middle"> <b>Silent Assistance</b></p>
<p>The ancient druids request evidence that you are a servant of balance before your inclusion to their ranks.</p>
<p><b>Requirements</b>: 4 Reincarnations, Halls of Balance spell upgrade, Elf 1 and Demon 1 challenges completed</p>
<p><b>Challenge</b>: Make the building targeted by Grand Balance surpass 99.9% of your production.</p>
<p><b>Effect</b>: Animal Companions (1,2) works faster</p>
<p><b>Formula</b>: floor((sqrt(1 + 120 * x) - 1) / 2), where x is your Playtime (This Game) stat in hours.</p>
<p><b>Upgrade</b>: Good for Druid</p>
<p><b>Tips</b>:
<p>Make sure your least-producing building still makes up a large proportion of your production (2% and up). This will necessarily balance the production of each of your other buildings around 9.09% (= 1/11). Upgrade buildings only as required to balance them. Building more Farms, Inns and Blacksmiths will increase the multiplier of the final cast of Grand Balance.</p>
<hr>
<p><b>Druid Challenge 2</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/BalancedCurrentChallenges.png" alt="Balanced Current" align="middle"> <b>Balanced Current</b></p>
<p>Our sorcerers are desperately trying to stabilize the balance of the realm, this is your opportunity to gain their favor - and live another day.</p>
<p><b> Requirements</b>: 9 Reincarnations, Druid Bloodline, Elf 2 and Demon 2 challenges completed</p>
<p><b>Challenge</b>: Have exactly 1600 of each building types, for 16 full Grand Balance casts. (The 16 casts only counts after you have all the 1600 buildings.)</p>
<p><b>Effect</b>: Mana regeneration is increased by 1% for every 200 Stone Pillars you own</p>
<p><b>Upgrade</b>: Good for Titan</p>
<hr>
<p><b>Druid Challenge 3</b></p>
<p><img src="http://musicfamily.org/realm/Factions/picks/EldritchArchitectureChallenges.png" alt="Eldritch Architecture" align="middle"> <b>Eldritch Architecture</b></p>
<p>Pleased with your efforts, the elder druids assigned you with an important task; empower our obelisks, sacred churches and sarcophaguses.</p>
<p><b>Requirements</b>: 19 Reincarnations, 1000 excavations, Elf 3 and Demon 3 challenges completed</p>
<p><b>Challenge</b>: Have Grand Balance target Stone Pillars, Monasteries and Ancient Pyramids in that order, for 3 casts of the Grand Balance spell.</p>
<p><b>Effect</b>: You gain 1.5 additional max mana for every 4 Labyrinths owned. (Ingame tooltip says 1.25 max mana but is wrong)</p>
<p><b>Upgrade</b>: Good for Faceless</p>
<p><b>Tip</b></p>
<p>Now that Grand Balance affects 0 buildings, it will target the next building down the list:</p>
<p>1.Buy Max Farms, Max Inns, Max Blacksmiths, and Max Deep Mines. > Cast Grand Balance</p>
<p>2.Buy Max Stone Pillars and Max Alchy Labs > Cast Grand Balance</p>
<p>3.Buy Max Monasteries, Max Labys, and Max Iron Strongholds > Cast Grand Balance.</p>
<hr>
<p><b>Druid Challenge 4</b></p>(0.005 * x ^ 0.85)
<p><img src="http://musicfamily.org/realm/Factions/picks/OverflowingManaChallenges.png" alt="Overflowing Mana" align="middle"> <b>Overflowing Mana</b></p>
<p>The Druids need more spell power, but they are worried about outside influences throwing off their balance</p>
<p><b>Requirements</b>: 25 Reincarnations, Druid Unique Building</p>
<p><b>Challenge</b>: Cast 13 Grand Balances in the first 5 minutes of a playthrough with 0 non-Druid researches.</p>
<p><b>Effect</b>: Increase all spell durations based on max mana.</p>
<p><b>Formula</b>: (0.005 * x ^ 0.85), where x is max mana.</b>
<p><b>Upgrade</b>: Good for All</b>
<p><b>Tips</b></p>
<p>Do not buy Halls of Balance as it increases the spell duration. Make sure you have some excavations to buy the Heritages. (Angel Heritage and Angel 1 challenge both boost your m/s.) To acheive this, you need a min. of 50 m/s with Grand Balance continuously casting during 13 full casts. Reward given at 5 minute mark regardless of when achieved.</p>
<hr>
<p><b>In-Game Challenge Final Reward</b>
<p><img src="http://musicfamily.org/realm/Factions/picks/PrimalBalanceChallenges.png" alt="Primal Balance" align="middle"> <b>Primal Balance</b></p>
<p><b>Effect</b>: Grand Balance now affects extra buildings based on mana spent this reincarnation.</p>
<p><b>Formula</b>: (0.00001 * x) ^ (0.2 - 0.025 * A), where x is mana produced (This Reincarnation) and A is Ascension stat.</p>
    <a id="Primal Balance"></a>
    <table class="numtable">
        <thead>
        <tr>

            <th>Targets</th>
            <th>A0</th>
            <th>A1</th>
            <th>A2</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>+1</td>
            <td>1e5</td>
            <td>1e5</td>
            <td>1e5</td>
        </tr>
        <tr>
            <td>+2</td>
            <td>3.2e6</td>
            <td>5.25e6</td>
            <td>1.016e7</td>
        </tr>
        <tr>
            <td>+3</td>
            <td>2.43e7</td>
            <td>5.326e7</td>
            <td>1.516e8</td>
        </tr>
        <tr>
            <td>+4</td>
            <td>1.024e8</td>
            <td>2.756e8</td>
            <td>1.032e9</td>
        </tr>
        <tr>
            <td>+5</td>
            <td>3.125e8</td>
            <td>9.865e8</td>
            <td>4.569e9</td>
        </tr>
        <tr>
            <td>+6</td>
            <td>7.776e8</td>
            <td>2.796e9</td>
            <td>1.541e10</td>
        </tr>
        <tr>
            <td>+7</td>
            <td>1.681e9</td>
            <td>6.747e9</td>
            <td>4.305e10</td>
        </tr>
        <tr>
            <td>+8</td>
            <td>3.277e9</td>
            <td>1.447e10</td>
            <td>1.049e11</td>
        </tr>
        <tr>
            <td>+9</td>
            <td>5.905e9</td>
            <td>2.837e10</td>
            <td>2.299e11</td>
        </tr>
        <tr>
            <td>+10</td>
            <td>1e10</td>
            <td>5.179e10</td>
            <td>4.642e11</td>
        </tr>
        </tbody>
    </table>
<?php include "../scripts/footer.html"; ?>            </div>
