# FS19 Web Stats - BETA VERSION

## Update 04.07.2019 - what I changed:
- storage page chage css to make it look litle bit better when you click on item and submenu appears.
- remove error "illegal offset" when you dont have all animals on farm
- remove error "illegal offset" when you dont play your farm more than 4 day to display 5 day summary
- add proper calculation for actual value of food in %, to correctly display a food progress bar
- change in css to display animal image correctly

## Update 30.01.2019 - what is working so far:
- **Also with patch 1.2.0.1 the Farming Simulator Web API has not been extended yet. The only way to get all required data from the dedicated server is FTP access.**
- We are currently playing on the mod map NF Marsch. My tests are done with this map. But because of the new placement system in FS19 the Web Stats should work on other maps also.
- Get the data via FTP from dedicated servers - there is a workaround build in for G-Portal FTP servers
- Load the data from lokal savegame works too
- Display minimal, maximum and actual prices of commodities, with current storage and sales proceeds
- Display missions, sortable
- Ability to join a farm (virtual - no ingame effect) to show data of a spefic farm
After a farm is choosen:
- Display all commodities of a farm. Also those in bunker silos, vehicles or bales on the map
- Display vehicles and buildings with resale value and leasing cost
- Display finances history of the last 5 days and a balance sheet
- Display ingame statistics (which are normaly not shown ingame for multiplayer games)
