<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php include "../scripts/header.html"; ?>
	<h6>All Changes and Additions</h6>
	<br/>
<p><b>V4.0.0 December 16, 2020</b></p>
<br/>
<p><b>Added Ascension 4 (R220+)</b>.</p>
	<p><b>Gems Requirement</b>: 1e18 * 100 ^ (R - 220).</p>
	<p><b>Gems to Coins Formula</b>: n * (n + 1) * 5e26, where n is gems.</p>
	<p>Amethyst Coins become Sapphire Coins.</p>
	<p><b>Note</b>: When Ascending to Ascension 4, all Lineages will be set back to level 75 if higher.</p>
<br/>
<p><b>All ascension penalties from faction upgrades and advanced heritages will be completely removed in A4.</b></p>
<p><b>All Normal Heritages will become unavailable.</b></p>
<p><b>Prestige, Elite and Mercenary will become unavailable to be affiliated with.</b></p>
<p><b>Building cost formula will revert to A0 values</b>: b * (1.15 - r) ^ x, where b is base cost, x is amount of buildings of that type and r is your flat cost reduction(s).</p>
<br/>
<p><b>Faction Treaties Faction Coin Costs increased</b>.</p>
	<p><b>Trade Treaties</b>: 1 Qa (1e15)</p>
	<p><b>Friendship Pact</b>: 1 Sx (1e21)</p>
	<p><b>Alliance</b>: 1 Oc (1e27)</p>
	<p><b>Union</b>: 1 Dc (1e33)</p>
<br/>
<p><b>Faction Upgrades now cost Sapphire Coin</b>.</p>
	<p><b>Cost Formula</b>: (1e51 * (1,000 ^ (x - 1)) * (1,000 ^ (0.5 * floor((x - 1) / 3) * floor(((x - 1) / 3) + 1)))), where x is which upgrade this is (1,2,3, etc).</p>	
	<table class="numtable">
		<tr>
			<th>Faction Upgrade</th>
			<th>Coin Cost</th>
		</tr>
		<tr>
			<td>1</td>
			<td>1e51</td>
		</tr>
		<tr>
			<td>2</td>
			<td>1e54</td>
		</tr>
		<tr>
			<td>3</td>
			<td>1e57</td>
		</tr>
		<tr>
			<td>4</td>
			<td>1e63</td>
		</tr>
		<tr>
			<td>5</td>
			<td>1e66</td>
		</tr>
		<tr>
			<td>6</td>
			<td>1e69</td>
		</tr>
		<tr>
			<td>7</td>
			<td>1e78</td>
		</tr>
		<tr>
			<td>8</td>
			<td>1e81</td>
		</tr>
		<tr>
			<td>9</td>
			<td>1e84</td>
		</tr>
		<tr>
			<td>10</td>
			<td>1e96</td>
		</tr>
		<tr>
			<td>11</td>
			<td>1e99</td>
		</tr>
		<tr>
			<td>12</td>
			<td>1e102</td>
		</tr>
		
	</table>
<br/>	
<p><b>New Upgrade: Legacy</b>.</p>
	<p><b>Effect</b>: Choose a Legacy (set of 3 faction upgrades of the same tier) that doesn't match your current faction. You can purchase more Legacies for a progressively increasing cost.</p>
	<p><b>Coin Cost</b>: (1e72 * (1,000 ^ (x ^ 2 - x))), where x is your current Legacy container.</p>	
	<p><b>Faction Coin Cost</b>: (1e33 * (1,000 ^ ( 0.5 * ( x ^ 2 - x)))), where x is your current Legacy container.</p>
	<table class="numtable">
		<tr>
			<th>Legacy Number</th>
			<th>Coin Cost</th>
			<th>Faction Coin Cost</th>
		</tr>
		<tr>
			<td>1</td>
			<td>1e72</td>
			<td>1e33</td>
		</tr>
		<tr>
			<td>2</td>
			<td>1e78</td>
			<td>1e36</td>
		</tr>
		<tr>
			<td>3</td>
			<td>1e90</td>
			<td>1e42</td>
		</tr>
		<tr>
			<td>4</td>
			<td>1e108</td>
			<td>1e51</td>
		</tr>
	</table>
<hr>
<p><b>A4 Research</b></p>
<p><b>All researches under 5000 point will be unavailable</b>.</p>
<p><b>Research Budget</b>: Budget is further increased by 2,000 for every Treaty, Friendship Pact, Alliance and Union bought.</p>	
<p><b>Research Points</b>: Now capped at 12,000.</p>
	<p><b>Coin Cost</b>: (1.4 ^ (0.1 * RP - 7000))</p>	
	<p><b>Faction Coin Cost</b>: (10 * 1.15 ^ (0.03 * RP))</p>	
<br/>	
<p><b>New Researches</b></p>
<p><b>Spellcraft</b></p>	
<p><b>S10875</b> (Encompass)</p>
	<p><b>Effect</b>: Increase Maximum Mana based on the highest amount of Maximum Mana you had in this Reincarnation.</p>
	<p><b>Formula</b>: +(15 * ln(1 + x) ^ 3), where x is your highest max mana this R.</p>
<br/>
<p><b>S11125</b> (Multiplication)</p>
	<p><b>Effect</b>: Spells cast count more based on Mana Produced in this game.</p>
	<p><b>Formula</b>: (log10(1 + x) ^ 2)%, where x is mana produced this game.</p>
<br/>
<p><b>S11375</b> (Concentration)</p>
	<p><b>Effect</b>: Increase the production of Unique buildings based on Spells cast in this game.</p>
	<p><b>New Formula</b>: (ln(1 + x) ^ 2)%, where x is spell casts this game.</p>
