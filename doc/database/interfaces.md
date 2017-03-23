# Interfaces table

Interfaces table is something like config for element on page (classes).  
For example - if we want to add articles module to our app we need:  
1. Config too decide how each article will looks like (images? audio files? tags? etc.) - That's interface.
2. Specific article - in classes table.

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
## lang (string)
Why interfaces have lang? Cause every lang can have different config for app scheme. That's why it's doubled - in interfaces and classes.
## url_pattern (string)
Pattern for url - used when user (and only user) create (insert) new element.
Note: Parameters:
1. #URL# - is changed to url created from title
2. #ID# - is changed to element id
