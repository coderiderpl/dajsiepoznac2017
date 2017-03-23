# Classes table

Classes table contents all subpages for app.  
Homepage, articles, offer, contact etc.

## id (int)
AUTO_INCREMENT id
## band (string)
Group of elements. If element is created by admin - band could have different name than children or parent.  
Ever since elements are created by user - one group (band) must have same name.  
Note: name of element isn't 'group' becasue it's not allowed name in MySql. That's why it's changed to 'band'.
## depth (int)
What is a depth of element in band (group).  
Depth doesn't decide about parent-child queue. For this we have parent_id in classes table.
## parent_id (int)
Which element is its parent?
## ip_tree (string)
Path to all parents cause sometimes we will need only closest parent and sometimes all path.
## lang (string)
For what app lang this elmement should be visible?
## hide (int) [0|1]
User can hide this element (value 1). For example seasson offer.
## user_add (int) [0|1]
Can user add child(ren) to this elmenet?
Note: If it's set to 1 - remember to add interface (config) for children.
## title (string)
Element title
## url (string)
Complete url to this element (without domain name)
## queue
Queue of elements in one parent group.