<br/>
<p><b>S11625</b> (Completeness)</p>
	<p><b>Effect</b>: Multiplicatively increase Faction Coin find chance based on the amount of Trophies you unlocked.</p>
	<p><b>Formula</b>: (1.5 * x ^ 0.5)%, where x is the amount of Trophies you unlocked.</p>
<br/>	
<p><b>Craftsmanship</b></p>	
<p><b>C10875</b> (Masterpiece)</p>
	<p><b>Effect</b>: Increase Faction Coin find chance based on Excavation Resets made in this Reincarnation (Multiplicative).</p>
	<p><b>Formula</b>: (2 * x ^ 2)%, where x is excavation resets this R.</p>
<br/>
<p><b>C11125</b> (Installation)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on their quantity.</p>
	<p><b>Formula</b>: (1.3 * x ^ 0.7)%, where x is total amount of buildings.</p>
<br/>
<p><b>C11375</b> (Exhibition)</p>
	<p><b>Effect</b>: Trophies count more based on the amount of buildings you own.</p>
	<p><b>Formula</b>: (x ^ 0.5)%, where x is total amount of buildings.</p>
<br/>
<p><b>C11625</b> (Motus Perpetuum)</p>
	<p><b>Effect</b>: Autoclicks x times per second based on Clicks made in this Reincarnation.</p>
	<p><b>Formula</b>: x = floor(ln(1 + y)), where y is productive clicks this R.</p>
	<p><b>Effect</b>: Also generates the same amount of clicks while offline.</p>
<br/>	
<p><b>Divine</b></p>	
<p><b>D10875</b> (Scriptures)</p>
	<p><b>Effect</b>: Increase all spells’ durations based on time spent with their respective requirement.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is time spent in seconds with the faction or alignment that unlocks the spells.</p>
	<p><b>Note</b>: Call to Arms and Spiritual Surge use time spent this R.</p>
	<p><b>Note</b>: Heatwave and Hailstorm (Summer Festival event spells) use time spent as Summeraan and Winterly this R.</p>
	<p><b>Note</b>: All other event spells use time spent this R.</p>
<br/>
<p><b>D11125</b> (Viriditas)</p>
	<p><b>Effect</b>: Lineage levels count more based on the amount of Artifacts you excavated.</p>
	<p><b>Formula</b>: (x ^ 0.75)%, where x is the amount of Artifacts you excavated.</p>
<br/>
<p><b>D11375</b> (Rigor)</p>
	<p><b>Effect</b>: Reincarnations count 100% more.</p>
<br/>
<p><b>D11625</b> (Compassion)</p>
	<p><b>Effect</b>: Increase the production of Non-Unique buildings based on time spent with your least used alignment in this Reincarnation.</p>
	<p><b>Formula</b>: (50 + x ^ 0.75)%, where x is time spent as the least used alignment this R.</p>
<br/>	
<p><b>Economics</b></p>	
<p><b>E10875</b> (Rigmarole)</p>
	<p><b>Effect</b>: Increase Royal Exchange bonus based on the highest amount of assistants you had in this Reincarnation (Additive).</p>
	<p><b>Formula</b>: +(ln(1 + x) ^ 2)%, where x is your highest assistants count this R.</p>
<br/>
<p><b>E11125</b> (Grey Friday)</p>
	<p><b>Effect</b>: Reduce building cost multiplier.</p>
	<p><b>Formula</b>: -0.02, with no other reductions applying, the multiplier will be 1.13 instead of 1.15.</p>
<br/>
<p><b>E11375</b> (Heist)</p>
	<p><b>Effect</b>: Increase production bonus of Gems based on the amount of assistants you have (Additive).</p>
	<p><b>Formula</b>: +(2 * ln(1 + x) ^ 2)%, where x is the amount of assistants you have.</p>
<br/>
<p><b>E11625</b> (Surplus)</p>
	<p><b>Effect</b>: Multiplicatively increase assistants based on the amount of Gems you have.</p>
	<p><b>Formula</b>: (25 + 0.25 * ln(1 + x) ^ 1.5)%, where x is the amount of Gems you have.</p>
<br/>	
<p><b>Alchemy</b></p>	
<p><b>A10875</b> (Toxicity)</p>
	<p><b>Effect</b>: Multiplicatively increase mana regeneration based on time spent with the faction opposite to your current one, in this Reincarnation.</p>
	<p><b>Formula</b>: (1.3 * x ^ 0.7)%, where x is time spent with opposite-alignment faction this R.</p>
	<p><b>Note</b>: For Neutral and Balance the opposite is Neutral and Balance respectively (therefore Druid counts Druid playtime itself).</p>
<br/>
<p><b>A11125</b> (Alkahest)</p>
	<p><b>Effect</b>: Clicks count more based on the amount of active spells.</p>
	<p><b>Formula</b>: (x ^ 1.5)%, where x is the amount of active spells.</p>
<br/>
<p><b>A11375</b> (Azoth)</p>
	<p><b>Effect</b>: Increase clicking reward based on mana regeneration.</p>
	<p><b>Formula</b>: (2 * log10(1 + x) ^ 2)%, where x is mana regeneration</p>
<br/>
<p><b>A11625</b> (Anima Mundi)</p>
	<p><b>Effect</b>: Multiplicatively increase Maximum Mana based on Faction Coins found in this Reincarnation.</p>
	<p><b>Formula</b>: (0.5 * log10(1 + x) ^ 2)%, where x is factiom coins found this R</p>
<br/>	
<p><b>Warfare</b></p>	
<p><b>W10875</b> (Revolution)</p>
	<p><b>Effect</b>: Gain assistants based on Royal Exchanges made.</p>
	<p><b>Formula</b>: +(x ^ 0.75), where x is royal exchanges made.</p>
