# iTop-CI-Listening-Ports
List of listening ports for a given CI

This extension (probably of kind 'quick & dirty) adds a 'ListeningPort' Class to the iTop schema.

The idea is to be able to list all Network Listening ports on a FunctionalCI.

At this time, the extension is only displayed for VirtualMachine, as 100% of our workload now runs on VM. Still, you only need a presentation tweak if you need this for Servers or any other components.

Normally, the functionalCI should be selected automatically when modifying a CI, and the software list should be filtered to only display the software instance available on that same CI. I didn't bother to implements those filters, as the goal is to update those data from an external synchronization. Could be a nive improvment 🙂

Also, as we use TeemIP, the IP field is 'TeemIP' dependant. Again, the tweak to change from IPv4Address_id to an IPv4 type is easy.
