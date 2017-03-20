DOC

# CMS - Interfaces

## Databse

depth - what is depth of this element in band
end_depth - is that element last in deep way? If yes - user can't roll up it for children
band - band of elements, like articles, news or sth
lang - every lang has own inerface
user_add - choose whether user can add children to this element or only admin can do it

# CMS - Interfaces - List

## View (list.phtml)

$goBackUrl - doesn't exist if it's first page (Page elements)  
$addButton - doesn't exist if:
  1. It's first page (Page elements).
  2. user_add param from database is setted on 0. That's mean it blocked user from adding new elements, only admin can create interface and new elements.
  