<br/>
<p><b>W11125</b> (Vengeance)</p>
	<p><b>Effect</b>: Increase Offline production based on the duration of your longest spell.</p>
	<p><b>Formula</b>: (5 + 1.5 * x ^ 0.5)%, where x is the duration of your longest spell.</p>
<br/>
<p><b>W11375</b> (Pacifism)</p>
	<p><b>Effect</b>: Increase all spells durations based on time spent in this game.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is time spent this game.</p>
<br/>
<p><b>W11625</b> (Genocide)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on time spent with the least used faction.</p>
	<p><b>Formula</b>: (50 + x ^ 0.85)%, where x is time spent with the least used faction this R in seconds.</p>
<br/>	
<p><b>Forbidden</b></p>	
<p><b>F11000</b> (Godslaying)</p>
	<p><b>Effect</b>: Active spells count more based on the sum of your Faction spells activity time.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is your current faction(s)’ faction spell activity time this R in seconds.</p>
<br/>
<p><b>F11250</b> (Inanity)</p>
	<p><b>Effect</b>: Excavations count more based on time spent offline in this game.</p>
	<p><b>Formula</b>: (0.8 * x ^ 0.4)%, where x is time spent offline this game.</p>
<br/>
<p><b>F11500</b> (Paradox)</p>
	<p><b>Effect</b>: Gain the Set bonus of your opposite alignment.</p>
	<p><b>Note</b>: For Neutral and Balance the opposite is Neutral and Balance respectively.</p>
<br/>
<p><b>F11750</b> (Relativity)</p>
	<p><b>Effect</b>: You can purchase one Legacy of your choice for free.</p>
	<p><b>Note</b>: This will not increase the cost of the normal Legacy.</p>
<hr>
<p><b>9 New Lore Artifacts</b>: 1 for each base faction, unlocking their set's second effect</p>	
<p><b>Glowing Wing</b></p>
	<p><b>Hint</b>: Mana Wings!</p>
	<p><b>Description</b>: And this is why Fairies don't need torches.</p>
	<p><b>Requirement</b>: R220+, 10,000 excavations, play as Fairy</p></p>
	<p><b>Chance</b>: (log10(1 + x) / 8,000)%, where x is mana produced this game</p></p>
	<p><b>Fairy Set 2nd Effect</b>: Mutiplicatively increase Maximum Mana based on the amount of Good Buildings owned.</p>
	<p><b>Formula</b>: (x ^ 0.5)%, where x is the amount of Good Buildings you own.</p>
<br/>
<p><b>Sylvan Mirror</b></p>
	<p><b>Hint</b>: Pay a barber with Faction Coins.</p>
	<p><b>Description</b>: An Elf with messy hair is not an Elf, by their own laws.</p>
	<p><b>Requirement</b>: R220+, 10,000 excavations, play as Elf</p></p>
	<p><b>Chance</b>: (log10(1 + x) / 8,000)%, where x is your faction coins find chance in percent</p>
	<p><b>Elf Set 2nd effect</b>: Clicks count more based on autocast clicks.</p>
	<p><b>Formula</b>: (ln(1 + x) ^ 2.5 + x ^ 0.25)%, where x is automatic clicks this game.</p>
	<p><b>Note</b>: NOT affected by any "clicks count more" effects.</p>
<br/>
<p><b>Solid Cloud</b></p>
	<p><b>Hint</b>: A cloud of spells.</p>
	<p><b>Description</b>: Angels have the power to save your life! And make a backup of it on the internet.</p>
	<p><b>Requirement</b>: R220+, 10,000 excavations, play as Angel</p></p>
	<p><b>Chance</b>: (x / 40,000)%, where x is the amount of active spells (Active Spells count more multipliers DO NOT count)</p></p>
	<p><b>Angel Set 2nd effect</b>: Increase the duration of all spells based on the amount of Unique Buildings you own.</p>
	<p><b>Formula</b>: (0.7 * x ^ 0.7)%, where x is the amount of Unique Buildings you own.</p>
<br/>
<p><b>Orc Fang Necklace</b></p>
	<p><b>Hint</b>: Torment your subjects with taxes.</p>
	<p><b>Description</b>: To remind your slaves who's in charge.</p>
	<p><b>Requirement</b>: R220+, 10,000 excavations, play as Goblin</p>
	<p><b>Chance</b>: (log10(1 + x) / 8,000)%, where x is TC casts this game</p>
	<p><b>Goblin Set 2nd effect</b>: Each time you cast a spell, you also cast free Tax Collections based on time spent in this game.</p>
	<p><b>Formula</b>: +(floor(1 + 0.25 * ln(1 + x) ^ 1.5)), where x is time spent this game.</p>	
<br/>
<p><b>Blood Chalice</b></p>
	<p><b>Hint</b>: Pour a bottle of Frenzy.</p>
	<p><b>Description</b>: The healthiest vampire breakfast.</p>
	<p><b>Requirement</b>: R220+, 10,000 excavations, play as Undead</p></p>
	<p><b>Chance</b>: (x / 10,000)%, where x  is an active Blood Frenzy's max duration (The duration when it was cast)</p></p>
	<p><b>Undead Set 2nd effect</b>: Increases production bonus from gems based on FC found this game (Multiplicative).</p>
	<p><b>Formula</b>: (log10(1 + x) ^ 2)%, where x is faction coins this game.</p>
<br/>
<p><b>Demon Tail</b></p>
	<p><b>Hint</b>: Evil wizardry.</p>
	<p><b>Description</b>: Said to bring great luck to whom it possess...es.</p>
	<p><b>Requirement</b>: R220+, 10,000 excavations, play as Demon</p></p>
	<p><b>Chance</b>: (x / 1,000,000)%, where x is Evil Spell Casts this game</p></p>
	<p><b>Demon Set 2nd effect</b>: Increase production bonus from Gems based on the amount of Evil spells cast in this Reincarnation.</p>
	<p><b>Formula</b>: +(2.25 * ln(1 + x) ^ 2.25)%, where x is Evil Spell Casts this Reincarnation.</p>
