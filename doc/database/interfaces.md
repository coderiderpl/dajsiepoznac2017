# Interfaces table

## id (int)
AUTO_INCREMENT id
## band (string)
Group of elements. If element is created by admin - band could have different name than children or parent.  
Ever since elements are created by user - one group (band) must have same name.  
Note: name of element isn't 'group' becasue it's not allowed name in MySql. That's why it's changed to 'band'.
## depth (int)
What is a depth of element in band (group).  
Depth doesn't decide about parent-child queue. For this we have parent_id in classes table.
## end_depth (int) [0|1]
Is it last element in group?
## Lang (string)
Why interfaces have lang? Cause every lang can have different config for app scheme. That's why it's doubled - in interfaces and classes.
## user_add (int) [0|1]
Can user add child(ren) to this elmenet?
Note: If it's set to 1 - remember to add interface (config) for children.
