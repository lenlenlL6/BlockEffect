[![](https://poggit.pmmp.io/shield.state/BlockEffect)](https://poggit.pmmp.io/p/BlockEffect)
<img src="https://cdn-icons-png.flaticon.com/512/2592/2592201.png" height=260 width=300></img>
## About
> A support plugin for Pocketmine-MP 4. This plugin causes players who step on a block to receive corresponding effects.

## Utilities
- [x] Adjust
- [x] Config

## Config
```yaml
# You can adjust the blocks that can receive effects with format is: "format is: format is: "blockId.blockMeta.effectId.effectDuration.effectAmplifier" .

# Find block ids here: https://www.digminecraft.com/lists/item_id_list_pe.php. Note, some items or blocks do not exist in the pocketmine .

# All effects id
#        SPEED = 1
#	 SLOWNESS = 2
#	 HASTE = 3
#	 MINING_FATIGUE = 4
#	 STRENGTH = 5
#	 INSTANT_HEALTH = 6
#	 INSTANT_DAMAGE = 7
#	 JUMP_BOOST = 8
#	 NAUSEA = 9
#	 REGENERATION = 10
#	 RESISTANCE = 11
#	 FIRE_RESISTANCE = 12
#	 WATER_BREATHING = 13
#	 INVISIBILITY = 14
#	 BLINDNESS = 15
#	 NIGHT_VISION = 16
#	 HUNGER = 17
#	 WEAKNESS = 18
#	 POISON = 19
#	 WITHER = 20
#	 HEALTH_BOOST = 21
#	 ABSORPTION = 22
#	 SATURATION = 23
#	 LEVITATION = 24
#	 FATAL_POISON = 25
#	 CONDUIT_POWER = 26
#	 SLOW_FALLING = 27
#	 BAD_OMEN = 28
#	 VILLAGE_HERO = 29
blocks:
- "2.0.17.50.1" # If the player steps on a block of grass, the player will receive a counter effect for 50 seconds with amplifier is 1 .

```