<br/>
<p><b>Frozen Lightning</b></p>
	<p><b>Hint</b>: Lightning never strikes the same place a couple million times. Maybe.</p>
	<p><b>Description</b>: A sculpture representing the embodiment of Titanic power.</p>
	<p><b>Requirement</b>: R220+, 10,000 excavations, play as Titan</p>
	<p><b>Chance</b>: (x / 1,000,000)%, where x is Lightning Strike activity time this game</p>
	<p><b>Titan Set 2nd effect</b>: Whenever you cast a spell, your production is increased based on Lightning Strike activity in this Reincarnation for 20 seconds. If another spell is cast while this effect is active, it is restored to full duration.</p>
	<p><b>Formula</b>: (x ^ 0.7)%, where x is Lightning Strike activity time this Reincarnation.</p>
<br/>
<p><b>Primal Leaf</b></p>
	<p><b>Hint</b>: Huuuuge blue ball.</p>
	<p><b>Description</b>: Druid Catalyst for channeling the power of nature.</p>
	<p><b>Requirement</b>: R220+, 10,000 excavations, play as Druid</p></p>
	<p><b>Chance</b>: (log10(1 + x) / 8,000)%, where x is the highest Max Mana this R</p></p>
	<p><b>Druid Set 2nd effect</b>: Lineage levels count more based on spell casts in this game.</p>
	<p><b>Formula</b>: (0.5 * log10(1 + x) ^ 1.5)%, where x is spell casts this game.</p>
<br/>
<p><b>The Blackest Ink</b></p>
	<p><b>Hint</b>: Quality takes time.</p>
	<p><b>Description</b>: High-quality, freshly produced Faceless ink.</p>
	<p><b>Requirement</b>: 10,000 excavations, play as Faceless</p></p>
	<p><b>Chance</b>: (x / 10,000)%, where x is the longest game session this R (but NOT this game) in seconds</p></p>
	<p><b>Faceless Set 2nd effect</b>: Increases spell duration based on time spent being offline in this game.</p>
	<p><b>Formula</b>: (0.5 * x ^ 0.5)%, where x is offline time this game.</p>
<hr>




<p><b>Balance Changes</b></p>
<br/>
<p><b>Reincarnation Power</b></p>
<p><b>New R230 Power</b></p>
	<p><b>Effect</b>: While playing as your least used alignment in this Reincarnation, increase the production of all buildings based on Reincarnations made.</p>
	<p><b>Formula</b>: (10 * R)%</p>
<hr>
<p><b>Faction Upgrades</b></p>
<p><b>Fairy</b></p>
<p><b>FR2</b> (Fairy Workers)</p>
	<p><b>Old Effect</b>: Increase the production of Farms, Inns and Blacksmiths by 15,000%.</p>
	<p><b>New Effect</b>: Increase the production of Farms, Inns and Blacksmiths by 10,000%.</p>
<br/>
<p><b>FR6</b> (Spellsmith)</p>
	<p><b>Effect</b>: Blacksmiths also increase your mana regeneration rate.</p>
	<p><b>Old Formula</b>: +(x ^ 0.25), where x is the amount of Blacksmiths you own.</p>
	<p><b>New Formula</b>: +(2.75 * x ^ 0.275), where x is the amount of Blacksmiths you own.</p>
<br/>
<p><b>FR9</b> (Swarm of Fairies)</p>
	<p><b>Effect</b>: You gain additional assistants based on the amount of Farms, Inns and Blacksmiths you own.</p>
	<p><b>Old Formula</b>: +(0.7 * x ^ 0.5), where x is the amount of Farms, Inns and Blacksmiths you own.</p>
	<p><b>New Formula</b>: +(1.2 * x ^ 0.6), where x is the amount of Farms, Inns and Blacksmiths you own.</p>
<br/>
<p><b>Elven</b></p>
<p><b>EL1</b> (Elven Mint)</p>
	<p><b>Old Effect</b>: The base chance to find Faction Coins is doubled.</p>
	<p><b>New Effect</b>: The base chance to find Faction Coins is increased by a multiplicative 150%.</p>
<br/>
<p><b>EL2</b> (Elven Treasure Casing)</p>
	<p><b>Effect</b>: Increase base clicking reward by 25k per trophy, and increase chance to find faction coins based on the amount of trophies you unlocked.</p>
	<p><b>Old Formula</b>: +floor((1+0.05 * x) ^ 0.95)%, where x is the amount of Trophies unlocked.</p>
	<p><b>New Formula</b>: +((1 + 0.1 * x) ^ 0.95)%, where x is the amount of Trophies unlocked.</p>
<br/>
<p><b>EL3</b> (Ancient Clicking Arts)</p>
	<p><b>Effect</b>: Increase mana regeneration based on your total amount of clicks.</p>
	<p><b>Old Formula</b>: +(2 * log10(1 + x)), where x is the amount of clicks made in this Reincarnation.</p>
	<p><b>New Formula</b>: +(2 * log10(1 + x) ^ 1.25), where x is the amount of clicks made in this Reincarnation.</p>
<br/>
<p><b>EL5</b> (Elven Efficiency)</p>
	<p><b>Effect</b>: Increase Royal Exchange bonus based on Faction Coins found in this game.</p>
	<p><b>Old Formula</b>: +(2 * log10(1 + x) ^ 2)%, where x is Faction Coins found this game.</p>
	<p><b>New Formula</b>: +(2 * ln(1 + x) ^ 2)%, where x is Faction Coins found this game.</p>
