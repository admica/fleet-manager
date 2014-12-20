fleet-manager
=============

Eve Online fleet manager

This is a fork of Agony Unleashed's NEO Fleet Manager program.  

This fork is managed by Affirmative's Redemption Road, who are actively updating and redeveloping it for use within the NPSI community as a free service.

TODO's:

1. Update all css files to Bootstrap or similar modern css framework.
2. Rid the Fleet Manager of its reliance on the extJS library (which has a convulated license structure, is using an ancient version, and kind of a pain to work with).
3. Create a proper "install" script (maybe).
4. Create some sort of admin front end.
5. Add columns for cyno's and sebo's.
6. Change it so you can limit usage by corp and/or alliance, have multiple corps authorized to use it, or even possibly set it to public.
7. Crapton of updating of items database.
8. Add estimated DPS calculation (base DPS? all 5's DPS? something in between?)
9. Currently any limitation based on corp and/or alliance IDs is seriously lame, because it's easy to spoof the IGB browsers.  Ultimately would be best to provide some sort of easy way of linking it into an existing auth system (such as TEA, forums, SSO, whatever).  May or may not address this issue, just not a big issue for us at this point.
10. Add default index files to every subdirectory for a modicum of security.

============
INSTALLATION
============

1. Download a zip file from here and upload and unzip it on your server (or fork it)
2. Edit config.php with your server and database settings, plus your corpID number.
3. Using phpMyAdmin or similar program, create a MySQL database on your server.  (You can, if you prefer, just use an existing database).
4. In phpMyAdmin or similar program, use the enclosed "fleetmanager.sql" file to create the needed tables.
5. In phpMyAdmin or similar program, use the enclosed "items.sql' file to upload all relevant Eve inventory items/modules to the database.  Big file, this can take a while.  Note it's horribly out of date (by like 4 years).
6. Using IGB, go to the Fleet Manager and add a fleet!
 

To-do's Completed:

1. Moved all hard-coded variables to a config.php file (specifically removed all the hard-coded corpIDs and database connection info).
2. Found and added a bunch of missing images that extJS needs.
