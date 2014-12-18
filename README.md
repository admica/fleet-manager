fleet-manager
=============

Eve Online fleet manager

This is a fork of Agony Unleashed's NEO Fleet Manager program.  This fork is managed by Affirmative (an Eve Online alliance).

This fork intends to do the following:

1. Update all css files to Bootstrap or similar modern css framework.

2. Rid the Fleet Manager of its reliance on the extJS library (which has a convulated license structure, is using an ancient version, and kind of a pain to work with).

3. Create a proper "config" file for individual installation settings to be placed.

4. Create a proper "install" script (maybe).

5. Create some sort of admin front end.

6. Add columns for cyno's and sebo's.

============
INSTALLATION
============

1. Download a zip file from here and upload and unzip it on your server.

2. Go into the "index.php" file and at the top, there are a few configuration settings to change (eventually will be moved to a proper config file).

3. Using phpMyAdmin or similar program, create a MySQL database on your server.  (You can, if you prefer, just use an existing database).

4. In phpMyAdmin or similar program, use the enclosed "fleetmanager.sql" file to create the needed tables.

5. In phpMyAdmin or similar program, use the enclosed "items.sql' file to upload all relevant Eve inventory items/modules to the database.  Big file, this can take a while.

6. In fleetConnection.php file, edit your database information at the top of the file.

7. In that same file, a few lines down, change the "adminUser1" and "adminUser2" to in-game character names who have admin rights for the Fleet Manager.