<br/>
<p><b>EL8</b> (Elven Luck)</p>
	<p><b>Effect</b>: Effect: Each time you click for money you have 1% chance to gain coins equal to 250000% of your production, also generating Faction Coins based on reincarnation made.</p>
	<p><b>Formula (Coin reward)</b>: (2500 * (x + y)), where x is the production of all buildings, and y is the production of one assistant.</p>
	<p><b>New Effect</b>: Assistants now have the same chance to trigger Elven Luck once every second. Elven Lucks triggered this way have their coin reward multiplied by the amount of assistants you have.</p>
<p><b>EL10</b> (Wooden Dice)</p>
	<p><b>Effect</b>: Increase Elven Luck chance to activate and its effects based on the highest amount of Arboreal Cities you own in this Reincarnation.</p>
	<p><b>Old Elven Luck Formula</b>: +(x ^ 0.3)%, where  x is highest amount of Arboreal Cities this Reincarnation.</p>
	<p><b>New Elven Luck Formula</b>: +(x ^ 0.4)%, where  x is highest amount of Arboreal Cities this Reincarnation.</p>
	<p><b>Old Production Formula</b>: (32 * x ^ 0.8)%, where x is highest amount of Arboreal Cities this Reincarnation.</p>
	<p><b>New Production Formula</b>: (40 * x ^ 0.8)%, where x is highest amount of Arboreal Cities this Reincarnation.</p>
	<p><b>Old Faction Coin Formula</b>: (3 * x ^ 0.75)%, where x is highest amount of Arboreal Cities this Reincarnation.</p>
	<p><b>New Faction Coin Formula</b>: (7.5 * x ^ 0.75)%, where x is highest amount of Arboreal Cities this Reincarnation.</p>
<br/>
<p><b>Angel</b></p>
<p><b>AN2</b> (Angelic Determination)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on spells cast in this game.</p>
	<p><b>Old Formula</b>: (6 * ln(1 + x) ^ 2)%, where x is spells cast this Game.</p>
	<p><b>New Formula</b>: (4 * ln(1 + x) ^ 2)%, where x is spells cast this Game.</p>
<br/>
<p><b>AN6</b> (Archangel Feathers)</p>
	<p><b>Old Effect</b>: Multiplicatively increase Mana Regeneration by 100%.</p>
	<p><b>New Effect</b>: Multiplicatively increase Mana Regeneration by 50%.</p>
<br/>
<p><b>AN7</b> (Magical Gates)</p>
	<p><b>Effect</b>: Increase Max Mana based on time spent as Good in this Reincarnation.p>
	<p><b>Old Formula</b>: +(7 * x ^ 0.7), where x is time spent as Good this Reincarnation.</p>
	<p><b>New Formula</b>: +(3.5 * x ^ 0.7), where x is time spent as Good this Reincarnation.</p>
<br/>
<p><b>AN9</b> (Wings of Liberty)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on Mana Regeneration.</p>
	<p><b>Old Formula</b>: (6 * ln(1 + x) ^ 2)%, where x is your Mana Regeneration.</p>
	<p><b>New Formula</b>: (4 * ln(1 + x) ^ 2)%, where x is your Mana Regeneration.</p>
<br/>
<p><b>Goblin</b></p>
<p><b>GB2</b> (Slave Trading)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of Evil buildings you own.</p>
	<p><b>Old Formula</b>: (2 * x ^ 0.6)%, where x is the amount of Evil buildings you own.</p>
	<p><b>New Formula</b>: (2 * x ^ 0.7)%, where x is the amount of Evil buildings you own.</p>
<br/>
<p><b>GB4</b> (Black Market)</p>
	<p><b>Old Effect</b>: Production bonus from gems is doubled.</p>
	<p><b>New Effect</b>: Production bonus from Gems is increased by a multiplicative 150%.</p>
<br/>
<p><b>GB5</b> (Goblin Economists)</p>
	<p><b>Old Effect</b>: Mutiplicatively increase Mana Regeneration based on upgrades purchased.</p>
	<p><b>Old Formula</b>: (x ^ 0.9)%, where x is upgrades purchased.</p>
	<p><b>New Effect</b>: Multiplicatively increase Mana Regeneration based on Gold owned.</p>
	<p><b>New Formula</b>: (0.75 * log10(1 + x) ^ 1.5)%, where x is Gold owned.</p>
<br/>
<p><b>GB6</b> (Hobgoblin Gladiators)</p>
	<p><b>Old Effect</b>: Gems and upgrades count 200% more.</p>
	<p><b>New Effect</b>: Increase the production of all buildings based on the worth in seconds of your Tax Collection spell.</p>
	<p><b>New Formula</b>: (1.5 * ln(1 + x) ^ 1.5), where x is the seconds of your Tax Collection.</p>
<br/>
<p><b>GB9</b> (Green Fingers Discount)</p>
	<p><b>Effect</b>: Effect: Gain coins randomly every 10 minutes. Also works while offline.</p>
	<p><b>Old Formula</b>: (randRange(1 , 1200) * x), where x is your total (buildings + assistants) coin production per second, does not include spells.</p>
	<p><b>New Formula</b>: (randRange(1 , 2500) * x), where x is your total (buildings + assistants) coin production per second, <b>including spells</b>.</p>
<br/>
<p><b>Undead</b></p>
<p><b>UD4</b> (Unholy Rituals)</p>
	<p><b>Effect</b>: Increase offline production based on time spent being offline in this Reincarnation.</p>
	<p><b>Old Formula</b>: (0.3 * x ^ 0.7)%, where x is your offline time this Reincarnation in seconds.</p>
	<p><b>New Formula</b>: (0.4 * x ^ 0.8)%, where x is your offline time this Reincarnation in seconds.</p>
