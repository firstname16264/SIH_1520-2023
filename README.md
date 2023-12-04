# Smart India Hackathon 2023 - Problem Statement 1520 

## Organization: ISRO

### Hello guys. I am Karthik Govindan, the Software Engineer of Project Nakshatryan for SIH 1520 (Work in Progress)

## Problem Statement

### Title: Development of NTRIP Caster, NTRIP Client, and Server on Web or Mobile Platform

#### Problem Statement Description

Develop a server for RTK correction reception from NTRIP Server and transmission to NTRIP client. The desired outcome includes:

1. Web or mobile application for transmitting corrections to NTRIP caster and receiving corrections from NTRIP caster.
2. User interface for real-time display with map support.
3. Time-tagged data logging.

#### More Detailed Problem Description

Create an NTRIP caster that parses NMEA and RTCM data from the server, applying accurate RTK correction to Latitude and Longitude (preferably Altitude). Develop an NTRIP client that accepts Latitude and Longitude values, plotting them on a map. The caster should log time into a database each time there is a change in Latitude, Longitude, or Altitude values.

#### Challenges

1. Lack of proper documentation on parsing RTCM Type 1,3 data for a potentially dynamic number of satellites.
2. No static method for obtaining Pseudorange and Carrier phase, as the value's index changes with a different number of satellites.
3. No unlicensed algorithm to extract Pseudorange and Carrier phase from Type 1 and 3 RTCM, respectively.

## Solution Requirements

The developed system should meet the following criteria:

1. Implement an NTRIP caster for parsing NMEA and RTCM data.
2. Apply accurate RTK correction to Latitude and Longitude (and Altitude).
3. Develop an NTRIP client for receiving and plotting corrected data on a map.
4. Include a user interface for real-time display with map support.
5. Implement time-tagged data logging into a database.

## Extra Features
### On top of features like time tagged data logging whenever there is a change in location, we have some other features too :

1. Perimeter drawing : You can define a perimeter (practically any shape) on the Client Side , and if any entities within the perimeter leaves, it alerts the user.
2. Detailed information on the current weather of the location and custom updates for selected weather conditions (which can be customized in the settings).

### Some features that more difficult to implement are :

3. A detailed information on the location of the marker apart from the Coordinates and Altitude could also include information like which State and Country it belongs in will be visible to the user when pressed an info button.



## Conclusion

This markdown document provides an overview of Problem Statement 1520 for Smart India Hackathon 2023. The challenge involves developing NTRIP Caster, Client, and Server functionalities with specific requirements outlined by ISRO.