<br/>
<p><b>UD5</b> (Corpse Supply)</p>
	<p><b>Old Effect</b>: Gain additional assistants based on the highest amount of Necropolises you built this Reincarnation.</p>
	<p><b>Old Formula</b>: +(2.5 * x ^ 0.5), where x is the highest amount of Necropolises you built this Reincarnation.</p>
	<p><b>New Effect</b>: Gain additional assistants based on the highest amount of Necropolises you built in this Reincarnation (formula unchanged).</p>
	<p><b>New Formula</b>: +(0.4 * x ^ 0.6), where x is the time spent offline in this Reincarnation in seconds.</p>
<br/>
<p><b>UD6</b> (Plagued Buildings)</p>
	<p><b>New Effect</b>: Increase the production of all buildings based on time spent in this game.</p>
	<p><b>Old Formula</b>: (0.6 * x ^ 0.7)%, where x is time spent this Game in seconds.</p>
	<p><b>New Formula</b>: (0.75 * x ^ 0.75)%, where x is time spent this Game in seconds.</p>
<br/>
<p><b>Demon</b></p>
<p><b>DM2</b> (Devil Tyrant)</p>
	<p><b>Effect</b>: The three highest building tiers count more based on time spent as Evil in this Reincarnation.</p>
	<p><b>Old Formula</b>: (0.4 * x ^ 0.6)%, where x is time spent as Evil this Reincarnation.</p>
	<p><b>New Formula</b>: (0.6 * x ^ 0.6)%, where x is time spent as Evil this Reincarnation.</p>
<br/>
<p><b>DM4</b> (Lava Pits)</p>
	<p><b>Old Effect</b>: Increase the base production of  Evil Fortresses and Hell Portals by +200,000.</p>
	<p><b>New Effect</b>: Increase the base production of Evil Fortresses by +200,000 and Hell Portals by +2,000,000.</p>
	<p><b>New Effect</b>: Your playtime in this game counts more by 6 additional hours.</p>
<br/>
<p><b>DM5</b> (Demon Overseers)</p>
	<p><b>Effect</b>: Increase the production of the three highest building tiers based on the amount of trophies you unlocked.</p>
	<p><b>Old Formula</b>: (x ^ 0.8)%, where x is amount of Trophies unlocked.</p>
	<p><b>New Formula</b>: (2 * x ^ 0.8)%, where x is amount of trophies unlocked.</p>
<br/>
<p><b>DM7</b> (Infernal Magic)</p>
	<p><b>Effect</b>: Hell Portals also increase your mana regeneration rate.</p>
	<p><b>Old Formula</b>: +(x ^ 0.35), where x is the amount of Hell Portals built.</p>
	<p><b>New Formula</b>: +(3.5 * x ^ 0.35), where x is the amount of Hell Portals built.</p>
<br/>
<p><b>DM8</b> (Burning Legion)</p>
	<p><b>Effect</b>: You gain assistants based on the amount of Hell Portals you own.</p>
	<p><b>Old Formula</b>: +(x ^ 0.55), where x is the amount of Hell Portals you own.</p>
	<p><b>New Formula</b>: +(1.5 * x ^ 0.65), where x is the amount of Hell Portals you own.</p>
<br/>
<p><b>Druid</b></p>
<br/>
<p><b>DD5</b> (Bardic Knowledge)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on your maximum mana.</p>
	<p><b>Old Formula</b>: (20 * ln(1 + x) ^ 2)%, where x is your Maximum Mana.</p>
	<p><b>New Formula</b>: (16 * ln(1 + x) ^ 2)%, where x is your maximum mana.</p>
<br/>
<p><b>DD7</b> (Mabinogion)</p>
	<p><b>Effect</b>: Increase Non-Unique buildings production based on their tier, giving the best bonus to the lowest.</p>
	<p><b>Old Formula</b>: (12 * 2 ^ (12 - T))%, where T is building tier.</p>
	<p><b>New Formula</b>: (12 * 1.8 ^ (12 - T))%, where T is building tier.</p>
<br/>
<p><b>Faceless</b></p>
<p><b>FC1</b> (Territorial Expanse)</p>
	<p><b>Effect</b>: Increase the production of Citadels / Necropolises / Labyrinths (based on your Alignment) based on the amount of assistants you own.</p>
	<p><b>Old Formula</b>: (5 * ln(1 + x) ^ 2.5)%, where x is the amount of assistants you own.</p>
	<p><b>New Formula</b>: (50 * ln(1 + x) ^ 2.5)%, where x is the amount of assistants you own.</p>
<br/>
<p><b>FC4</b> (Gold Synthesis)</p>
	<p><b>Effect</b>: Increase the production of Neutral buildings based on the amount of gold (coins) owned.</p>
	<p><b>Old Formula</b>: (0.2 * log10(1 + x) ^ 2)%, where x is the amount of coins owned.</p>
	<p><b>New Formula</b>: (0.2 * ln(1 + x) ^ 2)%, where x is the amount of coins owned.</p>
<br/>
<p><b>FC5</b> (Mitosis)</p>
	<p><b>Effect</b>: Gain additional Faceless Assistants based on the amount of buildings you own.</p>
	<p><b>Old Formula</b>: +floor(0.3 * x ^ 0.5), where x is the amount of buildings you own.</p>
	<p><b>New Formula</b>: +floor(0.5 * x ^ 0.5), where x is the amount of buildings you own.</p>
<br/>
<p><b>FC8</b> (Abominations)</p>
	<p><b>Effect</b>: Increase the production of assistants based on the amount of active spells.</p>
	<p><b>Old Formula</b>: (15 * x)%, where x is the amount of active spells.</p>
	<p><b>New Formula</b>: (20 * x ^ 0.9)%, where x is the amount of active spells.</p>
<hr>
<p><b>Spells and Spell Upgrades</b></p>
<p><b>God's Hand</b> (Angel)</p>
	<p><b>Old Effect</b>: Increase the production of all buildings by 150 times your mana regeneration rate.</p>
	<p><b>New Effect</b>: Increase the production of all buildings by 120 times your mana regeneration rate.</p>
<hr>
<p><b>Unique Buildings</b></p>
<p><b>Infernal Realm</b> (Demon UB1)</p>
	<p><b>Old Effect</b>: Upgrade Hell Portals To Infernal Realms, boosting their production by 100% per Trophy you unlocked and unlocking more unique perks for the building.</p>
	<p><b>Old Effect</b>: Upgrade Hell Portals To Infernal Realms, boosting their production by 50% per Trophy you unlocked and unlocking more unique perks for the building.</p>
<hr>
<p><b>Research</b></p>
<p><b>General Changes</b></p>
<p><b>Ascension 4</b>: Research Point now caps at 13,000 RP.</p>
<br/>
<p><b>Craftsmanship</b></p>
<p><b>C50</b> (Refining)</p>
	<p><b>Effect</b>: Increase the production of Infernal Realms based on the amount of Demon Coins you found in this Game.</p>
	<p><b>Old Formula</b>: (0.8 * ln(1 + x) ^ 3)%, where x is your Demon Coins gained this Game.</p>
	<p><b>New Formula</b>: (0.3 * ln(1 + x) ^ 3)%, where x is your Demon Coins gained this Game.</p>
<br/>
<p><b>C200</b> (Journeymen)</p>
	<p><b>Effect</b>: Increase the production of Unique Buildings based on total time spent as that faction.</p>
	<p><b>Old Formula</b>: (0.125 * x ^ 0.7)%, where x is your time spent as the faction of the unique building in seconds.</p>
	<p><b>New Formula</b>: (0.7 * x ^ 0.7)%, where x is your time spent as the faction of the unique building in seconds.</p>
<br/>
<p><b>Economics</b></p>
<p><b>E225</b> (Forgery)</p>
	<p><b>Effect</b>: Increase the production of Evil Buildings based on the amount of Goblin Banks you own.</p>
	<p><b>Old Formula</b>: (10 * x ^ 0.85)%, where x is the number of Goblin Banks you own.</p>
	<p><b>New Formula</b>: (1.5 * x ^ 0.85)%, where x is the number of Goblin Banks you own.</p>
<br/>
<p><b>E11375</b> (Heist)</p>
	<p><b>Effect</b>: Increase production bonus of Gems based on the amount of assistants you have.</p>
	<p><b>Old Formula</b>: +(2.25 * ln(1 + x) ^ 2.25)%, where x is the number of assistants you have.</p>
	<p><b>New Formula</b>: +(2.25 * ln(1 + x) ^ 2.25)%, where x is the number of assistants you have.</p>
<br/>
<p><b>Alchemy</b></p>
<p><b>A25</b> (Deflagration)</p>
	<p><b>Old Effect</b>: Reduces Hellfire Blast duration by 16 seconds, reduces its mana cost by 200 and increases its effect by 1000%.</p>
	<p><b>New Effect</b>: Set Hellfire Blast duration to 4 seconds, and it will not be modified by other effects. Also reduce its mana cost by 200 and increase its effect by 800%.</p>
<br/>
<p><b>A330</b> (Adaptation)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on time spent playing as other factions (across all Reincarnations).</p>
	<p><b>Old Formula</b>: (0.05 * (x - y) ^ 0.7)%, where x is All Time playtime, y is the sum of time spent of your current factions, in seconds.</p>
	<p><b>New Formula</b>: (0.05 * (x - y) ^ 0.7)%, where x is All Time playtime, y is the highest time spent amongst your current factions, in seconds.</p>
	<p><b>Note</b>: This change is to prevent A330 from giving 0% bonus with Prestige Research.</p>
<br/>
<p><b>Warfare</b></p>
<p><b>W1</b> (Assault)</p>
	<p><b>Effect</b>: Increase the production of Infernal Realms based on the amount of Hellfire Blasts cast in this game.</p>
	<p><b>Old Formula</b>: (70 * x ^ 0.7)%, where x is Hellfire Blasts Cast this Game.</p>
	<p><b>New Formula</b>: (30 * x ^ 0.7)%, where x is Hellfire Blasts Cast this Game.</p>
<br/>
<p><b>W25</b> (War Funds)</p>
	<p><b>Effect</b>: Increase the production of all buildings based on the amount of Tax Collections cast in this game.</p>
	<p><b>Old Formula</b>: (5 * x ^ 0.6)%, where x is Tax Collections Cast This Game.</p>
	<p><b>New Formula</b>: (5 * x ^ 0.5)%, where x is Tax Collections Cast This Game.</p>
<p><b>Forbidden</b></p>
<p><b>F11000</b> (Godslaying)</p>
	<p><b>Effect</b>: Active spells count more based on the sum of your Faction spells activity time.</p>
	<p><b>Old Formula</b>: (0.7 * x ^ 0.7)%, where x is your current faction(s)’ faction spell activity time this Reincarnation in seconds.</p>
	<p><b>New Formula</b>: (0.575 * x ^ 0.575)%, where x is your visible faction spell(s) activity time this Reincarnation in seconds.</p>
<br/>
<p><b>F11250</b> (Inanity)</p>
	<p><b>Effect</b>: Excavations count more based on time spent offline in this game.</p>
	<p><b>Old Formula</b>: (0.8 * x ^ 0.4)%, where x is time spent offline this game.p>
	<p><b>New Formula</b>: (0.9 * x ^ 0.45)%, where x is time spent offline this game.</p>
<hr>
<p><b>Event</b></p>
<p><b>Goblin Invasion</b></p>
<p><b>Fight the Goblin Army</b></p>
<p><b>Goblin's Bane 1</b> (Magical Clicks)</p>
	<p><b>Effect</b>: Active spells generate additional automatic clicks. Higher spell tiers provide higher bonuses.</p>
	<p><b>Old Formula</b>: (floor(x ^ 1.2) / 10 + 1), where x is amount of active spells.p>
	<p><b>New Formula</b>: (floor(0.06 * ln(1 + x) ^ 4 + 1)), where x is the amount of active spells.</p>
<hr>
<p><b>Trophies</b></p>
<p><b>Master Archeologist</b></p>
	<p><b>Old Effect</b>: Increase the production of all buildings by 5% when you are playing as Titan, Druid or Faceless.</p>
	<p><b>New Effect</b>: Increase the production of all buildings by 25% when you are playing as Titan, Druid or Faceless.</p>
<br/>
<p><b>Holy Frenzy</b></p>
	<p><b>Effect</b>: While Blood Frenzy or Holy Light are active, increase the production of all buildings.</p>
	<p><b>New Effect</b>: <b>A4+ only</b>. Also increase Faction Coin find chance by 500% while playing as any Good or Evil faction.</p>
<hr>
<p><b>Other changes</b></p>
<p><b>Undead Heritage</b></p>
	<p><b>Effect</b>: You gain additional assistants based on the time spent in this game.</p>
	<p><b>Old Formula</b>: +(floor(1 + 1.5 * x^0.5)), where x is time spent this game in hours.</p>
	<p><b>New Formula</b>: +(floor(1 + 1.6 * (x / 3600) ^ 0.6)), where x is time spent this game in seconds.</p>








<br/>
<p><b>Spell Cataclysm</b></p>
	<p><b>Old Effect</b>: Increases maximum mana by 75%.</p>
	<p><b>New Effect</b>: Increases maximum mana by 25%.</p>
<br/>
<p><b>Dark Covenant</b> (Evil Mercenary)</p>
	<p><b>Removed Effect</b>: No longer removes an ascension penalty from Heresiarchs.</p>
<br/>
<p><b>Uniformity</b></p>
	<p><b>Effect</b>: Increases production of all buildings based on time spent as least used alignment.</p>
	<p><b>Old Formula</b>: (0.72 * x ^ 0.72)%, where x is the time spent with your least used alignment (primary or secondary).</p>
	<p><b>New Formula</b>: (0.75 * x ^ 0.75)%, where x is the time spent with your least used alignment (primary or secondary).</p>
<br/>
<p><b>Art of the Crow: Good Alignment</b></p>
	<p><b>Effect</b>: Art of the Crow's bonus is based on Excavations made.</p>
	<p><b>Old Formula</b>: (0.05 * x ^ 1.1)%, where x is excavation count.</p>
	<p><b>New Formula</b>: (0.05 * x)%, where x is excavation count.</p>
<br/>
<p><b>Art of the Crow: Evil Alignment</b></p>
	<p><b>Effect</b>: Art of the Crow's bonus is based on production bonus from Gems.</p>
	<p><b>Old Formula</b>: (50 + 30 * x ^ 0.3)%, where x is production bonus from Gems.</p>
	<p><b>New Formula</b>: (50 + 25 * x ^ 0.25)%, where x is production bonus from Gems.</p>
<br/>
<p><b>Art of the Crow: Neutral Alignment</b></p>
	<p><b>Effect</b>: Art of the Crow's bonus is based on Royal Exchanges made.</p>
	<p><b>Old Formula</b>: (x ^ 0.75)%, where x is Royal Exchanges made.</p>
	<p><b>New Formula</b>: (1.5 * x ^ 0.5)%, where x is Royal Exchanges made.</p>
<br/>
<p><b>Makers Mask</b></p>
	<p><b>Old Effect</b>: Increase the production of Non-Unique buidings by 10,000% and gain +1 M (1e6) assistants.</p>
	<p><b>New Effect</b>: Increase the production of Non-Unique buidings by 10,000% and gain +50,000 assistants.</p>
<br/>
<p><b>Secrets of the Underworld</b> (Prestige Research Unlock)</p>
	<p><b>Old Coins Cost</b>: 100 QiSxg (1e200) Coins.</p>
	<p><b>New Coins Cost</b>: 100 SXg (1e185) Coins.</p>
<br/>
 <p><b>Mercenary Duel</b> (A3 Mercenary Unlock)</p>
	<p><b>Old Faction Coins requirement</b>: 1 Nod (1e60) Faction Coins.</p>
	<p><b>New Faction Coins requirement</b>: 10 Vg (1e64) Faction Coins.</p>
	<p><b>Old Buildings requirement</b>: 300,000 Buildings (MAX).</p>
	<p><b>New Buildings requirement</b>: 350,000 Buildings (MAX).</p>
<hr>
<p><b>Old Patches</b></p>
<p>
	<a href="http://musicfamily.org/realm/3.8Patch/" target="_blank"><b>V3.8</b></a>
	<a href="http://musicfamily.org/realm/3.7Patch/" target="_blank"><b>V3.7</b></a>
	<a href="http://musicfamily.org/realm/3.6Patch/" target="_blank"><b>V3.6</b></a>
	<a href="http://musicfamily.org/realm/3.5Patch/" target="_blank"><b>V3.5</b></a>
	<a href="http://musicfamily.org/realm/3.4Patch/" target="_blank"><b>V3.4</b></a>
	<a href="http://musicfamily.org/realm/3.3Patch/" target="_blank"><b>V3.3</b></a>
</p>
<p>No history for older patches, see <a href="http://musicfamily.org/realm/Changelog/" target="_blank"><b>Changelogs</b></a></p>
<?php include "../scripts/footer.html"; ?>
